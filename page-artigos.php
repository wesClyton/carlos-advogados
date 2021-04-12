<?php
    // Template Name: Artigos

    get_header();
    if (have_posts()) : while (have_posts()) : the_post();

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array (
        'post_type' => 'artigos',
        'posts_per_page' => '8',
        'orderby', 'order',
        'order'   => 'ASC',
        'paged' => $paged
    );

    $my_query = new WP_Query ( $args );

    global $wp_query;
    $tmp_query = $wp_query;
    $wp_query = null;
    $wp_query = $my_query;

?>

<!-- content main -->
<div class="content_main" id="page-artigos">

    <div class="banner">
        <div class="banner-item">
            <div class="text-banner">
                <h1 class="title">Artigos e Pareceres</h1>
                <!-- <div class="input-group m-auto">
                  <input type="text" name="busca" id="busca" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline bt-pesquisar" type="button"><i class="icon-search"></i></button>
                  </div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="list-artigos">
        <div class="container">
            <div class="row">
            <?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post();  $count++;  ?>
                <div class="col-12 col-md-6">
                    <div class="item-artigo">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-secondary-sm">Leia mais</a>
                    </div>
                </div>
                
                <?php 
                    endwhile; 
                    
                    $link_next = get_next_posts_link('Próximo >');
                    $link_prev = get_previous_posts_link('< Anterior');
                ?>

                <?php else : endif; ?>
                <?php wp_reset_query(); wp_reset_postdata(); ?>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <!-- <a href="#" class="btn-primary-sm">< anterior</a>
                    <a href="#" class="btn-primary-sm">proximo ></a> -->
                    <?php echo $link_prev; echo ' '.$link_next; ?>
                </div>
            </div>
        </div>
    </div>

    <?php include( TEMPLATEPATH . '/inc/entrar-contato.php' ); ?>

</div>
<!-- /content main -->

<?php
    endwhile; else : endif;
    get_footer();
?>