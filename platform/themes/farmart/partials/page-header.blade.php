<div class="page-header">
    @if (!Theme::get('breadcrumbRendered', false) && Theme::breadcrumb()->getCrumbs())
    <div class="page-breadcrumbs">
        <div class="container-{{ $size ?? 'xxxl' }}">
            {!! Theme::partial('breadcrumbs') !!}
        </div>
    </div>
    @php
    Theme::set('breadcrumbRendered', true);
    @endphp
    @endif

    @if (!empty($withTitle) && !Theme::get('titleRendered', false))
    @if (!empty($withTitle) && !Theme::get('titleRendered', false) && request()->is('contact'))
    <section class="page-title" style="background-image:url(assets/images/main-slider/contact_bg.jpg)">
        <div class="auto-container">
            <h2>Contact us</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </section>
    @else
    <section class="page-title" style="background-image:url({{ asset('assets/images/main-slider/banner.png') }})">
        <div class="auto-container">
            <h2>{{ $title ?? (Theme::get('pageTitle') ?: SeoHelper::getTitleOnly()) }}</h2>

            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>{{ $title ?? (Theme::get('pageTitle') ?: SeoHelper::getTitleOnly()) }}</li>
            </ul>
        </div>
    </section>
    @endif
    @if (!empty($withTitle) && !Theme::get('titleRendered', false) && request()->is('about-us'))
    <section class="services-four" style="background: #fff !important;">
        <div class="services-four_bg-layer overlay-layer"
            style="background-image:url(assets/images/footer-images/service-four_pattern.png)"></div>
        <div class="auto-container">
            <div class="sec-title">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title_title">Powered by Nature</div>
                        <h2 class="sec-title_heading tx-split-text split-in-right">
                            TETRA Elements <br>
                            Import • Export • Organic Products
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="service-block_four col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_four-inner wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="service-block_four-icon trans-500 flaticon-laptop"></div>
                        <h4 class="service-block_four-title">
                            <a class="trans-500" href="#">Global Trade</a>
                        </h4>
                        <div class="service-block_four-text trans-500">
                            Exporting top-quality<strong>Moringa</strong>, <strong>Groundnuts</strong>,
                            <strong>Turmeric</strong> and Spices worldwide.
                        </div>
                        <div class="service-block_four-number trans-500">01</div>
                    </div>
                </div>
                <div class="service-block_four col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_four-inner wow fadeInLeft" data-wow-delay="150ms"
                        data-wow-duration="1500ms">
                        <div class="service-block_four-icon trans-500 flaticon-farmer-2"></div>
                        <h4 class="service-block_four-title">
                            <a class="trans-500" href="#">Quality Farmers</a>
                        </h4>
                        <div class="service-block_four-text trans-500">
                            Partnering with organic farmers of <strong>Moringa</strong>,
                            <strong>Groundnuts</strong>, and <strong>Honey</strong>.
                        </div>
                        <div class="service-block_four-number trans-500">02</div>
                    </div>
                </div>
                <div class="service-block_four col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_four-inner wow fadeInLeft" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="service-block_four-icon trans-500 flaticon-license"></div>
                        <h4 class="service-block_four-title">
                            <a class="trans-500" href="#">Certified Standard</a>
                        </h4>
                        <div class="service-block_four-text trans-500">
                            Supplying certified <strong>Turmeric</strong>, <strong>Red Dry Chillies</strong> &
                            Organic Spices.
                        </div>
                        <div class="service-block_four-number trans-500">03</div>
                    </div>
                </div>
                <div class="service-block_four col-lg-3 col-md-6 col-sm-12">
                    <div class="service-block_four-inner wow fadeInLeft" data-wow-delay="450ms"
                        data-wow-duration="1500ms">
                        <div class="service-block_four-icon trans-500 flaticon-delivery-car"></div>
                        <h4 class="service-block_four-title">
                            <a class="trans-500" href="#">On-Time Delivery</a>
                        </h4>
                        <div class="service-block_four-text trans-500">
                            Reliable supply of <strong>Honey</strong>, <strong>Moringa</strong>, and Organic
                            Products delivered on schedule.
                        </div>
                        <div class="service-block_four-number trans-500">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="food-one" style="background-image:url(assets/images/footer-images/food-pattern.png)">
        <div class="food-one_pattern overlay-layer"
            style="background-image:url(assets/images/footer-images/food-pattern-1.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="food-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="food-one_image-outer">
                        <div class="food-one_image">
                            <img src="assets/images/footer-images/food.png" alt="Organic Products">
                        </div>
                        <div class="food-one_leaf">
                            <img src="assets/images/footer-images/leaf.png" alt="Leaf Decoration">
                        </div>
                    </div>
                </div>
                <div class="food-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="food-one_content-outer">
                        <div class="sec-title">
                            <div class="sec-title_title">Organic & Natural</div>
                            <h2 class="sec-title_heading tx-split-text split-in-right">Premium Products For <br>
                                Lovers of Healthy & Natural Foods</h2>
                            <div class="sec-title_text">
                                TETRA Elements offers high-quality organic products including Moringa,
                                Groundnuts, Turmeric, Honey, and Red Dry Chillies.
                                Carefully sourced from trusted farmers and prepared to maintain maximum freshness
                                and nutritional value.
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="food-block_one col-lg-4 col-md-4 col-sm-12">
                                <div class="food-block_one-inner trans-300 wow fadeInLeft" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="food-block_one-icon trans-300 flaticon-vegetable-1"></div>
                                    <h6 class="food-block_one-title trans-300">High-quality</h6>
                                </div>
                            </div>
                            <div class="food-block_one col-lg-4 col-md-4 col-sm-12">
                                <div class="food-block_one-inner trans-300 wow fadeInLeft" data-wow-delay="150ms"
                                    data-wow-duration="1500ms">
                                    <div class="food-block_one-icon trans-300 flaticon-tractor"></div>
                                    <h6 class="food-block_one-title trans-300">Natural Farming</h6>
                                </div>
                            </div>
                            <div class="food-block_one col-lg-4 col-md-4 col-sm-12">
                                <div class="food-block_one-inner trans-300 wow fadeInLeft" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <div class="food-block_one-icon trans-300 flaticon-healthy-food"></div>
                                    <h6 class="food-block_one-title trans-300">Honey & Organic Products</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="customer-one" style="background: #fff !important;">
        <div class="customer-one_bg-layer"
            style="background-image:url(assets/images/footer-images/customer-bg.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="customer-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="customer-one_content">
                        <div class="sec-title light">
                            <div class="sec-title_title">Get To Know Us</div>
                            <h2 class="sec-title_heading tx-split-text split-in-right">
                                Import • Export • Organic Excellence
                            </h2>
                            <div class="sec-title_text">
                                We specialize in <b>Moringa, Groundnuts, Turmeric, Honey, Red Dry Chillies</b>
                                and other organic products, bringing nature’s best from trusted farmers to the
                                global market.
                            </div>
                        </div>

                        <div class="customer-one_list">
                            <li><i class="flaticon-check"></i>Sourcing directly from farmers for purity & quality.
                            </li>
                            <li><i class="flaticon-check"></i>Trusted exports of Moringa, spices, and organic goods
                                worldwide.</li>
                        </div>
                        <div class="skills">
                            <div class="skill-item">
                                <div class="count-box"><span class="count-text" data-speed="2000"
                                        data-stop="98">0</span>%</div>
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Premium Quality Products</div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="98"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="count-box"><span class="count-text" data-speed="2000"
                                        data-stop="85">0</span>%</div>
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Organic & Healthy Food</div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="85"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="count-box"><span class="count-text" data-speed="2000"
                                        data-stop="92">0</span>%</div>
                                <div class="skill-header clearfix">
                                    <div class="skill-title">Global Trade & Sales</div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="92"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('products')}}" class="shopnowbutton btn btn-sm btn-light mt-2 customer-one_button">View Export Products</a>
                    </div>
                </div>
                <div class="customer-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="customer-one_image-outer">
                        <div class="customer-one_image wow fadeInRight" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="customer-one_styled-text">Delivering Organic Excellence</div>
                            <img src="assets/images/resource/about -import-export.png" alt="TETRA Elements ">
                            <a href="" class="lightbox-video customer-play_box">
                                <span class="flaticon-play-button"><i class="ripple"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="company-one" style="background: #fff !important;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="company-one_image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="company-one_image-outer wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="company-one_image">
                            <img src="assets/images/resource/why-choose-us.png" alt="Organic Farming Company">
                        </div>
                    </div>
                </div>
                <div class="company-one_content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="company-one_content">
                        <div class="sec-title">
                            <div class="sec-title_title">Company Statistics</div>
                            <h2 class="sec-title_heading tx-split-text split-in-right">
                                Why People Say We Are The Best Farming Company in The World
                            </h2>
                            <p style="font-size:15px; line-height:1.6; margin-top:10px;">
                                Delivering top-quality <b>Moringa</b>, <b>Groundnuts</b>, <b>Turmeric</b>,
                                <b>Honey</b>,
                                and <b>Red Dry Chillies</b> directly from farms to customers worldwide.
                            </p>
                        </div>
                        <div class="counter-two">
                            <div class="row clearfix">
                                <div class="counter-block_two col-lg-3 col-md-6 col-sm-6">
                                    <div class="counter-block_two-inner wow fadeInLeft" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="counter-block_two-icon trans-300 flaticon-farmland"></div>
                                        <div class="large-icon flaticon-farmland"></div>
                                        <div class="counter-block_two-count">
                                            <span class="odometer" data-count="8800">0</span>
                                        </div>
                                        <div class="counter-block_two-text">Products delivered</div>
                                    </div>
                                </div>
                                <div class="counter-block_two col-lg-3 col-md-6 col-sm-6">
                                    <div class="counter-block_two-inner wow fadeInLeft" data-wow-delay="150ms"
                                        data-wow-duration="1500ms">
                                        <div class="counter-block_two-icon trans-300 flaticon-commodity"></div>
                                        <div class="large-icon flaticon-commodity"></div>
                                        <div class="counter-block_two-count">
                                            <span class="odometer" data-count="74">0</span>
                                        </div>
                                        <div class="counter-block_two-text">Agriculture Products</div>
                                    </div>
                                </div>
                                <div class="counter-block_two col-lg-3 col-md-6 col-sm-6">
                                    <div class="counter-block_two-inner wow fadeInLeft" data-wow-delay="300ms"
                                        data-wow-duration="1500ms">
                                        <div class="counter-block_two-icon trans-300 flaticon-customer"></div>
                                        <div class="large-icon flaticon-customer"></div>
                                        <div class="counter-block_two-count">
                                            <span class="odometer" data-count="8280">0</span>
                                        </div>
                                        <div class="counter-block_two-text">Satisfied Clients</div>
                                    </div>
                                </div>
                                <div class="counter-block_two col-lg-3 col-md-6 col-sm-6">
                                    <div class="counter-block_two-inner wow fadeInLeft" data-wow-delay="450ms"
                                        data-wow-duration="1500ms">
                                        <div class="counter-block_two-icon trans-300 flaticon-farmer"></div>
                                        <div class="large-icon flaticon-farmer"></div>
                                        <div class="counter-block_two-count">
                                            <span class="odometer" data-count="1800">0</span>
                                        </div>
                                        <div class="counter-block_two-text">Expert Farmers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="market-one style-two" style="background: #fff !important;">
        <div class="market-one_bg-layer" style="background-image:url(assets/images/footer-images/market-bg.png)">
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="market-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="market-one_image-outer">
                        <div class="market-one_image">
                            <img src="assets/images/resource/new-about-img.png" alt="TETRA Elements ">
                        </div>
                        <div class="market-one_info">
                            <div class="market-one_info-inner">
                                <span class="market-one_info-icon flaticon-sprout"></span>
                                Organic <br> Export & Import <br> Experts
                            </div>
                        </div>
                    </div>
                </div>
                <div class="market-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="market-one_content-outer">
                        <div class="sec-title">
                            <div class="sec-title_title">Company Benefits</div>
                            <h2 class="sec-title_heading tx-split-text split-in-right">
                                Why Choose TETRA Elements ?<br>
                                Import & Export Organic Products
                            </h2>
                            <div class="sec-title_text">
                                TETRA Elements provides high-quality natural products like <b>Moringa,
                                    Groundnuts, Turmeric, Honey, Red Dry Chillies</b> and more.
                                We focus on sustainable farming and trusted supply chains for both domestic and
                                international markets.
                            </div>
                        </div>
                        <ul class="market-one_list">
                            <li>
                                <i class="icon flaticon-check"></i>
                                <strong>Premium Organic Products</strong>
                                From Moringa to Turmeric, we ensure fresh, high-quality agricultural goods for all
                                customers.
                            </li>
                            <li>
                                <i class="icon flaticon-check"></i>
                                <strong>Reliable Supply Chain</strong>
                                Efficient export and import solutions guaranteeing timely delivery worldwide.
                            </li>
                            <li>
                                <i class="icon flaticon-check"></i>
                                <strong>Professional Expertise</strong>
                                Experienced team handling organic food, spices, and specialty crops with care.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    
    @php
    Theme::set('titleRendered', true);
    @endphp
    @endif
</div>