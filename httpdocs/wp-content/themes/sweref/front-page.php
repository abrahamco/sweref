<?php
/**
 *  Template Name: front-page 
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
          <div class="d-block d-md-none mobile-menu-block">
            <ul>
              <li class="mobile-menu-home">
                <a href="<?php the_field('first-menu-link'); ?>">
                  <?php the_field('first-menu-text'); ?>
                </a>
              </li>
              
              <li class="mobile-menu-person">
                <a href="<?php the_field('second-menu-link'); ?>">
                  <?php the_field('second-menu-text'); ?>
                </a>
              </li>
              <li class="mobile-menu-group">
                <a href="<?php the_field('third-menu-link'); ?>">
                  <?php the_field('third-menu-text'); ?>
                </a>
              </li>
            </ul>
          </div>
          <div class="d-none d-md-block d-xl-block">
            <img class="img-responsive home-image" src="<?php the_field('home_main_image'); ?>" />
            <div class="row menu-icon mb-5">
              <div class="col-4 text-center">
                <div class="mx-auto home-page-link">
                  <a href="
                    <?php the_field('first-menu-link'); ?>">
                    <img class="img-responsive menu-img-first" src="<?php the_field('first_menu_bg_icon'); ?>"/>
                  </a>
                  <article class="p-3 text-left">
                    <p class="mb-0 menu-text" id="first-menu-text"><?php the_field('first-menu-hover-text'); ?></p>
                    <a href="<?php the_field('first-menu-link'); ?>">
                      <span class="fa fa-angle-right font-weight-bold"></span>&nbsp;Läs mer
                    </a>
                  </article>
                  <h5>
                    <?php the_field('first-menu-text'); ?>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-center">
                <div class="mx-auto home-page-link">
                  <a href="
                    <?php the_field('second-menu-link'); ?>">
                    <img class="img-responsive menu-img-first" src="<?php the_field('second_menu_bg_icon'); ?>"/>
                  </a>
                  <article class="p-3 text-left">
                    <p class="mb-0 menu-text"><?php the_field('second-menu-hover-text'); ?></p>
                    <a href="<?php the_field('second-menu-link'); ?>">
                      <span class="fa fa-angle-right font-weight-bold"></span>&nbsp;Läs mer
                    </a>
                  </article>
                  <h5>
                    <?php the_field('second-menu-text'); ?>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-center">
                <div class="mx-auto home-page-link">
                  <a href="
                    <?php the_field('third-menu-link'); ?>">
                    <img class="img-responsive menu-img-first" src="<?php the_field('third_menu_bg_icon'); ?>">
                  </a>
                  <article class="p-3 text-left">
                    <p class="mb-0 menu-text"><?php the_field('third-menu-hover-text'); ?></p>
                    <a href="<?php the_field('third-menu-link'); ?>">
                      <span class="fa fa-angle-right font-weight-bold"></span>&nbsp;Läs mer
                    </a>
                  </article>
                  <h5>
                    <?php the_field('third-menu-text'); ?>
                  </h5>
                  </h5>
                </div>


              </div>
            </div>
          </div>
        </div>
        <div class="content-text">
          <?php the_field('short_text'); ?>
        </div>

        <div class="row news-block">
          <div class="website-news col-12 col-lg-5">
            <?php $catquery = new WP_Query( 'cat=4&posts_per_page=2' ); ?>
            <h3>
              <?php echo get_cat_name(4);?>
            </h3>
              <?php while($catquery->have_posts()) : $catquery->the_post(); ?>                                             
            <h5>
              <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
            </h5>
            <p>
              <?php echo get_the_excerpt(); ?>...
            </p>
            <span class="readmore">
              <a href="<?php the_permalink() ?>" rel="bookmark"><img src="../wp-content/themes/sweref/assets/images/readmore.png" />Läs mer</a>
            </span>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            
          </div>
          <div class="twitter-news col-12 col-lg-7">
            <div class="row mb-2">
              <div class="col-9 col-lg-6">
                <h3>Rådgivningsbyrån på Twitter</h3>
              </div>
              <div class="col-3 col-lg-3 offset-lg-3">
                <img class="img-responsive float-right float-lg-none" src="../wp-content/themes/sweref/assets/images/img/Twitter.png" />
              </div>
            </div>
            <?php echo do_shortcode('[ap-twitter-feed]'); ?>           
            <div class="col-4 offset-lg-3 twitter-link">
              <a href="https://twitter.com/sweref_org" target="_blank"><img src="../wp-content/themes/sweref/assets/images/img/Twitter_feed.png" /></a>
            </div>

          </div>
        </div>

        <div class="row entry-block">
          <div class="col-12">
            <h1 class="pb-4 pt-4">
              <?php the_field('introductory-heading'); ?>
              
            </h1>
            <span class="intro-img">
              <img src="<?php the_field('introductory-image'); ?>"/>              
            </span>
          </div>
          <div class="col-12 intro-text">
            <p>
              <?php the_field('introductory-text'); ?>
            </p>
            <span class="readmore">
              <a href="<?php the_field('read-more-link'); ?>" rel="bookmark"><img src="../wp-content/themes/sweref/assets/images/readmore.png" />Läs mer
              </a>
            </span>
          </div>
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
