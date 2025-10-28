<section class="video-one">
    <div class="outer-container">
        <div class="inner-container">
            <div class="video-box expand-section">
                <video id="scrollVideo" muted playsinline preload="auto" loop>
                    <source src="assets/images/video.mp4" type="video/mp4">
                </video>

                <button id="muteToggle" class="mute-btn">🔇 Mute</button>

            </div>
        </div>
    </div>
</section>


<section class="testimonial-one">
    <div class="about-one_bg-layer overlay-layer"
        style="background-image:url(assets/images/background/map.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="testimonial-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="testimonial-one_title-outer">
                    <div class="sec-title">
                        <div class="sec-title_title">Customer Review</div>
                        <h2 class="sec-title_heading tx-split-text split-in-right">
                            What They Say About TETRA ELEMENTS LLP
                        </h2>
                    </div>
                    <div class="testimonial-one_button">
                        <a href="#" class="theme-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Discover More</span>
                                <span class="text-two">Discover More</span>
                            </span>
                        </a>
                    </div>
                    <div class="three-item-carousel-prev fas fa-arrow-left fa-fw"></div>
                    <div class="three-item-carousel-next fas fa-arrow-right fa-fw"></div>
                </div>
            </div>
            <div class="testimonial-one_carousel-column col-lg-8 col-md-12 col-sm-12">
                <div class="testimonial-one_carousel-outer">

                    <div class="three-item-carousel swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            $review = DB::table('ec_reviews')->get();

                            ?>
                            @foreach($review as $reviews)
                            @if($review)
                            <?php
                            $customer = DB::table('ec_customers')->find($reviews->customer_id);
                            ?>
                            <div class="swiper-slide">
                                <div class="testimonial-block_one">
                                    <div class="testimonial-block_one-inner">
                                        <div class="testimonial-block_one-icon flaticon-write"></div>

                                        <div
                                            class="d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="testimonial-block_one-author">
                                                <img src="{{asset('storage/'.$customer->avatar)}}" alt="" style="width: 100px !important;" />
                                            </div>
                                            <div class="testimonial-block_one-rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <=$reviews->star)
                                                    <span class="fa "> ★ </span>
                                                    @else
                                                     <i class="fa fa-star-o text-muted"></i>
                                                    @endif
                                                    @endfor
                                            </div>

                                        </div>
                                        <div class="testimonial-block_one-text">
                                            {{$reviews->comment}}
                                        </div>
                                        <!-- <div class="testimonial-block_one-designation">
                                            {{$customer->name}} <span>Happy Customer</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <!-- <div class="swiper-slide">
                                <div class="testimonial-block_one">
                                    <div class="testimonial-block_one-inner">
                                        <div class="testimonial-block_one-icon flaticon-write"></div>
                                        <div
                                            class="d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="testimonial-block_one-author">
                                                <img src="assets/images/resource/author-2.jpg" alt="" />
                                            </div>
                                            <div class="testimonial-block_one-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="testimonial-block_one-text">
                                            "Their service and delivery are excellent. Always on time and
                                            reliable."
                                        </div>
                                        <div class="testimonial-block_one-designation">
                                            Anil Verma <span>Retail Partner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-block_one">
                                    <div class="testimonial-block_one-inner">
                                        <div class="testimonial-block_one-icon flaticon-write"></div>
                                        <div
                                            class="d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="testimonial-block_one-author">
                                                <img src="assets/images/resource/author-3.jpg" alt="" />
                                            </div>
                                            <div class="testimonial-block_one-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="testimonial-block_one-text">
                                            "I trust TETRA ELEMENTS LLP for genuine organic products. Highly
                                            recommended!"
                                        </div>
                                        <div class="testimonial-block_one-designation">
                                            Rajesh Kumar <span>Organic Farmer</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>



<section class="clients-one">
    <div class="auto-container">
        <div>
            <h2 class="slidehead">Keep Up With Us</h2>
        </div>

        <div class="clients_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_1.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_2.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_3.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_4.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_5.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_6.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_7.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_8.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client-image">
                        <a href="#"><img src="assets/images/clients/slider_9.jpg" alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="counter-one">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="counter-block_one-icon trans-300 flaticon-farmland"></div>
                    <div class="large-icon flaticon-farmland"></div>
                    <div class="counter-block_one-count"><span class="odometer" data-count="100"></span>%</div>
                    <div class="counter-block_one-text">Pure & natural</div>
                </div>
            </div>
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="150ms"
                    data-wow-duration="1500ms">
                    <div class="counter-block_one-icon trans-300 flaticon-commodity"></div>
                    <div class="large-icon flaticon-commodity"></div>
                    <div class="counter-block_one-count"><span class="odometer" data-count="120"></span>+</div>
                    <div class="counter-block_one-text">nutrients in each serving</div>
                </div>
            </div>
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="counter-block_one-icon trans-300 flaticon-customer"></div>
                    <div class="large-icon flaticon-customer"></div>
                    <div class="counter-block_one-count"><span class="odometer" data-count="25"></span>k</div>
                    <div class="counter-block_one-text">Satisfied Customers</div>
                </div>
            </div>
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="450ms"
                    data-wow-duration="1500ms">
                    <div class="counter-block_one-icon trans-300 flaticon-farmer"></div>
                    <div class="large-icon flaticon-farmer"></div>
                    <div class="counter-block_one-count"><span class="odometer" data-count="50"></span>+</div>
                    <div class="counter-block_one-text">local farmers employeed</div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="marketing-two">
    <div class="outer-container">
        <div class="animation_mode">
            <h1>COD Available</h1>
            <span class="marketing-two_icon flaticon-leaf-1"></span>
            <h1 class="light">Secure Payments</h1>
            <span class="marketing-two_icon flaticon-leaf-1"></span>
            <h1>Superfast Delivery</h1>
            <span class="marketing-two_icon flaticon-leaf-1"></span>
            <h1 class="light">Assured Quality</h1>
            <span class="marketing-two_icon flaticon-leaf-1"></span>
            <h1>Easy Returns</h1>
            <span class="marketing-two_icon flaticon-leaf-1"></span>
            <h1 class="light">24/7 Support</h1>
            <span class="marketing-two_icon flaticon-leaf-1"></span>
            <h1>100% Genuine</h1>
        </div>
    </div>
