<?php
/*
	Template Name: Contact Us Page Template
*/
get_header();
$serviceBannerImage = get_stylesheet_directory_uri()."/assets/images/bg/inner-bg-6.jpg";

if( has_post_thumbnail() )
{
  $serviceBannerImage = get_the_post_thumbnail_url( get_the_ID(), 'large' );
}
?>
<div class="flex flex-col overflow-x-hidden gap-16 sm:gap-24 md:gap-32 lg:gap-[150px]">
    <!-- Form Section -->
    <form id="frmcontactform" method="post">
      <div class="flex flex-col">
          <div class="pt-[120px] px-4 relative flex items-center justify-center text-white xl:h-screen">
              <div
                  class="w-full flex flex-col gap-[60px] xl:flex-row justify-between relative z-10 max-w-screen-2xl px-5 py-4 lg:p-[60px] xl:h-[669px] mx-auto rounded-xl backdrop-blur-[6.5px] border-[1.5px] dark:border-[#4B4B4B] bg-white dark:bg-[#242424] shadow-[0px_20px_28px_0px_#0000000d]"
              >
                  <div class="flex flex-col flex-1 items-start gap-6">
                      <h2 class="flex flex-wrap font-criteria gap-2 text-[40px] font-semibold leading-[1.6] max-w-2xl text-black dark:text-white text-left items-start justify-start">
                          Ready to discussyour project with us?
                      </h2>
                      <p class="text-lg text-black/80 font-light dark:text-white leading-[1.6] max-w-2xl text-left items-start justify-start">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
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
                                  required=""
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
                                      required=""
                                      name="txtaboutproject"
                                      id="txtaboutproject"
                                  />
                                  <label class="dark:text-white text-black pb-2 text-lg p-0 absolute top-0 flex left-0 leading-6 transition-all duration-500 pointer-events-none">
                                      <span style="transition-delay: 0s;" class="block">A</span><span style="transition-delay: 0.03s;" class="block">b</span><span style="transition-delay: 0.06s;" class="block">o</span>
                                      <span style="transition-delay: 0.09s;" class="block">u</span><span style="transition-delay: 0.12s;" class="block">t</span><span class="block">&nbsp;</span>
                                      <span style="transition-delay: 0.21s;" class="block">P</span><span style="transition-delay: 0.24s;" class="block">r</span><span style="transition-delay: 0.27s;" class="block">o</span>
                                      <span style="transition-delay: 0.3s;" class="block">j</span><span style="transition-delay: 0.32999999999999996s;" class="block">e</span><span style="transition-delay: 0.36s;" class="block">c</span>
                                      <span style="transition-delay: 0.39s;" class="block">t</span><span class="block">&nbsp;</span>
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
                                      <span class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all grid place-content-center duration-500 pointer-events-none">Privacy Policy</span>
                                      <span
                                          class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full grid place-content-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                                      >
                                          Privacy Policy
                                      </span>
                                  </div>
                                  <span class="absolute -bottom-0.5 left-0 w-full h-[1px] origin-right group-hover:origin-left scale-x-0 bg-[#72B5E0] dark:bg-primary transition-transform duration-500 group-hover:scale-x-100"></span>
                              </a>
                          </div>
                          <button class="relative capitalize text-base px-6 py-3 z-10 overflow-hidden hover:shadow-gradientShadow hover:scale-105 rounded-lg group font-bold text-black bg-primary transition-all duration-300 w-full sm:w-auto" id="btnsubmit">
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
                  <div class="xl:w-[524px] gap-5 sm:gap-10 h-full border dark:border-grayDark border-transparent flex flex-col justify-between rounded-lg p-4 md:p-10 bg-primary">
                      <div class="flex flex-col gap-4">
                          <h3 class="text-base sm:text-[36px] font-bold sm:leading-[1.25] uppercase text-black">
                              WHAT OUR CLIENT SAY ABOUT US
                          </h3>
                          <div class="w-full h-[1px] bg-black"></div>
                          <p class="text-sm sm:text-xl font-medium dark:font-normal sm:leading-[1.8] text-[#010101]">
                              UX research involves gathering and analyzing user insights to inform the design and development of products, ensuring they meet user needs and preferences effectively. It encompasses methods such as user
                              interviews, surveys, and usability testing.
                          </p>
                          <div class="w-full h-[1px] bg-black"></div>
                      </div>
                      <div class="flex gap-4 items-center">
                          <div class="w-12 h-12 sm:w-[60px] sm:h-[60px] rounded-full bg-black"></div>
                          <div class="flex flex-col gap-1">
                              <p class="text-base sm:text-[26px] font-extrabold leading-[1.26] capitalize text-grayDark">Angelina Alexander<!-- --></p>
                              <p class="text-black text-sm sm:text-lg sm:leading-[1.83] capitalize">
                                  America
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </form>
    <!-- Text Strip -->
    <div class="dark:bg-[#0D0A0A] mb-[344px] px-5 relative bg-[#FFF5B5]/90 h-20 flex items-center -rotate-1">
        <div class="absolute -bottom-4 translate-y-full inline-block right-4 2xl:right-[calc((100vw-1536px)/2)] z-0">
            <svg width="486" class="relative" height="344" viewBox="0 0 486 344" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    id="path1"
                    d="M145.503 157.061L146.822 156.791L147.068 155.468C150.775 135.577 164.948 119.224 183.846 112.079C188.884 110.174 195.838 109.059 202.859 108.794C209.88 108.529 216.749 109.123 221.603 110.499C227.2 112.086 232.458 114.444 237.235 117.473L238.917 118.539L239.99 116.862C252.609 97.1411 275.03 84 300.612 84C324.076 84 344.88 95.0338 357.904 112.071L358.835 113.289L360.253 112.706C367.294 109.81 375.028 108.207 383.158 108.207C412.111 108.207 436.138 128.548 441.213 155.33L441.466 156.664L442.8 156.921C466.624 161.508 484 179.434 484 200.459C484 219.202 470.206 235.443 450.322 242.031L448.608 242.599L448.999 244.362C449.878 248.325 450.356 252.441 450.356 256.661C450.356 288.469 423.963 314.331 391.299 314.331C381.516 314.331 372.307 311.994 364.184 307.887L362.556 307.065L361.587 308.61C349.035 328.622 326.441 342 300.618 342C273.999 342 250.801 327.766 238.513 306.691L237.498 304.949L235.764 305.978C226.843 311.276 216.364 314.325 205.151 314.325C172.494 314.325 146.094 288.457 146.094 256.655C146.094 253.075 146.444 249.574 147.085 246.169L147.449 244.235L145.52 243.84C122.051 239.035 105 221.264 105 200.448C105 179.625 122.04 161.867 145.503 157.061Z"
                    stroke="#FFDD00"
                    stroke-width="4"
                />
                <path
                    d="M138.575 154.735C145.184 153.818 144.179 151.207 146.381 145.428C150.099 139.702 153.154 131.559 154.814 124.923C157.919 112.509 156.595 99.1313 148.982 89.2749C142.45 80.8184 131.854 75.104 121.046 76.3654C118.657 76.6449 116.374 77.2656 114.209 78.1663C118.893 81.8915 122.639 86.8678 124.884 92.8981C129.371 104.946 127.264 120.665 118.433 130.722C110.385 139.887 97.9052 138.593 91.3302 129.136C84.0962 118.733 87.7909 103.645 93.7754 93.0213C96.9438 87.3981 101.24 82.349 106.333 78.6952C102.347 76.6261 97.8965 75.3576 93.2533 74.9787C82.3112 74.086 70.7859 76.2292 60.467 71.7952C38.2583 62.2532 35.4969 33.9917 46.9165 13.557C43.8095 15.7238 40.5371 17.6267 37.1322 19.1266C34.5695 20.255 33.0621 16.3358 35.5622 15.0718C41.0036 12.3222 46.0135 9.17628 50.7002 5.11777C52.4352 3.61599 54.6637 5.62918 53.9336 7.65536C52.0651 12.8383 51.349 17.7853 51.6273 23.2164C51.6755 24.1626 50.3015 24.7377 49.9925 23.7293C49.1521 20.9795 48.7463 18.117 48.7316 15.2356C40.8646 30.2496 40.5472 49.112 52.0373 61.4731C63.8278 74.1552 80.2384 69.2728 95.5459 70.7119C101.108 71.2348 106.383 73.0217 110.984 75.8823C114.543 74.1066 118.388 72.9991 122.45 72.817C133.513 72.3189 144.042 78.2092 150.781 86.8696C159.087 97.5444 160.509 112.139 156.864 125.58C154.867 132.944 151.234 141.807 146.796 147.978C143.625 153.505 145.291 155.276 138.721 155.979C137.954 156.062 137.799 154.843 138.575 154.735ZM94.0446 100.716C89.5107 112.251 89.8486 133.481 106.108 132.792C120.858 132.167 124.667 108.419 121.536 97.304C119.499 90.0695 115.171 84.4526 109.583 80.6401C102.567 85.2089 97.1733 92.7574 94.0446 100.716Z"
                    fill="#FFDD00"
                />
                <div class="absolute top-1/4 leading-[1.75] rotate-1 left-1/2 -translate-x-1/4 translate-y-1/4 dark:text-white text-center">
                    "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s"
                </div>
            </svg>
        </div>
        <div style="scrollbar-width: none;" class="w-full max-w-screen-2xl overflow-x-auto relative mx-auto flex items-center gap-10">
            <!-- Item -->
            <div class="flex items-center gap-10">
                <span>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" class="dark:hidden inline-block" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8.42866" cy="8.58502" r="8" transform="rotate(-1.09424 8.42866 8.58502)" fill="url(#paint0_linear_179_130410)" fill-opacity="0.84" />
                        <circle cx="8.43051" cy="8.58524" r="5" transform="rotate(-1.09424 8.43051 8.58524)" fill="#FFDD00" />
                        <defs>
                            <linearGradient id="paint0_linear_179_130410" x1="8.42866" y1="0.585024" x2="41.5715" y2="10.8707" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1F1F1" />
                                <stop offset="1" stop-color="#FFDD00" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <svg class="hidden dark:inline-block" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <circle cx="8.42866" cy="8.58502" r="8" transform="rotate(-1.09424 8.42866 8.58502)" fill="url(#paint0_linear_179_129519)" fill-opacity="0.84" />
                        <circle cx="8.43051" cy="8.58524" r="5" transform="rotate(-1.09424 8.43051 8.58524)" fill="#FFDD00" />
                        <defs>
                            <linearGradient id="paint0_linear_179_129519" x1="8.42866" y1="0.585024" x2="41.5715" y2="10.8707" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4B4B4B" />
                                <stop offset="1" stop-color="#FFDD00" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <span class="text-[25px] font-semibold whitespace-nowrap leading-[1.36] dark:text-white text-grayDark">We will respond to you with in 24 hours</span>
            </div>
            <div class="flex items-center gap-10">
                <span>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" class="dark:hidden inline-block" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8.42866" cy="8.58502" r="8" transform="rotate(-1.09424 8.42866 8.58502)" fill="url(#paint0_linear_179_130410)" fill-opacity="0.84" />
                        <circle cx="8.43051" cy="8.58524" r="5" transform="rotate(-1.09424 8.43051 8.58524)" fill="#FFDD00" />
                        <defs>
                            <linearGradient id="paint0_linear_179_130410" x1="8.42866" y1="0.585024" x2="41.5715" y2="10.8707" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1F1F1" />
                                <stop offset="1" stop-color="#FFDD00" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <svg class="hidden dark:inline-block" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <circle cx="8.42866" cy="8.58502" r="8" transform="rotate(-1.09424 8.42866 8.58502)" fill="url(#paint0_linear_179_129519)" fill-opacity="0.84" />
                        <circle cx="8.43051" cy="8.58524" r="5" transform="rotate(-1.09424 8.43051 8.58524)" fill="#FFDD00" />
                        <defs>
                            <linearGradient id="paint0_linear_179_129519" x1="8.42866" y1="0.585024" x2="41.5715" y2="10.8707" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4B4B4B" />
                                <stop offset="1" stop-color="#FFDD00" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <span class="text-[25px] font-semibold whitespace-nowrap leading-[1.36] text-grayDark dark:text-white">We'll sign an NDA if requested</span>
            </div>
            <div class="flex items-center gap-10">
                <span>
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" class="dark:hidden inline-block" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8.42866" cy="8.58502" r="8" transform="rotate(-1.09424 8.42866 8.58502)" fill="url(#paint0_linear_179_130410)" fill-opacity="0.84" />
                        <circle cx="8.43051" cy="8.58524" r="5" transform="rotate(-1.09424 8.43051 8.58524)" fill="#FFDD00" />
                        <defs>
                            <linearGradient id="paint0_linear_179_130410" x1="8.42866" y1="0.585024" x2="41.5715" y2="10.8707" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1F1F1" />
                                <stop offset="1" stop-color="#FFDD00" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <svg class="hidden dark:inline-block" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <circle cx="8.42866" cy="8.58502" r="8" transform="rotate(-1.09424 8.42866 8.58502)" fill="url(#paint0_linear_179_129519)" fill-opacity="0.84" />
                        <circle cx="8.43051" cy="8.58524" r="5" transform="rotate(-1.09424 8.43051 8.58524)" fill="#FFDD00" />
                        <defs>
                            <linearGradient id="paint0_linear_179_129519" x1="8.42866" y1="0.585024" x2="41.5715" y2="10.8707" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4B4B4B" />
                                <stop offset="1" stop-color="#FFDD00" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <span class="text-[25px] whitespace-nowrap font-semibold leading-[1.36] text-grayDark dark:text-white">Access to dedicated product specialists.</span>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>