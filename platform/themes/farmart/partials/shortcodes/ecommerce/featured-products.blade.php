<section class="services-two">
			<div class="services-two_bg-layer overlay-layer"
				style="background-image:url(assets/images/background/services-two_pattern.png)"></div>
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="sec-title_title">Shop Best Sellers</div>
					<h2 class="sec-title_heading tx-split-text split-in-right">The Nutrient Dense<br> Miracle Tree</h2>
					<p class="sec-title_para tx-split-text split-in-right">Packed with vitamins, minerals, and
						antioxidants, Moringa is a superfood that boosts energy,<br> supports immunity, and promotes
						overall health</p>
				</div>
				<!-- End Sec Title -->

				<div class="four-item-carousel swiper-container">
					<div class="swiper-wrapper">
                         @foreach ($products as $product)
						<div class="swiper-slide">
							{!! Theme::partial('ecommerce.product-item', compact('product', 'wishlistIds')) !!}
							<!-- <div class="service-block_two">
								<div class="service-block_two-inner">
									<div class="service-block_two-image">
										<div class="product-card__badge-list">
											<on-sale-badge discount-mode="percentage" class="badge badge--on-sale"> Save
												Upto 10%</on-sale-badge>
										</div>
										<img src="assets/images/resource/products/moringa_capsules_front.png" alt="" />

									</div>
									<div class="service-block_two-content">
										<h4 class="service-block_two-title"><a href="#">Moringa
												Capsules</a></h4>
									</div>
									<div class="service-block_two-overlay overlay-layer"
										style="background-image:url(assets/images/resource/service-4.html)">
										<a href="#" class="text-xs link-faded prod-vendor">Essential Nutrition</a>
										<h4 class="service-block_two-title_two"><a href="#">Moringa
												Capsules</a></h4>
										<div class="service-block_two-price-rating">
											<div class="service-block_two-price">
												<strong><i class="fa-solid fa-indian-rupee-sign"></i> 449</strong>
											</div>
											<div class="service-block_two-rating">
												<span class="stars">★★★★★</span>
												<span class="review-count">159 reviews</span>
											</div>
										</div>
										<div class="add-to-cart-wrapper">
											<a class="service-block_two-more add-to-cart-btn" href="shopping-cart.html">
												Add to Cart <i class="fa-solid fa-cart-shopping fa-fw"></i>
											</a>
										</div>
									</div>
								</div>
							</div> -->
						</div>
                        @endforeach
					</div>
				</div>

				<!-- If we need navigation buttons -->
				<div class="four-item-carousel-prev fas fa-arrow-left fa-fw"></div>
				<div class="four-item-carousel-next fas fa-arrow-right fa-fw"></div>

			</div>
		</section>

<!-- <div class="widget-products-with-category py-5 bg-light">
    <div class="container-xxxl">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center mb-2 widget-header">
                    <div class="col-auto">
                        <h2 class="mb-0 py-2">{{ $shortcode->title }}</h2>
                        @if ($shortcode->subtitle)
                            <p class="mb-0">{{ $shortcode->subtitle }}</p>
                        @endif
                    </div>
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
