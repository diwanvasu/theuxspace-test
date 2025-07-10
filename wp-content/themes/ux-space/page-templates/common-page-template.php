<?php
/*
	Template Name: Common Page Template
*/
get_header();

    if( have_rows('acf_flx_csd_sections') ):
        while ( have_rows('acf_flx_csd_sections') ) : the_row();
            if( get_row_layout() == 'acf_flx_uxc_hs_hero_section' ):
                ?>
                    <div class="relative">
                        <div class="max-w-screen-2xl px-5 mx-auto pt-[120px]">
                            <div class="flex flex-col items-center justify-center text-center max-w-[1381px] w-full mx-auto">
                                <div class="bg-[#383838] mb-[46px] h-[50px] px-5 gap-3 sm:gap-4 text-sm sm:text-base w-max rounded-3xl flex items-center">
                                    <?php echo get_sub_field("acf_flx_uxc_hs_section_image_content"); ?>
                                </div>
                                <h1
                                    class="font-criteria text-[18px] sm:text-[24px] md:text-[38px] lg:text-[55px] xl:text-[64px] leading-[28px] sm:leading-[35px] md:leading-[50px] lg:leading-[70px] xl:leading-[89px] font-semibold text-grayDark dark:text-white mb-6 md:mb-[30px]"
                                >
                                    <?php echo get_sub_field("acf_flx_uxc_hs_section_slider"); ?>
                                </h1>
                                <div class="flex flex-col md:max-w-[880px] text-base md:text-xl xl:text-[28px] mb-[30px]">
                                    <p class="font-sans text-sm leading-[24px] sm:text-[20px] sm:leading-[35px] md:text-[28px] md:leading-[45px] text-content dark:text-white">
                                        <?php echo get_sub_field("acf_flx_uxc_hs_section_sub_title"); ?>
                                    </p>
                                </div>
                                <div>
                                    <a href="<?php echo get_sub_field("acf_flx_uxc_hs_button_url"); ?>">
                                        <button
                                            class="relative capitalize px-6 py-4 z-10 overflow-hidden hover:shadow-gradientShadow hover:scale-105 rounded-lg group font-bold text-sm leading-[24px] sm:text-base sm:leading-[26px] text-black bg-primary transition-all duration-300"
                                        >
                                            <span><?php echo get_sub_field("acf_flx_uxc_hs_button_title"); ?></span>
                                            <span class="absolute w-full h-10 bg-white transition-all duration-300 -left-2/3 group-hover:left-2/3 group-hover:bottom-full pointer-events-none blur-2xl -bottom-full rotate-45"></span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_pds_page_detail_section' ): 
                ?>
                    <div class="max-w-screen-2xl px-5 mx-auto">
                        <div class="flex flex-col gap-[60px] sm:gap-12">
                            <?php
                                if( have_rows('acf_flx_pds_detail_listing') ):
                                    while( have_rows('acf_flx_pds_detail_listing') ) : the_row();
                                        ?>      
                                            <div>
                                                <h2 class="md:pb-5 pb-4 uppercase dark:text-white text-grayDark lg:text-[54px] md:text-4xl text-lg font-semibold lg:leading-[1.37]">
                                                    <?php echo get_sub_field("acf_flx_pds_listing_title"); ?>
                                                </h2>
                                                <p class="text-sm md:text-lg md:leading-[1.88] leading-6 font-medium dark:text-white/80 text-content/80">
                                                    <?php echo get_sub_field("acf_flx_pds_listing_content"); ?>
                                                </p>                                               
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                            ?>                            
                        </div>
                    </div>
                <?php
            elseif( get_row_layout() == 'acf_flx_csd_fctas_footer_cta_section' ): 
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
            endif;
        endwhile;
    endif;

get_footer();
?>