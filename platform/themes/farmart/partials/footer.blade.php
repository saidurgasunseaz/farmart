<footer class="main-footer">
    <div class="about-one_bg-layer overlay-layer"
        style="background-image:url('{{ asset('assets/images/background/footer-pattern-1.png') }}')"></div>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget footer-two_logo-widget">
                                    <div class="footer-logo">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('assets/images/f-logo.png') }}" alt=""
                                                title="">
                                        </a>
                                    </div>
                                    <div class="footer-text">
                                        Embrace nature's vitality with our nourishing supplements and
                                        revitalizing skincare essentials.
                                    </div>
                                    <!-- <div class="newsletter-box">
            <form method="post" action="contact.html">
             <div class="form-group">
              <input type="email" name="search-field" value=""
               placeholder="Your Email Address" required>
              <button type="submit" class="theme-btn flaticon-leaf"></button>
             </div>
            </form>
           </div> -->
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <!-- Footer Column -->
                            <div class="footer_column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5 class="footer-title">Shop</h5>
                                    <ul class="footer-list">
                                        <li><a href="#">Essential Nutrition</a></li>
                                        <li><a href="#">Teas & Infusions</a></li>
                                        <li><a href="#">Skin & Hair Care</a></li>
                                        <li><a href="{{ url('products') }}">Other Products</a></li>
                                        <!-- <li><a href="products.html">Shop All</a></li> -->
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer_column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5 class="footer-title">Quick Links</h5>
                                    <ul class="footer-list">
                                        <li><a href="{{ url('about-us') }}">About US</a></li>
                                        <li><a href="{{ url('contact') }}">Contact US</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                        @if (auth('customer')->check())
                                            <li><a href="{{ route('customer.overview') }}">My Account</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h5 class="footer-title">Contact Info</h5>
                                    <ul class="footer-contact_list">
                                        <li><span class="icon fas fa-map-marker-alt fa-fw"></span>5-106/SY227AA1,
                                            STREET No 2, Green Lands,
                                            Manchiravula, Gandipet, Hyderabad, Telangana, India -500075.</li>
                                        <li><span class="icon fas fa-phone fa-fw"></span>+91 909-070-7085
                                            (WhatsApp)</li>
                                        <li><span class="icon fas fa-envelope fa-fw"></span>tetraelements@gmail.com
                                        </li>
                                    </ul>
                                    <!-- Social Box -->
                                    <div class="footer_socials">
                                        <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="https://youtube.com/"><i class="fa-brands fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <!-- <div class="d-flex justify-content-between align-items-center flex-wrap">
      <div class="main-footer_copyright">
       Copyright 2025. Designed by Sunseaz Technologies pvt ltd.
      </div>
      <ul class="footer-bottom_nav">
       <li><a href="#">Terms of Use</a></li>
       <li><a href="#">Privacy Policy</a></li>
      </ul>
     </div> -->
            <div class="main-footer_copyright text-center">
                Copyright 2025. Designed by <a href="https://sunseaz.com/" target="_blank" class="foot-bottom">Sunseaz
                    Technologies Pvt Ltd.</a>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Style -->

<!--search popup-->
<div class="search-popup">
    <div class="color-layer"></div>
    <button class="close-search"><span class="fa-xmark"></span></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
        </div>
    </form>
</div>
<!--end search popup-->

</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/backtotop.js') }}"></script>
<script src="{{ asset('assets/js/odometer.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>

<script src="{{ asset('assets/js/typeit.js') }}"></script>
<script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/nav-tool.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/element-in-view.js') }}"></script>
<script src="{{ asset('assets/js/color-settings.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

<script src="{{ asset('my_account_assets/js/jquery-3.7.1.min.js') }}"></script>
<!--bootstrap js-->
<script src="{{ asset('my_account_assets/js/bootstrap.bundle.min.js') }}"></script>
<!--font-awesome js-->
<script src="{{ asset('my_account_assets/js/Font-Awesome.js') }}"></script>
<!--counter js-->
<script src="{{ asset('my_account_assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('my_account_assets/js/jquery.countup.min.js') }}"></script>
<!--nice select js-->
<script src="{{ asset('my_account_assets/js/jquery.nice-select.min.js') }}"></script>
<!--select 2 js-->
<script src="{{ asset('my_account_assets/js/select2.min.js') }}"></script>
<!--simply countdown js-->
<script src="{{ asset('my_account_assets/js/simplyCountdown.js') }}"></script>
<!--slick slider js-->
<script src="{{ asset('my_account_assets/js/slick.min.js') }}"></script>
<!--venobox js-->
<script src="{{ asset('my_account_assets/js/venobox.min.js') }}"></script>
<!--wow js-->
<script src="{{ asset('my_account_assets/js/wow.min.js') }}"></script>
<!--marquee js-->
<script src="{{ asset('my_account_assets/js/jquery.marquee.min.js') }}"></script>
<!--pws tabs js-->
<script src="{{ asset('my_account_assets/js/jquery.pwstabs.min.js') }}"></script>
<!--scroll button js-->
<script src="{{ asset('my_account_assets/js/scroll_button.js') }}"></script>
<!--youtube background js-->
<script src="{{ asset('my_account_assets/js/jquery.youtube-background.min.js') }}"></script>
<!--range slider js-->
<script src="{{ asset('my_account_assets/js/range_slider.js') }}"></script>
<!--sticky sidebar js-->
<script src="{{ asset('my_account_assets/js/sticky_sidebar.js') }}"></script>
<!--multiple image upload js-->
<script src="{{ asset('my_account_assets/js/multiple-image-video.js') }}"></script>
<!--animated barfiller js-->
<script src="{{ asset('my_account_assets/js/animated_barfiller.js') }}"></script>
<!--main/custom js-->
<script src="{{ asset('my_account_assets/js/custom.js') }}"></script>


