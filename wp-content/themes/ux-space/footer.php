<?php
/**
* The template for displaying the footer
*
* Contains the opening of the #site-footer div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Twenty
* @since Twenty Twenty 1.0
*/
?>
<!-- Footer -->
<?php
//$footerLogo = WPCustomClass::GetAcfImage(get_field("acf_opt_footer_logo", "option"),"logo.png");

  /*if( ! is_page( 'contact-us' ) )
  {
    ?>
      <div class="flex flex-col">
          <div class="pt-[120px] px-4 relative flex items-center justify-center text-white xl:h-screen">
              <div
                  class="w-full flex flex-col gap-[60px] xl:flex-row justify-between relative z-10 max-w-screen-2xl px-5 py-4 lg:p-[60px] xl:h-[669px] mx-auto rounded-xl backdrop-blur-[6.5px] border-[1.5px] dark:border-[#333333] bg-white dark:bg-[#000c] shadow-[0px_20px_28px_0px_#0000000d] dark:bg-[radial-gradient(50%_50%_at_50%_0.5%,transparent,#000000cc_100%)]"
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
                              WHAT OUR CLIENT SAY ABOUT US
                          </h3>
                          <div class="w-full h-[1px] bg-black/50 dark:bg-[#A8A7A7]"></div>
                          <p class="sm:text-xl font-medium dark:font-normal sm:leading-[1.8] text-[#010101] dark:text-white">
                              UX research involves gathering and analyzing user insights to inform the design and development of products, ensuring they meet user needs and preferences effectively. It encompasses methods such as user
                              interviews, surveys, and usability testing.
                          </p>
                      </div>
                      <div class="flex gap-4 items-center">
                          <div class="w-12 h-12 sm:w-[60px] sm:h-[60px] rounded-full bg-black/10 dark:bg-white/10"></div>
                          <div class="flex flex-col gap-1">
                              <p class="sm:text-[26px] font-extrabold leading-[1.26] capitalize text-grayDark dark:text-white">Angelina Alexander<!-- --></p>
                              <p class="text-black dark:text-white/50 text-lg leading-[1.83] capitalize">
                                  America
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <?php
  }*/
?>

