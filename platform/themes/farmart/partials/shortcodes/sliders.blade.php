@if (count($sliders) > 0)
@php
$sliders->loadMissing('metadata');
$slick = [
'autoplay' => ($shortcode->is_autoplay ?: 'yes') == 'yes',
'infinite' => ($shortcode->is_autoplay ?: 'yes') == 'yes',
'autoplaySpeed' => in_array($shortcode->autoplay_speed, theme_get_autoplay_speed_options())
? $shortcode->autoplay_speed
: 5000,
'speed' => 1000,
'slidesToShow' => 1,
'slidesToScroll' => 1,
'appendArrows' => '.arrows-wrapper',
'fade' => true,
];
@endphp
<div class="section-content section-content__slider lazyload"
    @if ($shortcode->background) data-bg="{{ RvMedia::getImageUrl($shortcode->background) }}" @endif>
    <div class="container-xxxl">
        <div class="about-sidebar">
            <div class="gradient-layer"></div>
            <!-- Close Button -->
            <div class="close-sidebar-widget close-button">
                <span class="fa-solid fa-xmark fa-fw"></span>
            </div>
            <div class="sidebar-inner">
                <div class="upper-box">
                    <!--<div class="image">
      <img src="assets/images/resource/about-1.jpg" alt="" />
     </div>-->
                    <div class="content-box">
                        <h3>About <span>TETRA ELEMENTS </span></h3>
                        <div class="text">TETRA ELEMENTS grows fresh, pesticide-free microgreens and baby greens
                            using
                            advanced vertical farming. Our mission is to deliver nutritious, locally grown produce
                            year-round while supporting healthier eating and sustainable farming in and around the
                            city.
                        </div>
                        <ul class="about-sidebar_list">
                            <li>Essential Nutrition</li>
                            <li>Teas & Infusions</li>
                            <li>Kitchen Essentials</li>
                            <li>Personal Care</li>
                        </ul>
                    </div>
                </div>
                <!-- Social Box -->
                <div class="social-box">
                    <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://Pinterest.com/"><i class="fa-brands fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="slider-one">
        <div class="slider-one_leaf" style="background-image:url('{{asset('assets/images/main-slider/leaf.png')}}')"></div>
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-one_image-layer"
                        style="background-image:url('{{asset('assets/images/main-slider/banner2.jpg')}}')"></div>
                    <div class="slider-one_pattern"
                        style="background-image:url('{{asset('assets/images/main-slider/pattern-1.png')}}')"></div>
                    <div class="auto-container">
                        <div class="slider-one_content  d-flex justify-content-end">
                            <div class="slider-one_content-inner">
                                <div class="slider-one_title">Welcome to TETRA ELEMENTS </div>
                                <h1 class="slider-one_heading">Pure <span>&</span> Natural Products</h1>
                                <div class="slider-one_text">Exporting premium quality Moringa powder, oil,
                                    syrup,
                                    and capsules, along with groundnuts, turmeric, and other natural products
                                    worldwide.</div>
                                <div class="slider-one_button d-flex align-items-center flex-wrap">
                                    <a href="{{ url('products') }}" class="theme-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Explore Products</span>
                                            <span class="text-two">Explore Products</span>
                                        </span>
                                    </a>
                                    <div class="slider-one_video">
                                        <a href="https://www.youtube.com/watch?v=bd2fOY1s0io" class="lightbox-video play-box"><span
                                                class="fa fa-play"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-one_image-layer"
                        style="background-image:url('{{asset('assets/images/main-slider/banner3.jpg')}}')">
                    </div>
                    <div class="slider-one_pattern"
                        style="background-image:url('{{asset('assets/images/main-slider/pattern-1.png')}}')"></div>
                    <div class="auto-container">
                        <div class="slider-one_content  d-flex justify-content-end">
                            <div class="slider-one_content-inner">
                                <div class="slider-one_title">TETRA ELEMENTS Exports</div>
                                <h1 class="slider-one_heading">Moringa <span>&</span> Herbal Wellness</h1>
                                <div class="slider-one_text">From the farm to your doorstep — delivering 100%
                                    natural and organic moringa-based products for a healthier lifestyle.</div>
                                <div class="slider-one_button d-flex align-items-center flex-wrap">
                                    <a href="#" class="theme-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Discover More</span>
                                            <span class="text-two">Discover More</span>
                                        </span>
                                    </a>
                                    <div class="slider-one_video">
                                        <a href="https://www.youtube.com/watch?v=bd2fOY1s0io"
                                            class="lightbox-video play-box"><span class="fa fa-play"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-one_image-layer"
                        style="background-image:url('{{asset('assets/images/main-slider/banner1.png')}}')">
                    </div>
                    <div class="auto-container">
                        <div class="slider-one_content  d-flex justify-content-end">
                            <div class="slider-one_content-inner">
                                <div class="slider-one_title">Trusted by Global Buyers</div>
                                <h1 class="slider-one_heading">Organic <span>&</span> Beyond </h1>
                                <div class="slider-one_text">We bring you the richness of India’s natural farms
                                    —
                                    moringa, groundnuts, turmeric, and more — with unmatched purity and taste.
                                </div>
                                <div class="slider-one_button d-flex align-items-center flex-wrap">
                                    <a href="#" class="theme-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Get Started</span>
                                            <span class="text-two">Get Started</span>
                                        </span>
                                    </a>
                                    <div class="slider-one_video">
                                        <a href="https://www.youtube.com/watch?v=bd2fOY1s0io"
                                            class="lightbox-video play-box"><span class="fa fa-play"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-one_pagination"></div>
        </div>
    </section>
    <section class="services-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="service-block_one-title">
                            <h5 class="trans-300"><a class="trans-300" href="#">Quality
                                    Standards</a></h5>
                        </div>
                        <div class="service-block_one-image">
                            <img src="{{asset('assets/images/resource/service_1.png')}}" alt="" />
                            <div class="service-block_one-overlay overlay-layer">
                                <div class="service-block_one-icon">
                                    <i class="flaticon-quality"></i>
                                </div>
                                <div class="service-block_one-text">We follow strict international standards to
                                    deliver the highest quality Moringa and natural products trusted by global
                                    buyers.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="service-block_one-title">
                            <h5 class="trans-300"><a class="trans-300" href="#">Organic
                                    Farming</a></h5>
                        </div>
                        <div class="service-block_one-image">
                            <img src="{{asset('assets/images/resource/service_2.jpg')}}" alt="" />
                            <div class="service-block_one-overlay overlay-layer">
                                <div class="service-block_one-icon">
                                    <i class="flaticon-gardening"></i>
                                </div>
                                <div class="service-block_one-text">Our products are cultivated through
                                    sustainable
                                    and chemical-free farming practices, preserving nature’s purity.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="service-block_one-title">
                            <h5 class="trans-300"><a class="trans-300" href="#">Agriculture
                                    Products</a></h5>
                        </div>
                        <div class="service-block_one-image">
                            <img src="{{asset('assets/images/resource/service_3.jpg')}}" alt="" />
                            <div class="service-block_one-overlay overlay-layer">
                                <div class="service-block_one-icon">
                                    <i class="flaticon-planting"></i>
                                </div>
                                <div class="service-block_one-text">We export a wide range of natural products
                                    including Moringa powder, oil, capsules, syrup, groundnuts, turmeric, and
                                    more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="marketing-two">
        <div class="outer-container">
            <div class="animation_mode">
                <h1>Sealed With Love</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1 class="light">Vocal For Local</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1>Responsibly Sourced</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1>Sustainable</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1 class="light">Pure & Natural</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1>Organic Living</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1>Farm To Home</h1>
                <h1>Nature’s Goodness</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1 class="light">Healthy Choices</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1>Eco-Friendly</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1>Green Future</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1 class="light">Wellness Everyday</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1>Trusted Quality</h1>
                <span class="marketing-two_icon flaticon-leaf-1"></span>
                <h1>Holistic Living</h1>

            </div>
        </div>
    </section>




    <section class="about-one">
        <div class="about-one_bg-layer overlay-layer"
            style="background-image:url('{{asset('assets/images/background/about-one_pattern.png')}}')"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_content">
                        <div class="sec-title">
                            <div class="sec-title_title">Get To Know</div>
                            <h2 class="sec-title_heading tx-split-text split-in-right"> Reasons To Include TETRA
                                ELEMENTS Products</h2>
                            <div class="sec-title_text">Integrating a variety of natural products—like Moringa,
                                groundnuts, paddy, chili, and turmeric—into your daily routine supports nutrition,
                                energy, and overall wellness.</div>
                        </div>


                        <div class="about-block_one">
                            <div class="about-block_one-inner">
                                <div class="about-block_one-icon trans-300 flaticon-vegetable"></div>
                                <strong>Rich in Nutrients</strong>
                                Packed with vitamins, minerals, antioxidants, proteins, and fiber, these natural
                                foods boost immunity, support digestion, and provide essential nutrients for daily
                                health.
                            </div>
                        </div>


                        <div class="about-block_one">
                            <div class="about-block_one-inner">
                                <div class="about-block_one-icon trans-300 flaticon-health"></div>
                                <strong>Supports Wellness & Energy</strong>
                                Regular consumption of Moringa, groundnuts, turmeric, chili, and paddy enhances
                                energy, strengthens metabolism, and promotes heart, joint, and overall body
                                wellness.
                            </div>
                        </div>


                        <div class="about-block_one">
                            <div class="about-block_one-inner">
                                <div class="about-block_one-icon trans-300 flaticon-immunity"></div>
                                <strong>Natural & Safe for Daily Use</strong>
                                These wholesome, organic, and chemical-free products provide a reliable source of
                                daily nutrition while maintaining natural flavors and promoting long-term health.
                            </div>
                        </div>

                        <!-- Button Box -->
                        <!-- <div class="about-one_button">
        <a href="about.html" class="theme-btn btn-style-one">
         <span class="btn-wrap">
          <span class="text-one">Discover More</span>
          <span class="text-two">Discover More</span>
         </span>
        </a>
       </div> -->

                    </div>
                </div>

                <!-- Image Column -->
                <div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_image-outer">
                        <div class="about-one_pattern-layer"
                            style="background-image:url('{{asset('assets/images/back_move_1.jpg')}}');"></div>
                        <div class="about-one_image">
                            <img src="{{asset('assets/images/resource/benifits.png')}}" alt="" />
                        </div>
                        <div class="about-one_tomato">
                            <img src="{{asset('assets/images/resource/good_2.png')}}" alt="" />
                        </div>
                        <div class="about-one_leaf">
                            <img src="{{asset('assets/images/resource/good_3.png')}}" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endif