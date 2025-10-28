<!DOCTYPE html>
<html {!! Theme::htmlAttributes() !!}>

<head>
    <meta charset="utf-8">
    <title>TETRA ELEMENTS </title>
    <!-- Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/meanmenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Hand+Pre:wght@400..700&amp;display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="{{asset('assets/css/color-switcher-design.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/images/tetra-fav.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/tetra-fav.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" href="{{asset('my_account_assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/mobile_menu.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/scroll_button.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/jquery.pwstabs.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/range_slider.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/multiple-image-video.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/animated_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/custom_spacing.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('my_account_assets/css/responsive.css')}}">

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}">
<style>
    .logoimg{
        max-height: 100% !important;
    }
</style>
    <!-- <style>
        :root {
            --primary-color: {{ theme_option('primary_color', '#fab528') }};
            --primary-color-rgb: {{ implode(', ', BaseHelper::hexToRgb(theme_option('primary_color', '#fab528'))) }};
            --heading-color: {{ theme_option('heading_color', '#000') }};
            --text-color: {{ theme_option('text_color', '#000') }};
            --primary-button-color: {{ theme_option('primary_button_color', '#000') }};
            --primary-button-background-color: {{ theme_option('primary_button_background_color') ?: theme_option('primary_color', '#fab528') }};
            --top-header-background-color: {{ theme_option('top_header_background_color', '#f7f7f7') }};
            --top-header-text-color: {{ theme_option('top_header_text_color') ?: theme_option('header_text_color', '#000') }};
            --middle-header-background-color: {{ theme_option('middle_header_background_color', '#fff') }};
            --middle-header-text-color: {{ theme_option('middle_header_text_color') ?: theme_option('header_text_color', '#000') }};
            --bottom-header-background-color: {{ theme_option('bottom_header_background_color', '#fff') }};
            --bottom-header-text-color: {{ theme_option('bottom_header_text_color') ?: theme_option('header_text_color', '#000') }};
            --header-text-color: {{ theme_option('header_text_color', '#000') }};
            --header-text-secondary-color: {{ BaseHelper::hexToRgba(theme_option('header_text_color', '#000'), 0.5) }};
            --header-deliver-color: {{ BaseHelper::hexToRgba(theme_option('header_deliver_color', '#000'), 0.15) }};
            --header-mobile-background-color: {{ theme_option('header_mobile_background_color', '#fff') }};
            --header-mobile-icon-color: {{ theme_option('header_mobile_icon_color', '#222') }};
            --footer-text-color: {{ theme_option('footer_text_color', '#555') }};
            --footer-heading-color: {{ theme_option('footer_heading_color', '#555') }};
            --footer-hover-color: {{ theme_option('footer_hover_color', '#fab528') }};
            --footer-border-color: {{ theme_option('footer_border_color', '#dee2e6') }};
        }
    </style> -->

    <!-- @php
        Theme::asset()->remove('language-css');
        Theme::asset()
            ->container('footer')
            ->remove('language-public-js');
        Theme::asset()
            ->container('footer')
            ->remove('simple-slider-owl-carousel-css');
        Theme::asset()
            ->container('footer')
            ->remove('simple-slider-owl-carousel-js');
        Theme::asset()
            ->container('footer')
            ->remove('simple-slider-css');
        Theme::asset()
            ->container('footer')
            ->remove('simple-slider-js');
    @endphp

    {!! Theme::header() !!} -->
</head>

