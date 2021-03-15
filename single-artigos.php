<?php 
  // Template Name: Artigo

  get_header(); 
  if ( have_posts() ) : while ( have_posts() ) : the_post();

  $args = array (
    'post_type' => 'artigos',
    'posts_per_page' => '3',
    'post__not_in'      => array(get_the_id()),
    'orderby', 'order',
    'order'   => 'DESC',
  );

  $the_query = new WP_Query ( $args );
?>

<!-- content main -->
<div class="content_main" id="single-artigos">

    <div class="banner">
        <div class="banner-item">
            <div class="text-banner">
              <h1 class="title"><?php the_title(); ?></h1>
              <div class="input-group m-auto">
                  <input type="text" name="busca" id="busca" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline bt-pesquisar" type="button"><i class="icon-search"></i></button>
                  </div>
                </div>
            </div>
            <!-- <img src="img/header-area-atuacao.png" class="img-cover"> -->
        </div>
    </div>

    <div class="artigo">
      <div class="container">
        <div class="row">
          
          <div class="col-12">
            <article><?php the_content(); ?></article>

            <?php 
              $value = get_field('artigo');
              if($value) : 
            ?>
                <a href="<?php the_field('artigo'); ?>" target="_blank" class="btn-secondary-lg mt-4">download do artigo</a>
            <?php endif; ?>

          </div>

          <div class="col-12">
            <h4>Veja também</h4>
            <div class="row">
              <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
                <div class="col-12 col-sm-4 item-artigo">
                  <h5>Lorem Ipsum is simply dummy text </h5>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...
                  </p>
                  <a href="<?php the_permalink(); ?>" class="btn-secondary-sm">leia mais</a>
                </div>
              <?php endwhile; else : endif; ?>
              <?php wp_reset_query(); wp_reset_postdata(); ?>

            </div>
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
