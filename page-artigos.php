<?php
    // Template Name: Artigos

    get_header();
    if (have_posts()) : while (have_posts()) : the_post();

    $args = array (
        'post_type' => 'artigos',
        // 'posts_per_page' => '6',
        'orderby', 'order',
        'order'   => 'ASC',
    );

    $the_query = new WP_Query ( $args );

?>

<!-- content main -->
<div class="content_main" id="page-artigos">

    <div class="banner">
        <div class="banner-item">
            <div class="text-banner">
                <h1 class="title">Artigos e Pareceres</h1>
                <div class="input-group m-auto">
                  <input type="text" name="busca" id="busca" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline bt-pesquisar" type="button"><i class="icon-search"></i></button>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="list-artigos">
      <div class="container">
      <div class="row">
                <div class="col-12 col-md-6">
                    <div class="item-artigo">
                        <h4>Lorem Ipsum is simply dummy text </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>
                        <a href="#" class="btn-secondary-sm">Leia mais</a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="item-artigo">
                        <h4>Lorem Ipsum is simply dummy text </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>
                        <a href="#" class="btn-secondary-sm">Leia mais</a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="item-artigo">
                        <h4>Lorem Ipsum is simply dummy text </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>
                        <a href="#" class="btn-secondary-sm">Leia mais</a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="item-artigo">
                        <h4>Lorem Ipsum is simply dummy text </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has...</p>
                        <a href="#" class="btn-secondary-sm">Leia mais</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn-primary-sm">< anterior</a>
                    <a href="#" class="btn-primary-sm">proximo ></a>
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