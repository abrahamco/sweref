<?php
/*
 * Template Name: Post-Template
 * Template Post Type: post, page
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
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
                      
                      <?php if ($post->ID == get_the_ID()) {?>
                      <h1>
                        
                          <?php echo $post->post_title; ?>
                        </h1>
                     
                    </div>
                    <div class="content-text" style="border-bottom:0px !important;">
                      <?php echo $post->post_content; }?>
                     
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

