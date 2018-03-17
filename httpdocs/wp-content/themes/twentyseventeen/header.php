<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
 <script type="text/javascript">
        jQuery(document).ready(function (jQuery) {
            jQuery("#menu").accordion();
            jQuery(".colors a").click(function () {
                if (jQuery(this).attr("class") != "default") {
                    jQuery("#menu").removeClass();
                    jQuery("#menu").addClass("menu").addClass($(this).attr("class"));
                } else {
                    jQuery("#menu").removeClass();
                    jQuery("#menu").addClass("menu");
                }
            });
        });
    </script>
<script type="text/javascript">
        jQuery(document).ready(function (jQuery) {
            jQuery("#menu1").accordion();
            jQuery(".colors a").click(function () {
                if (jQuery(this).attr("class") != "default") {
                    jQuery("#menu1").removeClass();
                    jQuery("#menu1").addClass("menu").addClass($(this).attr("class"));
                } else {
                    jQuery("#menu1").removeClass();
                    jQuery("#menu1").addClass("menu");
                }
            });
        });
    </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a> -->

<div id="header-fluid">
        <div class="container-fluid">
            <div class="header row">
                <div id="logo" class="col-8">
                    <a href="/">
                        <h2>Rådgivningsbyrån</h2>
                        <h6>FÖR ASYLSÖKANDE OCH FLYKTINGAR</h6>
                    </a>
                </div>
                <div id="search-translate" class="d-none d-lg-block d-xl-block">
                    <div class="translate"><p>Translate | Stöd oss!</p></div>
                    <div class="input-group float-right">
                        <input type="text" class="search-query form-control" />
                        <span class="input-group-btn">
                            <!-- <button class="btn btn-danger" type="button"> */
                                  <span class=" glyphicon glyphicon-search"></span>
                              </button> -->
                        </span>
                    </div>
                </div>


                
                <div class="d-block collapse navbar-collapse col-1 offset-2 d-lg-none d-xl-none mobile-search-menu"><img src="wp-content/themes/twentyseventeen/assets/images/Mobile_search.png" /><h5>SOK</h5></div>
                    
               <div class="d-block collapse navbar-collapse col-2 d-lg-none d-xl-none mobile-search-menu" aria-expanded="false" id="navbar">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span><img src="wp-content/themes/twentyseventeen/assets/images/Menu_icon.png" /><h5>MENY</h5></span>
                            </button>
                    </div>
                <div class="col-12 d-lg-none d-xl-none menu-list">
                    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                            
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                   <div id="menu1" class="menu">
                        <ul>
                            <li>
                                <a href="#" class="first-element">Asylsökande</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">Barn under 18</a>
                                    </li>
                                    <li>
                                        <a href="#">Vilket stöd kan du få?</a>
                                    </li>
                                    <li>
                                        <a href="#">Infobank</a>
                                        <ul class="submenu" style="padding-left:15px; background-color:#009BAA;">
                                            <li>
                                                <a href="#"> Asylregler i Sverige </a>
                                            </li>
                                            <li>
                                                <a href="#"> Hur går det till att söka asylSverige</a>
                                                <ul class="submenu" style="padding-left:10px; background-color:#7ED5DB;">
                                                    <li>
                                                        <a href="#">Migrationsverkets beslut</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Asylutredning </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">valfritt belopp och ladda</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> Svenskt medborgarskap </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"> Asylutredning </a>
                                            </li>
                                            <li>
                                                <a href="#"> Migrationsverkets </a>
                                            </li>
                                            <li>
                                                <a href="#"> migrationsdomstolen </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Ordlista</a>
                                    </li>
                                    <li>
                                        <a href="#">Frågor</a>
                                    </li>
                                    <li>
                                        <a href="#">ökande barn, familj</a>
                                    </li>
                                    <li>
                                        <a href="#">Svenskt medborgarskap</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Allmänhet</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#"> Web Design </a>
                                        <ul class="submenu">
                                            <li><a href="#"> WordPress</a></li>
                                            <li><a href="#"> Joomla</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> Hosting</a></li>
                                    <li><a href="#"> Design </a></li>
                                </ul>
                            </li>
                            <li><a href="#">Internationellt</a></li>
                            <li><a href="#">Barnens Asylrättscentrum</a></li>
                            <li><a href="#">Om oss</a></li>
                            <li><a href="#">Kontakt</a></li>
                        </ul>
                    </div>
                                </div>
                            </div>
                        </nav>
                </div>
            </div>
        </div>
    </div>	

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
