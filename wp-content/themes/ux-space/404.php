<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div id="main__content">
<!-- ======= Main Wrapper Start ======= -->
<main class="main-wrapper">
  <!-- ======= 404 Start ======= -->
  <section
    class="error error-bg pt-80 pb-50"
    data-bg-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/error-bg.png"
  >
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="error-inner">
            <div class="row">
              <div class="col-lg-5 mx-auto mb-50">
                <div class="error__thumb">
                  <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/error/error-404-image.png"
                    alt="Error"
                    width="835"
                    height="722"
                    class="error-thumb wow fadeInDownMedium animated"
                    data-wow-delay=".6s"
                    data-wow-duration="1.5s"
                  />
                  <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/error/error-404-image-2.png"
                    alt="Error"
                    class="error-thumb error-thumb--two wow fadeInUpMedium animated"
                    data-wow-delay=".6s"
                    data-wow-duration="1.5s"
                  />
                </div>
              </div>
              <div class="col-12 mx-auto">
                <div class="error-content mb-30">
                  <h1 class="heading">404</h1>
                  <h3 class="paragraph">
                    Sorry! Page Not Found!
                  </h3>
                  <a
                    href="<?php home_url(); ?>"
                    class="btn btn--common btn--primary rt-button-animation-out"
                    data-animation="fadeInUp"
                    data-delay=".8s"
                  >
                    Back to home
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="34px"
                      height="16px"
                      viewBox="0 0 34.53 16"
                      xml:space="preserve"
                    >
                      <rect
                        class="rt-button-line"
                        y="7.6"
                        width="34"
                        height=".4"
                      ></rect>
                      <g class="rt-button-cap-fake">
                        <path
                          class="rt-button-cap"
                          d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"
                        ></path>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= 404 End ======= -->
</main>
<!-- ======= Main Wrapper End ======= -->
</div>

<?php
get_footer();
