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
        <section class="page-title" style="background-image:url('{{asset('assets/images/main-slider/contact_bg.jpg')}}')">
            <div class="auto-container">
                <h2>Contact us</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </section>
        @else
        <section class="page-title" style="background-image:url('{{ asset('assets/images/main-slider/banner.png') }}')">
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
        <section class="services-four bg-white" >
            <div class="services-four_bg-layer overlay-layer"
                style="background-image:url('{{asset('assets/images/Footer-images/service-four_pattern.png')}}')"></div>
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
                                <strong>Groundnuts</strong>, and <strong>Rice</strong>.
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
                                Reliable supply of <strong>Rice</strong>, <strong>Moringa</strong>, and Organic
                                Products delivered on schedule.
                            </div>
                            <div class="service-block_four-number trans-500">04</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="food-one" style="background-image:url('{{asset('assets/images/footer-images/food-pattern.png')}}')">
            <div class="food-one_pattern overlay-layer"
                style="background-image:url('{{asset('assets/images/footer-images/food-pattern-1.png')}}')"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="food-one_image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="food-one_image-outer">
                            <div class="food-one_image">
                                <img src="{{asset('assets/images/Footer-images/food.png')}}" alt="Organic Products">
                            </div>
                            <div class="food-one_leaf">
                                <img src="{{asset('assets/images/Footer-images/leaf.png')}}" alt="Leaf Decoration">
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
                                    Groundnuts, Turmeric, Rice, and Red Dry Chillies.
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
                                        <h6 class="food-block_one-title trans-300">Rice & Organic Products</h6>
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
                style="background-image:url('{{asset('assets/images/footer-images/customer-bg.png')}}')"></div>
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
                                    We specialize in <b>Moringa, Groundnuts, Turmeric, Rice, Red Dry Chillies</b>
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
                                    <div class="count-box "><span class="count-text text-white" data-speed="2000"
                                            data-stop="100" style="font-size:40px;">0</span>%</div>
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Premium Quality Products</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="count-box"><span class="count-text text-white" data-speed="2000"
                                            data-stop="100" style="font-size:40px;">0</span>%</div>
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Organic & Healthy Food</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="count-box"><span class="count-text text-white" data-speed="2000"
                                            data-stop="100" style="font-size:40px;">0</span>%</div>
                                    <div class="skill-header clearfix">
                                        <div class="skill-title">Global Trade & Sales</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="100"></div>
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
                                <img src="{{asset('assets/images/resource/about -import-export.png')}}" alt="TETRA Elements ">
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
                                <img src="{{asset('assets/images/resource/why-choose-us.png')}}" alt="Organic Farming Company">
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
                                    <b>Rice</b>,
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
            <div class="market-one_bg-layer" style="background-image:url('{{asset('assets/images/footer-images/market-bg.png')}}')">
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="market-one_image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="market-one_image-outer">
                            <div class="market-one_image">
                                <img src="{{asset('assets/images/resource/new-about-img.png')}}" alt="TETRA Elements ">
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
                                        Groundnuts, Turmeric, Rice, Red Dry Chillies</b> and more.
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
        @if (!empty($withTitle) && !Theme::get('titleRendered', false) && request()->is('terms-conditions'))
        <div class="terms-container bg-white" >
            <div class="terms-header mb-0">
                <h2>Terms & Conditions</h2> 
                <p>Please read these terms carefully before using our services or purchasing our Moringa products</p>
            </div>
            <div class="terms-content">
                <div class="last-updated">
                    Last Updated: October 16, 2025
                </div>
                <div class="terms-section">
                    <h3><i class="fas fa-info-circle"></i> Introduction</h3>
                    <p>Welcome to Tetra Elements . These Terms and Conditions govern your use of our website and
                        services, and the purchase of our Moringa-based products for export and domestic markets.</p>
                    <p>Tetra Elements  specializes in the cultivation, processing, and export of premium quality
                        Moringa products including Moringa powder, capsules, oils, and herbal teas.</p>
                </div>
                <div class="terms-section">
                    <h3><i class="fas fa-globe"></i> Export Terms & International Trade</h3>
                    <p><strong>1. Export Compliance:</strong> All international shipments are subject to compliance
                        with:</p>
                    <ul>
                        <li>Indian Export Control Regulations</li>
                        <li>Destination country import regulations</li>
                        <li>Food Safety and Standards Authority of India (FSSAI) guidelines</li>
                        <li>Agricultural and Processed Food Products Export Development Authority (APEDA) requirements
                        </li>
                        <li>International phytosanitary certification requirements</li>
                    </ul>
    
                    <p><strong>2. Customs and Duties:</strong></p>
                    <ul>
                        <li>Buyer is responsible for all import duties, taxes, and customs clearance</li>
                        <li>Export documentation including certificate of origin, phytosanitary certificate, and FSSAI
                            certification will be provided</li>
                        <li>All products comply with ISO 22000:2018 food safety standards</li>
                    </ul>
    
                    <div class="highlight-box">
                        <strong>Important:</strong> International buyers must ensure their country permits the import of
                        Moringa products and comply with all local food safety regulations.
                    </div>
                </div>
                <div class="terms-section">
                    <h3><i class="fas fa-award"></i> Product Quality & Specifications</h3>
                    <p><strong>1. Quality Assurance:</strong></p>
                    <ul>
                        <li>100% organic Moringa oleifera cultivation</li>
                        <li>No pesticides or chemical fertilizers used</li>
                        <li>GMP and HACCP certified processing facilities</li>
                        <li>Third-party laboratory testing for quality and purity</li>
                        <li>Shelf life: 24 months from manufacturing date</li>
                    </ul>
                    <p><strong>2. Product Specifications:</strong></p>
                    <ul>
                        <li><strong>Moringa Powder:</strong> 100% pure, no additives, moisture content < 8% </li>
                        <li><strong>Moringa Capsules:</strong> 500mg pure Moringa leaf powder per capsule</li>
                        <li><strong>Moringa Oil:</strong> Cold-pressed, 100% pure, food grade</li>
                        <li><strong>Moringa Tea:</strong> 100% natural, no artificial flavors</li>
                    </ul>
                </div>
                <div class="terms-section">
                    <h3><i class="fas fa-shopping-cart"></i> Ordering & Payment Terms</h3>
                    <p><strong>1. Minimum Order Quantities:</strong></p>
                    <ul>
                        <li>Domestic orders: Minimum ₹5,000</li>
                        <li>Export orders: Minimum 100 kg or equivalent value</li>
                        <li>Sample orders available for qualified buyers</li>
                    </ul>
    
                    <p><strong>2. Payment Terms:</strong></p>
                    <ul>
                        <li>50% advance payment with order confirmation</li>
                        <li>50% balance payment before shipment</li>
                        <li>Accepted payment methods: Bank transfer, Letter of Credit</li>
                        <li>Export payments in USD, EUR, or other major currencies</li>
                    </ul>
                    <p><strong>3. Order Processing:</strong></p>
                    <ul>
                        <li>Domestic orders: 3-5 business days processing</li>
                        <li>Export orders: 7-14 business days processing</li>
                        <li>Custom manufacturing: 15-30 business days</li>
                    </ul>
                </div>
                <div class="terms-section">
                    <h3><i class="fas fa-shipping-fast"></i> Shipping & Delivery</h3>
                    <p><strong>1. Domestic Shipping:</strong></p>
                    <ul>
                        <li>Free shipping on orders above ₹10,000</li>
                        <li>Standard delivery: 5-7 business days</li>
                        <li>Express delivery available at additional cost</li>
                    </ul>
    
                    <p><strong>2. International Shipping:</strong></p>
                    <ul>
                        <li>FOB, CIF, or EXW terms available</li>
                        <li>Primary shipping partners: DHL, FedEx, Maersk</li>
                        <li>Sea freight for bulk orders (500kg+)</li>
                        <li>Air freight for urgent shipments</li>
                        <li>All export packaging meets international standards</li>
                    </ul>
    
                    <div class="highlight-box">
                        <strong>Note:</strong> Shipping times may vary due to customs clearance, weather conditions, and
                        other factors beyond our control.
                    </div>
                </div>
                <div class="terms-section">
                    <h3><i class="fas fa-exchange-alt"></i> Returns & Refunds</h3>
                    <p><strong>1. Quality Issues:</strong></p>
                    <ul>
                        <li>Quality complaints must be reported within 7 days of receipt</li>
                        <li>Return of defective products for inspection required</li>
                        <li>Full refund or replacement for verified quality issues</li>
                    </ul>
    
                    <p><strong>2. Export Returns:</strong></p>
                    <ul>
                        <li>Returns accepted only for quality issues</li>
                        <li>Buyer responsible for return shipping costs</li>
                        <li>Products must be in original packaging</li>
                        <li>Refund processed after inspection and verification</li>
                    </ul>
    
                    <p><strong>3. Non-Returnable Items:</strong></p>
                    <ul>
                        <li>Customized or private label products</li>
                        <li>Products with broken seal or opened packaging</li>
                        <li>Perishable items beyond expiry date</li>
                    </ul>
                </div>
                <div class="terms-section">
                    <h3><i class="fas fa-copyright"></i> Intellectual Property</h3>
                    <p>All content, including but not limited to trademarks, logos, product designs, and proprietary
                        processing methods are the intellectual property of Tetra Elements .</p>
                    <ul>
                        <li>Unauthorized use of our branding is prohibited</li>
                        <li>Private labeling available for qualified partners</li>
                        <li>Product formulations are proprietary and confidential</li>
                    </ul>
                </div>
                <div class="terms-section">
                    <h3><i class="fas fa-balance-scale"></i> Liability & Disclaimer</h3>
                    <p><strong>1. Product Usage:</strong> Our Moringa products are dietary supplements and should not
                        replace medical treatment. Consult healthcare professionals before use.</p>
                    <p><strong>2. Limitation of Liability:</strong> Tetra Elements  is not liable for:</p>
                    <ul>
                        <li>Misuse of products</li>
                        <li>Individual allergic reactions</li>
                        <li>Shipping delays beyond our control</li>
                        <li>Customs clearance issues in destination countries</li>
                    </ul>
                </div>
                <div class="contact-info">
                    <h4>Contact Us for Export Inquiries</h4>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+91 9090-7070-85</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>tetraelements@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Door no: 5-106/SY227AA1, Street No 2, Green Lands, Manchiravula , Gandipet, Hyderabad, Telangana, India - 500075.</span>
                        </div>
                    </div>
                </div>
                <div class="terms-footer">
                    <p>By using our services or purchasing our products, you acknowledge that you have read, understood,
                        and agree to be bound by these Terms and Conditions.</p>
                    <div class="testimonial-one_button">
                        <a href="{{url('register')}}" class="theme-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Back to Registration <i class="fas fa-arrow-right fa-fw"></i></span>
                                <span class="text-two">Back to Registration <i class="fas fa-arrow-right fa-fw"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if (!empty($withTitle) && !Theme::get('titleRendered', false) && request()->is('refund-policy'))
        <div class="refund-container bg-white">
            <div class="refund-header mb-0">
                <h2>Refund Policy</h2>
                <p>Our commitment to quality and customer satisfaction</p>
            </div>
            <div class="refund-content">
                <div class="last-updated">
                    Last Updated: October 16, 2025
                </div>
                <div class="refund-section">
                    <h3><i class="fas fa-handshake"></i> Our Refund Commitment</h3>
                    <p>At Tetra Elements , we take pride in the quality of our Moringa products. We stand behind our
                        products and are committed to ensuring complete customer satisfaction.</p>
                    <p>This refund policy outlines the circumstances under which refunds are provided for our domestic
                        and international customers.</p>
                </div>
                <div class="refund-section">
                    <h3><i class="fas fa-check-circle"></i> Refund Eligibility</h3>
                    <p><strong>We offer refunds in the following cases:</strong></p>
                    <ul>
                        <li>Products received in damaged condition</li>
                        <li>Wrong products shipped</li>
                        <li>Quality issues (discoloration, unusual odor, contamination)</li>
                        <li>Products past their expiry date</li>
                        <li>Significant deviation from product specifications</li>
                    </ul>
                    <div class="highlight-box">
                        <strong>Quality Standards:</strong> All our Moringa products undergo rigorous quality testing.
                        Refunds are provided when products don't meet our published quality standards.
                    </div>
                </div>
                <div class="refund-section">
                    <h3><i class="fas fa-times-circle"></i> Non-Refundable Situations</h3>
                    <p><strong>Refunds are not provided in the following cases:</strong></p>
                    <ul>
                        <li>Change of mind or personal preference</li>
                        <li>Products with broken seals or opened packaging</li>
                        <li>Improper storage by customer leading to quality degradation</li>
                        <li>Customized or private label orders</li>
                        <li>International shipments rejected by customs</li>
                        <li>Shipping delays beyond our control</li>
                    </ul>
    
                    <div class="warning-box">
                        <strong>Important:</strong> For export orders, customers are responsible for ensuring their
                        country permits the import of Moringa products and complying with local regulations.
                    </div>
                </div>
                <div class="refund-section">
                    <h3><i class="fas fa-sync-alt"></i> Refund Process</h3>
                    <p>Our simple 4-step refund process ensures quick resolution:</p>
    
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <h4>Report Issue</h4>
                            <p>Contact us within 7 days of receiving the products with details and supporting evidence
                            </p>
                        </div>
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <h4>Return Request</h4>
                            <p>We provide a Return Authorization Number and shipping instructions</p>
                        </div>
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <h4>Inspection</h4>
                            <p>Our quality team inspects returned products at our facility</p>
                        </div>
                        <div class="process-step">
                            <div class="step-number">4</div>
                            <h4>Refund Processing</h4>
                            <p>Refund is processed within 7 business days after approval</p>
                        </div>
                    </div>
                </div>
                <div class="refund-section">
                    <h3><i class="fas fa-clock"></i> Refund Timeframes</h3>
    
                    <table>
                        <thead>
                            <tr>
                                <th>Refund Type</th>
                                <th>Processing Time</th>
                                <th>Conditions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Domestic Refunds</strong></td>
                                <td>7-10 business days</td>
                                <td>After product inspection and approval</td>
                            </tr>
                            <tr>
                                <td><strong>International Refunds</strong></td>
                                <td>14-21 business days</td>
                                <td>Additional time for international banking</td>
                            </tr>
                            <tr>
                                <td><strong>Bank Transfer</strong></td>
                                <td>3-5 business days</td>
                                <td>After refund approval</td>
                            </tr>
                            <tr>
                                <td><strong>Credit Card</strong></td>
                                <td>5-7 business days</td>
                                <td>Depends on card issuer policies</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="refund-section">
                    <h3><i class="fas fa-globe"></i> International Refund Policy</h3>
                    <p><strong>Special considerations for export customers:</strong></p>
                    <ul>
                        <li>Refund amount will be in the original currency of payment</li>
                        <li>Bank transfer charges will be deducted from refund amount</li>
                        <li>Customer responsible for return shipping costs</li>
                        <li>Products must be returned in original export packaging</li>
                        <li>Customs documentation must be properly completed</li>
                    </ul>
    
                    <div class="highlight-box">
                        <strong>Exchange Rates:</strong> Refunds for international orders are processed at the current
                        exchange rate, which may differ from the original purchase rate.
                    </div>
                </div>
                <div class="refund-section">
                    <h3><i class="fas fa-shipping-fast"></i> Shipping & Handling Charges</h3>
                    <p><strong>Shipping cost refund policy:</strong></p>
                    <ul>
                        <li>Original shipping costs are non-refundable</li>
                        <li>Return shipping costs are customer's responsibility</li>
                        <li>Free shipping offers are void if order is refunded</li>
                        <li>For quality issues, we may cover return shipping at our discretion</li>
                    </ul>
                </div>
                <div class="refund-section">
                    <h3><i class="fas fa-award"></i> Quality Assurance</h3>
                    <p>To minimize the need for refunds, we maintain strict quality controls:</p>
                    <ul>
                        <li>Regular third-party laboratory testing</li>
                        <li>GMP and HACCP certified facilities</li>
                        <li>ISO 22000:2018 food safety standards</li>
                        <li>Proper storage and handling protocols</li>
                        <li>Regular quality audits</li>
                    </ul>
                </div>
                <div class="contact-info">
                    <h4>Refund & Customer Support</h4>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+91 9090-7070-85</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>tetraelements@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <span>Mon-Fri: 9:00 AM - 6:00 PM IST</span>
                        </div>
                    </div>
                    <p style="margin-top: 15px; color: #666;">For refund requests, please include your order number and
                        detailed description of the issue.</p>
                </div>
    
                <div class="refund-footer">
                    <p>This refund policy is part of our Terms and Conditions. By purchasing our products, you agree to
                        this refund policy.</p>
                    <p><strong>Note:</strong> We reserve the right to modify this refund policy at any time. Changes
                        will be effective immediately upon posting on our website.</p>
                    <div class="testimonial-one_button">
                        <a href="{{ url('/')}}" class="theme-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Back To Home <i class="fas fa-arrow-right fa-fw"></i></span>
                                <span class="text-two">Back To Home <i class="fas fa-arrow-right fa-fw"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @php
        Theme::set('titleRendered', true);
        @endphp
    @endif
</div>