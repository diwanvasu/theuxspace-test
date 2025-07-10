<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

    if( have_rows('acf_flx_bd_page_content') ):
        while ( have_rows('acf_flx_bd_page_content') ) : the_row();
            if( get_row_layout() == 'acf_flx_bd_ts_top_section' ):
                ?>
                    <div class="relative">
                        <div class="max-w-screen-2xl px-5 mx-auto pt-[120px]">
                            <div class="flex flex-col items-center justify-center text-center max-w-[1381px] w-full mx-auto">
                                <div class="bg-[#383838] mb-[46px] h-[50px] px-5 gap-3 sm:gap-4 text-sm sm:text-base w-max rounded-3xl flex items-center">
                                    <?php echo get_sub_field("acf_flx_bd_cs_section_image"); ?>
                                </div>
                                <h1
                                    class="font-criteria text-[18px] sm:text-[24px] md:text-[38px] lg:text-[55px] xl:text-[64px] leading-[28px] sm:leading-[35px] md:leading-[50px] lg:leading-[70px] xl:leading-[89px] font-semibold text-grayDark dark:text-white mb-6 md:mb-[42px]"
                                >
                                    <?php echo get_sub_field("acf_flx_bd_cs_section_title"); ?>
                                </h1>
                                <div class="flex flex-col md:max-w-[880px] text-base md:text-xl xl:text-[28px] mb-[30px]">
                                    <p class="font-sans text-sm leading-[24px] sm:text-[20px] sm:leading-[35px] md:text-[28px] md:leading-[45px] text-content dark:text-white">
                                        <?php echo get_sub_field("acf_flx_bd_cs_section_sub_title"); ?>
                                    </p>
                                </div>
                                <div>
                                    <a href="<?php echo get_sub_field("acf_flx_bd_cs_section_button_url"); ?>">
                                        <button
                                            class="relative capitalize px-6 py-4 z-10 overflow-hidden hover:shadow-gradientShadow hover:scale-105 rounded-lg group font-bold text-sm leading-[24px] sm:text-base sm:leading-[26px] text-black bg-primary transition-all duration-300"
                                        >
                                            <span><?php echo get_sub_field("acf_flx_bd_cs_section_button_title"); ?></span>
                                            <span class="absolute w-full h-10 bg-white transition-all duration-300 -left-2/3 group-hover:left-2/3 group-hover:bottom-full pointer-events-none blur-2xl -bottom-full rotate-45"></span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_bd_cs_content_section' ):
                $category_name = "";
                $category = get_the_category(get_the_ID()); // $post->ID
                if( $category[0]->cat_name )
                {
                    $category_name = $category[0]->cat_name;
                }
                ?>
                    <div class="max-w-screen-2xl px-5 mx-auto">
                        <div class="flex items-start flex-col-reverse lg:flex-row gap-10 w-full">
                            <!-- display in mobile screens only -->
                            <div class="w-full block lg:hidden">
                                <div class="border border-b-0 border-[#EDEFF1] dark:border-[#474747] bg-white dark:bg-primary p-5 sm:px-10 sm:pt-10 sm:pb-7 flex justify-center items-center">
                                    <div class="text-center">
                                        <div class="w-[118px] h-[118px] sm:w-[150px] sm:h-[150px] rounded-full overflow-hidden mx-auto">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/angelina.png" alt="img" class="w-full h-full object-cover" />
                                        </div>
                                        <h6 class="text-base sm:text-[22px] sm:leading-[33px] font-bold text-black mt-3 mb-1 sm:mt-4 sm:mb-3">Angelina Alexander</h6>
                                        <h6 class="text-sm sm:text-[22px] sm:leading-[33px] font-bold text-grayDark"><?php echo get_the_date("F, d Y"); ?></h6>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="border border-[#EDEFF1] dark:border-[#474747] bg-white dark:bg-primary py-5 px-5 sm:px-7 flex justify-center items-center flex-1">
                                        <div>
                                            <h6 class="font-semibold text-grayDark text-xs leading-[22px] sm:text-base sm:leading-8 uppercase mb-2">Read Time</h6>
                                            <h5 class="font-bold text-grayDark text-base sm:text-[22px] sm:leading-8">9 min</h5>
                                        </div>
                                    </div>
                                    <div class="border border-l-0 border-[#EDEFF1] dark:border-[#474747] bg-white dark:bg-primary py-5 px-5 sm:px-7 flex justify-center items-center flex-1">
                                        <div>
                                            <h6 class="font-semibold text-grayDark text-xs leading-[22px] sm:text-base sm:leading-8 uppercase mb-2">CATEGORY</h6>
                                            <h5 class="font-bold text-grayDark text-base sm:text-[22px] sm:leading-8"><?php echo $category_name; ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- left icons section -->
                            <div class="flex flex-row lg:flex-col gap-4 lg:translate-y-[94px]">
                                <a
                                    href="javascript:void(0)"
                                    class="w-[30px] h-[30px] sm:w-12 sm:h-12 rounded-full border border-grayLight dark:border-[#333333] border-opacity-80 flex justify-center items-center hover:bg-grayLight dark:hover:bg-[#333333]"
                                >
                                    <svg width="25" height="10" viewBox="0 0 25 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-content dark:stroke-[#FFDD00] w-4 h-4 sm:w-6 sm:h-6">
                                        <path
                                            d="M12.6862 5.59661V2.95626H11.3661V5.59661H12.6862ZM24.5678 0.315918H0.804688V8.23696H7.40555V9.55713H12.6862V8.23696H24.5678V0.315918ZM7.40555 1.63609V6.91678H6.08538V2.95626H4.76521V6.91678H2.12486V1.63609H7.40555ZM14.0064 1.63609V6.91678H11.3661V8.23696H8.72573V1.63609H14.0064ZM23.2476 1.63609V6.91678H21.9275V2.95626H20.6073V6.91678H19.2871V2.95626H17.9669V6.91678H15.3266V1.63609H23.2476Z"
                                            fill=""
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="w-[30px] h-[30px] sm:w-12 sm:h-12 rounded-full border border-grayLight dark:border-[#333333] border-opacity-80 flex justify-center items-center hover:bg-grayLight dark:hover:bg-[#333333]"
                                >
                                    <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-content dark:stroke-[#FFDD00] w-4 h-4 sm:w-6 sm:h-6">
                                        <path
                                            d="M7.14863 11.0477C7.14863 10.2485 6.73024 8.95375 5.74011 8.95375C4.74997 8.95375 4.33057 10.2485 4.33057 11.0477C4.33057 11.848 4.74997 13.1428 5.74011 13.1428C6.73024 13.1428 7.14863 11.848 7.14863 11.0477ZM18.3457 9.14365C18.3457 7.54421 17.8887 6.02093 16.861 4.76474C17.0509 4.193 17.1271 3.58369 17.1271 2.9368C17.1271 2.13657 16.9372 1.71818 16.594 0.956543C14.8808 0.956543 13.7759 1.29877 12.4811 2.32749C11.491 2.06041 10.4247 1.94667 9.39699 1.94667C8.2921 1.94667 7.14964 2.099 6.04578 2.32749C4.7124 1.29877 3.60853 0.956543 1.89434 0.956543C1.51352 1.71818 1.32362 2.13657 1.32362 2.9368C1.32362 3.58369 1.43736 4.193 1.62827 4.80231C0.561979 6.02093 0.0664062 7.54421 0.0664062 9.14365C0.0664062 10.3623 0.257324 11.6571 0.828045 12.7619C2.31375 15.6937 6.54033 15.58 9.39699 15.58C12.2526 15.58 16.2131 15.6562 17.6603 12.7619C18.1934 11.6195 18.3457 10.3623 18.3457 9.14365ZM15.8709 11.0477C15.8709 14.399 12.8244 14.8945 10.1586 14.8945H8.2921C5.62637 14.8945 2.57981 14.399 2.57981 11.0477C2.57981 9.37214 3.60853 7.92503 5.39788 7.92503C6.12194 7.92503 6.80742 8.03978 7.53046 8.15352C8.66788 8.30533 9.82042 8.30533 10.9578 8.15352C11.6819 8.03978 12.3674 7.92503 13.0904 7.92503C14.8808 7.92503 15.8709 9.37214 15.8709 11.0477ZM12.7482 8.95375C11.7581 8.95375 11.3387 10.2485 11.3387 11.0477C11.3387 11.848 11.7581 13.1428 12.7482 13.1428C13.6997 13.1428 14.1191 11.848 14.1191 11.0477C14.1191 10.2485 13.6997 8.95375 12.7482 8.95375Z"
                                            fill=""
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="w-[30px] h-[30px] sm:w-12 sm:h-12 rounded-full border border-grayLight dark:border-[#333333] border-opacity-80 flex justify-center items-center hover:bg-grayLight dark:hover:bg-[#333333]"
                                >
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-content dark:stroke-[#FFDD00] w-4 h-4 sm:w-6 sm:h-6">
                                        <path
                                            d="M4.09145 15.0348H0.841797V5.28585H4.09145V15.0348ZM2.46663 3.98599C2.03569 3.98599 1.62241 3.8148 1.3177 3.51008C1.01298 3.20537 0.841797 2.79209 0.841797 2.36116C0.841797 1.93023 1.01298 1.51694 1.3177 1.21223C1.62241 0.907515 2.03569 0.736328 2.46663 0.736328C2.89756 0.736328 3.31084 0.907515 3.61555 1.21223C3.92027 1.51694 4.09145 1.93023 4.09145 2.36116C4.09145 2.79209 3.92027 3.20537 3.61555 3.51008C3.31084 3.8148 2.89756 3.98599 2.46663 3.98599ZM15.7902 15.0348H12.6675V10.2903C12.6675 9.15903 12.6462 7.7038 11.0427 7.7038C9.41582 7.7038 9.166 8.93562 9.166 10.2091V15.0348H6.04226V5.27874H9.04109V6.61211H9.08374C9.5001 5.8454 10.5207 5.03705 12.0409 5.03705C15.2063 5.03705 15.7912 7.05793 15.7912 9.68406V15.0358L15.7902 15.0348Z"
                                            fill=""
                                        />
                                    </svg>
                                </a>
                                <a
                                    href="javascript:void(0)"
                                    class="w-[30px] h-[30px] sm:w-12 sm:h-12 rounded-full border border-grayLight dark:border-[#333333] border-opacity-80 flex justify-center items-center hover:bg-grayLight dark:hover:bg-[#333333]"
                                >
                                    <svg width="21" height="13" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-content dark:stroke-[#FFDD00] w-4 h-4 sm:w-6 sm:h-6">
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M20.4028 0.518066L14.1675 12.7043H8.31304L10.9219 7.65411H10.8041C8.65121 10.4478 5.44116 12.2869 0.865234 12.7043V7.72418C0.865234 7.72418 3.79196 7.55154 5.51326 5.74189H0.865234V0.518066H6.08906V4.81371H6.20584L8.34249 0.518066H12.2929V4.7873H12.4096L14.6245 0.518066H20.4028Z"
                                            fill=""
                                        />
                                    </svg>
                                </a>
                            </div>
                            <!-- content section -->
                            <div class="flex flex-col gap-10 mr-0 sm:mr-5 xl:mr-20">
                                <?php
                                    if( have_rows('acf_flx_bd_cs_content_detail') ):
                                        $cnt=1;
                                        while( have_rows('acf_flx_bd_cs_content_detail') ) : the_row();
                                            ?>
                                                <div class="flex flex-col gap-3 sm:gap-5" id="listing<?php echo $cnt; ?>">
                                                    <h2 class="text-[14px] leading-[24px] sm:text-[24px] md:text-[38px] lg:text-[54px] sm:leading-[35px] md:leading-[50px] lg:leading-[74px] font-semibold text-grayDark dark:text-white"><?php echo get_sub_field("acf_flx_bd_cs_section_title"); ?></h2>
                                                    <?php echo get_sub_field("acf_flx_bd_cs_section_content"); ?>
                                                </div>
                                            <?php
                                            $cnt++;
                                        endwhile;
                                    endif;
                                ?>                                
                            </div>
                            <!-- toc section -->
                            <div class="w-full lg:min-w-[300px] xl:min-w-[421px] flex flex-col gap-[30px] lg:sticky top-40">
                                <div class="ps-8 py-8 border border-[#EDEFF1] shadow-sm shadow-[#000/0.8] rounded-xl bg-white dark:bg-black flex flex-col gap-7">
                                    <h4 class="text-black dark:text-white font-extrabold text-xl leading-9 uppercase pr-8">Table Of Contains</h4>
                                    <div class="toc-scroll-wrapper overflow-y-auto max-h-[298px] pr-8">
                                        <ol class="flex flex-col gap-5 sm:gap-3 m-0 list-decimal ps-4">
                                            <?php
                                                if( have_rows('acf_flx_bd_cs_content_detail') ):
                                                    $cnt=1;
                                                    while( have_rows('acf_flx_bd_cs_content_detail') ) : the_row();
                                                        ?>
                                                            <li class="text-content dark:text-white <?php if( $cnt==1 ){ echo "marker:text-primary marker:font-bold"; }else{ echo "opacity-50"; } ?>">
                                                                <a href="#listing<?php echo $cnt; ?>" class="text-sm leading-6 sm:text-lg sm:leading-[34px] hover:text-primary <?php if( $cnt==1 ){ echo "font-bold text-primary"; } ?>"><?php echo get_sub_field("acf_flx_bd_cs_section_title"); ?></a>
                                                            </li>
                                                        <?php
                                                        $cnt++;
                                                    endwhile;
                                                endif;
                                            ?>
                                        </ol>
                                    </div>
                                </div>
                                <div class="hidden lg:block">
                                    <div class="border border-b-0 border-[#EDEFF1] dark:border-[#474747] bg-white dark:bg-primary px-10 pt-10 pb-7 flex justify-center items-center">
                                        <div class="text-center">
                                            <div class="w-[150px] h-[150px] rounded-full overflow-hidden mx-auto">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/angelina.png" alt="img" class="w-full h-full object-cover" />
                                            </div>
                                            <h6 class="text-[22px] leading-[33px] font-bold text-black mt-4 mb-3">Angelina Alexander</h6>
                                            <h6 class="text-[22px] leading-[33px] font-bold text-grayDark"><?php echo get_the_date("F, d Y"); ?></h6>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="border border-[#EDEFF1] dark:border-[#474747] bg-white dark:bg-primary py-5 px-7 flex justify-center items-center flex-1">
                                            <div>
                                                <h6 class="font-semibold text-grayDark text-base leading-8 uppercase mb-2">Read Time</h6>
                                                <h5 class="font-bold text-grayDark text-[22px] leading-8">9 min</h5>
                                            </div>
                                        </div>
                                        <div class="border border-l-0 border-[#EDEFF1] dark:border-[#474747] bg-white dark:bg-primary py-5 px-7 flex justify-center items-center flex-1">
                                            <div>
                                                <h6 class="font-semibold text-grayDark text-base leading-8 uppercase mb-2">CATEGORY</h6>
                                                <h5 class="font-bold text-grayDark text-[22px] leading-8"><?php echo $category_name; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-[url(./assets/images/toc-bg.png)] bg-cover rounded-xl overflow-hidden p-[10px] ps-[30px] hidden lg:block">
                                    <div class="flex items-center justify-between flex-wrap gap-2">
                                        <h4 class="text-white text-[22px] leading-[34px] font-bold">Subscribe to our blog</h4>
                                        <a href="javascript:void(0);" class="arrow-button-toc w-[59px] h-[59px] rounded-full overflow-hidden flex justify-center items-center stroke-white">
                                            <svg width="32" height="32" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-all duration-100">
                                                <path d="M20.8857 31.2528L32.3521 29.8361L30.9354 18.3697" stroke="" stroke-width="2.01886" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.3117 15.7636L32.1719 29.6958" stroke="" stroke-width="2.01886" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_bd_fs_form_section' ): 
                ?>
                    <form id="frmcontactform" method="post">
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
                                                    name="txtfullname"
                                                    required
                                                    id="txtfullname"
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
                                                    required
                                                    data-dashlane-rid="7871695ceadaa159"
                                                    data-dashlane-classification="other"
                                                    name="txtemail"
                                                    id="txtemail"
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
                                                        required
                                                        name="txtaboutproject"
                                                        id="txtaboutproject"
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
                                        <div class="g-recaptcha" data-sitekey="6LdTi10qAAAAACZH2COJySpOxo5SKzYF8K5emSqN"></div>
                                        <div class="flex flex-col md:flex-row gap-8 justify-between items-start w-full mt-auto">
                                            <div class="sm:text-lg text-black dark:text-white sm:leading-9 max-w-96">
                                                <span>By sending this form I confirm that I have read and accept the</span>

                                                <a class="text-base relative inline-flex font-bold text-[#72B5E0] dark:text-primary group transition-all duration-500" href="<?php echo site_url( 'privacy-policy' ); ?>">
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
                                            <button type="submit" 
                                                class="relative capitalize text-base px-6 py-3 z-10 overflow-hidden hover:shadow-gradientShadow hover:scale-105 rounded-lg group font-bold text-black bg-primary transition-all duration-300 w-full sm:w-auto" id="btnsubmit" 
                                            >
                                                <span class="btnsubmitspan">Send a message</span>
                                                <span class="absolute w-full h-10 bg-white transition-all duration-300 -left-2/3 group-hover:left-2/3 group-hover:bottom-full pointer-events-none blur-2xl -bottom-full rotate-45"></span>
                                            </button>
                                            <input type="hidden" name="action" value="act_store_contact_form_data">                                         
                                        </div>
                                        <div>
                                            <h4 id="successmessage" class="messagenot"></h4>
                                            <h4 id="errormessage" class="messagenot"></h4>
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
                    </form>
                <?php
            elseif( get_row_layout() == 'acf_flx_bd_fs_faq_section' ): 
                ?>
                    <div class="flex flex-col max-w-screen-2xl px-5 lg:px-28 w-full mx-auto gap-5 sm:gap-16">
                        <div class="flex flex-col items-center justify-center h-full gap-4 sm:gap-6 md:gap-8 text-center">
                            <h2 class="flex flex-wrap items-center text-center justify-center gap-2 text-lg sm:text-2xl md:text-4xl xl:text-[54px] font-semibold max-w-5xl dark:text-white" style="opacity: 1;">
                                <?php echo get_sub_field("acf_flx_bd_fs_faqs_section_title"); ?>
                            </h2>
                            <p class="text-sm leading-6 sm:text-base sm:leading-8 md:text-lg md:leading-9 lg:text-xl xl:text-2xl xl:leading-10 md:max-w-5xl text-grayDark dark:text-white">
                                <?php echo get_sub_field("acf_flx_bd_fs_faqs_section_sub_title"); ?>
                            </p>
                        </div>
                        <div class="flex flex-col gap-5 sm:gap-[60px]">
                            <div>
                                <div class="w-full">
                                    <?php
                                        if( have_rows('acf_flx_bd_fs_faqs_section_listing') ):
                                            while( have_rows('acf_flx_bd_fs_faqs_section_listing') ) : the_row();
                                                ?>
                                                    <div class="rounded-[4px] mb-5 bg-white dark:bg-[#282525] shadow-cardShadow">
                                                        <button
                                                            type="button"
                                                            class="accordion-button w-full flex items-center text-left gap-4 justify-between font-semibold text-grayDark dark:text-white text-sm md:text-xl md:leading-[1.5] leading-[1.7] md:p-6 p-5"
                                                        >
                                                            <?php echo get_sub_field("acf_flx_bd_fs_faqs_listing_title"); ?>
                                                            <em class="accordion-icon inline-block leading-[0] min-w-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="default-icon dark:text-primary"
                                                                >
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="M12 5v14"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="show-icon hidden dark:text-primary"
                                                                >
                                                                    <path d="M5 12h14"></path>
                                                                </svg>
                                                            </em>
                                                        </button>
                                                        <div class="accordion-content overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                                            <div class="md:p-6 p-4">
                                                                <p class="text-sm md:text-lg leading-[1.8] opacity-80 font-normal text-[#5A5A5A] dark:text-[#ddd]">
                                                                    <?php echo get_sub_field("acf_flx_bd_fs_faqs_listing_content"); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                            endwhile;
                                        endif;
                                    ?>                                    
                                </div>
                            </div>
                            <div
                                class="w-full h-[150px] px-4 hover:scale-105 hover:rotate-2 transition-all duration-500 hover:shadow-2xl rounded-lg overflow-hidden flex items-center justify-center text-white"
                                style="background: linear-gradient(137deg, #ffdd00, #8f00ff, #ffdd00, #8f00ff); background-size: 400% 100%; animation: moveGradient 40s linear infinite;"
                            >
                                <h2 class="text-lg sm:text-2xl lg:text-[32px] lg:leading-10 font-bold text-center">
                                    <?php echo get_sub_field("acf_flx_bd_fs_faqs_section_footer_content"); ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                <?php
            endif;
        endwhile;
    endif;
    
get_footer(); ?>
