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
                                        <?php
                                        $category = DB::table('ec_product_categories')->where('parent_id', 0)->get();
                                        ?>
                                        @foreach ($category as $categorys)
                                            <li><a
                                                    href={{ url('product-categories/' . $categorys->slug) }}>{{ $categorys->name }}</a>
                                            </li>
                                        @endforeach
                                        {{-- <li><a href="#">Teas & Infusions</a></li>
												<li><a href="#">Skin & Hair Care</a></li> --}}
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
                                        <li><a href="{{ url('refund-policy') }}">Refund Policy</a></li>
                                        <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                                        <li><a href="{{ url('faqs') }}">FAQ's</a></li>
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
                                        <a href="https://www.instagram.com/tetraelementsofficial?igsh=MXdwa20yczZuemE5ag%3D%3D" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        {{-- <a href="https://youtube.com/"><i class="fa-brands fa-pinterest"></i></a> --}}
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


<!-- <footer id="footer">
        @if ($preFooterSidebar = dynamic_sidebar('pre_footer_sidebar'))
<div class="footer-info border-top">
            <div class="container-xxxl py-3">
                {!! $preFooterSidebar !!}
            </div>
        </div>
@endif
        @if ($footerSidebar = dynamic_sidebar('footer_sidebar'))
<div class="footer-widgets">
            <div class="container-xxxl">
                <div class="row border-top py-5">
                    {!! $footerSidebar !!}
                </div>
            </div>
        </div>
@endif
        @if ($bottomFooterSidebar = dynamic_sidebar('bottom_footer_sidebar'))
<div class="container-xxxl">
            <div
                class="footer__links"
                id="footer-links">
                {!! $bottomFooterSidebar !!}
            </div>
        </div>
@endif
        <div class="container-xxxl">
            <div class="row border-top py-4">
                <div class="col-lg-3 col-md-4 py-3">
                    <div class="copyright d-flex justify-content-center justify-content-md-start">
                        <span>{!! Theme::getSiteCopyright() !!}</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 py-3">
                    @if (theme_option('payment_methods_image'))
                    <div class="footer-payments d-flex justify-content-center">
                        @if (theme_option('payment_methods_link'))
<a
                            href="{{ url(theme_option('payment_methods_link')) }}"
                            target="_blank">
@endif

                            <img
                                class="lazyload"
                                data-src="{{ RvMedia::getImageUrl(theme_option('payment_methods_image')) }}"
                                alt="footer-payments">

                            @if (theme_option('payment_methods_link'))
</a>
@endif
                    </div>
                    @endif
                </div>
                <div class="col-lg-3 col-md-4 py-3">
                    <div class="footer-socials d-flex justify-content-md-end justify-content-center">
                        @if ($socialLinks = Theme::getSocialLinks())
                        <p class="me-3 mb-0">{{ __('Stay connected:') }}</p>
                        <div class="footer-socials-container">
                            <ul class="ps-0 mb-0">
                                @foreach ($socialLinks as $socialLink)
@continue(!$socialLink->getUrl() || !$socialLink->getIconHtml())

                                <li class="d-inline-block ps-1 my-1">
                                    <a {!! $socialLink->getAttributes() !!}>{{ $socialLink->getIconHtml() }}</a>
                                </li>
@endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @if (is_plugin_active('ecommerce'))
<div
        class="panel--sidebar"
        id="navigation-mobile">
        <div class="panel__header">
            <span class="svg-icon close-toggle--sidebar">
                <svg>
                    <use
                        href="#svg-icon-arrow-left"
                        xlink:href="#svg-icon-arrow-left"></use>
                </svg>
            </span>
            <h3>{{ __('Categories') }}</h3>
        </div>
        <div
            class="panel__content"
            data-bb-toggle="init-categories-dropdown"
            data-bb-target=".product-category-dropdown-wrapper"
            data-url="{{ route('public.ajax.categories-dropdown') }}">
            <ul class="menu--mobile product-category-dropdown-wrapper"></ul>
        </div>
    </div>
@endif

    <div
        class="panel--sidebar"
        id="menu-mobile">
        <div class="panel__header">
            <span class="svg-icon close-toggle--sidebar">
                <svg>
                    <use
                        href="#svg-icon-arrow-left"
                        xlink:href="#svg-icon-arrow-left"></use>
                </svg>
            </span>
            <h3>{{ __('Menu') }}</h3>
        </div>
        <div class="panel__content">
            {!! Menu::renderMenuLocation('main-menu', [
                'view' => 'menu',
                'options' => ['class' => 'menu--mobile'],
            ]) !!}

            {!! Menu::renderMenuLocation('header-navigation', [
                'view' => 'menu',
                'options' => ['class' => 'menu--mobile'],
            ]) !!}

            <ul class="menu--mobile">

                @if (is_plugin_active('ecommerce'))
                @if (EcommerceHelper::isCompareEnabled())
<li><a href="{{ route('public.compare') }}"><span>{{ __('Compare') }}</span></a></li>
@endif

                @if (count($currencies) > 1)
                <li class="menu-item-has-children">
                    <a href="#">
                        <span>{{ get_application_currency()->title }}</span>
                        <span class="sub-toggle">
                            <span class="svg-icon">
                                <svg>
                                    <use
                                        href="#svg-icon-chevron-down"
                                        xlink:href="#svg-icon-chevron-down"></use>
                                </svg>
                            </span>
                        </span>
                    </a>
                    <ul class="sub-menu">
                        @foreach ($currencies as $currency)
@if ($currency->id !== get_application_currency_id())
<li><a
                                href="{{ route('public.change-currency', $currency->title) }}"><span>{{ $currency->title }}</span></a>
                        </li>