</section>


<section class="faq-one">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="faq-one_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="faq-one_image-outer">
                    <div class="faq-one_image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="assets/images/resource/faq_1.png" alt="FAQ Image">
                    </div>
                    <div class="faq-one_phone">
                        <span class="icon flaticon-phone-call"></span>
                        Call any time <br>
                        <a href="tel:+919626588881">+91 1234567890</a>
                    </div>
                </div>
            </div>
            <div class="faq-one_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="faq-one_content">
                    <div class="sec-title">
                        <div class="sec-title_title">Frequently Asked Questions</div>
                        <h2 class="sec-title_heading tx-split-text split-in-right">Have Questions? <br> We’ve
                            Got Answers</h2>
                        <div class="sec-title_text">Here are some of the most common questions our customers
                            ask. If you need more information, feel free to reach out to us directly.</div>
                    </div>
                    <ul class="accordion-box">
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"><span class="icon flaticon-chevron"></span></div>
                                What are the benefits of Moringa products?
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Moringa is rich in vitamins, minerals, and antioxidants.
                                        It helps boost energy, improves immunity, and supports overall wellness
                                        naturally.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon flaticon-chevron"></span></div>
                                How is your organic produce grown?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our products are grown using eco-friendly farming
                                        practices without harmful chemicals, ensuring they are 100% safe, fresh,
                                        and nutrient-rich.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon flaticon-chevron"></span></div>
                                Do you provide home delivery?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes! We offer secure and timely home delivery across
                                        India, ensuring your products reach you fresh and on time.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon flaticon-chevron"></span></div>
                                Are your skincare products natural and safe?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Absolutely! Our skincare range is made from natural
                                        ingredients, free from harmful chemicals, and suitable for all skin
                                        types.</div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- <div class="widget-products-with-category py-5 bg-light">
    <div class="container-xxxl">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center mb-2 widget-header">
                    <h2 class="col-auto mb-0 py-2">{{ $shortcode->title }}</h2>
                </div>
                <div class="product-deals-day__body arrows-top-right">
                    <div
                        class="product-deals-day-body slick-slides-carousel"
                        data-slick="{{ json_encode([
                            'rtl' => BaseHelper::siteLanguageDirection() == 'rtl',
                            'appendArrows' => '.arrows-wrapper',
                            'arrows' => true,
                            'dots' => false,
                            'autoplay' => $shortcode->is_autoplay == 'yes',
                            'infinite' => $shortcode->infinite == 'yes' || $shortcode->is_infinite == 'yes',
                            'autoplaySpeed' => in_array($shortcode->autoplay_speed, theme_get_autoplay_speed_options())
                                ? $shortcode->autoplay_speed
                                : 3000,
                            'speed' => 800,
                            'slidesToShow' => 6,
                            'slidesToScroll' => 1,
                            'swipeToSlide' => true,
                            'responsive' => [
                                [
                                    'breakpoint' => 1400,
                                    'settings' => [
                                        'slidesToShow' => 5,
                                    ],
                                ],
                                [
                                    'breakpoint' => 1199,
                                    'settings' => [
                                        'slidesToShow' => 4,
                                    ],
                                ],
                                [
                                    'breakpoint' => 1024,
                                    'settings' => [
                                        'slidesToShow' => 3,
                                    ],
                                ],
                                [
                                    'breakpoint' => 767,
                                    'settings' => [
                                        'arrows' => true,
                                        'dots' => false,
                                        'slidesToShow' => 2,
                                        'slidesToScroll' => 2,
                                    ],
                                ],
                            ],
                        ]) }}"
                    >
                        @foreach ($products as $product)
                            <div class="product-inner">
                                {!! Theme::partial('ecommerce.product-item', compact('product', 'wishlistIds')) !!}
                            </div>
                        @endforeach
                    </div>
                    <div class="arrows-wrapper"></div>
                </div>
            </div>
        </div>
    </div>
</div> -->