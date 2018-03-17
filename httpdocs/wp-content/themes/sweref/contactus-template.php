<?php
/**
 *  Template Name: contactus-template 
 * 
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

              <h1>
                <?php the_title(); ?>
              </h1>
            </div>
            <div class="content-text">
              <p>
                <?php the_field('introductory-text');?>               
              </p>
            </div>
            <div class="row contact-content-block">
              <div class="col-4 contact-window">
                <h3>
                  <?php the_field('telephone-heading');?>
                </h3>
                <p>
                  <?php the_field('telephone-number');?>
                </p>
                <h3>
                  <?php the_field('mail-heading');?>
                </h3>
                <p>
                  <a href="mailto:<?php the_field('contact-mail');?>"><?php the_field('contact-mail');?>
                  </a>
                </p>
                <h2>
                  <?php the_field('category-type');?>
                </h2>
                <h3>
                  <?php the_field('telephone-heading');?>
                </h3>
                <p>
                  <?php the_field('counseling-phonenumber');?>
                </p>
                <h3>
                  <?php the_field('mail-heading');?>
                </h3>
                <p>
                  <a href="mailto:"
                    <?php the_field('counseling-mailaddress');?>"><?php the_field('counseling-mailaddress');?>
                  </a>
                </p>
              </div>
              <div class="col-8 contact-content">
                <div>
                  <?php the_field('contact-content');?>
                </div>
                <div>
                  <h3>
                    <?php the_field('counseling-heading');?>
                  </h3>
                  <?php the_field('counseling-content');?>
                </div>
                <div>                  
                  <h3>
                    <?php the_field('question-block-heading');?>
                  </h3>
                  <p>
                    <?php the_field('question-block-content');?>
                  </p>
                  <p>                    
                    <?php the_field('contact-form');?>                    
                  </p>
                </div>
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

