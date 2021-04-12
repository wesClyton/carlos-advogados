<?php

// Registrar o CSS e o JS

function site_scripts()
{

	wp_register_style('site-style', get_template_directory_uri() . '/style.css', array(), false, false);

	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o Modernizr
	wp_register_script('modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.8.3.min.js', array(), "2.8.3", false);

	// Registra o jQuery Novo
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), "3.5.1", true);

	// Registra o Popper
	wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), false, true);

	// Registra bootstrap
	wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);

	// Registra o Aos
	wp_register_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), false, true);

  // Registra o Owl
	wp_register_script('owl', get_template_directory_uri() . '/js/libs/owl.carousel.min.js', array('jquery'), false, true);

	// Registra o Script de Plugins, com dependência do jquery, sem especificar versão e no footer do site
	wp_register_script('scripts-js', get_template_directory_uri() . '/js/script.js', array('jquery', 'popper', 'bootstrap', 'aos', 'owl'), false, true);

	// Coloca script no site
	wp_enqueue_style('site-style');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('scripts-js');
}

add_action('wp_enqueue_scripts', 'site_scripts');


// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

function pagination_bar() {
    global $my_query;
 
    $total_pages = $my_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
						'prev_next' => true,
						'prev_text' => 'Página Anterior',
						'next_text' => 'Próxima Página',
        ));
    }
}

// Code for themes
add_action( 'after_switch_theme', 'flush_rewrite_rules' );

// Code for plugins
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'myplugin_flush_rewrites' );
function myplugin_flush_rewrites() {
	// call your CPT registration function here (it should also be hooked into 'init')
	myplugin_custom_post_types_registration();
	flush_rewrite_rules();
}

function custom_post_type_areas_atuacao()
{

	register_post_type('areas-atuacao', array(

		'label' => 'Areas de Atuação',
		'description' => 'Areas de Atuação',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'areas-atuacao', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

		'labels' => array(
			'name' => 'Areas de Atuação',
			'singular_name' => 'Area de Atuação',
			'menu_name' => 'Áreas de Atuação',
			'add_new' => 'Adicionar Nova',
			'add_new_item' => 'Adicionar Nova',
			'edit' => 'Editar',
			'edit_item' => 'Editar Área de Atuação',
			'new_item' => 'Nova Área de Atuação',
			'view' => 'Ver Área de Atuação',
			'view_item' => 'Ver Área de Atuação',
			'search_items' => 'Procurar Área de Atuação',
			'not_found' => 'Nenhuma Área de Atuação Encontrada',
			'not_found_in_trash' => 'Nenhuma Área de Atuação Encontrada no Lixo',
		)

	));
}


add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="btn-primary-sm"';
}

add_action('init', 'custom_post_type_areas_atuacao');

function custom_post_type_artigos()
{

	register_post_type('artigos', array(

		'label' => 'Artigos',
		'description' => 'Artigos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'artigos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

		'labels' => array(
			'name' => 'Artigos',
			'singular_name' => 'Artigo',
			'menu_name' => 'Artigos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo',
			'edit' => 'Editar',
			'edit_item' => 'Editar Artigo',
			'new_item' => 'Novo Artigo',
			'view' => 'Ver Artigo',
			'view_item' => 'Ver Artigo',
			'search_items' => 'Procurar Artigos',
			'not_found' => 'Nenhum Artigo Encontrado',
			'not_found_in_trash' => 'Nenhum Artigo Encontrado no Lixo',
		)

	));
}

add_action('init', 'custom_post_type_artigos');


function load_posts_by_ajax_callback() {

	check_ajax_referer('load_more_posts', 'security');

	$paged 		= $_POST['page'];
	$porPagina 	= $_POST['porPagina'];
	$tipo 	= $_POST['tipo'];

	$args = array (
		'post_type' 	 => $tipo,
		'posts_per_page' => $porPagina,
		'orderby', 'date',
		'order'  		 => 'DESC',
		'paged' 		 => $paged,
	);
	
	$query = new WP_Query ( $args );

	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
	
		$field = get_field_object('categoria');
		$value = $field['value'];
		$label = $field['choices'][ $value ];
	
	?>

		<div class="col-12 col-md-6 pb-4">
			<a href="<?php the_permalink(); ?>" class="card-servico" data-aos="zoom-in" data-aos-offset="200">
				<h2>
					<?php the_title(); ?>
				</h2>
				<span>Saiba mais <i class="icon-mais"></i></span>
			</a>
		</div>

		<!-- <div class="col-6 col-md-4 p-0" data-categoria="<?php the_field('categoria'); ?>">

			<figure class="item-servicos">
				<img src="<?php //the_field('thumb'); ?>" class="img-mobile">

				<legend>
					<a href="<?php //the_permalink(); ?>">
						<div>
							<h3><?php //the_title(); ?></h3>
							<span><?php //echo $label; ?></span>
						</div>
					</a>
				</legend>
			</figure>

		</div> -->

	<?php endwhile; wp_reset_postdata(); else: ?>
		Nenhum registro encontrado
	<?php endif;

    die();

}

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');



define( 'SMTP_HOST', 'smtp.kinghost.net' );  // A2 Hosting server name. For example, "a2ss10.a2hosting.com"
define( 'SMTP_AUTH', true );
define( 'SMTP_PORT', '587' );
define( 'SMTP_SECURE', 'tsl' );
define( 'SMTP_USERNAME', 'contato@lwy.com.br' );  // Username for SMTP authentication
define( 'SMTP_PASSWORD', 'xcv123' );          // Password for SMTP authentication
define( 'SMTP_FROM',     'contato@lwy.com.br' );  // SMTP From address
define( 'SMTP_FROMNAME', 'Lwy Consultoria' );         // SMTP From name
