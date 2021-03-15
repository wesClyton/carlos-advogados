<?php
    // Template Name: Areas Atuacao

    get_header();
    if (have_posts()) : while (have_posts()) : the_post();

    $args = array (
      'post_type' => 'areas-atuacao',
      // 'posts_per_page' => '6',
      'orderby', 'order',
      'order'   => 'ASC',
  );

  $the_query = new WP_Query ( $args );

?>
<!-- content main -->
<div class="content_main" id="page-areas-atuacao">

    <div class="banner">
        <div class="banner-item">
            <div class="text-banner">
                <h1 class="title">Áreas de Atuação</h1>
            </div>
            <!-- <img src="img/header-home.png" class="img-cover"> -->
        </div>
    </div>

    <div class="lista-areas">
      <div class="container">
        <div class="row">
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>

            <div class="col-12 col-xl-6">
              <div class="container-area">
                <div class="row">
                  <div class="col-4 col-md-3 col-lg-2 col-xl-4 fs-0 lh-0">
                    <img src="<?php echo get_field('capa')?>" alt="" class="img-mobile">
                  </div>
                  <div class="col-8 col-md-9 col-lg-10 col-xl-8 d-lg-flex d-xl-inline-block align-items-center align-items-xl-start pl-0">
                    <div>
                      <h4><?php the_title(); ?></h4>
                      <p>
                        <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                      </p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn-secondary-sm">saiba mais</a>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; else : endif; ?>

          <?php wp_reset_query(); wp_reset_postdata(); ?>
        </div>
      </div>
    </div>


</div>
<!-- /content main -->

<?php
    endwhile; else : endif;
    get_footer();
?>