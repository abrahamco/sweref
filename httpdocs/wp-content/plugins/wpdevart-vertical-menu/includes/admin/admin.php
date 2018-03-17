<?php

class wpda_vertical_menu_admin_panel{
// previus defined admin constants
// wpda_vertical_menu_plugin_url
// wpda_vertical_menu_plugin_path
	private $text_fileds;
	function __construct(){
		$this->admin_filters();
	}

	private function admin_filters(){
		//hook for admin menu
		add_action( 'admin_menu', array($this,'create_admin_menu') );
		add_filter( 'wp_edit_nav_menu_walker', array($this,'change_walker_nav_menu_edit'), 99 );
		add_filter( 'plugins_loaded', array($this,'required_class_for_walker_nav_menu_edit'));
		add_filter('wp_setup_nav_menu_item', array($this,"add_custom_filds_to_calling_nav_menu"));		
	}
	//conect admin menu
	public function create_admin_menu(){
		/* conect admin pages to wordpress core*/
		$main_page=add_menu_page( "Vertical Menu", "Vertical Menu", 'manage_options', "wpda_vertical_menu_themes", array($this, 'create_theme_page'),'dashicons-list-view');
		$main_page=add_submenu_page( "wpda_vertical_menu_themes", "Vertical Menu", "Vertical Menu", 'manage_options',"wpda_vertical_menu_themes",array($this, 'create_theme_page'));
		add_submenu_page( "wpda_vertical_menu_themes", "Featured Plugins", "Featured Plugins", 'manage_options',"wpda_vertical_menu_featured_plugins",array($this, 'featured_plugins'));
		
		/*for including page styles and scripts*/
		add_action('admin_print_styles-' .$main_page, array($this,'create_themes_page_style_js'));
		add_action('admin_print_styles-nav-menus.php', array($this,'nav_menu_script_styles'));	// include script and style for uploading image every menu item
	}	
	/* Theme Page scripts and styles*/	
	public function create_themes_page_style_js(){		
		//scripts
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-datepicker');
		wp_enqueue_script('jquery-ui-slider');		
		wp_enqueue_script('jquery-ui-spinner');	
		wp_enqueue_script("jquery-ui-date-time-picker-js");
		wp_enqueue_script("jquery-ui-date-time-picker-js");
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script('angularejs', wpda_vertical_menu_plugin_url.'includes/admin/js/angular.min.js');		
		//styles
		wp_enqueue_style( 'jquery-ui' );
		wp_enqueue_style('wpda_vertical_menu_theme_page_css', wpda_vertical_menu_plugin_url.'includes/admin/css/theme_page.css');
		wp_enqueue_script("wpda_contdown_extend_timer_page_js",wpda_vertical_menu_plugin_url.'includes/admin/js/theme_page.js');
		wp_enqueue_style('jquery-ui-date-time-picker-css');
				
	}
	
	/*navigation menu scripts and styles*/	
	public function nav_menu_script_styles(){		
		//scripts
		wp_enqueue_script('jquery');
		wp_enqueue_script('wpdevart_custom_field', wpda_vertical_menu_plugin_url.'includes/admin/js/nav_menu.js');
		wp_enqueue_style('wpdevart_custom_field_css', wpda_vertical_menu_plugin_url.'includes/admin/css/nav_menu.css');
		if (function_exists('wp_enqueue_media')) wp_enqueue_media();				
	}
	
	/* Theme page main*/	
	public function create_theme_page(){			
		$theme_page_object=new wpda_vertical_menu_theme_page();
		$theme_page_object->controller_page();	
	}	
	