<body {!! Theme::bodyAttributes() !!}>
    @if (theme_option('preloader_enabled', 'yes') == 'yes')
    {!! Theme::partial('preloader') !!}
    @endif

    {!! Theme::partial('svg-icons') !!}
    {!! apply_filters(THEME_FRONT_BODY, null) !!}
    <div class="page-wrapper">

        <!-- Cursor -->
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        <!-- Cursor End -->

        <!-- Preloader -->
        <!-- <div class="preloader">
			<div class="loader">
				<div class="outer-circle"></div>
				<div class="inner-circle"></div>
				<div class="dots">
					<div class="dot dot-1"></div>
					<div class="dot dot-2"></div>
					<div class="dot dot-3"></div>
				</div>
			</div>
		</div> -->
        <header class="main-header header-style-one">
            <div class="header-lower">
                <div class="container-fluid p-0 m-0">
                    <div class="inner-container">
                        <div class="d-flex justify-content-between align-items-center">

                            <div class="logo-box d-flex align-items-center flex-wrap">
                                <div class="logo">
                                    <a href="{{url('/')}}">
                                        {!! Theme::getLogoImage(['class' => 'logoimg']) !!}
                                    </a>
                                </div>
                                <span class="about-widget">
                                    <span class="hamburger">
                                        <span class="top-bun"></span>
                                        <span class="meat"></span>
                                        <span class="bottom-bun"></span>
                                    </span>
                                </span>
                            </div>
                            <div class="nav-outer d-flex flex-wrap">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="dropcolor"><a href="{{url('about-us')}}">About</a></li>
                                            @if(is_plugin_active('ecommerce') && theme_option('enabled_product_categories_on_header', 'yes') == 'yes')
                                            <?php
                                            $category = DB::table('ec_product_categories')
                                                ->where('parent_id', 0)
                                                ->get();
                                            ?>
                                            @foreach($category as $categorys)
                                            <?php
                                            $subcategory = DB::table('ec_product_category_product')
                                                ->where('category_id', $categorys->id)
                                                ->get();

                                            ?>
                                            <li class="dropdown dropcolor"><a href="#">{{$categorys->name}}</a>
                                                <ul>
                                                    @foreach($subcategory as $subcategorys)
                                                    <?php
                                                    $productid = DB::table('ec_products')
                                                        ->find($subcategorys->product_id);
                                                    ?>
                                                    <li><a href="{{ url('products/' . $productid->slug) }}"> {{$productid->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                            <li class="dropcolor"><a href="{{url('products')}}">Products</a></li>
                                            <li class="dropcolor"><a href="{{url('contact')}}">Contact</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Main Menu End-->
                            <div class="outer-box d-flex align-items-center flex-wrap">

                                <!-- Search Btn -->
                                <!-- <div class="search-box-btn trans-300 search-box-outer"><span
                                        class="icon fa fa-search"></span></div> -->

                                <!-- Nav Btn -->
                                <!-- <div class="nav-btn trans-300 navSidebar-button">
									<a href="register.html"><span class="trans-300 fa-solid fa-user"></span></a>
								</div> -->


                                <!--whishlist-->
                                @if (is_plugin_active('ecommerce'))
                                <div class="whish-btn trans 300 navSidebar-button">
                                    @if (EcommerceHelper::isWishlistEnabled())
                                    <div class="header__extra header-wishlist">
                                        <a class="btn-wishlist" href="{{ route('public.wishlist') }}">
                                            <span class="trans-300 fa-solid fa-heart header-item-counter">
                                                {{ auth('customer')->check()? auth('customer')->user()->wishlist()->count(): Cart::instance('wishlist')->count() }}
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                @endif
                                <!--end wishlist-->

                                <!--nav button-->
                                <div class="nav-btn trans-300 navSidebar-button user-dropdown">
                                    <a href="javascript:void(0);" class="user-icon">
                                        <span class="trans-300 fa-solid fa-user"></span>
                                    </a>

                                    @if (auth('customer')->check())
                                    <div class="dropdown-menu">
                                        <a href="{{ route('customer.overview') }}"> {{ auth('customer')->user()->name }} </a>
                                        <a href="{{ route('customer.overview') }}">My Account</a>

                                        <a href="{{ route('customer.logout') }}">Logout</a>
                                    </div>
                                    @else
                                    <div class="dropdown-menu">
                                        <a href="{{ route('customer.login') }}">Login</a>
                                        <a href="{{ route('customer.register') }}">Register</a>
                                    </div>
                                    @endif
                                </div>

                                <!-- Button Box -->
                                @if (is_plugin_active('ecommerce'))
                                @if (EcommerceHelper::isCartEnabled())
                                <div class="nav-btn trans-300 navSidebar-button">
                                    <a href="{{ route('public.cart') }}"><span
                                            class="trans-300 fa-solid fa-cart-shopping">
                                            {{ Cart::instance('cart')->count() }}
                                        </span>
                                    </a>
                                </div>
                                @endif
                                @endif

                                <!-- Mobile Navigation Toggler -->
                                <div class="mobile-nav-toggler">
                                    <span class="icon fa-classic fa-solid fa-bars fa-fw"></span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa-xmark"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="{{url('/')}}">
                            {!! Theme::getLogoImage(['class' => 'logoimg', 'style' => 'max-height: 45px']) !!}
                        </a>
                    </div>
                    <div class="mobile-icons">
                        <!-- <a href="javascript:void(0);" class="mobile-icon-item search-btn"><span
                                class="icon fa fa-search"></span></a> -->
                                 @if (is_plugin_active('ecommerce'))
                                 @if (EcommerceHelper::isWishlistEnabled())
                        <a href="{{ route('public.wishlist') }}" class="mobile-icon-item"><span
                                class="fa-solid fa-heart"> {{ auth('customer')->check()? auth('customer')->user()->wishlist()->count(): Cart::instance('wishlist')->count() }}</span></a>
                                 @endif
                                @if (EcommerceHelper::isCartEnabled())
                        <a href="{{ route('public.cart') }}" class="mobile-icon-item"><span
                                class="fa-solid fa-cart-shopping"> {{ Cart::instance('cart')->count() }}</span></a>
                                @endif
                                @endif
                        <div class="mobile-user-dropdown">
                            <span class="fa-solid fa-user"></span>
                            <div class="mobile-user-menu">
                                 @if (auth('customer')->check())
                                <a href="{{ route('customer.overview') }}">My Account</a>
                                 <a href="{{ route('customer.logout') }}">Logout</a>
                                 @else
                                <a href="{{ route('customer.register') }}">Register</a>
                                <a href="{{ route('customer.login') }}">Login</a>
                               @endif
                            </div>
                        </div>
                    </div>
                    <div class="menu-outer">
                    </div>
                </nav>

            </div>


        </header>