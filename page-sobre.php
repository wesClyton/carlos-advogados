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
                <div class="col-12 col-sm-7 col-md-6 col-lg-6">
                    <h2>Quem Somos</h2>
                    <p class="text-justify">
                        A empresa foi fundada em 1995 pelo sócio Carlos Alberto dos Santos, em Maringá, Estado do Paraná e, desde então foi agregando inúmeros profissionais altamente qualificados, os quais tem orgulho de contar em seus quadros.
                    </p>
                    <p>
                        Somos uma equipe de profissionais especializados em diversas áreas do direito, comprometidos com a ética e ao atendimento sério e responsável.
                    </p>
                    <p>
                        Temos uma filosofia de trabalho simples, mas enérgica, procurando encontrar soluções eficazes e que melhor atendam aos anseios e interesses de nossos clientes e parceiros.
                    </p>
                    <p>
                        No ano de 2013, visando a evolução organizacional e a excelência na prestação dos serviços de Advocacia e, agraciados pelo espírito empreendedor de seu Fundador, tornou-se um dos pioneiros do Brasil, no ramo da advocacia, a obter a certificação da ISO9001 e ISO27001.
                    </p>
                    <p>
                        Com as certificações, buscamos proporcionar a satisfação do cliente e a melhoria continua de seus procedimentos, juntamente com a segurança da informação, pelo processo de análise de riscos de segurança no ambiente de infraestrutura e TI (tecnologia da Informação), tudo para atender os desejos e as necessidades do mercado e de seus clientes. 
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-03.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-04.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-05.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-06.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/escritorio-07.png" alt="">
        </div>
    </div>

    <div class="valores">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between text-justify">
                <div class="col-10 col-sm-6 col-lg-5">
                    <div class="content-valores">
                        <h2 class="text-center">Visão</h2>
                        <p>
                            Ser uma sociedade de advogados reconhecida nacional e internacionalmente pela excelência de seus serviços e valorização de seu corpo de colaboradores
                        </p>
                    </div>
                </div>

                <div class="col-10 col-sm-6 col-lg-5">
                    <div class="content-valores">
                        <h2 class="text-center">Valores</h2>
                        <p>
                            Prestação de serviços advocatícios especializados com atendimento pleno da legislação aplicável e atualizada;
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
                    <h2>Missão</h2>
                    <p>
                        Desenvolver serviços advocatícios com excelência e foco nos resultados almejados pelos clientes, respeitando os princípios éticos, através de uma gestão centrada na valorização e aprimoramento constante dos recursos humanos.
                        <br><br>
                        Focados na excelência e eficiência da prestação dos serviços de advocacia, consultoria e assessoria jurídica, adota a seguinte Política Integrada de Gestão:
                    </p>

                    <ul>
                        <li>- Atendimento dos requisitos e expectativas de nossos clientes;</li>
                        <li>- Atendimento dos nossos próprios requisitos de qualidade e segurança da informação;</li>
                        <li>- Comprometimento com o aumento sistemático da satisfação de nossos clientes;</li>
                        <li>- Comprometimento com a segurança da informação e o uso dos recursos de processamento da informação<li>
                        <li>- Melhoria continua da eficácia do Sistema Integrado de Gestão.</li>
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