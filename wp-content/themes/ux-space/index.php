<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
if ( is_search() && have_posts() ) 
{
	?>
		<main class="main-wrapper">
		   <!-- ======= Hero inner Start ======= -->
		   <section class="hero-inner">
		      <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg/inner-bg-6.jpg">
		         <div class="container">
		            <div class="row">
		               <div class="col-sm-12">
		                  <div class="page-breadcrumb">
		                     <h1 class="heading">Search Result</h1>
		                     <nav aria-label="breadcrumb">
		                        <ol class="breadcrumb">
		                           <li class="breadcrumb-item">
		                              <a href="<?php echo home_url(); ?>">Home</a>
		                           </li>
		                           <li class="breadcrumb-item active">Search Result</li>
		                        </ol>
		                     </nav>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   	</section>
		   	<div class="blog pt-130 pb-100">
	            <div class="container">
	              	<div class="row">
						<?php
						while ( have_posts() ) 
						{
							the_post();
							$blogImage = get_stylesheet_directory_uri()."/assets/images/blog/blog-thumb-1.jpg";

							if( has_post_thumbnail() )
							{
								$blogImage = get_the_post_thumbnail_url( get_the_ID(), 'full' );
							}
							?>
								<div class="col-lg-4 col-md-6 blog-item__column mb-30">
						            <div class="blog-item blog-item--software">
						               <header class="blog-item__header header">
						                  <a
						                     href="<?php echo get_the_permalink(); ?>"
						                     class="blog-item__img_link link link--image"
						                     >
						                  <img
						                     width="551"
						                     height="395"
						                     class="blog-item__img"
						                     src="<?php echo $blogImage; ?>"
						                     alt="Questions every Business"
						                     />
						                  </a>
						                  <ul class="meta">
						                     <li class="blog-item__list list">
						                        <i class="far fa-user icon"></i>
						                        <span class="name name--poster">By <?php echo get_the_author(); ?></span>
						                     </li>
						                     <li class="blog-item__list list">
						                        <i class="far fa-calendar icon"></i>
						                        <span class="name name--dates"><?php echo get_the_date( "d M, Y" ); ?></span>
						                     </li>
						                  </ul>
						               </header>
						               <article class="blog-item__article content">
						                  <h3 class="blog-item__title">
						                     <a href="<?php echo get_the_permalink(); ?>">
						                     <?php the_title(); ?>
						                     </a>
						                  </h3>
						                  <p class="blog-item__text">
						                     <?php echo get_the_excerpt(); ?>
						                  </p>
						               </article>
						            </div>
						         </div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</main>
	<?php
}
elseif ( !is_search() && have_posts() ) 
{

    if( have_rows('acf_flx_blp_page_section', 168) ):
        while ( have_rows('acf_flx_blp_page_section', 168) ) : the_row();

            if( get_row_layout() == 'acf_flx_blp_hs_hero_section' ):
                ?>
                    <div class="relative">
                        <div class="max-w-screen-2xl px-5 mx-auto pt-[120px]">
                            <div class="flex flex-col items-center justify-center text-center max-w-[1381px] w-full mx-auto">
                                <div class="bg-[#383838] mb-[46px] h-[50px] px-5 gap-3 sm:gap-4 text-sm sm:text-base w-max rounded-3xl flex items-center">
                                   <?php echo get_sub_field("acf_flx_blp_hs_image_and_conent"); ?>
                                </div>
                                <h1
                                    class="font-criteria text-[18px] sm:text-[24px] md:text-[38px] lg:text-[55px] xl:text-[64px] leading-[28px] sm:leading-[35px] md:leading-[50px] lg:leading-[70px] xl:leading-[89px] font-semibold text-grayDark dark:text-white mb-6 md:mb-[42px]"
                                ><?php echo get_sub_field("acf_flx_blp_hs_section_title"); ?></h1>
                                <div class="flex flex-col md:max-w-[880px] text-base md:text-xl xl:text-[28px] mb-[30px]">
                                    <p class="font-sans text-sm leading-[24px] sm:text-[20px] sm:leading-[35px] md:text-[28px] md:leading-[45px] text-content dark:text-white">
                                        <?php echo get_sub_field("acf_flx_blp_hs_section_content"); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_blp_bss_blog_and_subscribe_section' ): 
                $post_detail = get_sub_field("acf_flx_blp_bss_select_blog");
                $post_image = get_stylesheet_directory_uri()."/assets/images/subscribed.png";
                if( has_post_thumbnail($post_detail->ID) )
                {
                    $post_image = get_the_post_thumbnail_url( $post_detail->ID, 'large' );
                }
                $category_detail = get_the_category($post_detail->ID);
                ?>
                    <div class="max-w-screen-2xl px-5 mx-auto">
                        <div class="grid lg:grid-cols-3 gap-[30px]">
                            <div class="flex flex-col lg:col-span-2 gap-[30px]">
                                <div class="overflow-hidden rounded-xl w-full h-[250px] sm:h-[527px]">
                                    <img src="<?php echo $post_image; ?>" alt="img" class="w-full h-full object-cover" />
                                </div>
                                <div class="flex flex-col gap-3">
                                    <div class="flex gap-3 items-center">
                                        <p class="font-sans text-xs leading-5 sm:text-base sm:leading-7 font-semibold text-content dark:text-primary"><?php echo $category_detail[0]->cat_name; ?></p>
                                        <svg width="8" height="8" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg" class="fill-[#28303F] dark:fill-[#FFDD00]">
                                            <circle cx="4" cy="4" r="4" />
                                        </svg>
                                        <p class="font-sans text-xs leading-5 sm:text-base sm:leading-7 text-content dark:text-primary">5 Min read</p>
                                    </div>
                                    <h4 class="text-lg sm:text-3xl sm:leading-10 font-semibold text-content dark:text-white max-w-[878px]"><?php echo get_the_title($post_detail->ID); ?></h4>
                                </div>
                            </div>
                            <div>
                                <div class="p-6 sm:p-10 border border-[#E4E4E4] dark:border-[#EDEFF1] shadow-sm rounded-xl h-[380px] sm:h-[527px] relative">
                                    <h4 class="sm:text-lg uppercase text-content dark:text-white"><?php echo get_sub_field("acf_flx_blp_bss_form_title"); ?></h4>
                                    <h2 class="sm:text-3xl sm:leading-10 font-bold text-content dark:text-white mt-2 sm:mt-3"><?php echo get_sub_field("acf_flx_blp_bss_form_sub_title"); ?></h2>
                                    <p class="sm:text-base text-content dark:text-white mt-3 sm:mt-5"><?php echo get_sub_field("acf_flx_blp_bss_form_content"); ?></p>
                                    <div class="flex flex-col gap-[12px] sm:gap-[30px] w-[calc(100%-48px)] sm:w-[calc(100%-80px)] absolute bottom-6 sm:bottom-10 left-6 sm:left-10">
                                        <input
                                            type="email"
                                            placeholder="hello@uxspace.com"
                                            class="w-full h-[56px] border-[1px] border-[#F7F7F7] rounded-lg text-base px-5 text-content bg-[#F7F7F7] dark:bg-[#202020] dark:border-[#4B4B4B] dark:text-white outline-offset-0 placeholder:text-[#888888] focus:border-primary outline-none focus:outline-4 transition-all duration-500 focus:outline-primary/20"
                                        />
                                        <button class="relative h-[56px] capitalize text-lg w-full z-10 overflow-hidden hover:shadow-gradientShadow rounded group font-semibold text-black bg-primary transition-all duration-300">
                                            <span> Subscribe Now </span>
                                            <span class="absolute w-full h-10 bg-white transition-all duration-300 -left-2/3 group-hover:left-2/3 group-hover:bottom-full pointer-events-none blur-2xl -bottom-full rotate-45"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_blp_bls_blog_listing_section' ): 
                ?>
                    <div class="max-w-screen-2xl px-5 mx-auto h-full w-full mb-5">
                        <div class="flex flex-col items-center justify-center gap-4 sm:gap-6 md:gap-8 text-center">
                            <h2 class="text-lg sm:text-2xl md:text-4xl xl:text-[54px] font-semibold">
                                <?php echo get_sub_field("acf_flx_blp_bls_section_title"); ?>
                            </h2>
                            <p class="text-sm leading-6 sm:text-base sm:leading-8 md:text-lg md:leading-9 lg:text-xl xl:text-2xl xl:leading-10 md:max-w-5xl text-grayDark dark:text-white">
                                <?php echo get_sub_field("acf_flx_blp_bls_section_sub_title"); ?>
                            </p>
                            <div class="relative flex items-center gap-x-2 sm:gap-x-4 w-full">
                                <div class="relative w-full search-input search-input-visible">
                                    <input
                                        type="email"
                                        placeholder="I'm looking for..."
                                        class="w-full h-[40px] sm:h-[56px] border-[1px] border-[#F7F7F7] rounded-lg text-base px-5 ps-10 sm:ps-14 text-content bg-[#F7F7F7] dark:bg-[#202020] dark:border-[#4B4B4B] dark:text-white outline-offset-0 placeholder:text-[#888888] focus:border-primary outline-none focus:outline-4 transition-all duration-500 focus:outline-primary/20"
                                    />
                                    <span class="absolute top-1/2 left-2 sm:left-4 -translate-y-1/2 z-50 w-6 h-6 sm:h-8 sm:w-8 rounded-full flex justify-center items-center bg-[#ffdd00]">
                                        <svg width="" height="" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4">
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M11.5 21C6.25329 21 2 16.7467 2 11.5C2 6.25329 6.25329 2 11.5 2C16.7467 2 21 6.25329 21 11.5C21 16.7467 16.7467 21 11.5 21Z"
                                                stroke="#333333"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path d="M22 22L20 20" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <button class="search-bar-close absolute top-1/2 right-2 -translate-y-1/2 z-50 h-8 w-8 rounded-full flex justify-center items-center">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.0026 14.6668C11.6693 14.6668 14.6693 11.6668 14.6693 8.00016C14.6693 4.3335 11.6693 1.3335 8.0026 1.3335C4.33594 1.3335 1.33594 4.3335 1.33594 8.00016C1.33594 11.6668 4.33594 14.6668 8.0026 14.6668Z"
                                                stroke="white"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path d="M6.10938 9.88661L9.88271 6.11328" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.88271 9.88661L6.10938 6.11328" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="block xl:hidden">
                                    <button class="tab-show h-[38px] w-[38px] sm:h-14 sm:w-14 rounded-full flex justify-center items-center bg-[#ffdd00]">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.04687 1.57422H13.9469C14.7719 1.57422 15.4469 2.24922 15.4469 3.07422V4.72422C15.4469 5.32422 15.0719 6.07422 14.6969 6.44922L11.4719 9.29922C11.0219 9.67422 10.7219 10.4242 10.7219 11.0242V14.2492C10.7219 14.6992 10.4219 15.2992 10.0469 15.5242L8.99687 16.1992C8.02187 16.7992 6.67187 16.1242 6.67187 14.9242V10.9492C6.67187 10.4242 6.37187 9.74922 6.07187 9.37422L3.22188 6.37422C2.84688 5.99922 2.54688 5.32422 2.54688 4.87422V3.14922C2.54688 2.24922 3.22187 1.57422 4.04687 1.57422Z"
                                                stroke="#333333"
                                                stroke-width="0.9375"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path d="M8.1975 1.57422L4.5 7.49922" stroke="#333333" stroke-width="0.9375" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <div class="tab-mobile hidden absolute top-[44px] sm:top-[64px] left-0 w-full bg-white shadow-sm rounded-lg overflow-hidden text-left">
                                        <a href="#" class="text-sm sm:text-lg text-content block py-3 px-5 whitespace-nowrap hover:bg-slate-100">All Blogs</a>
                                        <?php
                                            $categories = get_categories(array('hide_empty' => 0));
                                            foreach($categories as $category) {
                                                ?>
                                                    <a href="#" class="text-sm sm:text-lg text-content block py-3 px-5 whitespace-nowrap hover:bg-slate-100"><?php echo $category->name; ?></a>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden xl:flex w-full" style="opacity: 1;">
                                <div class="w-full min-w-[72rem] pt-7 relative z-10">
                                    <div role="tablist" class="tab-all bg-transparent opacity-100 gap-4 dark:bg-transparent flex justify-between items-center w-full services-tabs whitespace-nowrap overflow-x-auto">
                                        <button
                                            type="button"
                                            role="tab"
                                            aria-selected="true"
                                            data-state="active"
                                            class="text-lg font-semibold text-content hover:text-[#333333] hover:bg-[#FFDD00] dark:text-white px-11 py-4 border border-[#EFEFEF] dark:border-[#ffffff80] rounded-2xl transition-colors duration-500 ease-in"
                                            tabindex="-1"
                                            id="tab-1"
                                            value="All"
                                        >
                                            All Blogs
                                        </button>
                                        <?php
                                            $categories = get_categories(array('hide_empty' => 0));
                                            foreach($categories as $category) {
                                                ?>
                                                    <button
                                                        type="button"
                                                        role="tab"
                                                        aria-selected="true"
                                                        data-state="active"
                                                        class="text-lg font-semibold text-content hover:text-[#333333] hover:bg-[#FFDD00] dark:text-white px-11 py-4 border border-[#EFEFEF] dark:border-[#ffffff80] rounded-2xl transition-colors duration-500 ease-in"
                                                        tabindex="-1"
                                                        id="tab-1"
                                                        value="<?php echo $category->slug; ?>"
                                                    >
                                                        <?php echo $category->name; ?>
                                                    </button>
                                                <?php
                                            }
                                        ?>                                        
                                        <button
                                            class="search-bar-show text-lg font-semibold text-content hover:text-white hover:stroke-white bg-[#FFDD00] hover:bg-transparent dark:text-white p-[18px] border border-[#EFEFEF] dark:border-[#ffffff80] rounded-full transition-colors duration-500 ease-in"
                                        >
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M11.5 21C6.25329 21 2 16.7467 2 11.5C2 6.25329 6.25329 2 11.5 2C16.7467 2 21 6.25329 21 11.5C21 16.7467 16.7467 21 11.5 21Z"
                                                    stroke="#333333"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path d="M22 22L20 20" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="relative mt-20 mb-20 h-96 w-full">
                                        <div data-state="active" role="tabpanel" id="tabpanel-1" tabindex="0" class="absolute top-1/2 transition-all duration-500 -translate-y-1/2 left-0 w-full h-full" value="All">
                                            <div class="flex flex-wrap gap-y-[60px] -mx-5">
                                                <?php
                                                    $post_arr = array(
                                                        "post_type"         =>  "post",
                                                        "post_status"       =>  "publish",
                                                        "posts_per_page"    =>  -1,
                                                    );

                                                    $post_result = new WP_Query($post_arr);

                                                    if( $post_result->have_posts() ): 
                                                        while( $post_result->have_posts() ): $post_result->the_post();
                                                            $post_image = get_stylesheet_directory_uri()."/assets/images/blog-1.png";
                                                            if( has_post_thumbnail(get_the_ID()) )
                                                            {
                                                                $post_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                                                            }
                                                            $category_detail = get_the_category(get_the_ID());
                                                            ?>
                                                                <div class="md:w-1/3 w-full md:pb-0 pb-4 px-5 max-w-full">
                                                                    <div
                                                                        class="bg-white dark:bg-[#282525] lg:hover:-translate-y-4 h-full shadow-cardShadow group rounded-[20px] border border-transparent hover:bg-transparent hover:border-primary transition-all duration-500"
                                                                    >
                                                                        <div class="object-cover object-center overflow-hidden rounded-tl-[20px] rounded-tr-[20px]">
                                                                            <img class="object-cover group-hover:scale-105 transition-all duration-500 object-center w-full" src="<?php echo $post_image; ?>" alt="blog" />
                                                                        </div>
                                                                        <div class="lg:p-[28px] p-5">
                                                                            <div class="flex justify-between items-center pb-6">
                                                                                <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                                    <?php echo $category_detail[0]->cat_name; ?>
                                                                                </p>
                                                                                <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                                    <?php echo get_the_date("d M"); ?>
                                                                                </p>
                                                                            </div>
                                                                            <p class="lg:text-xl text-sm font-semibold lg:leading-[1.9] leading-6 text-content dark:text-white text-left">
                                                                                <?php echo get_the_title(); ?>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                        endwhile;   
                                                    endif;
                                                    wp_reset_postdata();
                                                ?>                                                            
                                            </div>
                                        </div>
                                        <?php
                                            $cnt=1;
                                            foreach($categories as $category) {
                                                ?>
                                                    <div data-state="unactive" role="tabpanel" id="tabpanel-2" tabindex="0" class="absolute top-1/2 transition-all duration-500 -translate-y-1/2 left-0 w-full h-full" value="<?php echo $category->slug; ?>">
                                                        <div class="flex flex-wrap gap-y-[60px] -mx-5">
                                                            <?php
                                                                $post_arr = array(
                                                                    "post_type"         =>  "post",
                                                                    "post_status"       =>  "publish",
                                                                    "posts_per_page"    =>  -1,
                                                                    'tax_query'         => array(
                                                                        array(
                                                                            'taxonomy'  => 'category',
                                                                            'field'     => 'slug',
                                                                            'terms'     => $category->slug
                                                                        )
                                                                    )
                                                                );

                                                                $post_result = new WP_Query($post_arr);

                                                                if( $post_result->have_posts() ): 
                                                                    while( $post_result->have_posts() ): $post_result->the_post();
                                                                        $post_image = get_stylesheet_directory_uri()."/assets/images/blog-1.png";
                                                                        if( has_post_thumbnail(get_the_ID()) )
                                                                        {
                                                                            $post_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                                                                        }
                                                                        $category_detail = get_the_category(get_the_ID());
                                                                        ?>
                                                                            <div class="md:w-1/3 w-full md:pb-0 pb-4 px-5 max-w-full">
                                                                                <div
                                                                                    class="bg-white dark:bg-[#282525] lg:hover:-translate-y-4 h-full shadow-cardShadow group rounded-[20px] border border-transparent hover:bg-transparent hover:border-primary transition-all duration-500"
                                                                                >
                                                                                    <div class="object-cover object-center overflow-hidden rounded-tl-[20px] rounded-tr-[20px]">
                                                                                        <img class="object-cover group-hover:scale-105 transition-all duration-500 object-center w-full" src="<?php echo $post_image; ?>" alt="blog" />
                                                                                    </div>
                                                                                    <div class="lg:p-[28px] p-5">
                                                                                        <div class="flex justify-between items-center pb-6">
                                                                                            <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                                                <?php echo $category_detail[0]->cat_name; ?>
                                                                                            </p>
                                                                                            <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                                                <?php echo get_the_date("d M"); ?>
                                                                                            </p>
                                                                                        </div>
                                                                                        <p class="lg:text-xl text-sm font-semibold lg:leading-[1.9] leading-6 text-content dark:text-white text-left">
                                                                                            <?php echo get_the_title(); ?>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php
                                                                    endwhile;   
                                                                endif;
                                                                wp_reset_postdata();
                                                            ?>                                                            
                                                        </div>
                                                    </div>
                                                <?php
                                                $cnt++;
                                            }
                                        ?>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="flex xl:hidden w-full">
                                <div class="w-full">
                                    <!-- 1st one -->
                                    <div class="pb-4">
                                        <div class="flex flex-wrap -mx-5">
                                            <div class="md:w-1/3 w-full md:pb-0 pb-4 px-5 max-w-full">
                                                <div
                                                    class="bg-white dark:bg-[#282525] lg:hover:-translate-y-4 h-full shadow-cardShadow group rounded-[20px] border border-transparent hover:bg-transparent hover:border-primary transition-all duration-500"
                                                >
                                                    <div class="object-cover object-center overflow-hidden rounded-tl-[20px] rounded-tr-[20px]">
                                                        <img class="object-cover group-hover:scale-105 transition-all duration-500 object-center w-full" src="../assets/images/blog-1.png" alt="blog" />
                                                    </div>
                                                    <div class="lg:p-[28px] p-5">
                                                        <div class="flex justify-between items-center pb-6">
                                                            <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                Ui Design
                                                            </p>
                                                            <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                30 Mar
                                                            </p>
                                                        </div>
                                                        <p class="lg:text-xl text-sm font-semibold lg:leading-[1.9] leading-6 text-content dark:text-white text-left">
                                                            14 UI Design trends in 2024 that will dominate: Stay ahead of the game
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="md:w-1/3 w-full md:pb-0 pb-4 px-5 max-w-full">
                                                <div
                                                    class="bg-white dark:bg-[#282525] lg:hover:-translate-y-4 h-full shadow-cardShadow rounded-[20px] border border-transparent hover:bg-transparent group hover:border-primary transition-all duration-500"
                                                >
                                                    <div class="object-cover object-center overflow-hidden rounded-tl-[20px] rounded-tr-[20px]">
                                                        <img class="object-cover group-hover:scale-105 transition-all duration-500 object-center w-full" src="../assets/images/blog-2.png" alt="blog" />
                                                    </div>
                                                    <div class="lg:p-[28px] p-5">
                                                        <div class="flex justify-between items-center pb-6">
                                                            <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                Ui Design
                                                            </p>
                                                            <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                30 Mar
                                                            </p>
                                                        </div>
                                                        <p class="lg:text-xl text-sm font-semibold lg:leading-[1.9] leading-6 text-content dark:text-white text-left">
                                                            14 UI Design trends in 2024 that will dominate: Stay ahead of the game
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="md:w-1/3 w-full pb-0 px-5 max-w-full">
                                                <div
                                                    class="bg-white hover:bg-transparent lg:hover:-translate-y-4 dark:bg-[#282525] h-full shadow-cardShadow rounded-[20px] border border-transparent hover:border-primary transition-all group duration-500"
                                                >
                                                    <div class="object-cover object-center overflow-hidden rounded-tl-[20px] rounded-tr-[20px]">
                                                        <img class="object-cover group-hover:scale-105 transition-all duration-500 object-center w-full" src="../assets/images/blog-3.png" alt="blog" />
                                                    </div>
                                                    <div class="lg:p-[28px] p-5">
                                                        <div class="flex justify-between items-center pb-6">
                                                            <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                Ui Design
                                                            </p>
                                                            <p class="md:text-base text-xs font-semibold md:leading-7 leading-[1.71] text-grayDark dark:text-primary capitalize">
                                                                30 Mar
                                                            </p>
                                                        </div>
                                                        <p class="lg:text-xl text-sm font-semibold lg:leading-[1.9] leading-6 text-content dark:text-white text-left">
                                                            14 UI Design trends in 2024 that will dominate: Stay ahead of the game
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div id="mainContainer" class="flex gap-x-2 sm:gap-x-4 xl:mt-36 justify-center items-center">
                                <button class="goPrev w-8 h-8 sm:w-12 sm:h-12 p-2 rounded-full flex justify-center items-center disabled:opacity-50 disabled:cursor-not-allowed border border-[#28303F] dark:border-white">
                                    <svg width="" height="" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-[#28303F] dark:stroke-white w-4 sm:w-6 h-4 sm:h-6">
                                        <path d="M11 2L2 11L11 20" stroke="" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <div class="pagination flex gap-x-2"></div>
                                <button class="goNext w-8 h-8 sm:w-12 sm:h-12 p-2 rounded-full flex justify-center items-center disabled:opacity-50 disabled:cursor-not-allowed border border-[#28303F] dark:border-white">
                                    <svg width="" height="" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-[#28303F] dark:stroke-white w-4 sm:w-6 h-4 sm:h-6">
                                        <path d="M2 2L11 11L2 20" stroke="" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div> -->
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_blp_ctac_cta_card' ): 
                ?>
                    <div class="flex flex-col">
                        <div class="py-32 px-4 relative flex items-center justify-center text-white xl:h-screen">
                            <img class="absolute top-0 left-0 w-full h-full object-cover -z-10 dark:block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/black-bg.png" />
                            <img class="absolute top-0 left-0 w-full h-full object-cover -z-10 dark:hidden" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/light-bg.png" />
                            <div class="absolute top-0 left-0 w-full h-full object-cover hidden dark:block" style="background: radial-gradient(50% 50% at 50% 0.5%, #303030 0%, #00000080 100%);"></div>
                            <div class="absolute top-0 left-0 w-full h-full object-cover -z-20 bg-white dark:bg-black"></div>
                            <div
                                class="w-full flex flex-col gap-[60px] xl:flex-row justify-between relative z-10 max-w-screen-2xl px-5 py-4 lg:p-[60px] xl:h-[669px] mx-auto rounded-xl backdrop-blur-[6.5px] border-[1.5px] dark:border-[#333333] bg-white dark:bg-[#000c] shadow-[0px_20px_28px_0px_#0000000d] dark:bg-[radial-gradient(50%_50%_at_50%_0.5%,transparent,#000000cc_100%)]"
                            >
                                <div class="flex flex-col flex-1 items-start gap-6">
                                    <h2 class="flex flex-wrap font-criteria gap-2 text-[40px] font-semibold leading-[1.6] max-w-2xl text-black dark:text-white text-left items-start justify-start">
                                        <?php echo get_field("acf_opt_fbs_cfs_section_title", "option"); ?>
                                    </h2>
                                    <p class="text-lg text-black/80 font-light dark:text-white leading-[1.6] max-w-2xl text-left items-start justify-start">
                                        <?php echo get_field("acf_opt_fbs_cfs_section_sub_title", "option"); ?>
                                    </p>
                                    <div class="flex flex-col sm:grid grid-cols-2 w-full gap-10 sm:gap-12 mt-[32px]">
                                        <div class="input-group relative w-full">
                                            <input
                                                type="text"
                                                placeholder=""
                                                class="p-0 pb-2 text-lg w-full border-b text-black dark:text-white dark:focus:border-primary outline-0 border-[#E3E3E3] dark:border-white bg-transparent leading-6 transition-all duration-500"
                                                required=""
                                            />
                                            <label class="dark:text-white text-black pb-2 p-0 text-lg absolute top-0 flex left-0 leading-6 transition-all duration-500 pointer-events-none">
                                                <span style="transition-delay: 0s;" class="block">F</span><span style="transition-delay: 0.03s;" class="block">u</span><span style="transition-delay: 0.06s;" class="block">l</span>
                                                <span style="transition-delay: 0.09s;" class="block">l</span><span class="block">&nbsp;</span><span style="transition-delay: 0.12s;" class="block">N</span>
                                                <span style="transition-delay: 0.15s;" class="block">a</span><span style="transition-delay: 0.18s;" class="block">m</span><span style="transition-delay: 0.21s;" class="block">e</span>
                                                <span class="block">&nbsp;</span>
                                            </label>
                                        </div>
                                        <div class="input-group relative w-full">
                                            <input
                                                type="email"
                                                placeholder=""
                                                class="p-0 pb-2 text-lg w-full border-b text-black dark:text-white dark:focus:border-primary outline-0 border-[#E3E3E3] dark:border-white bg-transparent leading-6 transition-all duration-500"
                                                required=""
                                                data-dashlane-rid="7871695ceadaa159"
                                                data-dashlane-classification="other"
                                            />
                                            <label class="dark:text-white text-black pb-2 text-lg p-0 absolute top-0 flex left-0 leading-6 transition-all duration-500 pointer-events-none">
                                                <span style="transition-delay: 0s;" class="block">E</span><span style="transition-delay: 0.03s;" class="block">m</span><span style="transition-delay: 0.06s;" class="block">a</span>
                                                <span style="transition-delay: 0.09s;" class="block">i</span><span style="transition-delay: 0.12s;" class="block">l</span><span class="block">&nbsp;</span>
                                            </label>
                                        </div>
                                        <div class="col-span-2 sm:mt-3">
                                            <div class="input-group relative w-full">
                                                <input
                                                    type="text"
                                                    placeholder=""
                                                    class="p-0 pb-2 text-lg w-full border-b text-black dark:text-white dark:focus:border-primary outline-0 border-[#E3E3E3] dark:border-white bg-transparent leading-6 transition-all duration-500"
                                                    required=""
                                                />
                                                <label class="dark:text-white text-black pb-2 text-lg p-0 absolute top-0 flex left-0 leading-6 transition-all duration-500 pointer-events-none">
                                                    <span style="transition-delay: 0s;" class="block">A</span><span style="transition-delay: 0.03s;" class="block">b</span><span style="transition-delay: 0.06s;" class="block">o</span>
                                                    <span style="transition-delay: 0.09s;" class="block">u</span><span style="transition-delay: 0.12s;" class="block">t</span><span class="block">&nbsp;</span>
                                                    <span style="transition-delay: 0.21s;" class="block">P</span><span style="transition-delay: 0.24s;" class="block">r</span><span style="transition-delay: 0.27s;" class="block">o</span>
                                                    <span style="transition-delay: 0.3s;" class="block">j</span><span style="transition-delay: 0.32999999999999996s;" class="block">e</span>
                                                    <span style="transition-delay: 0.36s;" class="block">c</span><span style="transition-delay: 0.39s;" class="block">t</span><span class="block">&nbsp;</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col md:flex-row gap-8 justify-between items-start w-full mt-auto">
                                        <div class="sm:text-lg text-black dark:text-white sm:leading-9 max-w-96">
                                            <span>By sending this form I confirm that I have read and accept the</span>

                                            <a class="text-base relative inline-flex font-bold text-[#72B5E0] dark:text-primary group transition-all duration-500" href="/">
                                                <div class="relative overflow-hidden">
                                                    <span class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all grid place-content-center duration-500 pointer-events-none">
                                                        Privacy Policy
                                                    </span>
                                                    <span
                                                        class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full grid place-content-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                                                    >
                                                        Privacy Policy
                                                    </span>
                                                </div>
                                                <span class="absolute -bottom-0.5 left-0 w-full h-[1px] origin-right group-hover:origin-left scale-x-0 bg-[#72B5E0] dark:bg-primary transition-transform duration-500 group-hover:scale-x-100"></span>
                                            </a>
                                        </div>
                                        <button
                                            class="relative capitalize text-base px-6 py-3 z-10 overflow-hidden hover:shadow-gradientShadow hover:scale-105 rounded-lg group font-bold text-black bg-primary transition-all duration-300 w-full sm:w-auto"
                                        >
                                            <span>Send a message</span>
                                            <span class="absolute w-full h-10 bg-white transition-all duration-300 -left-2/3 group-hover:left-2/3 group-hover:bottom-full pointer-events-none blur-2xl -bottom-full rotate-45"></span>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="xl:w-[524px] gap-10 h-full border dark:border-grayDark border-transparent flex flex-col justify-between rounded-lg p-4 md:p-10 bg-primary dark:bg-[radial-gradient(50%_50%_at_50%_0.5%,#171717_0%,#000000_100%)]"
                                >
                                    <div class="flex flex-col gap-4">
                                        <h3 class="text-2xl md:text-[40px] font-bold dark:font-light md:leading-[1.25] uppercase text-black dark:text-white">
                                            <?php echo get_field("acf_opt_fbs_cfs_client_say_title", "option"); ?>
                                        </h3>
                                        <div class="w-full h-[1px] bg-black/50 dark:bg-[#A8A7A7]"></div>
                                        <p class="sm:text-xl font-medium dark:font-normal sm:leading-[1.8] text-[#010101] dark:text-white">
                                            <?php echo get_field("acf_opt_fbs_cfs_client_say_detail", "option"); ?>
                                        </p>
                                    </div>
                                    <div class="flex gap-4 items-center">
                                        <div class="w-12 h-12 sm:w-[60px] sm:h-[60px] rounded-full bg-black/10 dark:bg-white/10"></div>
                                        <div class="flex flex-col gap-1">
                                            <p class="sm:text-[26px] font-extrabold leading-[1.26] capitalize text-grayDark dark:text-white"><?php echo get_field("acf_opt_fbs_cfs_client_name", "option"); ?></p>
                                            <p class="text-black dark:text-white/50 text-lg leading-[1.83] capitalize">
                                                <?php echo get_field("acf_opt_fbs_cfs_client_designation", "option"); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            endif;

        endwhile;
    endif;
}
else
{
	?>
		<main class="main-wrapper">
		   <!-- ======= Hero inner Start ======= -->
		   <section class="hero-inner">
		      <div class="hero-inner__bg hero-inner__bg_two" data-bg-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bg/inner-bg-6.jpg">
		         <div class="container">
		            <div class="row">
		               <div class="col-sm-12">
		                  <div class="page-breadcrumb">
		                     <h1 class="heading">Result Not Found</h1>
		                     <nav aria-label="breadcrumb">
		                        <ol class="breadcrumb">
		                           <li class="breadcrumb-item">
		                              <a href="<?php echo home_url(); ?>">Home</a>
		                           </li>
		                           <li class="breadcrumb-item active">Result Not Found</li>
		                        </ol>
		                     </nav>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   	</section>
		   	<div class="blog pt-130 pb-100">
	            <div class="container">
	              	<div class="row">
	              		<div class="col-lg-12 text-center col-md-12 blog-item__column mb-30">
	              			<h2>Sorry!!. No any result found!!.</h2>
	              		</div>
	              	</div>
	            </div>
	        </div>
		</main>
	<?php
}




?>
<?php
get_footer();
