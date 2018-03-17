<?php
/**
 *  Template Name: Image-with-three-icon-template 
 * The Home page template file
 *
 * If the user has selected  homepage temlate, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage sweref
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
<div id="content-fluid">
  <div class="container-fluid p-0">
    <div class="row content-block">
      <div class="content col-12 col-lg-8">
        <div>
          <p>
          <?php bcn_display();?>
        </p>
          <div class="d-block d-lg-none d-xl-none mobile-menu-block">
            <img class="img-responsive home-image" src="<?php the_field('header-image'); ?>" />
            <ul>
              <li class="mobile-menu-home single-page">
                <a href="<?php the_field('first-menu-link'); ?>">
                  <?php the_field('first-menu-text'); ?>
                </a>
              </li>
              <li class="mobile-menu-person single-page">
                <a href="<?php the_field('second-menu-link'); ?>">
                  <?php the_field('second-menu-text'); ?>
                </a>
              </li>
              <li class="mobile-menu-group single-page">
                <a href="<?php the_field('third-menu-link'); ?>">
                  <?php the_field('third-menu-text'); ?>
                </a>
              </li>
            </ul>
          </div>
          <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <img class="img-responsive home-image" src="<?php the_field('header-image'); ?>" />
            <div class="row menu-icon single-page-menu-icon" style="padding-bottom:45px;">
              <div class="col-4 text-center">
                <a href="<?php the_field('first-menu-link'); ?>"><img class="img-responsive menu-img-first" style="position:relative" src="<?php the_field('menu_bg_icon'); ?>"/>
                </a>

                <div style="width: 72% !important;position: absolute;left: 39px;height: 100px;bottom: -24px;color:#fff;font-family:FiraSans-Medium;font-size:26px;word-wrap: break-word;">
                  <a href="<?php the_field('first-menu-link'); ?>"><?php the_field('first-menu-text'); ?></a></div>
                </div>
              <div class="col-4 text-center">
                <a href="<?php the_field('second-menu-link'); ?>"><img class="img-responsive menu-img-second" style="position:relative" src="<?php the_field('menu_bg_icon'); ?>"/></a>

                <div style="width: 72% !important;position: absolute;left: 39px;height: 100px;bottom: -24px;color:#fff;font-family:FiraSans-Medium;font-size:26px;word-wrap: break-word;">
                  <a href="<?php the_field('second-menu-link'); ?>"><?php the_field('second-menu-text'); ?>
                </a></div>
                </div>
              <div class="col-4 text-center">
                <a href="<?php the_field('third-menu-link'); ?>"><img class="img-responsive menu-img-third" style="position:relative" src="<?php the_field('menu_bg_icon'); ?>"/></a>

                <div style="width: 72% !important;position: absolute;left: 39px;height: 100px;bottom: -24px;color:#fff;font-family:FiraSans-Medium;font-size:26px;word-wrap: break-word;">

                  <a href="<?php the_field('third-menu-link'); ?>"><?php the_field('third-menu-text'); ?>
                  </a>
                </div>
                </div>
            </div>                            
          </div>
        </div>
        <div class="content-text" style="border-bottom:none !important;">
          <?php the_field('content-text'); ?>
        </div>
      </div>
       <div class="d-none d-lg-block d-xl-block col-lg-4 menu-block">
   <div id="menu1" class="menu">
            <?php echo do_shortcode('[shortmenu menu="main-menu" display="list" enhance="true" menu_color="#009baa" submenu_color="#ffffff" submenu_anchor_color="#e0e0e0" submenu_anchor_hover_color="#ffffff" submenu_transparency="0.8" arrow="true" is_responsive="true" ]'); ?>
    </div>
       </div>
       </div>
  </div>
</div>

  </main>
  <!-- #main -->
</div>
<!-- #primary -->
<?php get_footer();
