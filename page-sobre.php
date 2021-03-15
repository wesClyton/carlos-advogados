<?php
    // Template Name: Sobre

    get_header();
    if (have_posts()) : while (have_posts()) : the_post();

?>


<!-- content main -->
<div class="content_main" id="page-sobre">

    <div class="banner">
        <div class="banner-item">
            <div class="text-banner">
                <h1 class="title">Sobre</h1>
            </div>
        </div>
    </div>

    <div class="historia">
        <div class="container">
            <div class="row justify-content-md-between align-items-center">
                <div class="col-12 col-sm-7 col-md-6 col-lg-6 col-xl-5">
                    <h2>História</h2>
                    <p class="text-justify">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>

                <div class="col-12 col-sm-5 col-lg-6 col-lg-5 col-xl-6 text-center">
                    <p class="since">Desde <br>1995</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fotos">
        <div class="owl-carousel fotos-sobre">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-01.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-02.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-01.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-02.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-01.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-02.png" alt="">
        </div>
    </div>

    <div class="valores">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between text-justify">
                <div class="col-10 col-sm-6 col-lg-5">
                    <div class="content-valores">
                        <h2 class="text-center">Missão</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>

                <div class="col-10 col-sm-6 col-lg-5">
                    <div class="content-valores">
                        <h2 class="text-center">Visão</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="politica">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Política de Gestão</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>

                    <ul>
                        <li>- Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>- Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>- Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>- Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <li>- Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                        <var><li>- Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li></var>
                    </ul>
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