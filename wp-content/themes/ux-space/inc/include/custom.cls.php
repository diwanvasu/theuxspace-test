<?php
if( ! defined( 'ABSPATH' ) ) exit; 
class WPCustomClass
{
	public function __construct()
	{
		add_action( 'wp_enqueue_scripts', 'WPCustomClass::WPCustomEnqueueScripts' );
		//add_action('admin_enqueue_scripts', 'WPCustomClass::admin_style');
	}
	/* Function For Include Custom Styles and Scripts Start */
	public static function WPCustomEnqueueScripts()
	{
		$src = get_template_directory_uri()."/";
		$ver = rand(1,1).".".rand(0,9).".".rand(0,9);
			
		wp_enqueue_style( 'bundle-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', '', $ver, 'all' );	
		wp_enqueue_style( 'output-css', $src.'assets/css/output.css', '', $ver, 'all' );	
		wp_enqueue_style( 'custom-css', $src.'assets/css/custom.css', '', $ver, 'all' );	

		// wp_enqueue_script( 'scroll-script', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js', array( 'jquery' ), $ver, false );
		// wp_enqueue_script( 'gsap-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array( 'jquery' ), $ver, false );
		// wp_enqueue_script( 'ScrollTrigger-script', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array( 'jquery' ), $ver, false );
		wp_enqueue_script( 'bundle-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'parsley-script', 'https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.min.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'recaptcha-script', 'https://www.google.com/recaptcha/api.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'custom-script', $src.'assets/scripts/script.js', array( 'jquery' ), $ver, true );
		wp_enqueue_script( 'customjs-script', $src.'assets/scripts/custom.js', array( 'jquery' ), $ver, true );
		
	}
	/* Function For Include Custom Styles and Scripts End */

	/* Function For Include Option Page in Admin Panel Start */
	public static function WPOptionPage()
	{
		if( function_exists( 'acf_add_options_page' ) )
		 {
			 acf_add_options_page(array(
								'page_title' 	=>	'Theme Options',
								'menu_title' 	=> 	'Theme Options',
								'menu_slug' 	=> 	'theme-options',
								'capability'	=>	'edit_posts',
								'parent_slug'	=>	'',
								'position'		=>	20,
								'icon_url'		=>	false,
								'redirect'		=>	false
			));
		 }
	}
	/* Function For Include Option Page in Admin Panel End */
	/* Function for show Wordpress Navigation Menu Start */
	public static function TopMenu( $MenuName = "", $MenuClass = "")
	{
		if( $MenuName != "" )
		{
			wp_nav_menu( array(
				                'menu'            => $MenuName,
				                'container'       => false,
				                'container_class' => false,
				                'container_id'    => false,
				                'menu_class'      => $MenuClass,
				                'menu_id'         => false,
	      ) );
		}
	}
	/* Function for show Wordpress Navigation Menu End */
	/* Function for Get Flexible Image Start */
	public static function GetAcfImage( $FieldName = "", $DefaultImage = "" )
	{
		$ImgFlb	=	"";
		if( !empty( $FieldName ) )
		{
			$ImgArry	=	"";
			$ImgArry	=	$FieldName;
			$ImgFlb		=	array(
									'image_url'		=>	$ImgArry["url"],
									'image_alt'		=>	$ImgArry["alt"],
									'image_title'	=>	$ImgArry["title"],
			);
		}
		else
		{
			$ImgFlb		=	array(
									'image_url'		=>	get_template_directory_uri()."/assets/images/".$DefaultImage,
									'image_alt'		=>	"",
									'image_title'	=>	"",
			);
		}
		return $ImgFlb;
	}
	/* Function for Get Flexible Image End */


	public static function CustomFeatureImage($PostId, $Size, $DefaultImage = "" )
	{
		if( !empty($PostId) )		
		{
			$img_path   =   "";
			if( !empty( get_the_post_thumbnail_url($PostId) ) )
			{
				$img_path   =   get_the_post_thumbnail_url($PostId, $Size);
			}
			else
			{
				$img_path   =   get_template_directory_uri()."/images/".$DefaultImage;
			}
			return $img_path;
		}
	}
}