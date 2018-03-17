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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<?php wp_head(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
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

			//Menu button toggle
			jQuery("#menu-button").click(function(){
				jQuery("#menu-block").toggleClass("active");
			});

			//Search feild toggle
			jQuery("#search-button").click(function(){
				jQuery("#mobile-search-block").toggleClass("d-block");
				jQuery("#search-button-block").toggleClass("active");
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

			function deselect(e) {
 jQuery('.pop').slideFadeToggle(function() {
    e.removeClass('selected');
  });    
}

jQuery(function() {
  jQuery('#contact').on('click', function() {
    if(jQuery(this).hasClass('selected')) {
      deselect(jQuery(this));               
    } else {
     jQuery(this).addClass('selected');
      jQuery('.pop').slideFadeToggle();
    }
    return false;
  });

  jQuery('.close').on('click', function() {
    deselect(jQuery('#contact'));
    return false;
  });
});

jQuery.fn.slideFadeToggle = function(easing, callback) {
  return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
};
        });
    </script>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header>
<div id="mobile-search-block" class="container-fluid p-0">
    <div class="row mobile-search-feild d-lg-none m-0">
        <div class="col-12 p-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Skriv sokord har">
                <span class="input-group-addon p-2">SOK</span>
            </div>
        </div>
    </div>
</div>
<div id="header-fluid">
        <div class="container-fluid">
            <div class="header row">
                <div id="logo" class="col-7 col-lg-8">
                     <?php the_custom_logo(); ?>                
                </div>
                <div id="search-translate" class="col-4 d-none d-lg-block d-xl-block p-0">
                    <div class="translate">
					<p>
					<div class="messagepop pop">
					    <p><?php echo do_shortcode('[prisna-google-website-translator]'); ?></p>
                        <a class="close" href="#">Cancel</a>
				    </div>
                   <a href="#"  id="contact">Translate</a> | <a href=" http://dev-sweref.solidpartner.com/contact-page/">Stod oss!</a></p></div>
                    <div class="input-group float-right">
                        <input type="text" class="search-query form-control" />
                        <span class="input-group-addon">
                            <a href="#"><img src="../wp-content/themes/sweref/assets/images/search.png" /></a>
                        </span>
                    </div>
                </div>

				<div class="col-5 pl-0 pr-0 pr-sm-4"><div class="float-right">
				<div id="search-button-block" class="collapse d-block d-lg-none d-xl-none float-left mobile-search-menu navbar-collapse pb-2 pl-3 pr-3 pt-3"><div id="search-button">
						<img src="../wp-content/themes/twentyseventeen/assets/images/Mobile_search.png"><h5 class="mb-0">SOK</h5>
					</div></div>


					<div id="menu-block" class="collapse d-block d-lg-none d-xl-none float-left mobile-search-menu navbar-collapse pb-2 pl-2 pr-2 pt-3" aria-expanded="false">
						<button id="menu-button" class="navbar-toggler navbar-toggler-right p-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span><img src="../wp-content/themes/twentyseventeen/assets/images/Menu_icon.png"><h5 class="mt-1">MENY</h5></span>
						</button>
					</div>
				</div></div>

                <div class="col-12 d-lg-none d-xl-none menu-list">
                    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">

                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <div id="menu" class="menu">
                                          <?php echo do_shortcode('[shortmenu menu="main-menu" display="list" enhance="true" menu_color="#009baa" submenu_color="#ffffff" submenu_anchor_color="#e0e0e0" submenu_anchor_hover_color="#ffffff" submenu_transparency="0.8" arrow="true" is_responsive="true" ]'); ?>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
		</header>
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
