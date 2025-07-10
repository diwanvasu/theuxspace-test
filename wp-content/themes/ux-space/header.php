<?php
/**
* Header file for the Twenty Twenty WordPress default theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Twenty
* @since Twenty Twenty 1.0
*/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Figtree:300,regular,500,600,700,800,900,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
        integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
      <?php wp_head(); ?>
    </head>
    <body <?php body_class("dark:bg-black dark:text-white overflow-x-hidden"); ?> id="bodysection" data-siteurl="<?php echo admin_url('admin-ajax.php'); ?>">
      <?php
      wp_body_open();
      //$headerLogo = WPCustomClass::GetAcfImage(get_field("acf_opt_header_logo", "option"),"logo.png");
      ?>
      <!-- Overlay -->
        <div class="menu-overlay pointer-events-none fixed inset-0 transition-all duration-500 bg-black/40 z-[60] opacity-0 invisible"></div>
        <!-- Overlay Toggle -->
        <!-- Overlay -->
        <div class="fixed opacity-0 pointer-events-none w-full h-full top-0 left-0 z-20 bg-black/40 overlay--el transition-all invisible duration-700"></div>
        <!-- Overlay Toggle -->
        <div class="fixed overlay--toggle origin-bottom pointer-events-none w-full h-full top-0 left-0 z-50 bg-primary scale-y-0 transition-transform duration-700"></div>
        <!-- Overlay Toggle -->
        <div
            class="fixed overlay--toggle origin-bottom pointer-events-none w-full h-full top-0 left-0 z-50 scale-100 text-4xl font-bold grid place-content-center font-criteria transition-all text-black translate-y-full overlay--toggle-2 duration-700"
        ></div>

        <!-- Navbar -->
        <div class="sticky top-0 left-0 z-30">
            <nav class="w-full bg-white dark:bg-[#0F0D0D] backdrop-blur-md z-50">
                <div class="flex justify-between relative items-center py-[30px] max-w-screen-2xl px-5 mx-auto">
                    <a href="<?php echo home_url(); ?>">
                        <svg width="153" height="38" viewBox="0 0 153 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_b_1025_39196)">
                                <g filter="url(#filter1_b_1025_39196)">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M9.92738 17.4191C9.92738 17.5307 10.0356 17.6128 10.1442 17.5872C10.1483 17.5863 10.1523 17.5853 10.1564 17.5844C10.1564 17.5844 10.1564 17.5844 10.1564 17.5844C10.1564 17.5844 10.1564 17.5844 10.1564 17.5844C10.3324 17.543 10.5078 17.5018 10.6548 17.4087C11.7556 16.7109 12.8532 16.0086 13.9508 15.3064C15.6919 14.1925 17.4328 13.0787 19.1854 11.9832C19.6866 11.6694 19.8223 11.3069 19.8153 10.7278C19.7875 9.00147 19.7945 7.27145 19.8119 5.54517C19.8397 2.21591 21.9349 0.00761115 25.0499 0.00387461C25.6474 0.00387461 26.2449 0.00528915 26.8424 0.00670394C28.1873 0.00988798 29.5327 0.0130732 30.8797 0.000138069C31.6489 -0.00733502 31.896 0.287852 31.5479 1.05758C31.5343 1.0868 31.5257 1.11781 31.5172 1.14842L31.5172 1.14845C31.5083 1.18045 31.4995 1.21203 31.4853 1.24067C29.9017 4.47278 29.5223 7.9104 29.6685 11.5274C29.7764 14.2476 29.7973 17.0388 29.3518 19.6992C28.3807 25.4722 25.1509 29.4478 20.0868 31.6823C19.9842 31.7282 19.8843 31.7783 19.7724 31.8344L19.7722 31.8345C19.6207 31.9104 19.4607 31.9691 19.2958 32.0081C15.234 32.9694 11.5648 32.3673 10.2163 31.9364C7.38942 30.9161 5.05342 29.1462 3.13248 26.586C3.11928 26.5684 3.10686 26.5516 3.09402 26.5338C2.9456 26.3275 1.94423 24.9093 1.34109 23.3797C0.00470663 19.9905 -0.0197661 17.2032 0.00459713 14.0084C0.0263868 11.0375 0.0212302 8.06843 0.0160723 5.09863C0.0138153 3.79915 0.0115582 2.49953 0.0115582 1.19957C0.0115582 0.57635 0.516775 0.0711324 1.13999 0.0711324H4.96947C7.70764 0.0711324 9.92738 2.29087 9.92738 5.02905V17.4191ZM9.93323 17.6494C9.93131 17.648 9.92886 17.6502 9.93002 17.6522L9.93132 17.6545C8.88625 18.5221 8.54254 20.0283 9.38105 21.0968C12.6572 25.2716 17.9701 25.7198 22.3625 23.5756C23.0207 23.2543 23.264 22.4615 22.9695 21.7908C22.7624 21.319 22.2276 21.0841 21.7353 21.2361C15.3194 23.2166 12.5698 22.3264 9.93132 17.6545L9.93336 17.6529C9.93447 17.6519 9.93441 17.6502 9.93323 17.6494ZM26.4853 4.2743C27.1912 4.26683 27.5566 3.78568 27.6163 3.0917C27.6163 3.09069 27.6156 3.08981 27.6145 3.08981C27.6136 3.08981 27.6129 3.08909 27.6128 3.08819C27.5567 2.26718 27.1357 1.81566 26.454 1.82686C25.7787 1.83807 25.3298 2.28272 25.3472 3.0674C25.3646 3.83712 25.7857 4.28177 26.4853 4.2743Z"
                                        class="fill-primary"
                                    />
                                </g>
                                <g filter="url(#filter2_b_1025_39196)">
                                    <rect y="35.0522" width="31.7996" height="2.16816" rx="1.08408" class="fill-primary" />
                                </g>
                            </g>
                            <path
                                d="M57.5045 12.3676V20.8538C57.5045 26.4144 54.981 28.335 50.1349 28.335C45.2889 28.335 42.7654 26.4144 42.7654 20.8538V12.3676H47.2318V20.8538C47.2318 23.7123 48.2814 24.2036 50.1349 24.2036C51.9661 24.2036 52.9264 23.7123 52.9264 20.8538V12.3676H57.5045ZM69.3904 28L66.6212 24.0696L63.852 28H58.403L63.8967 20.1838L58.403 12.3676H63.852L66.6212 16.298L69.3904 12.3676H74.8394L69.3457 20.1838L74.8394 28H69.3904ZM81.3178 17.2806C81.3178 14.3105 83.3723 12.0326 87.2804 12.0326C89.201 12.0326 90.9875 12.2113 92.9081 12.8812V17.0126C90.9652 16.3873 89.4466 16.164 87.4367 16.164C86.4095 16.164 85.4492 16.2534 85.4492 17.0126C85.4492 17.7943 86.3871 17.8166 87.8387 17.9729C91.0545 18.3302 93.846 19.4022 93.8237 23.1093C93.8014 26.4368 91.6798 28.335 87.3921 28.335C85.4939 28.335 83.6403 28.1563 81.5411 27.4864V23.3549C83.7296 23.9802 84.9132 24.2036 86.9454 24.2036C88.9553 24.2036 89.6923 23.7792 89.6923 23.2879C89.6923 22.7296 89.1563 22.5287 87.3697 22.3723C82.5014 21.9257 81.3178 19.8935 81.3178 17.2806ZM95.6347 28V12.3676H102.736C108.029 12.3676 109.481 13.8862 109.481 18.1739C109.481 22.4617 108.029 23.9802 102.736 23.9802H100.101V28H95.6347ZM100.101 19.9605H102.2C103.92 19.9605 104.902 19.6255 104.902 18.1739C104.902 16.7223 104.099 16.3873 102.2 16.3873H100.101V19.9605ZM108.552 28L114.917 12.3676H118.825L125.19 28H120.589L119.83 26.2358H113.912L113.153 28H108.552ZM115.453 22.6626H118.289L116.882 19.3798L115.453 22.6626ZM133.856 24.2036C135.42 24.2036 137.072 23.9802 139.015 23.3549V27.4864C137.094 28.1563 135.442 28.335 133.521 28.335C128.184 28.335 125.415 25.8785 125.415 20.1838C125.415 14.4891 128.184 12.0326 133.276 12.0326C135.442 12.0326 136.871 12.2113 138.792 12.8812V17.0126C136.849 16.3873 135.464 16.164 133.834 16.164C131.243 16.164 129.993 17.169 129.993 20.1838C129.993 23.1986 131.578 24.2036 133.856 24.2036ZM152.1 23.9802V28H140.8V12.3676H152.1V16.3873H145.267V18.3972H150.76V21.9704H145.267V23.9802H152.1Z"
                                class="fill-grayDark dark:fill-white"
                            />
                            <defs>
                                <filter id="filter0_b_1025_39196" x="-13.9575" y="-13.9575" width="59.7146" height="65.1352" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="6.97876" />
                                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_1025_39196" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1025_39196" result="shape" />
                                </filter>
                                <filter id="filter1_b_1025_39196" x="-13.9575" y="-13.9575" width="59.6174" height="60.4375" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="6.97876" />
                                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_1025_39196" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1025_39196" result="shape" />
                                </filter>
                                <filter id="filter2_b_1025_39196" x="-13.9575" y="21.0947" width="59.7146" height="30.083" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="6.97876" />
                                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_1025_39196" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1025_39196" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </a>
                    <ul class="xl:flex gap-[30px] hidden absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 p-4">
                        <li>
                            <a class="text-lg group text-grayColor dark:text-white hover:text-primary flex items-center space-x-2 font-medium" href="<?php echo site_url("portfolio"); ?>">
                                <span>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-grayColor dark:fill-white group-hover:scale-125 group-hover:fill-primary transition-all duration-500"
                                    >
                                        <path
                                            d="M14.8417 4.57484V5.1915L11.8917 3.48317C10.775 2.8415 9.21666 2.8415 8.10832 3.48317L5.15833 5.19984V4.57484C5.15833 2.69984 6.18333 1.6665 8.05833 1.6665H11.9417C13.8167 1.6665 14.8417 2.69984 14.8417 4.57484Z"
                                        />
                                        <path
                                            d="M14.8667 6.64186L14.75 6.58353L13.6167 5.93353L11.2667 4.5752C10.55 4.15853 9.44999 4.15853 8.73332 4.5752L6.38332 5.9252L5.24999 6.59186L5.09999 6.66686C3.64166 7.6502 3.54166 7.83353 3.54166 9.40853V13.1752C3.54166 14.7502 3.64166 14.9335 5.13332 15.9419L8.73332 18.0169C9.09166 18.2335 9.54166 18.3252 9.99999 18.3252C10.45 18.3252 10.9083 18.2252 11.2667 18.0169L14.9 15.9169C16.3667 14.9335 16.4583 14.7585 16.4583 13.1752V9.40853C16.4583 7.83353 16.3583 7.6502 14.8667 6.64186ZM12.325 11.2502L11.8167 11.8752C11.7333 11.9669 11.675 12.1419 11.6833 12.2669L11.7333 13.0669C11.7667 13.5585 11.4167 13.8085 10.9583 13.6335L10.2167 13.3335C10.1 13.2919 9.90832 13.2919 9.79166 13.3335L9.04999 13.6252C8.59166 13.8085 8.24166 13.5502 8.27499 13.0585L8.32499 12.2585C8.33332 12.1335 8.27499 11.9585 8.19166 11.8669L7.67499 11.2502C7.35832 10.8752 7.49999 10.4585 7.97499 10.3335L8.74999 10.1335C8.87499 10.1002 9.01666 9.98353 9.08332 9.88353L9.51666 9.21686C9.78332 8.8002 10.2083 8.8002 10.4833 9.21686L10.9167 9.88353C10.9833 9.99186 11.1333 10.1002 11.25 10.1335L12.025 10.3335C12.5 10.4585 12.6417 10.8752 12.325 11.2502Z"
                                        />
                                    </svg>
                                </span>
                                <div class="relative overflow-hidden">
                                    <span class="group-hover:translate-y-full group-hover:rotate-[16deg] origin-bottom-left transition-all duration-500 inline-block pointer-events-none">Services</span>
                                    <span class="absolute bottom-full left-0 -rotate-[16deg] origin-bottom-left group-hover:rotate-0 group-hover:translate-y-full transition-all duration-500 pointer-events-none">Services</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="workMenu" class="text-lg group text-grayColor dark:text-white hover:text-primary flex items-center space-x-2 font-medium" href="/industry">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="fill-grayColor dark:fill-white group-hover:scale-125 group-hover:fill-primary transition-all duration-500">
                                        <path
                                            d="M17.5 6.2665V11.1665C17.5 11.4498 17.225 11.6498 16.9583 11.5665L13.6833 10.5498C12.7833 10.2748 11.8167 10.5082 11.1583 11.1665C10.4917 11.8332 10.25 12.8082 10.5333 13.7082L11.5417 16.9582C11.625 17.2248 11.425 17.4998 11.1417 17.4998H6.26667C3.39167 17.4998 1.66667 15.7832 1.66667 12.8998V6.2665C1.66667 3.38317 3.39167 1.6665 6.26667 1.6665H12.9C15.775 1.6665 17.5 3.38317 17.5 6.2665Z"
                                        ></path>
                                        <path
                                            d="M18.3 15.7002L16.9417 16.1586C16.5667 16.2836 16.2667 16.5752 16.1417 16.9586L15.6833 18.3169C15.2917 19.4919 13.6417 19.4669 13.275 18.2919L11.7333 13.3336C11.4333 12.3502 12.3417 11.4336 13.3167 11.7419L18.2833 13.2836C19.45 13.6502 19.4667 15.3086 18.3 15.7002Z"
                                        ></path>
                                    </svg>
                                </span>
                                <div class="relative overflow-hidden">
                                    <span class="group-hover:translate-y-full group-hover:rotate-[16deg] origin-bottom-left transition-all duration-500 inline-block pointer-events-none">Works</span>
                                    <span class="absolute bottom-full left-0 -rotate-[16deg] origin-bottom-left group-hover:rotate-0 group-hover:translate-y-full transition-all duration-500 pointer-events-none">Works</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a class="text-lg group text-grayColor dark:text-white hover:text-primary flex items-center space-x-2 font-medium" href="/culture">
                                <span>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-grayColor dark:fill-white group-hover:scale-125 group-hover:fill-primary transition-all duration-500"
                                    >
                                        <path
                                            d="M10 1.6665C5.4 1.6665 1.66667 5.39984 1.66667 9.99984C1.66667 14.5998 5.4 18.3332 10 18.3332C14.6 18.3332 18.3333 14.5998 18.3333 9.99984C18.3333 5.39984 14.6 1.6665 10 1.6665ZM5.83333 10.6248H4.16667C3.825 10.6248 3.54167 10.3415 3.54167 9.99984C3.54167 9.65817 3.825 9.37484 4.16667 9.37484H5.83333C6.175 9.37484 6.45833 9.65817 6.45833 9.99984C6.45833 10.3415 6.175 10.6248 5.83333 10.6248ZM10 11.8748C8.96667 11.8748 8.125 11.0332 8.125 9.99984C8.125 8.9665 8.96667 8.12484 10 8.12484C11.0333 8.12484 11.875 8.9665 11.875 9.99984C11.875 11.0332 11.0333 11.8748 10 11.8748ZM15.8333 10.6248H14.1667C13.825 10.6248 13.5417 10.3415 13.5417 9.99984C13.5417 9.65817 13.825 9.37484 14.1667 9.37484H15.8333C16.175 9.37484 16.4583 9.65817 16.4583 9.99984C16.4583 10.3415 16.175 10.6248 15.8333 10.6248Z"
                                        />
                                    </svg>
                                </span>
                                <div class="relative overflow-hidden">
                                    <span class="group-hover:translate-y-full group-hover:rotate-[16deg] origin-bottom-left transition-all duration-500 inline-block pointer-events-none">Industries</span>
                                    <span class="absolute bottom-full left-0 -rotate-[16deg] origin-bottom-left group-hover:rotate-0 group-hover:translate-y-full transition-all duration-500 pointer-events-none">Industries</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-lg group text-grayColor dark:text-white hover:text-primary flex items-center space-x-2 font-medium" href="/culture">
                                <span>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-grayColor dark:fill-white group-hover:scale-125 group-hover:fill-primary transition-all duration-500"
                                    >
                                        <path
                                            d="M16.9667 10.6081C16.6584 10.6081 16.4001 10.3748 16.3667 10.0665C16.1667 8.23315 15.1834 6.58315 13.6667 5.53315C13.3917 5.34148 13.3251 4.96648 13.5167 4.69148C13.7084 4.41648 14.0834 4.34982 14.3584 4.54148C16.1667 5.79982 17.3334 7.76648 17.5751 9.94148C17.6084 10.2748 17.3667 10.5748 17.0334 10.6081C17.0084 10.6081 16.9917 10.6081 16.9667 10.6081Z"
                                        />
                                        <path
                                            d="M3.11671 10.6492C3.10004 10.6492 3.07504 10.6492 3.05837 10.6492C2.72504 10.6159 2.48337 10.3159 2.51671 9.98252C2.74171 7.80752 3.89171 5.84086 5.68337 4.57419C5.95004 4.38252 6.33337 4.44919 6.52504 4.71586C6.71671 4.99086 6.65004 5.36586 6.38337 5.55752C4.88337 6.62419 3.90837 8.27419 3.72504 10.0992C3.69171 10.4159 3.42504 10.6492 3.11671 10.6492Z"
                                        />
                                        <path
                                            d="M13.3251 17.5834C12.3001 18.0751 11.2001 18.3251 10.0501 18.3251C8.85008 18.3251 7.70842 18.0584 6.64175 17.5168C6.34175 17.3751 6.22508 17.0084 6.37508 16.7084C6.51675 16.4084 6.88342 16.2918 7.18342 16.4334C7.70842 16.7001 8.26675 16.8834 8.83342 16.9918C9.60008 17.1418 10.3834 17.1501 11.1501 17.0168C11.7168 16.9168 12.2751 16.7418 12.7918 16.4918C13.1001 16.3501 13.4667 16.4668 13.6001 16.7751C13.7501 17.0751 13.6334 17.4418 13.3251 17.5834Z"
                                        />
                                        <path
                                            d="M10.0417 1.6748C8.74998 1.6748 7.69165 2.7248 7.69165 4.0248C7.69165 5.3248 8.74165 6.3748 10.0417 6.3748C11.3417 6.3748 12.3917 5.3248 12.3917 4.0248C12.3917 2.7248 11.3417 1.6748 10.0417 1.6748Z"
                                        />
                                        <path
                                            d="M4.20831 11.5576C2.91665 11.5576 1.85831 12.6076 1.85831 13.9076C1.85831 15.2076 2.90831 16.2576 4.20831 16.2576C5.50831 16.2576 6.55831 15.2076 6.55831 13.9076C6.55831 12.6076 5.49998 11.5576 4.20831 11.5576Z"
                                        />
                                        <path
                                            d="M15.7916 11.5576C14.4999 11.5576 13.4416 12.6076 13.4416 13.9076C13.4416 15.2076 14.4916 16.2576 15.7916 16.2576C17.0916 16.2576 18.1416 15.2076 18.1416 13.9076C18.1416 12.6076 17.0916 11.5576 15.7916 11.5576Z"
                                        />
                                    </svg>
                                </span>
                                <div class="relative overflow-hidden">
                                    <span class="group-hover:translate-y-full group-hover:rotate-[16deg] origin-bottom-left transition-all duration-500 inline-block pointer-events-none">Process</span>
                                    <span class="absolute bottom-full left-0 -rotate-[16deg] origin-bottom-left group-hover:rotate-0 group-hover:translate-y-full transition-all duration-500 pointer-events-none">Process</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-lg group text-grayColor dark:text-white hover:text-primary flex items-center space-x-2 font-medium" href="/playground">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="fill-grayColor dark:fill-white group-hover:scale-125 group-hover:fill-primary transition-all duration-500">
                                        <path
                                            d="M10 1.6665C5.4 1.6665 1.66667 5.39984 1.66667 9.99984C1.66667 14.5998 5.4 18.3332 10 18.3332C14.6 18.3332 18.3333 14.5998 18.3333 9.99984C18.3333 5.39984 14.6 1.6665 10 1.6665ZM10 16.4582C6.44167 16.4582 3.54167 13.5582 3.54167 9.99984C3.54167 8.8665 3.84167 7.75817 4.4 6.78317C4.56667 6.48317 4.95 6.38317 5.25 6.54984L10.3083 9.45817C10.6083 9.63317 10.7083 10.0082 10.5417 10.3082C10.3667 10.6082 9.99167 10.7082 9.69167 10.5415L7.26667 9.14984C7.18333 9.42484 7.125 9.70817 7.125 9.99984C7.125 11.5832 8.41667 12.8748 10 12.8748C11.5833 12.8748 12.875 11.5832 12.875 9.99984C12.875 8.4165 11.5833 7.12484 10 7.12484C9.575 7.12484 9.15833 7.2165 8.775 7.39984C8.45833 7.54984 8.09167 7.4165 7.94167 7.09984C7.79167 6.7915 7.925 6.4165 8.24167 6.2665C8.79167 6.00817 9.38333 5.87484 10 5.87484C12.275 5.87484 14.125 7.72484 14.125 9.99984C14.125 12.2748 12.275 14.1248 10 14.1248C7.725 14.1248 5.875 12.2748 5.875 9.99984C5.875 9.4915 5.975 8.98317 6.15833 8.50817L5.2 7.9665C4.93333 8.60817 4.79167 9.29984 4.79167 9.99984C4.79167 12.8748 7.125 15.2082 10 15.2082C12.875 15.2082 15.2083 12.8748 15.2083 9.99984C15.2083 7.12484 12.875 4.7915 10 4.7915C8.86667 4.7915 7.78333 5.14984 6.875 5.83317C6.6 6.0415 6.20833 5.98317 6 5.70817C5.79167 5.43317 5.85 5.0415 6.125 4.83317C7.25 3.9915 8.59167 3.5415 10 3.5415C13.5583 3.5415 16.4583 6.4415 16.4583 9.99984C16.4583 13.5582 13.5583 16.4582 10 16.4582Z"
                                        ></path>
                                    </svg>
                                </span>
                                <div class="relative overflow-hidden">
                                    <span class="group-hover:translate-y-full group-hover:rotate-[16deg] origin-bottom-left transition-all duration-500 inline-block pointer-events-none">Resources</span>
                                    <span class="absolute bottom-full left-0 -rotate-[16deg] origin-bottom-left group-hover:rotate-0 group-hover:translate-y-full transition-all duration-500 pointer-events-none">Resources</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="flex gap-3 items-center">
                        <button id="toggleButton" class="text-black hover:brightness-95 transition-all duration-500 relative z-10 group rounded-lg text-sm font-medium bg-grayLight dark:bg-grayDarkLight">
                            <div class="relative overflow-hidden">
                                <span class="group-hover:translate-y-full group-hover:rotate-[16deg] origin-bottom-left transition-all grid place-content-center duration-500 h-8 w-8 pointer-events-none">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" class="dark:block hidden" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 13.875C11.6924 13.875 13.875 11.6924 13.875 9C13.875 6.30761 11.6924 4.125 9 4.125C6.30761 4.125 4.125 6.30761 4.125 9C4.125 11.6924 6.30761 13.875 9 13.875Z"
                                            stroke="white"
                                            stroke-width="1.2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M14.355 14.355L14.2575 14.2575M14.2575 3.7425L14.355 3.645L14.2575 3.7425ZM3.645 14.355L3.7425 14.2575L3.645 14.355ZM9 1.56V1.5V1.56ZM9 16.5V16.44V16.5ZM1.56 9H1.5H1.56ZM16.5 9H16.44H16.5ZM3.7425 3.7425L3.645 3.645L3.7425 3.7425Z"
                                            stroke="white"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-black block dark:hidden">
                                        <path
                                            d="M1.52232 9.31473C1.79232 13.1772 5.06982 16.3197 8.99232 16.4922C11.7598 16.6122 14.2348 15.3222 15.7198 13.2897C16.3348 12.4572 16.0048 11.9022 14.9773 12.0897C14.4748 12.1797 13.9573 12.2172 13.4173 12.1947C9.74982 12.0447 6.74982 8.97723 6.73482 5.35473C6.72732 4.37973 6.92982 3.45723 7.29732 2.61723C7.70232 1.68723 7.21482 1.24473 6.27732 1.64223C3.30732 2.89473 1.27482 5.88723 1.52232 9.31473Z"
                                            stroke-width="1.2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                </span>
                                <span
                                    class="absolute bottom-full left-0 -rotate-[16deg] group-hover:rotate-0 origin-bottom-left h-8 w-8 grid place-content-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                                >
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" class="dark:block hidden" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 13.875C11.6924 13.875 13.875 11.6924 13.875 9C13.875 6.30761 11.6924 4.125 9 4.125C6.30761 4.125 4.125 6.30761 4.125 9C4.125 11.6924 6.30761 13.875 9 13.875Z"
                                            stroke="white"
                                            stroke-width="1.2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M14.355 14.355L14.2575 14.2575M14.2575 3.7425L14.355 3.645L14.2575 3.7425ZM3.645 14.355L3.7425 14.2575L3.645 14.355ZM9 1.56V1.5V1.56ZM9 16.5V16.44V16.5ZM1.56 9H1.5H1.56ZM16.5 9H16.44H16.5ZM3.7425 3.7425L3.645 3.645L3.7425 3.7425Z"
                                            stroke="white"
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="stroke-black block dark:hidden">
                                        <path
                                            d="M1.52232 9.31473C1.79232 13.1772 5.06982 16.3197 8.99232 16.4922C11.7598 16.6122 14.2348 15.3222 15.7198 13.2897C16.3348 12.4572 16.0048 11.9022 14.9773 12.0897C14.4748 12.1797 13.9573 12.2172 13.4173 12.1947C9.74982 12.0447 6.74982 8.97723 6.73482 5.35473C6.72732 4.37973 6.92982 3.45723 7.29732 2.61723C7.70232 1.68723 7.21482 1.24473 6.27732 1.64223C3.30732 2.89473 1.27482 5.88723 1.52232 9.31473Z"
                                            stroke-width="1.2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                        <button class="text-[#28303F] hover:brightness-95 transition-all duration-500 relative z-10 group rounded-lg text-xs leading-[1.83] font-bold bg-grayLight hidden sm:flex">
                            <div class="relative overflow-hidden">
                                <span class="group-hover:translate-y-full h-8 w-full px-2.5 group-hover:rotate-[16deg] origin-bottom-left transition-all grid place-content-center duration-500 pointer-events-none">Free UX report</span>
                                <span
                                    class="absolute bottom-full left-0 -rotate-[16deg] group-hover:rotate-0 px-2.5 origin-bottom-left w-full h-8 grid place-content-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                                >
                                    Free UX report
                                </span>
                            </div>
                        </button>
                        <button class="bg-primary text-content transition-all duration-500 relative z-10 group rounded-lg text-xs font-medium hidden sm:flex">
                            <div class="relative overflow-hidden">
                                <span class="group-hover:translate-y-full h-8 w-full px-2.5 group-hover:rotate-[16deg] origin-bottom-left transition-all grid place-content-center duration-500 pointer-events-none">Let's Talk</span>
                                <span
                                    class="absolute bottom-full left-0 -rotate-[16deg] group-hover:rotate-0 origin-bottom-left w-full px-2.5 h-8 grid place-content-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                                >
                                    Let's Talk
                                </span>
                            </div>
                        </button>
                        <button class="xl:hidden menu-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-black w-7 h-7 dark:fill-primary">
                                <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div
                    id="megaMenuId"
                    class="mega-menu-outer pointer-events-none transition-all duration-700 z-10 absolute left-0 top-full w-full backdrop-blur-[18px] bg-white border-b border-solid border-[#ccc] hidden xl:flex dark:border-[#424242] dark:bg-[#1b1b1b] invisible opacity-100 [clip-path:circle(0%_at_50%_50%)]"
                >
                    <div class="max-w-screen-2xl mx-auto px-5 pt-10 pb-20">
                        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-[30px]">
                            <div class="grid gap-4 sm:gap-6">
                                <div class="rounded-[20px] h-full group hover:border-primary transition-all duration-500 shadow-cardShadow py-10 px-[30px] border border-solid border-transparent dark:border-[#313131] dark:bg-[#1b1b1b]">
                                    <div class="flex items-center pb-5">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" />
                                        </span>
                                        <span class="ml-3">
                                            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark:fill-white">
                                                <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9" />
                                                <path
                                                    d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                    fill="#333333"
                                                />
                                            </svg>
                                        </span>
                                    </div>
                                    <a href="<?php echo site_url("product-innovation"); ?>" class="group-hover:text-primary transition-all duration-500 font-semibold text-3xl leading-[1.43] text-grayDark dark:text-white">
                                        Product Innovation
                                    </a>
                                </div>
                                <div class="rounded-[20px] h-full shadow-cardShadow py-10 px-[30px] border border-solid border-transparent group transition-all duration-500 hover:border-primary dark:border-[#313131] dark:bg-[#1b1b1b]">
                                    <div class="flex items-center pb-5">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/dashboard-design.svg" />
                                        </span>
                                        <span class="ml-3">
                                            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark:fill-white">
                                                <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9" />
                                                <path
                                                    d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                    fill="#333333"
                                                />
                                            </svg>
                                        </span>
                                    </div>
                                    <a href="https://stageuxspace.com/dashboard-design/" class="group-hover:text-primary transition-all duration-500 font-semibold text-3xl leading-[1.43] text-grayDark dark:text-white">Dashboard Design</a>
                                </div>
                            </div>
                            <div class="">
                                <div class="rounded-[20px] h-full shadow-cardShadow py-10 px-[30px] border border-solid border-transparent group transition-all duration-500 hover:border-primary dark:border-[#313131] dark:bg-[#1b1b1b]">
                                    <div class="pb-5">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/branding.svg" alt="icon" />
                                        </span>
                                        <h3 class="pt-5 group-hover:text-primary transition-all duration-500 font-semibold text-3xl leading-[1.43] text-grayDark dark:text-white">
                                            Branding
                                        </h3>
                                    </div>

                                    <div class="pt-5 border-t border-solid border-[#E3E3E3]">
                                        <a href="/" class="group/item flex items-center text-lg transition-all duration-500 text-grayDark hover:text-primary dark:text-white">
                                            <span class="mr-3">
                                                <p>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                                        <path
                                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                                            fill=""
                                                        ></path>
                                                        <path
                                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                                            fill=""
                                                        ></path>
                                                        <path
                                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                                            fill=""
                                                        ></path>
                                                    </svg>
                                                </p>
                                            </span>
                                            Brand Designing / Visual Design
                                        </a>
                                        <a href="/" class="group/item flex items-center text-lg transition-all duration-500 text-grayDark hover:text-primary dark:text-white pt-[30px]">
                                            <span class="mr-3">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                                    <path
                                                        d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                                    ></path>
                                                    <path
                                                        d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                                    ></path>
                                                    <path
                                                        d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                                    ></path>
                                                </svg>
                                            </span>
                                            3d Design and Motion Design
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="rounded-[20px] h-full shadow-cardShadow py-10 px-[30px] border border-solid border-transparent group hover:border-primary transition-all duration-500 dark:border-[#313131] dark:bg-[#1b1b1b]">
                                    <div class="pb-5">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/design-thinking.svg" alt="icon" />
                                        </span>
                                        <h3 class="pt-5 group-hover:text-primary font-semibold text-3xl leading-[1.43] text-grayDark dark:text-white transition-all duration-500">
                                            Design Thinking
                                        </h3>
                                    </div>

                                    <div class="pt-5 border-t border-solid border-[#E3E3E3]">
                                        <a href="<?php echo site_url("ux-consulting"); ?>" class="group/item flex items-center text-lg transition-all duration-500 text-grayDark hover:text-primary dark:text-white">
                                            <span class="mr-3">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                                    <path
                                                        d="M14.2 8.86719L8.07504 2.74219L7.35004 2.01719C7.10838 1.77552 6.70838 1.77552 6.46671 2.01719C6.22504 2.25885 6.22504 2.65885 6.46671 2.90052L7.19171 3.62552L2.50004 8.31719C1.96671 8.85052 1.68338 9.39219 1.66671 9.93385C1.65004 10.5089 1.93338 11.0839 2.50004 11.6589L5.84171 15.0005C6.95838 16.1089 8.07504 16.1089 9.18338 15.0005L14.2 9.98385C14.3667 9.81719 14.4417 9.59219 14.425 9.37552C14.4167 9.19219 14.3334 9.00052 14.2 8.86719Z"
                                                    ></path>
                                                    <path
                                                        d="M13.3333 18.958H2.5C2.15833 18.958 1.875 18.6747 1.875 18.333C1.875 17.9913 2.15833 17.708 2.5 17.708H13.3333C13.675 17.708 13.9583 17.9913 13.9583 18.333C13.9583 18.6747 13.675 18.958 13.3333 18.958Z"
                                                    ></path>
                                                    <path
                                                        d="M16.125 12.3166C15.9083 12.0833 15.5083 12.0833 15.2917 12.3166C15.0333 12.5999 13.75 14.0416 13.75 15.1416C13.75 16.2249 14.625 17.0999 15.7083 17.0999C16.7917 17.0999 17.6667 16.2249 17.6667 15.1416C17.6667 14.0499 16.3833 12.5999 16.125 12.3166Z"
                                                    ></path>
                                                </svg>
                                            </span>
                                            ​UX Strategy / Consulting
                                        </a>
                                        <a href="/" class="pt-[30px] group/item flex items-center text-lg transition-all duration-500 text-grayDark hover:text-primary dark:text-white">
                                            <span class="mr-3">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                                    <path
                                                        d="M13.492 1.66699H6.50866C3.47533 1.66699 1.66699 3.47533 1.66699 6.50866V13.4837C1.66699 16.5253 3.47533 18.3337 6.50866 18.3337H13.4837C16.517 18.3337 18.3253 16.5253 18.3253 13.492V6.50866C18.3337 3.47533 16.5253 1.66699 13.492 1.66699ZM14.3837 8.30033L12.4587 10.7837C12.217 11.092 11.8753 11.292 11.4837 11.3337C11.092 11.3837 10.7087 11.2753 10.4003 11.0337L8.87533 9.83366C8.81699 9.78366 8.75033 9.78366 8.71699 9.79199C8.68366 9.79199 8.62533 9.80866 8.57533 9.87533L6.59199 12.4503C6.46699 12.6087 6.28366 12.692 6.10033 12.692C5.96699 12.692 5.83366 12.6503 5.71699 12.5587C5.44199 12.3503 5.39199 11.9587 5.60033 11.6837L7.58366 9.10866C7.82533 8.80033 8.16699 8.60033 8.55866 8.55033C8.94199 8.50033 9.33366 8.60866 9.64199 8.85033L11.167 10.0503C11.2253 10.1003 11.2837 10.1003 11.3253 10.092C11.3587 10.092 11.417 10.0753 11.467 10.0087L13.392 7.52533C13.6003 7.25033 14.0003 7.20033 14.267 7.41699C14.542 7.64199 14.592 8.03366 14.3837 8.30033Z"
                                                    ></path>
                                                </svg>
                                            </span>
                                            CRO through Design
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <h5 class="pb-5 text-xl font-medium leading-[1.5] dark:text-white text-grayDark">
                                    What's Fresh
                                </h5>
                                <div class="swiper fresh-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <em class="block leading-[0] min-w-[350px] pb-5 overflow-hidden rounded-xl">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mega-menu-bg.jpg" class="rounded-xl w-[330px]" alt="bg" />
                                            </em>
                                            <p class="line-clamp-2 dark:text-white text-grayDark text-base font-medium leading-[1.62]">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </p>
                                        </div>
                                        <div class="swiper-slide">
                                            <em class="block leading-[0] min-w-[300px] pb-5 overflow-hidden rounded-xl">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mega-menu-bg.jpg" class="rounded-xl w-[330px]" alt="bg" />
                                            </em>
                                            <p class="line-clamp-2 dark:text-white text-grayDark text-base font-medium leading-[1.62]">
                                                Lorem Ipsum is simply dummy text of the printing
                                            </p>
                                        </div>
                                        <div class="swiper-slide">
                                            <em class="block leading-[0] min-w-[300px] pb-5 overflow-hidden rounded-xl">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mega-menu-bg.jpg" class="rounded-xl w-[330px]" alt="bg" />
                                            </em>
                                            <p class="line-clamp-2 dark:text-white text-grayDark text-base font-medium leading-[1.62]">
                                                Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="overflow-hidden">
                <div>
                    <div class="hidden lg:flex items-center h-10 bg-grayLight dark:bg-[#201B1B] gap-10 justify-center">
                        <div class="text-xs text-[#515763] font-medium dark:text-white/80 flex items-center gap-1.5">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none" class="block dark:hidden">
                                    <path
                                        d="M8 2.84971L6.99367 1.15029L5.03163 2.25029V0H3.01898V2.25029L1.00633 1.14971L0 2.84971L1.96262 4L0 5.15029L1.00633 6.85029L3.01898 5.75029V8H5.03163V5.75029L6.99367 6.84971L8 5.14971L5.98735 4L8 2.84971Z"
                                        fill="url(#paint0_linear_1197_23660)"
                                    ></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_1197_23660" x1="3.9801" y1="2.13415e-10" x2="4.0199" y2="8" gradientUnits="userSpaceOnUse">
                                            <stop></stop>
                                            <stop offset="1" stop-color="#A070FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" class="dark:block hidden" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_90_58065)">
                                        <path
                                            d="M8 2.84971L6.99367 1.15029L5.03163 2.25029V0H3.01898V2.25029L1.00633 1.14971L0 2.84971L1.96262 4L0 5.15029L1.00633 6.85029L3.01898 5.75029V8H5.03163V5.75029L6.99367 6.84971L8 5.14971L5.98735 4L8 2.84971Z"
                                            fill="url(#paint0_linear_90_58065)"
                                        ></path>
                                    </g>
                                    <defs>
                                        <filter id="filter0_b_90_58065" x="-15" y="-15" width="38" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="7.5"></feGaussianBlur>
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_90_58065"></feComposite>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_90_58065" result="shape"></feBlend>
                                        </filter>
                                        <linearGradient id="paint0_linear_90_58065" x1="7.87253" y1="-8.18667" x2="13.1865" y2="-2.49893" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFDD00"></stop>
                                            <stop offset="1" stop-color="#8F00FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span>Zero full-time hiring hassles</span>
                        </div>
                        <div class="text-xs text-[#515763] font-medium dark:text-white/80 flex items-center gap-1.5">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none" class="block dark:hidden">
                                    <path
                                        d="M8 2.84971L6.99367 1.15029L5.03163 2.25029V0H3.01898V2.25029L1.00633 1.14971L0 2.84971L1.96262 4L0 5.15029L1.00633 6.85029L3.01898 5.75029V8H5.03163V5.75029L6.99367 6.84971L8 5.14971L5.98735 4L8 2.84971Z"
                                        fill="url(#paint0_linear_1197_23660)"
                                    ></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_1197_23660" x1="3.9801" y1="2.13415e-10" x2="4.0199" y2="8" gradientUnits="userSpaceOnUse">
                                            <stop></stop>
                                            <stop offset="1" stop-color="#A070FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" class="dark:block hidden" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_90_58065)">
                                        <path
                                            d="M8 2.84971L6.99367 1.15029L5.03163 2.25029V0H3.01898V2.25029L1.00633 1.14971L0 2.84971L1.96262 4L0 5.15029L1.00633 6.85029L3.01898 5.75029V8H5.03163V5.75029L6.99367 6.84971L8 5.14971L5.98735 4L8 2.84971Z"
                                            fill="url(#paint0_linear_90_58065)"
                                        ></path>
                                    </g>
                                    <defs>
                                        <filter id="filter0_b_90_58065" x="-15" y="-15" width="38" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="7.5"></feGaussianBlur>
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_90_58065"></feComposite>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_90_58065" result="shape"></feBlend>
                                        </filter>
                                        <linearGradient id="paint0_linear_90_58065" x1="7.87253" y1="-8.18667" x2="13.1865" y2="-2.49893" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFDD00"></stop>
                                            <stop offset="1" stop-color="#8F00FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span>Flexible Scaling Up or Down</span>
                        </div>
                        <div class="text-xs text-[#515763] font-medium dark:text-white/80 flex items-center gap-1.5">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none" class="block dark:hidden">
                                    <path
                                        d="M8 2.84971L6.99367 1.15029L5.03163 2.25029V0H3.01898V2.25029L1.00633 1.14971L0 2.84971L1.96262 4L0 5.15029L1.00633 6.85029L3.01898 5.75029V8H5.03163V5.75029L6.99367 6.84971L8 5.14971L5.98735 4L8 2.84971Z"
                                        fill="url(#paint0_linear_1197_23660)"
                                    ></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_1197_23660" x1="3.9801" y1="2.13415e-10" x2="4.0199" y2="8" gradientUnits="userSpaceOnUse">
                                            <stop></stop>
                                            <stop offset="1" stop-color="#A070FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" class="dark:block hidden" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_90_58065)">
                                        <path
                                            d="M8 2.84971L6.99367 1.15029L5.03163 2.25029V0H3.01898V2.25029L1.00633 1.14971L0 2.84971L1.96262 4L0 5.15029L1.00633 6.85029L3.01898 5.75029V8H5.03163V5.75029L6.99367 6.84971L8 5.14971L5.98735 4L8 2.84971Z"
                                            fill="url(#paint0_linear_90_58065)"
                                        ></path>
                                    </g>
                                    <defs>
                                        <filter id="filter0_b_90_58065" x="-15" y="-15" width="38" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="7.5"></feGaussianBlur>
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_90_58065"></feComposite>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_90_58065" result="shape"></feBlend>
                                        </filter>
                                        <linearGradient id="paint0_linear_90_58065" x1="7.87253" y1="-8.18667" x2="13.1865" y2="-2.49893" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFDD00"></stop>
                                            <stop offset="1" stop-color="#8F00FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span>Cut Design Costs by Half</span>
                        </div>
                        <div class="text-xs text-[#515763] font-medium dark:text-white/80 flex items-center gap-1.5">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none" class="block dark:hidden">
                                    <path
                                        d="M8 2.84971L6.99367 1.15029L5.03163 2.25029V0H3.01898V2.25029L1.00633 1.14971L0 2.84971L1.96262 4L0 5.15029L1.00633 6.85029L3.01898 5.75029V8H5.03163V5.75029L6.99367 6.84971L8 5.14971L5.98735 4L8 2.84971Z"
                                        fill="url(#paint0_linear_1197_23660)"
                                    ></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_1197_23660" x1="3.9801" y1="2.13415e-10" x2="4.0199" y2="8" gradientUnits="userSpaceOnUse">
                                            <stop></stop>
                                            <stop offset="1" stop-color="#A070FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" class="dark:block hidden" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_90_58065)">
                                        <path
                                            d="M8 2.84971L6.99367 1.15029L5.03163 2.25029V0H3.01898V2.25029L1.00633 1.14971L0 2.84971L1.96262 4L0 5.15029L1.00633 6.85029L3.01898 5.75029V8H5.03163V5.75029L6.99367 6.84971L8 5.14971L5.98735 4L8 2.84971Z"
                                            fill="url(#paint0_linear_90_58065)"
                                        ></path>
                                    </g>
                                    <defs>
                                        <filter id="filter0_b_90_58065" x="-15" y="-15" width="38" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="7.5"></feGaussianBlur>
                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_90_58065"></feComposite>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_90_58065" result="shape"></feBlend>
                                        </filter>
                                        <linearGradient id="paint0_linear_90_58065" x1="7.87253" y1="-8.18667" x2="13.1865" y2="-2.49893" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFDD00"></stop>
                                            <stop offset="1" stop-color="#8F00FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span>Rapid Turnarounds</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobile sidebar -->
        <div tabindex="-1" class="mobile-sidebar overflow-y-auto fixed top-0 transition-all duration-500 shadow-lg -right-full bg-white dark:bg-[#0A0808] bottom-0 w-full max-w-[480px] z-[70] p-5">
            <div class="flex items-center justify-between pb-10">
                <div class="flex ml-auto items-center gap-3">
                    <button id="closeMobileSidebar">
                        <svg width="20" height="20" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" class="dark:fill-white">
                            <path
                                d="M8.17511 7.00015L13.4251 1.75849C13.582 1.60157 13.6702 1.38874 13.6702 1.16682C13.6702 0.944903 13.582 0.732074 13.4251 0.575155C13.2682 0.418235 13.0554 0.330078 12.8334 0.330078C12.6115 0.330078 12.3987 0.418235 12.2418 0.575155L7.00011 5.82515L1.75845 0.575155C1.60153 0.418235 1.3887 0.330078 1.16678 0.330078C0.944861 0.330078 0.732032 0.418235 0.575112 0.575155C0.418192 0.732074 0.330036 0.944903 0.330036 1.16682C0.330036 1.38874 0.418192 1.60157 0.575112 1.75849L5.82511 7.00015L0.575112 12.2418C0.497005 12.3193 0.43501 12.4115 0.392703 12.513C0.350395 12.6146 0.328613 12.7235 0.328613 12.8335C0.328613 12.9435 0.350395 13.0524 0.392703 13.154C0.43501 13.2555 0.497005 13.3477 0.575112 13.4252C0.652581 13.5033 0.744749 13.5653 0.846298 13.6076C0.947847 13.6499 1.05677 13.6717 1.16678 13.6717C1.27679 13.6717 1.38571 13.6499 1.48726 13.6076C1.58881 13.5653 1.68098 13.5033 1.75845 13.4252L7.00011 8.17515L12.2418 13.4252C12.3192 13.5033 12.4114 13.5653 12.513 13.6076C12.6145 13.6499 12.7234 13.6717 12.8334 13.6717C12.9435 13.6717 13.0524 13.6499 13.1539 13.6076C13.2555 13.5653 13.3476 13.5033 13.4251 13.4252C13.5032 13.3477 13.5652 13.2555 13.6075 13.154C13.6498 13.0524 13.6716 12.9435 13.6716 12.8335C13.6716 12.7235 13.6498 12.6146 13.6075 12.513C13.5652 12.4115 13.5032 12.3193 13.4251 12.2418L8.17511 7.00015Z"
                            />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="max-h-[calc(100vh-112px)] overflow-y-auto">
                <div class="w-full">
                    <!-- 1st one -->
                    <div class="pb-4">
                        <h3 data-orientation="vertical" data-state="closed" class="flex border-b border-solid border-[#202020]">
                            <button type="button" class="accordion-button flex items-center justify-between w-full pb-5 font-bold transition-all duration-500 text-sm text-grayDark dark:text-white">
                                <div class="flex items-center gap-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#000" xmlns="http://www.w3.org/2000/svg" class="dark:fill-white">
                                        <path
                                            d="M14.8415 4.57484V5.1915L11.8915 3.48317C10.7749 2.8415 9.21654 2.8415 8.1082 3.48317L5.1582 5.19984V4.57484C5.1582 2.69984 6.1832 1.6665 8.0582 1.6665H11.9415C13.8165 1.6665 14.8415 2.69984 14.8415 4.57484Z"
                                        />
                                        <path
                                            d="M14.8665 6.64186L14.7498 6.58353L13.6165 5.93353L11.2665 4.5752C10.5498 4.15853 9.44984 4.15853 8.73317 4.5752L6.38317 5.9252L5.24984 6.59186L5.09984 6.66686C3.6415 7.6502 3.5415 7.83353 3.5415 9.40853V13.1752C3.5415 14.7502 3.6415 14.9335 5.13317 15.9419L8.73317 18.0169C9.0915 18.2335 9.5415 18.3252 9.99984 18.3252C10.4498 18.3252 10.9082 18.2252 11.2665 18.0169L14.8998 15.9169C16.3665 14.9335 16.4582 14.7585 16.4582 13.1752V9.40853C16.4582 7.83353 16.3582 7.6502 14.8665 6.64186ZM12.3248 11.2502L11.8165 11.8752C11.7332 11.9669 11.6748 12.1419 11.6832 12.2669L11.7332 13.0669C11.7665 13.5585 11.4165 13.8085 10.9582 13.6335L10.2165 13.3335C10.0998 13.2919 9.90817 13.2919 9.7915 13.3335L9.04984 13.6252C8.5915 13.8085 8.2415 13.5502 8.27484 13.0585L8.32484 12.2585C8.33317 12.1335 8.27484 11.9585 8.1915 11.8669L7.67484 11.2502C7.35817 10.8752 7.49984 10.4585 7.97484 10.3335L8.74984 10.1335C8.87484 10.1002 9.0165 9.98353 9.08317 9.88353L9.5165 9.21686C9.78317 8.8002 10.2082 8.8002 10.4832 9.21686L10.9165 9.88353C10.9832 9.99186 11.1332 10.1002 11.2498 10.1335L12.0248 10.3335C12.4998 10.4585 12.6415 10.8752 12.3248 11.2502Z"
                                        />
                                    </svg>

                                    <p class="text-lg">Services</p>
                                </div>
                                <em class="accordion-icon inline-block min-w-[20px] mr-2 leading-[0]">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.39961 7.45846L8.83294 12.8918C9.47461 13.5335 10.5246 13.5335 11.1663 12.8918L16.5996 7.45846"
                                            class="stroke-grayDark dark:stroke-[#C0C0C0]"
                                            stroke-width="2"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </em>
                            </button>
                        </h3>
                        <div class="accordion-content overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="<?php echo site_url("product-innovation"); ?>" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Product Innovation</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Dashboard Design</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">3d Design and Motion Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2nd one -->
                    <div class="pb-4">
                        <h3 data-orientation="vertical" data-state="closed" class="flex border-b border-solid border-[#202020]">
                            <button type="button" class="accordion-button flex items-center justify-between w-full pb-5 font-bold transition-all duration-500 text-sm text-grayDark dark:text-white">
                                <div class="flex items-center gap-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#000" xmlns="http://www.w3.org/2000/svg" class="dark:fill-white">
                                        <path
                                            d="M17.4998 6.2665V11.1665C17.4998 11.4498 17.2248 11.6498 16.9582 11.5665L13.6832 10.5498C12.7832 10.2748 11.8165 10.5082 11.1582 11.1665C10.4915 11.8332 10.2498 12.8082 10.5332 13.7082L11.5415 16.9582C11.6248 17.2248 11.4248 17.4998 11.1415 17.4998H6.2665C3.3915 17.4998 1.6665 15.7832 1.6665 12.8998V6.2665C1.6665 3.38317 3.3915 1.6665 6.2665 1.6665H12.8998C15.7748 1.6665 17.4998 3.38317 17.4998 6.2665Z"
                                            fill=""
                                        />
                                        <path
                                            d="M18.3002 15.7002L16.9419 16.1586C16.5669 16.2836 16.2669 16.5752 16.1419 16.9586L15.6836 18.3169C15.2919 19.4919 13.6419 19.4669 13.2752 18.2919L11.7336 13.3336C11.4336 12.3502 12.3419 11.4336 13.3169 11.7419L18.2836 13.2836C19.4502 13.6502 19.4669 15.3086 18.3002 15.7002Z"
                                            fill=""
                                        />
                                    </svg>

                                    <p class="text-lg">Works</p>
                                </div>
                                <em class="accordion-icon inline-block min-w-[20px] mr-2 leading-[0]">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.39961 7.45846L8.83294 12.8918C9.47461 13.5335 10.5246 13.5335 11.1663 12.8918L16.5996 7.45846"
                                            class="stroke-grayDark dark:stroke-[#C0C0C0]"
                                            stroke-width="2"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </em>
                            </button>
                        </h3>
                        <div class="accordion-content overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="<?php echo site_url("product-innovation"); ?>" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Product Innovation</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Dashboard Design</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">3d Design and Motion Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3rd one -->
                    <div class="pb-4">
                        <h3 data-orientation="vertical" data-state="closed" class="flex border-b border-solid border-[#202020]">
                            <button type="button" class="accordion-button flex items-center justify-between w-full pb-5 font-bold transition-all duration-500 text-sm text-grayDark dark:text-white">
                                <div class="flex items-center gap-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#000" xmlns="http://www.w3.org/2000/svg" class="dark:fill-white">
                                        <path
                                            d="M9.99984 1.6665C5.39984 1.6665 1.6665 5.39984 1.6665 9.99984C1.6665 14.5998 5.39984 18.3332 9.99984 18.3332C14.5998 18.3332 18.3332 14.5998 18.3332 9.99984C18.3332 5.39984 14.5998 1.6665 9.99984 1.6665ZM5.83317 10.6248H4.1665C3.82484 10.6248 3.5415 10.3415 3.5415 9.99984C3.5415 9.65817 3.82484 9.37484 4.1665 9.37484H5.83317C6.17484 9.37484 6.45817 9.65817 6.45817 9.99984C6.45817 10.3415 6.17484 10.6248 5.83317 10.6248ZM9.99984 11.8748C8.9665 11.8748 8.12484 11.0332 8.12484 9.99984C8.12484 8.9665 8.9665 8.12484 9.99984 8.12484C11.0332 8.12484 11.8748 8.9665 11.8748 9.99984C11.8748 11.0332 11.0332 11.8748 9.99984 11.8748ZM15.8332 10.6248H14.1665C13.8248 10.6248 13.5415 10.3415 13.5415 9.99984C13.5415 9.65817 13.8248 9.37484 14.1665 9.37484H15.8332C16.1748 9.37484 16.4582 9.65817 16.4582 9.99984C16.4582 10.3415 16.1748 10.6248 15.8332 10.6248Z"
                                            fill=""
                                        />
                                    </svg>

                                    <p class="text-lg">Industries</p>
                                </div>
                                <em class="accordion-icon inline-block min-w-[20px] mr-2 leading-[0]">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.39961 7.45846L8.83294 12.8918C9.47461 13.5335 10.5246 13.5335 11.1663 12.8918L16.5996 7.45846"
                                            class="stroke-grayDark dark:stroke-[#C0C0C0]"
                                            stroke-width="2"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </em>
                            </button>
                        </h3>
                        <div class="accordion-content overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="<?php echo site_url("product-innovation"); ?>" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Product Innovation</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Dashboard Design</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">3d Design and Motion Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4th one -->
                    <div class="pb-4">
                        <h3 data-orientation="vertical" data-state="closed" class="flex border-b border-solid border-[#202020]">
                            <button type="button" class="accordion-button flex items-center justify-between w-full pb-5 font-bold transition-all duration-500 text-sm text-grayDark dark:text-white">
                                <div class="flex items-center gap-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#000" xmlns="http://www.w3.org/2000/svg" class="dark:fill-white">
                                        <path
                                            d="M16.9666 10.6081C16.6582 10.6081 16.3999 10.3748 16.3666 10.0665C16.1666 8.23315 15.1832 6.58315 13.6666 5.53315C13.3916 5.34148 13.3249 4.96648 13.5166 4.69148C13.7082 4.41648 14.0832 4.34982 14.3582 4.54148C16.1666 5.79982 17.3332 7.76648 17.5749 9.94148C17.6082 10.2748 17.3666 10.5748 17.0332 10.6081C17.0082 10.6081 16.9916 10.6081 16.9666 10.6081Z"
                                            fill=""
                                        />
                                        <path
                                            d="M3.11674 10.6492C3.10008 10.6492 3.07508 10.6492 3.05841 10.6492C2.72508 10.6159 2.48341 10.3159 2.51674 9.98252C2.74174 7.80752 3.89174 5.84086 5.68341 4.57419C5.95008 4.38252 6.33341 4.44919 6.52508 4.71586C6.71674 4.99086 6.65008 5.36586 6.38341 5.55752C4.88341 6.62419 3.90841 8.27419 3.72508 10.0992C3.69174 10.4159 3.42508 10.6492 3.11674 10.6492Z"
                                            fill=""
                                        />
                                        <path
                                            d="M13.3248 17.5834C12.2998 18.0751 11.1998 18.3251 10.0498 18.3251C8.84984 18.3251 7.70817 18.0584 6.64151 17.5168C6.34151 17.3751 6.22484 17.0084 6.37484 16.7084C6.51651 16.4084 6.88317 16.2918 7.18317 16.4334C7.70817 16.7001 8.26651 16.8834 8.83317 16.9918C9.59984 17.1418 10.3832 17.1501 11.1498 17.0168C11.7165 16.9168 12.2748 16.7418 12.7915 16.4918C13.0998 16.3501 13.4665 16.4668 13.5998 16.7751C13.7498 17.0751 13.6332 17.4418 13.3248 17.5834Z"
                                            fill=""
                                        />
                                        <path
                                            d="M10.0414 1.6748C8.74974 1.6748 7.69141 2.7248 7.69141 4.0248C7.69141 5.3248 8.74141 6.3748 10.0414 6.3748C11.3414 6.3748 12.3914 5.3248 12.3914 4.0248C12.3914 2.7248 11.3414 1.6748 10.0414 1.6748Z"
                                            fill=""
                                        />
                                        <path
                                            d="M4.2084 11.5576C2.91673 11.5576 1.8584 12.6076 1.8584 13.9076C1.8584 15.2076 2.9084 16.2576 4.2084 16.2576C5.5084 16.2576 6.5584 15.2076 6.5584 13.9076C6.5584 12.6076 5.50007 11.5576 4.2084 11.5576Z"
                                            fill=""
                                        />
                                        <path
                                            d="M15.7914 11.5576C14.4997 11.5576 13.4414 12.6076 13.4414 13.9076C13.4414 15.2076 14.4914 16.2576 15.7914 16.2576C17.0914 16.2576 18.1414 15.2076 18.1414 13.9076C18.1414 12.6076 17.0914 11.5576 15.7914 11.5576Z"
                                            fill=""
                                        />
                                    </svg>

                                    <p class="text-lg">Process</p>
                                </div>
                                <em class="accordion-icon inline-block min-w-[20px] mr-2 leading-[0]">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.39961 7.45846L8.83294 12.8918C9.47461 13.5335 10.5246 13.5335 11.1663 12.8918L16.5996 7.45846"
                                            class="stroke-grayDark dark:stroke-[#C0C0C0]"
                                            stroke-width="2"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </em>
                            </button>
                        </h3>
                        <div class="accordion-content overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="<?php echo site_url("product-innovation"); ?>" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Product Innovation</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Dashboard Design</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">3d Design and Motion Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5th one -->
                    <div class="">
                        <h3 data-orientation="vertical" data-state="closed" class="flex">
                            <button type="button" class="accordion-button flex items-center justify-between w-full pb-5 font-bold transition-all duration-500 text-sm text-grayDark dark:text-white">
                                <div class="flex items-center gap-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#000" xmlns="http://www.w3.org/2000/svg" class="dark:fill-white">
                                        <path
                                            d="M9.99984 1.6665C5.39984 1.6665 1.6665 5.39984 1.6665 9.99984C1.6665 14.5998 5.39984 18.3332 9.99984 18.3332C14.5998 18.3332 18.3332 14.5998 18.3332 9.99984C18.3332 5.39984 14.5998 1.6665 9.99984 1.6665ZM9.99984 16.4582C6.4415 16.4582 3.5415 13.5582 3.5415 9.99984C3.5415 8.8665 3.8415 7.75817 4.39984 6.78317C4.5665 6.48317 4.94984 6.38317 5.24984 6.54984L10.3082 9.45817C10.6082 9.63317 10.7082 10.0082 10.5415 10.3082C10.3665 10.6082 9.9915 10.7082 9.6915 10.5415L7.2665 9.14984C7.18317 9.42484 7.12484 9.70817 7.12484 9.99984C7.12484 11.5832 8.4165 12.8748 9.99984 12.8748C11.5832 12.8748 12.8748 11.5832 12.8748 9.99984C12.8748 8.4165 11.5832 7.12484 9.99984 7.12484C9.57484 7.12484 9.15817 7.2165 8.77484 7.39984C8.45817 7.54984 8.0915 7.4165 7.9415 7.09984C7.7915 6.7915 7.92484 6.4165 8.2415 6.2665C8.7915 6.00817 9.38317 5.87484 9.99984 5.87484C12.2748 5.87484 14.1248 7.72484 14.1248 9.99984C14.1248 12.2748 12.2748 14.1248 9.99984 14.1248C7.72484 14.1248 5.87484 12.2748 5.87484 9.99984C5.87484 9.4915 5.97484 8.98317 6.15817 8.50817L5.19984 7.9665C4.93317 8.60817 4.7915 9.29984 4.7915 9.99984C4.7915 12.8748 7.12484 15.2082 9.99984 15.2082C12.8748 15.2082 15.2082 12.8748 15.2082 9.99984C15.2082 7.12484 12.8748 4.7915 9.99984 4.7915C8.8665 4.7915 7.78317 5.14984 6.87484 5.83317C6.59984 6.0415 6.20817 5.98317 5.99984 5.70817C5.7915 5.43317 5.84984 5.0415 6.12484 4.83317C7.24984 3.9915 8.5915 3.5415 9.99984 3.5415C13.5582 3.5415 16.4582 6.4415 16.4582 9.99984C16.4582 13.5582 13.5582 16.4582 9.99984 16.4582Z"
                                            fill=""
                                        />
                                    </svg>

                                    <p class="text-lg">Resources</p>
                                </div>
                                <em class="accordion-icon inline-block min-w-[20px] mr-2 leading-[0]">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.39961 7.45846L8.83294 12.8918C9.47461 13.5335 10.5246 13.5335 11.1663 12.8918L16.5996 7.45846"
                                            class="stroke-grayDark dark:stroke-[#C0C0C0]"
                                            stroke-width="2"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </em>
                            </button>
                        </h3>
                        <div class="accordion-content overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="<?php echo site_url("product-innovation"); ?>" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Product Innovation</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex items-center justify-between my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center gap-2">
                                    <span class="primary">
                                        <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                    </span>
                                    <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Dashboard Design</a>
                                </div>
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                        <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                        <path
                                            d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                            fill="#333333"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">3d Design and Motion Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 my-4 rounded-[12px] h-full group hover:border-primary transition-all duration-500 p-3 border border-solid border-[#31313159] dark:border-[#313131]">
                                <div class="flex items-center justify-between gap-3">
                                    <div class="flex items-center gap-2">
                                        <span class="primary">
                                            <img src="https://stageuxspace.com/wp-content/uploads/2024/08/product-innovation.svg" width="20" height="20" />
                                        </span>
                                        <a href="https://stageuxspace.com/product-innovation-2/" class="group-hover:text-primary transition-all duration-500 font-medium text-sm text-grayDark dark:text-white">Branding</a>
                                    </div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                            <rect x="0.5" y="0.5" width="53" height="53" rx="7.5" stroke="#D9D9D9"></rect>
                                            <path
                                                d="M18.9393 33.4393C18.3536 34.0251 18.3536 34.9749 18.9393 35.5607C19.5251 36.1464 20.4749 36.1464 21.0607 35.5607L18.9393 33.4393ZM36 20C36 19.1716 35.3284 18.5 34.5 18.5H21C20.1716 18.5 19.5 19.1716 19.5 20C19.5 20.8284 20.1716 21.5 21 21.5H33V33.5C33 34.3284 33.6716 35 34.5 35C35.3284 35 36 34.3284 36 33.5V20ZM21.0607 35.5607L35.5607 21.0607L33.4393 18.9393L18.9393 33.4393L21.0607 35.5607Z"
                                                fill="#333333"
                                            ></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="w-full h-[1px] bg-black/50 dark:bg-[#313131]"></div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M18.3331 13.7503V16.2503C18.3331 17.4003 17.3998 18.3337 16.2498 18.3337H10.2998C9.55811 18.3337 9.19144 17.442 9.70811 16.917L14.5998 11.917C14.7581 11.7587 14.9748 11.667 15.1914 11.667H16.2498C17.3998 11.667 18.3331 12.6003 18.3331 13.7503Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M15.3085 9.40827L13.0502 11.6666L11.0002 13.7083C10.4752 14.2333 9.5752 13.8666 9.5752 13.1249C9.5752 10.4499 9.5752 6.04994 9.5752 6.04994C9.5752 5.82494 9.66686 5.6166 9.81686 5.45827L10.5835 4.6916C11.4002 3.87493 12.7169 3.87493 13.5335 4.6916L15.3002 6.45827C16.1252 7.27493 16.1252 8.5916 15.3085 9.40827Z"
                                            fill=""
                                        ></path>
                                        <path
                                            d="M6.25033 1.66699H3.75033C2.50033 1.66699 1.66699 2.50033 1.66699 3.75033V15.0003C1.66699 15.2253 1.69199 15.4503 1.73366 15.667C1.75866 15.7753 1.78366 15.8837 1.81699 15.992C1.85866 16.117 1.90033 16.242 1.95033 16.3587C1.95866 16.367 1.95866 16.3753 1.95866 16.3753C1.96699 16.3753 1.96699 16.3753 1.95866 16.3837C2.07533 16.617 2.20866 16.842 2.36699 17.0503C2.45866 17.1587 2.55033 17.2587 2.64199 17.3587C2.73366 17.4587 2.83366 17.542 2.94199 17.6253L2.95033 17.6337C3.15866 17.792 3.38366 17.9253 3.61699 18.042C3.62533 18.0337 3.62533 18.0337 3.62533 18.042C3.75033 18.1003 3.87533 18.142 4.00866 18.1837C4.11699 18.217 4.22533 18.242 4.33366 18.267C4.55033 18.3087 4.77533 18.3337 5.00033 18.3337C5.34199 18.3337 5.69199 18.2837 6.01699 18.1753C6.10866 18.142 6.20033 18.1087 6.29199 18.067C6.58366 17.9503 6.86699 17.7837 7.11699 17.567C7.19199 17.5087 7.27533 17.4337 7.35033 17.3587L7.38366 17.3253C7.96699 16.7253 8.33366 15.9003 8.33366 15.0003V3.75033C8.33366 2.50033 7.50033 1.66699 6.25033 1.66699ZM5.00033 16.2503C4.30866 16.2503 3.75033 15.692 3.75033 15.0003C3.75033 14.3087 4.30866 13.7503 5.00033 13.7503C5.69199 13.7503 6.25033 14.3087 6.25033 15.0003C6.25033 15.692 5.69199 16.2503 5.00033 16.2503Z"
                                            fill=""
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="#333333" xmlns="http://www.w3.org/2000/svg" class="dark:fill-[#fff] group-hover/item:fill-primary transition-all duration-500">
                                        <path
                                            d="M16.1414 4.07461L11.2581 1.89961C10.5414 1.58294 9.45807 1.58294 8.74141 1.89961L3.85807 4.07461C2.62474 4.62461 2.44141 5.37461 2.44141 5.77461C2.44141 6.17461 2.62474 6.92461 3.85807 7.47461L8.74141 9.64961C9.09974 9.80794 9.54974 9.89128 9.99974 9.89128C10.4497 9.89128 10.8997 9.80794 11.2581 9.64961L16.1414 7.47461C17.3747 6.92461 17.5581 6.17461 17.5581 5.77461C17.5581 5.37461 17.3831 4.62461 16.1414 4.07461Z"
                                        ></path>
                                        <path
                                            d="M10.0003 14.2003C9.68359 14.2003 9.36693 14.1337 9.07526 14.0087L3.45859 11.5087C2.60026 11.1253 1.93359 10.1003 1.93359 9.15866C1.93359 8.81699 2.20859 8.54199 2.55026 8.54199C2.89193 8.54199 3.16693 8.81699 3.16693 9.15866C3.16693 9.60866 3.54193 10.192 3.95859 10.3753L9.57526 12.8753C9.84193 12.992 10.1503 12.992 10.4169 12.8753L16.0336 10.3753C16.4503 10.192 16.8253 9.61699 16.8253 9.15866C16.8253 8.81699 17.1003 8.54199 17.4419 8.54199C17.7836 8.54199 18.0586 8.81699 18.0586 9.15866C18.0586 10.092 17.3919 11.1253 16.5336 11.5087L10.9169 14.0087C10.6336 14.1337 10.3169 14.2003 10.0003 14.2003Z"
                                        ></path>
                                        <path
                                            d="M10.0003 18.3331C9.68359 18.3331 9.36693 18.2665 9.07526 18.1415L3.45859 15.6415C2.53359 15.2331 1.93359 14.3081 1.93359 13.2915C1.93359 12.9498 2.20859 12.6748 2.55026 12.6748C2.89193 12.6748 3.16693 12.9498 3.16693 13.2915C3.16693 13.8165 3.47526 14.2915 3.95859 14.5081L9.57526 17.0081C9.84193 17.1248 10.1503 17.1248 10.4169 17.0081L16.0336 14.5081C16.5086 14.2998 16.8253 13.8165 16.8253 13.2915C16.8253 12.9498 17.1003 12.6748 17.4419 12.6748C17.7836 12.6748 18.0586 12.9498 18.0586 13.2915C18.0586 14.3081 17.4586 15.2248 16.5336 15.6415L10.9169 18.1415C10.6336 18.2665 10.3169 18.3331 10.0003 18.3331Z"
                                        ></path>
                                    </svg>
                                    <p class="text-[12px]">Brand Designing / Visual Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="w-full h-[41px] px-4 transition-all duration-500 hover:shadow-2xl rounded-base rounded-lg mb-8 overflow-hidden flex items-center justify-center text-white"
                    style="background: linear-gradient(137deg, #ffdd00, #8f00ff, #ffdd00, #8f00ff); background-size: 400% 100%; animation: moveGradient 40s linear infinite;"
                >
                    <h2 class="text-base font-bold text-center">Free UX report</h2>
                </div>

                <div class="flex flex-col gap-3">
                    <p class="text-lg font-medium opacity-60">Follow Us</p>
                    <div class="flex items-center flex-wrap gap-2 sm:gap-3">
                        <a
                            class="w-[37px] h-[37px] sm:w-12 sm:h-12 relative flex items-center justify-center rounded-full overflow-hidden border hover:border-transparent duration-500 transition-all group border-black dark:border-[#A1A1A1]"
                            href="/"
                        >
                            <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="fill-grayDark dark:fill-[#A1A1A1] dark:group-hover:fill-grayDark transition-all duration-500 relative z-10">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M3.25391 12.7695C3.25391 7.52969 7.51703 3.26953 12.7539 3.26953C17.9918 3.26953 22.2539 7.52969 22.2539 12.7695C22.2539 18.0064 17.9918 22.2666 12.7539 22.2666C7.51703 22.2666 3.25391 18.0064 3.25391 12.7685V12.7695ZM10.8529 4.89245C11.0746 5.19328 12.5501 7.19818 13.8791 9.64443C16.7657 8.56182 17.9868 6.9201 18.1323 6.7113C16.651 5.39317 14.7368 4.66554 12.7539 4.66682C12.0988 4.66682 11.4625 4.74698 10.8529 4.89245ZM9.30521 5.43969C8.1686 5.9753 7.17148 6.76687 6.39202 7.75236C5.61255 8.73786 5.07192 9.89048 4.8125 11.1199H4.93224C5.64573 11.1199 8.7837 11.0694 12.3145 10.1303C11.3971 8.51365 10.3929 6.94781 9.3062 5.43969H9.30521ZM15.0448 12.0264C15.1052 12.1649 15.1635 12.3034 15.2209 12.443C17.9225 12.1035 20.6043 12.6478 20.8715 12.7062C20.856 10.8617 20.2092 9.07807 19.0388 7.6524C18.8676 7.88396 17.5098 9.62563 14.5074 10.8507C14.6965 11.2367 14.8776 11.6285 15.0458 12.0264H15.0448ZM12.9825 11.3772C9.3913 12.4509 5.8951 12.532 4.89859 12.532C4.76995 12.532 4.68385 12.5301 4.64328 12.5301C4.6413 12.6142 4.6413 12.6953 4.6413 12.7774C4.6413 14.8635 5.43 16.7665 6.72635 18.2023C6.90943 17.8896 9.13797 14.2024 13.3219 12.8517C13.4268 12.8151 13.5347 12.7824 13.6396 12.7537C13.4347 12.2883 13.2155 11.8292 12.9825 11.3772ZM15.7088 13.7205C16.7716 16.6378 17.2031 19.0108 17.2872 19.5046C18.2071 18.8836 18.9901 18.0809 19.5881 17.1459C20.1862 16.2109 20.5865 15.1634 20.7646 14.0679C20.4845 13.9788 18.251 13.3138 15.7088 13.7205ZM7.77234 19.181C9.19525 20.2918 10.9488 20.8948 12.7539 20.894C13.8436 20.8951 14.9223 20.6763 15.9255 20.2508C15.8038 19.5383 15.3318 17.0574 14.1928 14.0976L14.1393 14.1154C9.56151 15.7106 7.9188 18.8822 7.77234 19.181Z"
                                ></path>
                            </svg>
                            <span class="absolute top-1/2 z-0 left-1/2 rounded-full -translate-x-1/2 group-hover:scale-125 transition-all duration-500 -translate-y-1/2 bg-primary scale-0 w-full h-full"></span>
                        </a>
                        <a
                            class="w-[37px] h-[37px] sm:w-12 sm:h-12 relative flex items-center justify-center rounded-full overflow-hidden border hover:border-transparent duration-500 transition-all group border-black dark:border-[#A1A1A1]"
                            href="/"
                        >
                            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="fill-grayDark dark:fill-[#A1A1A1] dark:group-hover:fill-grayDark transition-all duration-500 relative z-10">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M6.12156 0.253906H14.0659C17.1069 0.253906 19.5938 2.67542 19.5938 5.63427V13.8735C19.5938 16.8324 17.1069 19.2539 14.0659 19.2539H6.12156C3.08255 19.2539 0.59375 16.8324 0.59375 13.8735V5.63427C0.59375 2.67542 3.08255 0.253906 6.12156 0.253906ZM3.25177 16.6711C4.01944 17.4193 5.04961 17.837 6.12156 17.8348H14.0679C15.1402 17.8374 16.1708 17.4196 16.9387 16.6711C17.316 16.3096 17.6165 15.8757 17.8221 15.3954C18.0277 14.915 18.1341 14.398 18.1351 13.8755V5.63526C18.1351 4.58531 17.7096 3.59276 16.9387 2.84167C16.1708 2.09238 15.1398 1.67388 14.0669 1.67594H6.12255C5.04193 1.67594 4.02464 2.09156 3.25177 2.84167C2.87454 3.20283 2.57406 3.6364 2.36832 4.11641C2.16257 4.59642 2.05579 5.11301 2.05437 5.63526V13.8755C2.05536 14.9265 2.48089 15.921 3.25177 16.6711ZM14.1995 4.51109C14.1995 3.84411 14.7547 3.3038 15.4385 3.3038C16.1233 3.3038 16.6774 3.84411 16.6774 4.51109C16.6774 5.17708 16.1233 5.71443 15.4385 5.71443C14.7557 5.71443 14.1995 5.17708 14.1995 4.51109ZM4.88854 9.68167C4.88854 6.86927 7.23089 4.58927 10.1195 4.58927C13.0091 4.58927 15.3514 6.86927 15.3514 9.68167C15.3514 12.4941 13.0081 14.7741 10.1195 14.7741C7.23089 14.7741 4.88854 12.4941 4.88854 9.68167ZM6.66979 9.68464C6.66979 11.5263 8.20365 13.0205 10.0967 13.0205C11.9868 13.0205 13.5207 11.5263 13.5207 9.68464C13.5207 7.84401 11.9868 6.35172 10.0967 6.35172C8.20365 6.35172 6.66979 7.84401 6.66979 9.68464Z"
                                ></path>
                            </svg>
                            <span class="absolute top-1/2 z-0 left-1/2 rounded-full -translate-x-1/2 group-hover:scale-125 transition-all duration-500 -translate-y-1/2 bg-primary scale-0 w-full h-full"></span>
                        </a>
                        <a
                            class="w-[37px] h-[37px] sm:w-12 sm:h-12 relative flex items-center justify-center rounded-full overflow-hidden border hover:border-transparent duration-500 transition-all group border-black dark:border-[#A1A1A1]"
                            href="/"
                        >
                            <svg width="21" height="15" viewBox="0 0 21 15" class="fill-grayDark dark:fill-[#A1A1A1] dark:group-hover:fill-grayDark transition-all duration-500 relative z-10" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M0 0.160156H6.2413C7.8187 0.183906 8.93297 0.667812 9.59005 1.6099C9.98292 2.18781 10.1828 2.87656 10.1828 3.68604C10.1828 4.51531 9.98292 5.18031 9.58411 5.68797C9.36245 5.97099 9.03391 6.22927 8.59948 6.46083C9.25953 6.71219 9.75531 7.11396 10.0918 7.6612C10.4253 8.20844 10.5945 8.87245 10.5945 9.65422C10.5945 10.4597 10.4035 11.1831 10.0185 11.8224C9.78408 12.2338 9.47343 12.5969 9.10318 12.8921C8.67683 13.2309 8.17685 13.4648 7.64354 13.5749C7.04434 13.7017 6.43316 13.763 5.82073 13.758H0V0.160156ZM2.5749 2.5213V5.51974H5.71187C6.27594 5.51974 6.73016 5.40792 7.07948 5.18328C7.42979 4.95766 7.60396 4.55984 7.60396 3.98984C7.60396 3.35651 7.37437 2.93693 6.91125 2.73406C6.51146 2.59057 6.0038 2.5213 5.38432 2.5213H2.5749ZM2.5749 7.77203V11.3998H5.7099C6.27 11.3998 6.70641 11.3207 7.01812 11.1594C7.58516 10.8645 7.86818 10.2955 7.86818 9.46224C7.86818 8.7537 7.59208 8.26979 7.04583 8.00458C6.73708 7.85615 6.3076 7.77896 5.75344 7.77203H2.5749ZM13.3594 2.48766H18.8931V0.795468H13.3594V2.48766ZM12.7448 4.82901C13.6226 3.90177 14.7606 3.43766 16.1609 3.43766C16.9921 3.43766 17.7412 3.59401 18.4072 3.90771C19.0722 4.22141 19.6224 4.71917 20.0559 5.39505C20.4497 5.99276 20.7031 6.68646 20.8189 7.47318C20.8881 7.93729 20.9129 8.6013 20.9 9.47015H13.9442C13.9818 10.4795 14.3143 11.1861 14.9417 11.5938C15.3247 11.8432 15.7848 11.9718 16.3192 11.9718C16.8902 11.9718 17.3504 11.8184 17.7066 11.5097C17.9215 11.3149 18.0958 11.0795 18.2192 10.817H20.7714C20.7021 11.4137 20.3933 12.0213 19.8451 12.6348C18.9891 13.6126 17.7917 14.1014 16.2509 14.1014C15.0158 14.1146 13.8188 13.6745 12.8864 12.8644C11.9156 12.0411 11.4297 10.6972 11.4297 8.84078C11.4297 7.09713 11.8681 5.7612 12.7448 4.82901ZM14.6686 6.17781C14.3183 6.56375 14.0946 7.0813 14.0046 7.73443H18.3063C18.2598 7.03677 18.0401 6.50833 17.6413 6.14516C17.2435 5.78495 16.7487 5.60385 16.1589 5.60385C15.5186 5.60385 15.0209 5.79484 14.6686 6.17781Z"
                                ></path>
                            </svg>
                            <span class="absolute top-1/2 z-0 left-1/2 rounded-full -translate-x-1/2 group-hover:scale-125 transition-all duration-500 -translate-y-1/2 bg-primary scale-0 w-full h-full"></span>
                        </a>
                        <a
                            class="w-[37px] h-[37px] sm:w-12 sm:h-12 relative flex items-center justify-center rounded-full overflow-hidden border hover:border-transparent duration-500 transition-all group border-black dark:border-[#A1A1A1]"
                            href="/"
                        >
                            <svg width="20" height="13" viewBox="0 0 20 13" xmlns="http://www.w3.org/2000/svg" class="fill-grayDark dark:fill-[#A1A1A1] dark:group-hover:fill-grayDark transition-all duration-500 relative z-10">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M19.9214 0.820312L13.8454 12.6953H8.14042L10.6827 7.77412H10.5679C8.46995 10.4965 5.34188 12.2886 0.882812 12.6953V7.8424C0.882812 7.8424 3.73479 7.67417 5.41214 5.91073H0.882812V0.820312H5.97323V5.00625H6.08703L8.16911 0.820312H12.0186V4.98052H12.1324L14.2907 0.820312H19.9214Z"
                                ></path>
                            </svg>
                            <span class="absolute top-1/2 z-0 left-1/2 rounded-full -translate-x-1/2 group-hover:scale-125 transition-all duration-500 -translate-y-1/2 bg-primary scale-0 w-full h-full"></span>
                        </a>
                        <a
                            class="w-[37px] h-[37px] sm:w-12 sm:h-12 relative flex items-center justify-center rounded-full overflow-hidden border hover:border-transparent duration-500 transition-all group border-black dark:border-[#A1A1A1]"
                            href="/"
                        >
                            <svg width="15" height="15" viewBox="0 0 15 15" class="fill-grayDark dark:fill-[#A1A1A1] dark:group-hover:fill-grayDark transition-all duration-500 relative z-10" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.32292 14.0935H0.15625V4.59349H3.32292V14.0935ZM1.73958 3.32682C1.31966 3.32682 0.91693 3.16001 0.619998 2.86308C0.323065 2.56614 0.15625 2.16342 0.15625 1.74349C0.15625 1.32356 0.323065 0.920837 0.619998 0.623904C0.91693 0.326971 1.31966 0.160156 1.73958 0.160156C2.15951 0.160156 2.56224 0.326971 2.85917 0.623904C3.1561 0.920837 3.32292 1.32356 3.32292 1.74349C3.32292 2.16342 3.1561 2.56614 2.85917 2.86308C2.56224 3.16001 2.15951 3.32682 1.73958 3.32682ZM14.7229 14.0935H11.6799V9.47015C11.6799 8.36776 11.6592 6.94969 10.0966 6.94969C8.5113 6.94969 8.26787 8.15005 8.26787 9.39099V14.0935H5.22391V4.58656H8.14615V5.88589H8.18771C8.59344 5.13875 9.58797 4.35104 11.0694 4.35104C14.1539 4.35104 14.7239 6.32031 14.7239 8.87938V14.0945L14.7229 14.0935Z"
                                ></path>
                            </svg>
                            <span class="absolute top-1/2 z-0 left-1/2 rounded-full -translate-x-1/2 group-hover:scale-125 transition-all duration-500 -translate-y-1/2 bg-primary scale-0 w-full h-full"></span>
                        </a>
                        <a
                            class="w-[37px] h-[37px] sm:w-12 sm:h-12 relative flex items-center justify-center rounded-full overflow-hidden border hover:border-transparent duration-500 transition-all group border-black dark:border-[#A1A1A1]"
                            href="/"
                        >
                            <svg width="19" height="15" viewBox="0 0 19 15" class="fill-grayDark dark:fill-[#A1A1A1] dark:group-hover:fill-grayDark transition-all duration-500 relative z-10" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.66698 10.2593C7.66698 9.48047 7.25927 8.21875 6.29443 8.21875C5.32958 8.21875 4.92089 9.48047 4.92089 10.2593C4.92089 11.0391 5.32958 12.3008 6.29443 12.3008C7.25927 12.3008 7.66698 11.0391 7.66698 10.2593ZM18.5781 8.4038C18.5781 6.84521 18.1328 5.36083 17.1314 4.13672C17.3164 3.57958 17.3906 2.98583 17.3906 2.35547C17.3906 1.57568 17.2056 1.16797 16.8711 0.425781C15.2017 0.425781 14.125 0.759271 12.8633 1.76172C11.8984 1.50146 10.8594 1.39062 9.85792 1.39062C8.78125 1.39062 7.66797 1.53906 6.59229 1.76172C5.29297 0.759271 4.21729 0.425781 2.54687 0.425781C2.17578 1.16797 1.99073 1.57568 1.99073 2.35547C1.99073 2.98583 2.10156 3.57958 2.2876 4.17333C1.24854 5.36083 0.765625 6.84521 0.765625 8.4038C0.765625 9.5913 0.951667 10.853 1.50781 11.9297C2.95557 14.7866 7.07422 14.6758 9.85792 14.6758C12.6406 14.6758 16.5 14.75 17.9102 11.9297C18.4297 10.8164 18.5781 9.5913 18.5781 8.4038ZM16.1665 10.2593C16.1665 13.5249 13.1978 14.0078 10.6001 14.0078H8.78125C6.18359 14.0078 3.21484 13.5249 3.21484 10.2593C3.21484 8.62646 4.21729 7.2163 5.96094 7.2163C6.66651 7.2163 7.33448 7.32812 8.03906 7.43896C9.14743 7.5869 10.2705 7.5869 11.3789 7.43896C12.0845 7.32812 12.7524 7.2163 13.457 7.2163C15.2017 7.2163 16.1665 8.62646 16.1665 10.2593ZM13.1235 8.21875C12.1587 8.21875 11.75 9.48047 11.75 10.2593C11.75 11.0391 12.1587 12.3008 13.1235 12.3008C14.0508 12.3008 14.4595 11.0391 14.4595 10.2593C14.4595 9.48047 14.0508 8.21875 13.1235 8.21875Z"
                                ></path>
                            </svg>
                            <span class="absolute top-1/2 z-0 left-1/2 rounded-full -translate-x-1/2 group-hover:scale-125 transition-all duration-500 -translate-y-1/2 bg-primary scale-0 w-full h-full"></span>
                        </a>
                        <a
                            class="w-[37px] h-[37px] sm:w-12 sm:h-12 relative flex items-center justify-center rounded-full overflow-hidden border hover:border-transparent duration-500 transition-all group border-black dark:border-[#A1A1A1]"
                            href="/"
                        >
                            <svg width="25" height="10" viewBox="0 0 25 10" class="fill-grayDark dark:fill-[#A1A1A1] dark:group-hover:fill-grayDark transition-all duration-500 relative z-10" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5156 5.94662V3.3737H11.2292V5.94662H12.5156ZM24.0938 0.800781H0.9375V8.51953H7.36979V9.80599H12.5156V8.51953H24.0938V0.800781ZM7.36979 2.08724V7.23307H6.08333V3.3737H4.79688V7.23307H2.22396V2.08724H7.36979ZM13.8021 2.08724V7.23307H11.2292V8.51953H8.65625V2.08724H13.8021ZM22.8073 2.08724V7.23307H21.5208V3.3737H20.2344V7.23307H18.9479V3.3737H17.6615V7.23307H15.0885V2.08724H22.8073Z"
                                ></path>
                            </svg>
                            <span class="absolute top-1/2 z-0 left-1/2 rounded-full -translate-x-1/2 group-hover:scale-125 transition-all duration-500 -translate-y-1/2 bg-primary scale-0 w-full h-full"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col overflow-x-hidden gap-16 sm:gap-24 md:gap-32 lg:gap-[150px]">