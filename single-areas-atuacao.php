<?php 
    // Template Name: Area Atuacao

    get_header(); 
    if ( have_posts() ) : while ( have_posts() ) : the_post();

    $args = array (
      'post_type' => 'areas-atuacao',
      'post__not_in'      => array(get_the_id()),
      'orderby', 'order',
      'order'   => 'ASC',
    );
  
    $the_query = new WP_Query ( $args );

?>

<!-- content main -->
<div class="content_main" id="single-areas-atuacao">

    <div class="banner">
        <div class="banner-item">
            <div class="text-banner">
              <h1 class="title"><?php the_title() ?></h1>
            </div>

            <?php 
              $value = get_field('capa_wide');
              if($value) : 
            ?>
                <img src="<?php the_field('capa_wide'); ?>" class="img-cover">
            <?php endif; ?>
        
        </div>
    </div>

    <div class="artigo">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12 col-md-8 col-lg-8 col-xl-8">
            <article>
              <?php the_content() ?>
            </article>
          </div>
          <div class="col-12 col-md-4 col-lg-4 col-xl-3">
            <h4>Outras áreas de atuação</h4>
            <ul>
              <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
                <li><a href="<?php the_permalink(); ?>">- <?php the_title(); ?></a></li>
              <?php endwhile; else : endif; ?>
              <?php wp_reset_query(); wp_reset_postdata(); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php include( TEMPLATEPATH . '/inc/entrar-contato.php' ); ?>

</div>
<!-- /content main -->

<?php 

    endwhile; else: endif;
    get_footer(); 

?>
