<?php
    // Template Name: Home

    get_header();
    if (have_posts()) : while (have_posts()) : the_post();

    $arg_serv = array (
        'post_type' => 'areas-atuacao',
        'orderby', 'order',
        'order'   => 'ASC',
    );

    $arg_art = array (
        'post_type' => 'artigos',
        'posts_per_page' => '4',
        'orderby', 'order',
        'order'   => 'DESC',
    );

    $query_serv = new WP_Query ( $arg_serv );
    $query_art  = new WP_Query ( $arg_art );

?>

<!-- content main -->
<div class="content_main" id="page-home">

    <div class="banner">
        <div class="owl-carousel itens-banner">
            <div class="banner-item">
                <div class="text-banner">
                    <h1>"Compromisso com a defesa <br> de seus direitos"</h1>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/header-home.png" class="img-cover">
            </div>
        </div>
    </div>

    <div class="areas-atuacao">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <h1 class="title">Áreas de atuação</h1>

                    <div class="owl-carousel itens-area">

                        <?php if ( $query_serv->have_posts() ) : while ( $query_serv->have_posts() ) : $query_serv->the_post(); 
                        $count++;  ?>
                            <figure class="item-area">
                                <img src="<?php echo get_field('capa')?>" alt="" class="img-mobile">
                                <h3 class="title-float"><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>">
                                    <div>
                                        <h3><?php the_title(); ?></h3>
                                        <p>
                                            <?php echo wp_trim_words( get_the_content(), 10, '...' ); ?>
                                        </p>
                                        <button href="<?php the_permalink(); ?>" class="btn-inverse-sm">leia mais</button>
                                    </div>
                                </a>
                            </figure>
                        
                        <?php endwhile; else : endif; ?>
                  
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-11 col-lg-8 text-center">
                    <div class="text-areas">
                        <i>“</i>
                        <p>
                            Somos uma equipe de profissionais especializados em diversas áreas do direito, comprometidos com a ética e ao atendimento sério e responsável.
                        </p>
                        <i>”</i>
                    </div>
                    <a href="<?php echo get_home_url(); ?>/areas-atuacao" class="btn-primary-lg">conheça todas as areas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sobre">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-md-center">
                <div class="col-12 text-center">
                    <h1 class="title">Sobre</h1>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                    <p class="since">Desde 1995</p>
                </div>
                <div class="col-12 col-sm-10 col-md-7 text-center">
                    <p>
                        Somos uma equipe de profissionais especializados em diversas áreas do direito, comprometidos com a ética e ao atendimento sério e responsável.<br>
                        Temos uma filosofia de trabalho simples, mas enérgica, procurando encontrar soluções eficazes e que melhor atendam aos anseios e interesses de nossos clientes e parceiros.
                    </p>
                    <p>
                        
                        Com as certificações, buscamos proporcionar a satisfação do cliente e a melhoria continua de seus procedimentos, juntamente com a segurança da informação, pelo processo de análise de riscos de segurança no ambiente de infraestrutura e TI (tecnologia da Informação), tudo para atender os desejos e as necessidades do mercado e de seus clientes. 
                    </p>


                    <a href="<?php echo get_home_url(); ?>/sobre" class="btn-primary-lg">saiba mais</a>
                </div>
            </div>
        </div>
    </div>

    <div class="artigos">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="title">Últimos artigos e pareces</h1>
                </div>
            </div>

            <div class="row">
                <?php if ( $query_art->have_posts() ) : while ( $query_art->have_posts() ) : $query_art->the_post(); 
                        $count++;  ?>
                    <div class="col-12 col-md-6">
                        <div class="item-artigo">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-secondary-sm">Leia mais</a>
                        </div>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="<?php echo get_home_url(); ?>/lista-artigos" class="btn-primary-lg">ver mais</a>
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