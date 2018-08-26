<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Natural_textile
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/style.css">
    <title><?php the_title(); ?> - naturaltextile.eu</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'natural-textile' ); ?></a>

    <nav class="navbar navbar-expand-lg navbar-light is-visible" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/wp-content/uploads/2018/04/logo-naturali.jpg" class="logo">
            </a>
            <a href="tel:+370 683 30188"><h3>+370 683 30188</h3></a>
            <!--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
            <!--Language-->
            <!--<i class="fa fa-bars"></i>-->
            <!--</button>-->
            <!--<div class="collapse navbar-collapse" id="navbarResponsive">-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <img class="flag" src="<?php echo(get_template_directory_uri()); ?>/img/if_lithuania_325976.png">LT
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/eng">
                        <img class="flag" src="<?php echo(get_template_directory_uri()); ?>/img/united_kingdom_UK_England_circle_flag-128.png">EN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ru">
                        <img class="flag" src="<?php echo(get_template_directory_uri()); ?>/img/ru-01.png">RU
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fin">
                        <img class="flag" src="<?php echo(get_template_directory_uri()); ?>/img/finland_circle_flag-128.png">FIN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nor">
                        <img class="flag" src="<?php echo(get_template_directory_uri()); ?>/img/norway-128.png">NOR
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/swed">
                        <img class="flag" src="<?php echo(get_template_directory_uri()); ?>/img/sweden-128.png">SW
                    </a>
                </li>
            </ul>
            <!--</div>-->
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success navbar-static-top text-white animated fadeIn" id="mainNav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meniu" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="meniu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-expanded text-white" href="/apie-mus/">Apie mus
                            <!--<span class="sr-only">(current)</span>-->
                        </a>
                    </li>
                    <li class="nav-item px-lg-4 text-light">
                        <a class="nav-link text-uppercase text-expanded text-white" href="/produkcija">Produkcija</a>
                    </li>
                    <li class="nav-item px-lg-4 text-light">
                        <a class="nav-link text-uppercase text-expanded text-white" href="/medziaga">Medžiaga</a>
                    </li>
                    <li class="nav-item px-lg-4 text-light">
                        <a class="nav-link text-uppercase text-expanded text-white" href="/kaip-uzsisakyti">Kaip užsisakyti?</a>
                    </li>
                    <li class="nav-item px-lg-4 text-light">
                        <a class="nav-link text-uppercase text-expanded text-white" href="/pramoninis-siuvinejimas/">Siuvinėjimas</a>
                    </li>
                    <li class="nav-item px-lg-4 text-light">
                        <a class="nav-link text-uppercase text-expanded text-white" href="/elektrine">Elektrinė</a>
                    </li>
                    <li class="nav-item px-lg-4 text-light">
                        <a class="nav-link text-uppercase text-expanded text-white" href="/kontaktai">Kontaktai</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content animated fadeIn">
