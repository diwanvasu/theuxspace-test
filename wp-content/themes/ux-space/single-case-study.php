<?php
get_header();
    if( have_rows('acf_flx_csd_sections') ):
        while ( have_rows('acf_flx_csd_sections') ) : the_row();
            if( get_row_layout() == 'acf_flx_csd_hs_hero_section' ):
                $section_image = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_csd_hs_section_image"),"/assets/images/case-mockup.png");
                ?>
                    <div class="relative">
                        <div class="absolute top-0 left-0 -z-[1]">
                            <svg class="blur-[100px] md:w-[931px] md:h-[891px] w-[500px] h-[500px]" viewBox="0 0 931 891" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_b_327_151190)">
                                    <path
                                        d="M713.145 357.143C336.796 365.939 80.216 33.273 -8.90497 -148.048C-11.5004 -153.328 -19.1949 -152.757 -20.7469 -147.082C-62.181 4.44257 -100.695 357.851 48.4457 685.929C203.143 1026.23 565.291 865.755 727.027 742.98C883.679 610.598 1100.22 348.097 713.145 357.143Z"
                                        fill="url(#paint0_linear_327_151190)"
                                    />
                                </g>
                                <defs>
                                    <filter id="filter0_b_327_151190" x="-70.0981" y="-163.698" width="1012.7" height="1065.89" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6.00217" />
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_327_151190" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_327_151190" result="shape" />
                                    </filter>
                                    <linearGradient id="paint0_linear_327_151190" x1="799.249" y1="309.77" x2="544.709" y2="822.967" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FAFF00" />
                                        <stop offset="1" stop-color="#8F00FF" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="bg-gradient-2 backdrop-blur-md absolute top-0 left-0 z-[1] w-full h-full"></div>
                        <div class="max-w-screen-2xl px-5 mx-auto pt-[120px] relative z-[2]">
                            <div class="flex flex-col items-center justify-center text-center max-w-[1381px] w-full mx-auto">
                                <h1
                                    class="font-criteria text-[18px] sm:text-[24px] md:text-[38px] lg:text-[55px] xl:text-[64px] leading-[28px] sm:leading-[35px] md:leading-[50px] lg:leading-[70px] xl:leading-[89px] font-semibold text-white mb-6 md:mb-[30px]"
                                >
                                    <?php echo get_sub_field("acf_flx_csd_hs_section_title"); ?>
                                </h1>
                                <p class="md:max-w-[1028px] lg:mb-[120px] md:mb-20 mb-0 font-sans text-sm leading-[24px] sm:text-[20px] sm:leading-[35px] md:text-[28px] md:leading-[45px] text-white">
                                    <?php echo get_sub_field("acf_flx_csd_hs_section_content"); ?>
                                </p>
                                <div class="max-w-[1289px] w-full mx-auto relative sm:top-[70px] top-10 z-[1]">
                                    <img src="<?php echo $section_image["image_url"]; ?>" alt="<?php echo $section_image["image_alt"]; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_ps_project_section' ): 
                ?>
                    <div class="bg-[#F5F5F5] dark:bg-[#0D0A0A] backdrop-blur-sm xl:py-[133px] pt-[100px] pb-10 md:mt-[-150px] -mt-[100px]">
                        <div class="max-w-screen-2xl px-5 mx-auto w-full">
                            <div class="flex md:justify-between justify-center md:text-left text-center flex-wrap">
                                <?php
                                    if( have_rows('acf_flx_csd_ps_section_listing') ):
                                        while( have_rows('acf_flx_csd_ps_section_listing') ) : the_row();
                                            ?>
                                                <div class="md:w-auto w-1/2">
                                                    <h3 class="md:text-[32px] text-base text-grayDark dark:text-primary md:gap-[10px] gap-1 darK:text-primary font-bold font-criteria leading-[1.6]">
                                                        <?php echo get_sub_field("acf_flx_csd_ps_listing_title"); ?>
                                                    </h3>
                                                    <span class="text-content dark:text-white font-medium leading-[1.6] md:text-[22px] text-sm"><?php echo get_sub_field("acf_flx_csd_ps_listing_sub_title"); ?></span>
                                                </div>
                                            <?php
                                        endwhile;
                                    endif;
                                ?>                                
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_aus_about_us_section' ): 
                ?>  
                    <div class="max-w-screen-2xl px-5 mx-auto w-full">
                        <div class="flex lg:justify-between justify-center lg:flex-row flex-col items-center lg:gap-0 gap-4">
                            <div class="w-[220px] max-w-full lg:text-left text-center">
                                <h5 class="md:text-[54px] text-lg md:leading-[1.4] font-semibold text-grayDark dark:text-white">
                                    <?php echo get_sub_field("acf_flx_csd_aus_section_title"); ?>
                                </h5>
                            </div>
                            <div class="lg:w-[calc(100%-430px)] w-full lg:text-left text-center max-w-full">
                                <h6 class="md:text-[30px] text-sm font-bold leading-[1.6] text-grayDark dark:text-primary pb-3">
                                    <?php echo get_sub_field("acf_flx_csd_aus_section_sub_title"); ?>
                                </h6>
                                <div class="flex flex-col md:gap-[30px] gap-5">
                                    <?php echo get_sub_field("acf_flx_csd_aus_section_content"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_bis_background_image_section' ): 
                $section_image = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_csd_bis_background_image"),"finance-bg.png");
                ?>
                    <div class="bg-no-repeat bg-cover bg-[url(<?php echo $section_image["image_url"]; ?>)] lg:min-h-[446px] min-h-[130px]"></div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_cs_challenges_section' ): 
                ?>
                    <div class="max-w-screen-2xl px-5 mx-auto w-full">
                        <div class="flex flex-col md:gap-12 gap-[60px]">
                            <?php
                                if( have_rows('acf_flx_csd_cs_section_listing') ):
                                    while( have_rows('acf_flx_csd_cs_section_listing') ) : the_row();
                                        ?>
                                            <div class="md:text-left text-center">
                                                <h6 class="md:text-[30px] text-sm leading-[1.63] font-bold text-grayDark dark:text-primary pb-3">
                                                    <?php echo get_sub_field("acf_flx_csd_cs_section_title"); ?>
                                                </h6>
                                                <p class="text-content dark:text-white md:text-lg text-sm font-medium md:pb-4 pb-[30px]">
                                                    <?php echo get_sub_field("acf_flx_csd_cs_section_content"); ?>
                                                </p>
                                                <ul class="flex flex-col gap-5 w-[1036px] max-w-full">
                                                    <?php
                                                        if( have_rows('acf_flx_csd_cs_content_listing') ):
                                                            while( have_rows('acf_flx_csd_cs_content_listing') ) : the_row();
                                                                ?>
                                                                    <li class="flex items-start md:gap-2 gap-0 md:bg-transparent bg-grayDark md:rounded-none rounded-[4px] md:p-0 p-5 text-left">
                                                                        <em class="md:inline-flex leading-[0] mt-[7px] hidden">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                                                                                <path
                                                                                    d="M15.6196 5.75555L10.2444 0.38031C10.1551 0.290982 10.0207 0.264267 9.9039 0.312572C9.78718 0.360938 9.71103 0.474857 9.71103 0.601241V2.49901L7.5923 0.38031C7.0852 -0.126791 6.25993 -0.12676 5.75283 0.380341L0.377623 5.75555C0.134102 5.99907 0 6.32573 0 6.6753C0 7.02486 0.134102 7.35156 0.377623 7.59508L5.75286 12.9703C6.00641 13.2239 6.33951 13.3507 6.67261 13.3507C7.00571 13.3507 7.33878 13.2239 7.59236 12.9703L9.71106 10.8516V12.7494C9.71106 12.8757 9.78721 12.9897 9.90394 13.038C9.94259 13.054 9.9832 13.0618 10.0234 13.0618C10.1048 13.0618 10.1847 13.0301 10.2444 12.9703L15.6196 7.59505C16.1268 7.08789 16.1268 6.26271 15.6196 5.75555ZM7.15047 12.5284C6.89148 12.7875 6.45377 12.7874 6.19473 12.5284L0.819517 7.15319C0.694007 7.02771 0.624893 6.85799 0.624893 6.6753C0.624893 6.49261 0.694007 6.32292 0.819517 6.19741L6.19473 0.822204C6.32427 0.692663 6.49842 0.627924 6.67261 0.627924C6.84677 0.627924 7.02096 0.692663 7.15047 0.822172L12.5257 6.19741C12.6512 6.32292 12.7203 6.49261 12.7203 6.6753C12.7203 6.85799 12.6512 7.02768 12.5257 7.15319L7.15047 12.5284ZM15.1778 7.15319L10.3359 11.995V10.2267L12.9676 7.59505C13.2111 7.35153 13.3452 7.02486 13.3452 6.67527C13.3452 6.32567 13.2111 5.99901 12.9676 5.75549L10.3359 3.12384V1.35555L15.1778 6.19738C15.4368 6.45643 15.4368 6.89417 15.1778 7.15319Z"
                                                                                    fill="#E6C700"
                                                                                />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.39062 6.6748L6.67083 3.3946L9.95104 6.67481L6.67083 9.95501L3.39062 6.6748Z" class="fill-black dark:fill-white" />
                                                                            </svg>
                                                                        </em>
                                                                        <p class="md:text-content/50 md:dark:text-white/50 text-white md:text-lg text-xs leading-5 font-medium">
                                                                            <?php echo get_sub_field("acf_flx_csd_cs_listing_content"); ?>
                                                                        </p>
                                                                    </li>
                                                                <?php
                                                            endwhile;
                                                        endif;
                                                    ?>                                                    
                                                </ul>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                            ?>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_fis_fullscreen_image_section' ): 
                $section_image = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_csd_fis_section_image"),"technology-bg.png");
                ?>
                    <div class="lg:min-h-[694px] md:min-h-[314px] min-h-[140px] bg-no-repeat bg-cover bg-[url(<?php echo $section_image["image_url"]; ?>)]"></div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_ops_our_process_section' ): 
                ?>
                    <div class="max-w-screen-2xl px-5 mx-auto w-full">
                        <div class="flex flex-col items-center justify-center gap-[22px] text-center lg:pb-[116px] md:pb-9 pb-5">
                            <h2 class="text-lg sm:text-2xl md:text-4xl xl:text-[54px] xl:leading-[1.48] font-semibold text-grayDark dark:text-white">
                                <?php echo get_sub_field("acf_flx_csd_ops_section_title"); ?>
                            </h2>
                            <p class="md:text-2xl md:leading-[1.58] text-xs font-normal w-[874px] max-w-full text-grayDark dark:text-white">
                                <?php echo get_sub_field("acf_flx_csd_ops_section_sub_title"); ?>
                            </p>
                        </div>
                        <div class="flex justify-center md:gap-[50px] gap-5 flex-wrap">
                            <?php
                                if( have_rows('acf_flx_csd_ops_section_listing') ):
                                    $cnt=1;
                                    while( have_rows('acf_flx_csd_ops_section_listing') ) : the_row();
                                        ?>
                                            <div class="text-center flex flex-col gap-3">
                                                <span class="block md:text-lg md:leading-[2.07] text-xs font-semibold text-grayColor dark:text-white"><?php echo get_sub_field("acf_flx_csd_ops_listing_title"); ?></span>
                                                <div class="md:p-[14px] p-2 group rounded-full flex justify-center items-center cursor-pointer bg-gradient-<?php if( $cnt == 5 ){ echo "5"; }else{ echo "4"; } ?> relative transition-all duration-500 md:w-[448px] w-auto max-w-full md:min-h-[60px] min-h-[40px]">
                                                    <div class="relative min-w-[29px] min-h-[29px]">
                                                        <svg
                                                            width="29"
                                                            height="33"
                                                            viewBox="0 0 29 33"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            class="group-hover:opacity-0 group-hover:invisible transition-all duration-500 absolute bottom-0 right-0 top-1/2 left-1/2 max-w-full max-h-full -translate-x-1/2 -translate-y-1/2"
                                                        >
                                                            <circle cx="14.4459" cy="17.6243" r="14.4459" fill="white" />
                                                            <path d="M13.4893 24.0307V11.4385H15.4586V24.0307H13.4893ZM8.16396 18.7331V16.7638H20.7285V18.7331H8.16396Z" fill="#010101" />
                                                        </svg>
                                                        <svg
                                                            class="group-hover:opacity-100 group-hover:visible opacity-0 invisible transition-all duration-500 absolute bottom-0 right-0 top-1/2 left-1/2 max-w-full max-h-full -translate-x-1/2 -translate-y-1/2"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="29"
                                                            height="33"
                                                            viewBox="0 0 29 29"
                                                            fill="none"
                                                        >
                                                            <circle cx="14.4459" cy="14.4461" r="14.4459" fill="white" />
                                                            <rect x="8" y="13" width="13" height="2.6" rx="1.3" fill="#010101" />
                                                        </svg>
                                                    </div>
                                                    <div
                                                        class="z-10 mt-6 group-hover:opacity-100 group-hover:visible transition-all duration-500 opacity-0 invisible md:w-[410px] w-[280px] max-w-full absolute bottom-auto top-full left-1/2 -translate-x-1/2 dark:bg-white bg-grayDark rounded-2xl shadow-tooltip md:px-4 md:pt-4 md:pb-[45px] p-[10px]"
                                                    >
                                                        <svg class="absolute -top-4 left-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="36" height="25" viewBox="0 0 36 25" fill="none">
                                                            <path
                                                                d="M14.9142 1.74135C16.5141 -0.198461 19.4859 -0.19846 21.0858 1.74135L34.2523 17.7049C36.4041 20.3138 34.5484 24.25 31.1665 24.25H4.83352C1.45165 24.25 -0.40413 20.3138 1.7477 17.7049L14.9142 1.74135Z"
                                                                class="dark:fill-white fill-grayDark"
                                                                fill="white"
                                                            />
                                                        </svg>
                                                        <h6 class="md:text-lg text-xs md:pb-3 px-0 font-semibold dark:text-black text-white md:leading-[2.07]">
                                                            <?php echo get_sub_field("acf_flx_csd_ops_listing_sub_title"); ?>
                                                        </h6>
                                                        <p class="md:text-base font-normal md:leading-[1.81] text-xs opacity-70 dark:text-black text-white">
                                                            <?php echo get_sub_field("acf_flx_csd_ops_listing_content"); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        $cnt++;
                                    endwhile;
                                endif;
                            ?>                            
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_iwcs_impact_we_create_section' ): 
                ?>
                    <div class="bg-[#fafafa] dark:bg-[#0D0A0A]">
                        <div class="bg-[#FAFAFA] dark:bg-[#0D0A0A]">
                            <div class="max-w-screen-2xl mx-auto px-4">
                                <div class="flex flex-col gap-5 items-center justify-center text-center">
                                    <h2 class="text-lg sm:text-2xl md:text-4xl xl:text-[54px] font-criteria font-semibold dark:text-white text-grayDark leading-none text-center">
                                        <?php echo get_sub_field("acf_flx_csd_iwcs_section_title"); ?>
                                    </h2>
                                    <p class="text-sm md:text-xl xl:text-2xl xl:leading-10 max-w-5xl text-grayDark dark:text-white">
                                        <?php echo get_sub_field("acf_flx_csd_iwcs_section_detail"); ?>
                                    </p>
                                    <div
                                        class="mt-[20px] lg:mt-[60px] text-left flex flex-col gap-5 lg:gap-0 lg:grid lg:grid-cols-3 lg:[&>*]:border-[#010101]/20 dark:[&>*]:border-primary/20 lg:[&>*:first-child]:border-r lg:[&>*:nth-child(2)>div]:ml-auto lg:[&>*:last-child>div]:ml-auto"
                                    >
                                        <?php
                                            if( have_rows('acf_flx_csd_iwcs_section_listing') ):
                                                while( have_rows('acf_flx_csd_iwcs_section_listing') ) : the_row();
                                                    ?>
                                                        <div class="group pb-5 lg:pb-0 border-b lg:border-b-0 lg:border-r border-0">
                                                            <div class="flex flex-col items-center justify-center text-center lg:items-start lg:justify-start lg:text-left gap-1 lg:gap-2 lg:max-w-[80%]">
                                                                <h4 class="lg:text-6xl text-2xl dark:text-primary font-bold lg:leading-[74px] relative overflow-hidden">
                                                                    <span class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all grid duration-500 pointer-events-none"><?php echo get_sub_field("acf_flx_csd_iwcs_listing_value"); ?></span>
                                                                    <span class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full grid group-hover:translate-y-full transition-all duration-500 pointer-events-none">
                                                                        <?php echo get_sub_field("acf_flx_csd_iwcs_listing_value"); ?>
                                                                    </span>
                                                                </h4>
                                                                <h5 class="text-black/60 dark:text-white lg:text-2xl font-bold relative overflow-hidden">
                                                                    <span class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all grid duration-500 pointer-events-none"><?php echo get_sub_field("acf_flx_csd_iwcs_listing_title"); ?></span>
                                                                    <span class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full grid group-hover:translate-y-full transition-all duration-500 pointer-events-none">
                                                                        <?php echo get_sub_field("acf_flx_csd_iwcs_listing_sub_title"); ?>
                                                                    </span>
                                                                </h5>
                                                                <p class="text-grayDark leading-[24px] dark:text-white text-sm lg:text-lg lg:mt-3 font-medium lg:leading-8">
                                                                    <?php echo get_sub_field("acf_flx_csd_iwcs_listing_content"); ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            endif;
                                        ?>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_tsis_title_subtitle_and_image_section' ): 
                $section_image = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_csd_tsis_section_image"),"visual-bg.png");
                ?>
                    <div class="max-w-screen-2xl mx-auto px-5 w-full">
                        <div class="flex flex-col justify-center text-center gap-5 pb-8">
                            <h2 class="text-lg sm:text-2xl md:text-4xl xl:text-[54px] font-criteria font-semibold dark:text-white text-grayDark leading-none text-center">
                                <?php echo get_sub_field("acf_flx_csd_tsis_section_title"); ?>
                            </h2>
                            <p class="text-sm md:text-xl mx-auto xl:text-2xl xl:leading-10 max-w-5xl text-grayDark dark:text-white">
                                <?php echo get_sub_field("acf_flx_csd_tsis_section_sub_title"); ?>
                            </p>
                        </div>
                        <div class="text-center">
                            <img src="<?php echo $section_image["image_url"]; ?>" alt="visual" />
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_tsis_design_style_guide_section' ): 
                ?>
                    <div class="max-w-screen-2xl mx-auto px-5 w-full">
                        <div class="flex flex-col justify-center text-center gap-5 pb-8">
                            <h2 class="text-lg sm:text-2xl md:text-4xl xl:text-[54px] font-criteria font-semibold dark:text-white text-grayDark leading-none text-center">
                                <?php echo get_sub_field("acf_flx_csd_tsis_section_title"); ?>
                            </h2>
                            <p class="text-sm md:text-xl mx-auto xl:text-2xl xl:leading-10 max-w-5xl text-grayDark dark:text-white">
                                <?php echo get_sub_field("acf_flx_csd_tsis_section_sub_title"); ?>
                            </p>
                        </div>
                        <div class="swiper style-slider md:[mask:linear-gradient(90deg,transparent,white_20%,white_80%,transparent)]">
                            <div class="swiper-wrapper">
                                <?php
                                    if( have_rows('acf_flx_csd_tsis_section_listing') ):
                                        while( have_rows('acf_flx_csd_tsis_section_listing') ) : the_row();
                                            $listing_image = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_csd_tsis_listing_image"),"font-palate.png");
                                            ?>
                                                <div class="swiper-slide">
                                                    <div>
                                                        <div class="sm:p-10 p-4">
                                                            <div class="md:w-[655px] min-h-[215px] sm:w-[400px] w-full max-w-full rounded-2xl">
                                                                <img class="max-h-[215px]" src="<?php echo $listing_image["image_url"]; ?>" alt="font" />
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col gap-4">
                                                            <h5 class="md:text-[32px] font-bold dark:text-white text-grayDark md:leading-10 text-xl">
                                                                <?php echo get_sub_field("acf_flx_csd_tsis_listing_title"); ?>
                                                            </h5>
                                                            <p class="md:text-2xl text-xs font-medium opacity-70 dark:text-white text-grayDark">
                                                                <?php echo get_sub_field("acf_flx_csd_tsis_listing_details"); ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                        endwhile;
                                    endif;
                                ?>
                                <div class="swiper-scrollbar dark:bg-white bg-grayDark"></div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_ts_testimonial_section' ): 
                ?>
                    <div class="max-w-screen-2xl mx-auto px-4 w-full">
                        <div class="w-[885px] max-w-full mx-auto text-center md:pb-[60px] pb-10 flex flex-col items-center justify-center gap-4 sm:gap-6 md:gap-8">
                            <h2 class="dark:text-white text-grayDark lg:pb-0 pb-4 text-lg sm:text-2xl md:text-4xl xl:text-[54px] font-semibold">
                                <?php echo get_field("acf_opt_fbs_ts_section_title", "option"); ?>
                            </h2>
                            <p class="text-sm leading-6 sm:text-base sm:leading-8 md:text-lg md:leading-9 lg:text-xl xl:text-2xl xl:leading-10 md:max-w-5xl text-grayDark dark:text-white">
                                <?php echo get_field("acf_opt_fbs_ts_section_sub_title", "option"); ?>
                            </p>
                        </div>
                        <div class="swiper testimonial-slider sm:!px-0 !px-[15px] md:[mask:linear-gradient(90deg,transparent,white_20%,white_80%,transparent)]">
                            <div class="swiper-wrapper md:pb-[60px] pb-5">
                                <?php
                                  if( have_rows('acf_opt_fbs_ts_section_listing', "option") ):
                                    while( have_rows('acf_opt_fbs_ts_section_listing', "option") ) : the_row();
                                        ?>
                                            <div class="swiper-slide sm:!w-[470px] !w-full max-w-full py-[30px]">
                                                <div
                                                   class="sm:w-[470px] w-full max-w-full shadow-sliderCard rounded-[40px] bg-white dark:bg-[#232020] py-8 px-7 transition-all duration-500 border border-solid border-transparent hover:border-primary translate-y-0 hover:-translate-y-6"
                                                   >
                                                   <div class="flex justify-between items-center pb-6">
                                                      <div class="flex items-center">
                                                         <em class="md:w-10 md:h-10 md:min-w-10 md:min-h-10 w-[30px] h-[30px] min-w-[30px] min-h-[30px] rounded-full md:mr-3 mr-2">
                                                         <img
                                                            src="<?php echo get_sub_field("acf_opt_fbs_ts_listing_image"); ?>"
                                                            alt="client"
                                                            class="md:w-10 md:h-10 w-[30px] h-[30px] object-cover object-center rounded-full shadow-clientImage"
                                                            />
                                                         </em>
                                                         <h6 class="capitalize md:text-lg text-xs md:leading-[1.61] leading-5 font-semibold text-grayDark dark:text-primary">
                                                            <?php echo get_sub_field("acf_opt_fbs_ts_listing_title"); ?>
                                                         </h6>
                                                      </div>
                                                      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ic-rating.svg" alt="rating" /></a>
                                                   </div>
                                                   <div>
                                                      <p class="md:pb-7 pb-3 md:text-base text-xs font-medium md:leading-7 leading-[1.83] text-content dark:text-white tracking-[0.045px]">
                                                         <?php echo get_sub_field("acf_opt_fbs_ts_llisting_sub_title"); ?>
                                                      </p>
                                                      <p class="md:text-base text-xs font-medium md:leading-7 leading-[1.83] text-content dark:text-white tracking-[0.045px]">
                                                         <?php echo get_sub_field("acf_opt_fbs_ts_listing_content"); ?>
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>
                                        <?php
                                    endwhile;
                                  endif;
                                ?>                                  
                            </div>
                            <div class="flex justify-center items-center">
                                <button
                                    class="hidden prev-btn md:inline-flex items-center justify-center rounded-full -left-12 top-1/2 relative transition-all duration-500 bg-primary dark:text-grayDark w-12 h-12 translate-y-0 translate-x-full dark:hover:bg-white hover:bg-grayDark hover:text-white dark:hover:text-black"
                                    disabled=""
                                >
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
                                        class="lucide lucide-chevron-left h-6 w-6"
                                    >
                                        <path d="m15 18-6-6 6-6"></path>
                                    </svg>
                                    <span class="sr-only">Previous slide</span>
                                </button>
                                <button
                                    class="hidden next-btn ml-6 md:inline-flex items-center justify-center disabled:pointer-events-none disabled:opacity-50 rounded-full -left-12 top-1/2 relative transition-all duration-500 bg-primary dark:text-grayDark w-12 h-12 translate-y-0 translate-x-full dark:hover:bg-white hover:bg-grayDark hover:text-white dark:hover:text-black"
                                >
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
                                        class="lucide lucide-chevron-right h-6 w-6"
                                    >
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>
                                    <span class="sr-only">Next slide</span>
                                </button>
                                <div class="swiper-pagination slider-pagination md:hidden block"></div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_ctas_cta_section' ): 
                $section_image = WPCustomClass::GetAcfImage(get_sub_field("acf_flx_csd_ctas_section_image"),"cta-img.png");
                ?>
                    <div class="max-w-screen-2xl mx-auto px-5 w-full">
                        <div class="lg:h-[480px] py-[30px] justify-center text-center lg:text-left lg:justify-start max-w-screen-2xl mx-auto bg-gray-400 rounded-[24px] lg:rounded-[34px] overflow-hidden w-full px-[60px] flex items-center relative">
                            <div class="absolute top-0 left-0 z-0 w-full h-full">
                                <img src="<?php echo $section_image["image_url"]; ?>" class="w-full h-full object-cover" alt="<?php echo $section_image["image_alt"]; ?>" />
                            </div>
                            <div class="absolute top-0 left-0 z-10 w-full h-full bg-black opacity-30"></div>
                            <div class="flex flex-col gap-4 relative z-10 text-white max-w-screen-md items-center lg:items-start lg:gap-[22px]">
                                <h2 class="text-lg lg:text-[40px] font-bold font-criteria lg:leading-[1.6]"><?php echo get_sub_field("acf_flx_csd_ctas_section_title"); ?></h2>
                                <p class="text-sm lg:text-lg leading-[1.88]">
                                    <?php echo get_sub_field("acf_flx_csd_ctas_section_content"); ?>
                                </p>
                                <a href="<?php echo get_sub_field("acf_flx_csd_ctas_section_button_url"); ?>">
                                    <button
                                        class="relative capitalize px-4 lg:px-6 py-2 lg:py-4 z-10 overflow-hidden hover:shadow-gradientShadow hover:scale-105 rounded-xl lg:rounded-lg group font-bold text-xs lg:text-sm leading-[24px] sm:text-base sm:leading-[26px] text-black bg-primary transition-all duration-300"
                                    >
                                        <span><?php echo get_sub_field("acf_flx_csd_ctas_section_button_title"); ?></span><span class="absolute w-full h-10 bg-white transition-all duration-300 -left-2/3 group-hover:left-2/3 group-hover:bottom-full pointer-events-none blur-2xl -bottom-full rotate-45"></span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_ncss_next_case_studies_section' ): 
                ?>
                    <div class="max-w-screen-2xl px-5 mx-auto h-full">
                        <div class="flex flex-col items-center justify-center gap-4 sm:gap-6 md:gap-8 text-center">
                            <h2 class="text-lg sm:text-2xl md:text-4xl xl:text-[54px] xl:leading-[1.37] font-semibold">
                                <?php echo get_sub_field("acf_flx_csd_ncss_section_title"); ?>
                            </h2>
                            <p class="text-sm leading-6 sm:text-base sm:leading-8 md:text-lg md:leading-9 lg:text-xl xl:text-2xl xl:leading-10 md:max-w-5xl text-grayDark dark:text-white">
                                <?php echo get_sub_field("acf_flx_csd_ncss_section_sub_title"); ?>
                            </p>
                            <div class="flex flex-col md:flex-row gap-8 items-center text-left mt-4 md:mt-0">
                                <?php
                                    $post_arr = array(
                                        "post_type"         =>  "case-study",
                                        "post_status"       =>  "publish",
                                        "posts_per_page"    =>  3,
                                        "post__not_in"      =>  array(get_the_ID())
                                    );

                                    $post_result = new WP_Query($post_arr);

                                    if( $post_result->have_posts() ): 
                                        while( $post_result->have_posts() ): $post_result->the_post();
                                            $post_image = get_stylesheet_directory_uri()."/assets/images/dashboard-img-1.png";
                                            if( has_post_thumbnail(get_the_ID()) )
                                            {
                                                $post_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                                            }
                                            $category_detail = get_the_category(get_the_ID());
                                            ?>
                                                <div class="flex-1">
                                                    <div class="md:h-96 xl:h-[870px] rounded-2xl w-full overflow-hidden relative">
                                                        <img src="<?php echo $post_image; ?>" alt="img" loading="lazy" class="w-full h-full object-cover" />
                                                        <em class="absolute bottom-8 right-8 cursor-pointer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/action-button.svg" alt="add" /></em>
                                                    </div>
                                                    <p class="mt-6 mb-1 text-lg font-semibold dark:text-primary">
                                                        Case Study
                                                    </p>
                                                    <h4 class="text-2xl font-semibold"><?php echo get_the_title(); ?></h4>
                                                </div>                                                
                                            <?php
                                        endwhile;   
                                    endif;
                                    wp_reset_postdata();
                                ?>                                
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_fctas_footer_cta_section' ): 
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
get_footer();
?>