	public function change_walker_nav_menu_edit($walker){
		if(!class_exists( "wpda_walker_nav_menu_extend_for_custom_field" )){
			require_once(wpda_vertical_menu_plugin_path.'includes/admin/walker_nav_menu_edit_extended.php');			
			$walker="wpda_walker_nav_menu_extend_for_custom_field";
		}
		return $walker;
	}
	public function required_class_for_walker_nav_menu_edit(){
		if(!class_exists( "wpdevart_add_to_walker_menu_icon_field" )){
			require_once(wpda_vertical_menu_plugin_path.'includes/admin/class_for_addon_walker_nav_menu_edit.php');
		}
	}
	public function add_custom_filds_to_calling_nav_menu($menu_item){
		$menu_item->menu_icon_url=get_post_meta( $menu_item->ID, 'menu-item-menu_icon', true );
		return $menu_item;
	}
	/*############################### Featured plugins function ########################################*/
	public function featured_plugins(){
		$plugins_array=array(
			'gallery_album'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/gallery-album-icon.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-gallery-plugin',
						'title'			=>	'WordPress Gallery plugin',
						'description'	=>	'Gallery plugin is an useful tool that will help you to create Galleries and Albums. Try our nice Gallery views and awesome animations.'
						),		
			'coming_soon'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/coming_soon.jpg',
						'site_url'		=>	'http://wpdevart.com/wordpress-coming-soon-plugin/',
						'title'			=>	'Coming soon and Maintenance mode',
						'description'	=>	'Coming soon and Maintenance mode plugin is an awesome tool to show your visitors that you are working on your website to make it better.'
						),
			'Contact forms'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/contact_forms.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-contact-form-plugin/',
						'title'			=>	'Contact Form Builder',
						'description'	=>	'Contact Form Builder plugin is an handy tool for creating different types of contact forms on your WordPress websites.'
						),	
			'Booking Calendar'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/Booking_calendar_featured.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-booking-calendar-plugin/',
						'title'			=>	'WordPress Booking Calendar',
						'description'	=>	'WordPress Booking Calendar plugin is an awesome tool to create a booking system for your website. Create booking calendars in a few minutes.'
						),	
			'youtube'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/youtube.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-youtube-embed-plugin',
						'title'			=>	'WordPress YouTube Embed',
						'description'	=>	'YouTube Embed plugin is an convenient tool for adding videos to your website. Use YouTube Embed plugin for adding YouTube videos in posts/pages, widgets.'
						),
            'facebook-comments'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/facebook-comments-icon.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-facebook-comments-plugin/',
						'title'			=>	'WordPress Facebook comments',
						'description'	=>	'WordPress Facebook comments plugin will help you to display Facebook Comments on your website. You can use Facebook Comments on your pages/posts.'
						),						
			'countdown'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/countdown.jpg',
						'site_url'		=>	'http://wpdevart.com/wordpress-countdown-plugin/',
						'title'			=>	'WordPress Countdown plugin',
						'description'	=>	'WordPress Countdown plugin is an nice tool for creating countdown timers for your website posts/pages and widgets.'
						),
			'lightbox'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/lightbox.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-lightbox-plugin',
						'title'			=>	'WordPress Lightbox plugin',
						'description'	=>	'WordPress Lightbox Popup is an high customizable and responsive plugin for displaying images and videos in popup.'
						),
			'facebook'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/facebook.jpg',
						'site_url'		=>	'http://wpdevart.com/wordpress-facebook-like-box-plugin',
						'title'			=>	'Facebook Like Box',
						'description'	=>	'Facebook like box plugin will help you to display Facebook like box on your wesite, just add Facebook Like box widget to sidebar or insert it into posts/pages and use it.'
						),
			'poll'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/poll.png',
						'site_url'		=>	'http://wpdevart.com/wordpress-polls-plugin',
						'title'			=>	'WordPress Polls system',
						'description'	=>	'WordPress Polls system is an handy tool for creating polls and survey forms for your visitors. You can use our polls on widgets, posts and pages.'
						),
			'scroll'=>array(
						'image_url'		=>	 wpda_vertical_menu_plugin_url.'includes/admin/images/featured_plugins/Scroll.png',
						'site_url'		=>	'https://wordpress.org/plugins/wp-scroll-2',
						'title'			=>	'Scroll To Top',
						'description'	=>	'Scroll to top plugin is an simple and nice plugin with the standard scroll settings. You can use it on your website different sides.'
						),						
			
		);
		?>
        <style>
         .featured_plugin_main{
			 background-color: #ffffff;
			 border: 1px solid #dedede;
			 box-sizing: border-box;
			 float:left;
			 margin-right:20px;
			 margin-bottom:20px;
			 
			 width:450px;
		 }
		.featured_plugin_image{
			padding: 15px;
			display: inline-block;
			float:left;
		}
		.featured_plugin_image a{
		  display: inline-block;
		}
		.featured_plugin_information{			
			float: left;
			width: auto;
			max-width: 282px;

		}
		.featured_plugin_title{
			color: #0073aa;
			font-size: 18px;
			display: inline-block;
		}
		.featured_plugin_title a{
			text-decoration:none;
					
		}
		.featured_plugin_title h4{
			margin:0px;
			margin-top: 20px;
			margin-bottom:8px;			  
		}
		.featured_plugin_description{
			display: inline-block;
		}
        
        </style>
        <script>
		
        jQuery(window).resize(wpdevart_vertical_menu_feature_resize);
		jQuery(document).ready(function(e) {
            wpdevart_vertical_menu_feature_resize();
        });
		
		function wpdevart_vertical_menu_feature_resize(){
			var wpdevart_vertical_menu_width=jQuery('.featured_plugin_main').eq(0).parent().width();
			var count_of_elements=Math.max(parseInt(wpdevart_vertical_menu_width/450),1);
			var width_of_plugin=((wpdevart_vertical_menu_width-count_of_elements*24-2)/count_of_elements);
			jQuery('.featured_plugin_main').width(width_of_plugin);
			jQuery('.featured_plugin_information').css('max-width',(width_of_plugin-160)+'px');
		}
       	</script>
        	<h2>Featured Plugins</h2>
            <br>
            <br>
            <?php foreach($plugins_array as $key=>$plugin) { ?>
            <div class="featured_plugin_main">
            	<span class="featured_plugin_image"><a target="_blank" href="<?php echo $plugin['site_url'] ?>"><img src="<?php echo $plugin['image_url'] ?>"></a></span>
                <span class="featured_plugin_information">
                	<span class="featured_plugin_title"><h4><a target="_blank" href="<?php echo $plugin['site_url'] ?>"><?php echo $plugin['title'] ?></a></h4></span>
                    <span class="featured_plugin_description"><?php echo $plugin['description'] ?></span>
                </span>
                <div style="clear:both"></div>                
            </div>
            <?php } 
	}	
}
?>