@endif
@endforeach
                    </ul>
                </li>
                @endif
                @endif
                @if (is_plugin_active('language'))
                @php
                    $supportedLocales = Language::getSupportedLocales();
                @endphp

                @if ($supportedLocales && count($supportedLocales) > 1)
                @php
                    $languageDisplay = setting('language_display', 'all');
                @endphp
                <li class="menu-item-has-children">
                    <a href="#">
                        @if ($languageDisplay == 'all' || $languageDisplay == 'flag')
{!! language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName()) !!}
@endif
                        @if ($languageDisplay == 'all' || $languageDisplay == 'name')
{{ Language::getCurrentLocaleName() }}
@endif
                        <span class="sub-toggle">
                            <span class="svg-icon">
                                <svg>
                                    <use
                                        href="#svg-icon-chevron-down"
                                        xlink:href="#svg-icon-chevron-down"></use>
                                </svg>
                            </span>
                        </span>
                    </a>
                    <ul class="sub-menu">
                        @foreach ($supportedLocales as $localeCode => $properties)
@if ($localeCode != Language::getCurrentLocale())
<li>
                            <a
                                href="{{ Language::getSwitcherUrl($localeCode, $properties['lang_code']) }}">
                                @if ($languageDisplay == 'all' || $languageDisplay == 'flag')
{!! language_flag($properties['lang_flag'], $properties['lang_name']) !!}
@endif
                                @if ($languageDisplay == 'all' || $languageDisplay == 'name')
<span>{{ $properties['lang_name'] }}</span>
@endif
                            </a>
                        </li>
@endif
@endforeach
                    </ul>
                </li>
                @endif
                @endif
            </ul>
        </div>
    </div>
    <div
        class="panel--sidebar panel--sidebar__right"
        id="search-mobile">
        <div class="panel__header">
            @if (is_plugin_active('ecommerce'))
<x-plugins-ecommerce::fronts.ajax-search class="form--quick-search bb-form-quick-search w-100">
                <div class="search-inner-content">
                    <div class="text-search">
                        <div class="search-wrapper">
                            <x-plugins-ecommerce::fronts.ajax-search.input type="text" class="search-field input-search-product" />
                            <button
                                class="btn"
                                type="submit"
                                aria-label="Submit">
                                <span class="svg-icon">
                                    <svg>
                                        <use
                                            href="#svg-icon-search"
                                            xlink:href="#svg-icon-search"></use>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <a
                            class="close-search-panel close-toggle--sidebar"
                            href="#"
                            aria-label="Search">
                            <span class="svg-icon">
                                <svg>
                                    <use
                                        href="#svg-icon-times"
                                        xlink:href="#svg-icon-times"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </x-plugins-ecommerce::fronts.ajax-search>
@endif
        </div>
    </div>
    <div class="footer-mobile" @if (theme_option('bottom_bar_menu_show_text', 'yes') != 'yes') data-hide-text="true" @endif style="--bottom-bar-menu-text-font-size: {{ theme_option('bottom_bar_menu_text_font_size', 11) }}px;">
        <ul class="menu--footer">
            <li>
                <a href="{{ BaseHelper::getHomepageUrl() }}">
                    <i class="icon-home3"></i>
                    <span>{{ __('Home') }}</span>
                </a>
            </li>
            @if (is_plugin_active('ecommerce'))
            <li>
                <a
                    class="toggle--sidebar"
                    href="#navigation-mobile">
                    <i class="icon-list"></i>
                    <span>{{ __('Category') }}</span>
                </a>
            </li>
            @if (EcommerceHelper::isCartEnabled())
<li>
                <a
                    class="toggle--sidebar"
                    href="#cart-mobile">
                    <i class="icon-cart">
                        <span class="cart-counter">{{ Cart::instance('cart')->count() }}</span>
                    </i>
                    <span>{{ __('Cart') }}</span>
                </a>
            </li>
@endif
            @if (EcommerceHelper::isWishlistEnabled())
<li>
                <a href="{{ route('public.wishlist') }}">
                    <i class="icon-heart"></i>
                    <span>{{ __('Wishlist') }}</span>
                </a>
            </li>
@endif
            <li>
                <a href="{{ route('customer.overview') }}">
                    <i class="icon-user"></i>
                    <span>{{ __('Account') }}</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
    @if (is_plugin_active('ecommerce'))
{!! Theme::partial('ecommerce.quick-view-modal') !!}
    {!! Theme::partial('ecommerce.quick-shop-modal') !!}
@endif
    {!! Theme::partial('toast') !!}

    <div class="panel-overlay-layer"></div>
    <div id="back2top">
        <span class="svg-icon">
            <svg>
                <use
                    href="#svg-icon-arrow-up"
                    xlink:href="#svg-icon-arrow-up"></use>
            </svg>
        </span>
    </div> -->

<script data-pagespeed-no-defer data-pagespeed-no-transform>
    'use strict';

    window.trans = {
        "View All": "{{ __('View All') }}",
        "No reviews!": "{{ __('No reviews!') }}"
    };

    window.siteConfig = {
        "url": "{{ BaseHelper::getHomepageUrl() }}",
        "img_placeholder": "{{ theme_option('lazy_load_image_enabled', 'yes') == 'yes' ? image_placeholder() : null }}",
        "countdown_text": {
            "days": "{{ __('days') }}",
            "hours": "{{ __('hours') }}",
            "minutes": "{{ __('mins') }}",
            "seconds": "{{ __('secs') }}"
        }
    };

    @if (is_plugin_active('ecommerce') && EcommerceHelper::isCartEnabled())
        window.siteConfig.ajaxCart = "{{ route('public.ajax.cart') }}";
        window.siteConfig.cartUrl = "{{ route('public.cart') }}";
    @endif
</script>

{!! Theme::footer() !!}

</body>

</html>