<!-- faq section -->
<!-- <div class="py-[100px] bg-[#FAFAFA] dark:bg-[#0D0A0A]">
    <div class="flex flex-col max-w-screen-xl px-5 w-full mx-auto gap-16">
        <div class="flex flex-col items-center justify-center h-full gap-4 sm:gap-6 md:gap-8 text-center">
            <h2 class="flex flex-wrap items-center text-center justify-center gap-2 text-lg sm:text-2xl md:text-4xl xl:text-[54px] font-semibold max-w-5xl dark:text-white" style="opacity: 1;">
                Frequently Asked Questions
            </h2>
            <p class="text-sm leading-6 sm:text-base sm:leading-8 md:text-lg md:leading-9 lg:text-xl xl:text-2xl xl:leading-10 md:max-w-5xl text-grayDark dark:text-white">
                Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
        </div>
        <div class="flex flex-col gap-[60px]">
            <div>
                <div class="w-full">
                    <div class="rounded-[4px] mb-5 bg-white dark:bg-[#282525] shadow-cardShadow">
                        <button type="button" class="accordion-button w-full flex items-center justify-between font-semibold text-grayDark dark:text-white text-sm md:text-xl md:leading-[1.5] leading-[1.7] md:p-6 p-5">
                            How much does it cost to develop an end to end digital product?
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
                                <p class="text-lg leading-[1.8] opacity-80 font-normal text-[#5A5A5A] dark:text-[#ddd]">
                                    he cost of a full-cycle software product development depends on many factors, such as the development platform, app categories, app complexity, the country of the developer, and the number of
                                    features you need in your app. Our with your requirements to get the app development cost estimation. he cost of a full-cycle software product development depends on many factors, such as the
                                    development platform, app categories, app complexity, the country of the developer, and the number of features you need in your app. Our with your requirements to get the app development cost
                                    estimation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-[4px] mb-5 bg-white dark:bg-[#282525] shadow-cardShadow">
                        <button type="button" class="accordion-button w-full flex items-center justify-between font-semibold text-grayDark dark:text-white text-sm md:text-xl md:leading-[1.5] leading-[1.7] md:p-6 p-5">
                            How long does it take to build a digital product?
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
                                <p class="text-lg leading-[1.8] opacity-80 font-normal text-[#5A5A5A] dark:text-[#ddd]">
                                    he cost of a full-cycle software product development depends on many factors, such as the development platform, app categories, app complexity, the country of the developer, and the number of
                                    features you need in your app. Our with your requirements to get the app development cost estimation. he cost of a full-cycle software product development depends on many factors, such as the
                                    development platform, app categories, app complexity, the country of the developer, and the number of features you need in your app. Our with your requirements to get the app development cost
                                    estimation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-[4px] mb-5 bg-white dark:bg-[#282525] shadow-cardShadow">
                        <button class="accordion-button w-full flex items-center justify-between font-semibold text-grayDark dark:text-white text-sm md:text-xl md:leading-[1.5] leading-[1.7] md:p-6 p-5">
                            Why choose Artsketchers for full cycle product development?
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
                                <p class="text-lg leading-[1.8] opacity-80 font-normal text-[#5A5A5A] dark:text-[#ddd]">
                                    he cost of a full-cycle software product development depends on many factors, such as the development platform, app categories, app complexity, the country of the developer, and the number of
                                    features you need in your app. Our with your requirements to get the app development cost estimation. he cost of a full-cycle software product development depends on many factors, such as the
                                    development platform, app categories, app complexity, the country of the developer, and the number of features you need in your app. Our with your requirements to get the app development cost
                                    estimation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-[4px] mb-5 bg-white dark:bg-[#282525] shadow-cardShadow">
                        <button class="accordion-button w-full flex items-center justify-between font-semibold text-grayDark dark:text-white text-sm md:text-xl md:leading-[1.5] leading-[1.7] md:p-6 p-5">
                            Who will be part of the full cycle product development process?
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
                                <p class="text-lg leading-[1.8] opacity-80 font-normal text-[#5A5A5A] dark:text-[#ddd]">
                                    he cost of a full-cycle software product development depends on many factors, such as the development platform, app categories, app complexity, the country of the developer, and the number of
                                    features you need in your app. Our with your requirements to get the app development cost estimation. he cost of a full-cycle software product development depends on many factors, such as the
                                    development platform, app categories, app complexity, the country of the developer, and the number of features you need in your app. Our with your requirements to get the app development cost
                                    estimation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-[4px] bg-white dark:bg-[#282525] shadow-cardShadow">
                        <button class="accordion-button w-full flex items-center justify-between font-semibold text-grayDark dark:text-white text-sm md:text-xl md:leading-[1.5] leading-[1.7] md:p-6 p-5">
                            How do you manage full cycle product development?
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
                                <p class="text-lg leading-[1.8] opacity-80 font-normal text-[#5A5A5A] dark:text-[#ddd]">
                                    he cost of a full-cycle software product development depends on many factors, such as the development platform, app categories, app complexity, the country of the developer, and the number of
                                    features you need in your app. Our with your requirements to get the app development cost estimation. he cost of a full-cycle software product development depends on many factors, such as the
                                    development platform, app categories, app complexity, the country of the developer, and the number of features you need in your app. Our with your requirements to get the app development cost
                                    estimation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
           class="w-full h-[150px] px-4 hover:scale-105 hover:rotate-2 transition-all duration-500 hover:shadow-2xl rounded-lg overflow-hidden flex items-center justify-center text-white"
           style="background: linear-gradient(137deg, #faff00, #8f00ff, #faff00, #8f00ff); background-size: 400% 100%; animation: moveGradient 40s linear infinite;"
           >
           <h2 class="text-2xl lg:text-[32px] font-bold text-center">
              <?php echo get_field("acf_opt_fbs_faq_footer_content","option"); ?>
           </h2>
        </div>
    </div>
</div> -->

<!-- Footer -->
<div class="w-full dark:bg-[#100D0D] pt-8 sm:pt-16 lg:pt-24">
  <div class="max-w-screen-2xl px-5 mx-auto">
    <div class="flex flex-col gap-[60px]">
      <div class="flex flex-col gap-[26px]">
        <div class="overflow-hidden">
          <div>
            <?php echo get_field("acf_opt_fs_footer_logo", "option"); ?>
          </div>
        </div>
        <div class="overflow-hidden">
          <p class="leading-7 max-w-2xl">
            <?php echo get_field("acf_opt_fs_footer_content", "option"); ?>
          </p>
        </div>
      </div>
      <div class="flex flex-col gap-[35px]">
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
          <div class="flex flex-col gap-3 order-2 md:order-1">
            <a href="#" class="text-grayDark group relative dark:text-white font-medium text-lg">
              <div class="relative overflow-hidden">
                <span
                  class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all flex items-center duration-500 pointer-events-none"
                  >
                  Work
                </span>
                <span
                  class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full flex items-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                  >
                  Work
                </span>
              </div>
            </a>
            <a href="#" class="text-grayDark group relative dark:text-white font-medium text-lg">
              <div class="relative overflow-hidden">
                <span
                  class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all flex items-center duration-500 pointer-events-none"
                  >
                  Services
                </span>
                <span
                  class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full flex items-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                  >
                  Services
                </span>
              </div>
            </a>
            <a href="#" class="text-grayDark group relative dark:text-white font-medium text-lg">
              <div class="relative overflow-hidden">
                <span
                  class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all flex items-center duration-500 pointer-events-none"
                  >
                  Process
                </span>
                <span
                  class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full flex items-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                  >
                  Process
                </span>
              </div>
            </a>
            <a href="<?php echo site_url( 'blog' ); ?>" class="text-grayDark group relative dark:text-white font-medium text-lg">
              <div class="relative overflow-hidden">
                <span
                  class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all flex items-center duration-500 pointer-events-none"
                  >
                  Blogs
                </span>
                <span
                  class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full flex items-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                  >
                  Blogs
                </span>
              </div>
            </a>
            <a href="<?php echo site_url( 'contact-us' ); ?>" class="text-grayDark group relative dark:text-white font-medium text-lg">
              <div class="relative overflow-hidden">
                <span
                  class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all flex items-center duration-500 pointer-events-none"
                  >
                  Contact Us
                </span>
                <span
                  class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full flex items-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                  >
                  Contact Us
                </span>
              </div>
            </a>
          </div>
          <div class="flex flex-col gap-[30px] order-3 md:order-2">
            <div class="flex flex-col gap-5">
              <p class="text-grayDark group relative dark:text-white font-medium text-lg">
                <?php echo get_field("acf_opt_fs_drop_line_title", "option"); ?>
              </p>
              <a class="text-lg relative self-start text-grayDark dark:text-primary group transition-all duration-500" href="/">
                <div class="relative overflow-hidden">
                  <span
                    class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all grid place-content-center duration-500 pointer-events-none"
                    >
                    <?php echo get_field("acf_opt_fs_drop_line_detail", "option"); ?>
                  </span>
                  <span
                    class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full grid place-content-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                    >
                    <?php echo get_field("acf_opt_fs_drop_line_detail", "option"); ?>
                  </span>
                </div>
                <span
                  class="absolute -bottom-0.5 left-0 w-full h-[1px] origin-right group-hover:origin-left scale-x-0 bg-primary transition-transform duration-500 group-hover:scale-x-100"
                ></span>
              </a>
            </div>
            <div class="flex flex-col gap-5">
              <p class="text-grayDark group relative dark:text-white font-medium text-lg">
                <?php echo get_field("acf_opt_fs_conversation_text", "option"); ?>
              </p>
              <a class="text-lg relative self-start text-grayDark dark:text-primary group transition-all duration-500" href="/">
                <div class="relative overflow-hidden">
                  <span
                    class="group-hover:translate-y-full w-full h-full group-hover:rotate-[0deg] origin-bottom-left transition-all grid place-content-center duration-500 pointer-events-none"
                    >
                    <?php echo get_field("acf_opt_fs_conversation_detail", "option"); ?>
                  </span>
                  <span
                    class="absolute bottom-full left-0 -rotate-[0deg] group-hover:rotate-0 origin-bottom-left w-full h-full grid place-content-center group-hover:translate-y-full transition-all duration-500 pointer-events-none"
                    >
                    <?php echo get_field("acf_opt_fs_conversation_detail", "option"); ?>
                  </span>
                </div>
                <span
                  class="absolute -bottom-0.5 left-0 w-full h-[1px] origin-right group-hover:origin-left scale-x-0 bg-primary transition-transform duration-500 group-hover:scale-x-100"
                ></span>
              </a>
            </div>
          </div>
          <div class="flex flex-col gap-5 order-4 md:order-3">
            <p class="text-grayDark text-lg dark:text-white font-medium">
              <?php echo get_field("acf_opt_fs_address_title", "option"); ?>
            </p>
            <div class="flex flex-col gap-10">
              <p class="text-grayDark dark:text-[#A1A1A1]">
                <?php echo get_field("acf_opt_fs_address_detail", "option"); ?>
              </p>
            </div>
          </div>
          <!-- Footer Form -->
          <div class="flex flex-col gap-[30px] md:col-span-2 xl:col-span-2 order-1 md:order-4">
            <p class="text-[30px] font-medium">
              <?php echo get_field("acf_opt_fs_subscription_title", "option"); ?>
            </p>
            <form class="flex flex-col gap-1">
              <label class="leading-[37.4px] text-lg font-semibold" for="email-footer">Email Address *</label>
              <div class="grid grid-cols-[2fr_1fr] gap-1">
                <input
                type="email"
                id="email-footer"
                placeholder="Enter your email"
                class="w-full h-[56px] border-[1px] border-[#C6C6C6] rounded text-lg px-5 text-content dark:bg-[#202020] dark:border-[#4b4b4b] dark:text-white outline-offset-0 placeholder:text-white/40 focus:border-primary outline-none focus:outline-4 transition-all duration-500 focus:outline-primary/20"
                />
                <button
                class="relative h-[56px] capitalize text-lg w-full z-10 overflow-hidden hover:shadow-gradientShadow rounded group font-semibold text-black bg-primary transition-all duration-300"
                >
                <span> Subscribe </span>
                <span
                  class="absolute w-full h-10 bg-white transition-all duration-300 -left-2/3 group-hover:left-2/3 group-hover:bottom-full pointer-events-none blur-2xl -bottom-full rotate-45"
                ></span>
                </button>
              </div>
            </form>
            <div class="flex flex-col gap-3">
              <p class="text-lg font-medium"><?php echo get_field("acf_opt_sus_section_title","option"); ?></p>
              <div class="flex items-center flex-wrap gap-3 sm:gap-4">
                <?php
                  if( have_rows('acf_opt_sus_section_listing', "option") ):
                    while( have_rows('acf_opt_sus_section_listing', "option") ) : the_row();
                      ?>
                        <a class="w-[37px] h-[37px] sm:w-12 sm:h-12 relative flex items-center justify-center rounded-full overflow-hidden border hover:border-transparent duration-500 transition-all group border-black dark:border-[#A1A1A1]" href="<?php echo get_sub_field("acf_opt_sus_list_url"); ?>">
                          <?php echo get_sub_field("acf_opt_sus_list_icon"); ?>
                          <span class="absolute top-1/2 z-0 left-1/2 rounded-full -translate-x-1/2 group-hover:scale-125 transition-all duration-500 -translate-y-1/2 bg-primary scale-0 w-full h-full"></span>
                      </a>
                      <?php
                    endwhile;
                  endif;
                ?>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Brands -->
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 items-center gap-6 md:gap-8 w-full">
        <?php
          if( have_rows('acf_opt_fbs_image_listing',"option") ):
            while( have_rows('acf_opt_fbs_image_listing',"option") ) : the_row();
              ?>
                <div class="bg-[#F4F4F4] rounded-lg flex items-center justify-center h-[90px] p-4"><?php echo get_sub_field("acf_opt_fbs_listing_image"); ?></div>
              <?php
            endwhile;
          endif;
        ?>
      </div>
      <!-- Footer Bottom -->
      <div class="flex gap-8 border-t py-5 border-[#E3E3E3] dark:border-[#484848] justify-between items-center">
        <p class="text-grayDark dark:text-[#A1A1A1]">
          ©<?php echo date("Y"); ?> UX Space. All Rights Reserved
        </p>
        <div class="flex gap-5 text-sm text-grayDark dark:text-[#A1A1A1]">
          <a class="hover:text-primary transition-all duration-500" href="<?php echo site_url("terms-condition"); ?>">Terms &amp; Condition</a>
          <a class="hover:text-primary transition-all duration-500" href="<?php echo site_url("privacy-policy"); ?>">Privacy Policy</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php wp_footer(); ?>
<script>
(function () {
const locomotiveScroll = new LocomotiveScroll();
})();
</script>
</body>
</html>