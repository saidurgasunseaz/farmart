<section class="page-title" style="background-image:url('{{asset('assets/images/main-slider/banner.png')}}')">
    <div class="auto-container">
        <h2>Product Detail</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Product Detail</li>
        </ul>
    </div>
</section>
@php
Theme::layout('full-width');
Theme::set('bodyClass', 'single-product');
@endphp
<section class="shop-detail " style="background: #fff;">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="shop-detail_gallery-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="carousel-outer">
                        <div class="swiper-container content-carousel">
                            <div class="swiper-wrapper">
                                @foreach ($product->images as $image)
                                <div class="swiper-slide">
                                    <figure class="image">
                                        <a href="{{ RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage()) }}" class="lightbox-image">
                                            <img src="{{ RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}">
                                        </a>
                                    </figure>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="swiper-container thumbs-carousel">
                            <div class="swiper-wrapper">
                                @foreach ($product->images as $image)
                                <div class="swiper-slide">
                                    <figure class="thumb">
                                        <img src="{{ RvMedia::getImageUrl($image, 'thumb', false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}">
                                    </figure>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Column -->
            <div class="shop-detail_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2 class="shop-detail_title">{{ $product->name }}</h2>
                    <!-- Rating -->
                    @if (EcommerceHelper::isReviewEnabled())
                    <div class="shop-detail_rating">
                        @php
                        $avgRating = $product->reviews_avg ?? 0;
                        $reviewCount = $product->reviews_count ?? 0;
                        @endphp
                        <span class="stars">
                            {!! str_repeat('★', round($avgRating)) !!}
                            {!! str_repeat('☆', 5 - round($avgRating)) !!}
                        </span>
                        <span class="review-count"> {{ $reviewCount }} reviews</span>
                    </div>
                    @endif
                    <div class="shop-detail_price">{!! Theme::partial('ecommerce.product-price', compact('product')) !!}</div>
                    <div class="shop-detail_text">
                        {!! apply_filters('ecommerce_before_product_description', null, $product) !!}
                        {!! BaseHelper::clean($product->description) !!}
                        {!! apply_filters('ecommerce_after_product_description', null, $product) !!}
                    </div>

                    {!! Theme::partial('ecommerce.product-availability', compact('product', 'productVariation')) !!}
                    @if (Botble\Ecommerce\Facades\FlashSale::isEnabled() && ($flashSale = $product->latestFlashSales()->first()))
                    <div class="deal-expire-date p-4 bg-light mb-2">
                        <div class="row">
                            <div class="col-xxl-5 d-md-flex justify-content-center align-items-center">
                                <div class="deal-expire-text mb-2">
                                    <div class="fw-bold text-uppercase">{{ __('Hurry up! Sale end in') }}</div>
                                </div>
                            </div>
                            <div class="col-xxl-7">
                                <div class="countdown-wrapper d-none">
                                    <div
                                        class="expire-countdown col-auto"
                                        data-expire="{{ Carbon\Carbon::now()->diffInSeconds($flashSale->end_date) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center my-3">
                            <div class="deal-sold row mt-2">
                                @if (Botble\Ecommerce\Facades\FlashSale::isShowSaleCountLeft())
                                <div class="deal-text col-auto">
                                    <span class="sold fw-bold">
                                        <span class="text">{{ __('Sold') }}: </span>
                                        <span class="value">{{ $flashSale->sale_count_left_label }}</span>
                                    </span>
                                </div>
                                @endif
                                <div class="deal-progress col">
                                    <div class="progress">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            aria-valuenow="{{ $flashSale->sale_count_left_percent }}"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            style="width: {{ $flashSale->sale_count_left_percent }}%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div style="display: none;"></div>
                    {!! Theme::partial(
                    'ecommerce.product-cart-form',
                    compact('product', 'selectedAttrs', 'productVariation') + [
                    'withButtons' => true,
                    'withVariations' => true,
                    'withProductOptions' => true,
                    'wishlistIds' => \Theme\Farmart\Supports\Wishlist::getWishlistIds([$product->id]),
                    'withBuyNow' => true,
                    ],
                    ) !!}
                    <div class="meta-sku @if (!$product->sku) d-none @endif">
                        <span class="meta-label d-inline-block me-1">{{ __('SKU') }}:</span>
                        <span class="meta-value" data-bb-value="product-sku">{{ $product->sku }}</span>
                    </div>
                    <ul class="shop-detail_list mt-3">
                        @if ($product->categories->isNotEmpty())
                        <li><span>{{ __('Category:') }}</span> {{ $product->categories->pluck('name')->join(', ') }}</li>
                        @endif
                        @if ($product->tags->isNotEmpty())
                        <li><span>{{ __('Tag:') }}</span> {{ $product->tags->pluck('name')->join(', ') }}</li>
                        @endif
                    </ul>
                    <ul class="shop-detail_socials mt-3">
                        @if (theme_option('social_share_enabled', 'yes') == 'yes')
                        <li>
                            {!! Theme::partial('share-socials', compact('product')) !!}
                </div>
                @endif
                </ul>
            </div>
        </div>


        <!-- Lower Box -->
        <div class="lower-box">
            <div class="product-info-tabs">
                <div class="prod-tabs tabs-box">

                    {{-- Tab Buttons --}}
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#prod-info" class="tab-btn active-btn">{{ __('Description') }}</li>

                        @if(EcommerceHelper::isReviewEnabled())
                        <li data-tab="#prod-review" class="tab-btn">
                            {{ __('Reviews') }} ({{ $product->reviews_count }})
                        </li>
                        @endif

                        <!-- @if(EcommerceHelper::isProductSpecificationEnabled() && $product->specificationAttributes->where('pivot.hidden', false)->isNotEmpty())
                    <li data-tab="#prod-specification" class="tab-btn">
                        {{ __('Specification') }}
                    </li>
                    @endif -->
                    </ul>

                    {{-- Tabs Content --}}
                    <div class="tabs-content">

                        {{-- Description Tab --}}
                        <div class="tab active-tab" id="prod-info">
                            <div class="content ck-content">
                                {!! BaseHelper::clean($product->content) !!}
                            </div>
                        </div>

                        {{-- Reviews Tab --}}
                        @if(EcommerceHelper::isReviewEnabled())
                        <div class="tab" id="prod-review">
                            @include('plugins/ecommerce::themes.includes.reviews', ['product' => $product])
                        </div>
                        @endif



                    </div> {{-- end tabs-content --}}
                </div> {{-- end prod-tabs --}}
            </div> {{-- end product-info-tabs --}}
        </div> {{-- end lower-box --}}
    
    @if (($relatedProducts = get_related_products($product, 6)) && $relatedProducts->isNotEmpty())
        <div class="related-products py-5 bg-light">
            <div class="container-xxxl">
                <h3>{{ __('Related Products1') }}</h3>
                <div class="row clearfix">

                    @foreach ($relatedProducts as $relatedProduct)
                    <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                    {!! Theme::partial('ecommerce.product-item', ['product' => $relatedProduct]) !!}
                </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
</section>





