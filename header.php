<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php bloginfo('name'); ?></title>

    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="city" content="Maringá">
    <meta name="state" content="Paraná">
    <meta name="country" content="Brasil">
    <meta name="category" content="general">
    <meta name="rating" content="general">
    <meta name="audience" content="city">
    <meta name="distribution" content="Brasil">
    <meta name="Language" content="pt-br">
    <meta name="Robots" content="index, follow">
    <meta content="ALL" name="ROBOTS">
    <meta http-equiv="Revisit-After" content="5 days">

    <meta name="theme-color" content="#181f4b">

    <meta property="fb:app_id"          content="" /> 
    <meta property="og:type"            content="website" /> 
    <meta property="og:url"             content="" /> 
    <meta property="og:title"           content="" /> 
    <meta property="og:image"           content="" /> 
    <meta property="og:description"     content="" />


    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/safari-pinned-tab.svg" color="#832364">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
<!-- wrapper -->
<div class="wrapper">
    
    <header id="header">
        <div class="container-fluid container-md">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                        <a href="<?php echo get_home_url(); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-topo.png"></a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" data-overflow="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="ml-auto text-right">
                            <!-- <div class="contato-link d-none d-lg-block">
                                <a href="mailto:controladoria@carlosalbertoadvogados.com.br">controladoria@carlosalbertoadvogados.com.br</a>
                                <a href="tel:+554430286588">(44) 3028-6588</a>
                            </div> -->
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav ml-auto">
                                    <a href="<?php echo get_home_url(); ?>" class="nav-item nav-link active">Home</a>
                                    <a href="<?php echo get_home_url(); ?>/areas-atuacao" class="nav-item nav-link">Áreas de Atuação</a>
                                    <a href="<?php echo get_home_url(); ?>/sobre" class="nav-item nav-link">Sobre</a>
                                    <a href="<?php echo get_home_url(); ?>/lista-artigos" class="nav-item nav-link">Artigos e Pareceres</a>
                                    <a href="<?php echo get_home_url(); ?>/contato" class="nav-item nav-link">Contato</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>