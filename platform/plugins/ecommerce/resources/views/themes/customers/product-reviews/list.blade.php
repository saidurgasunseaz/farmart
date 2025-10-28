@extends(EcommerceHelper::viewPath('customers.master'))

@section('title', SeoHelper::getTitle())

@section('content')
@if($products->isNotEmpty() || $reviews->isNotEmpty())
@include(EcommerceHelper::viewPath('customers.product-reviews.icons'))


<div class="col-lg-12 wow fadeInRight">
    <div class="dashboard_content">
        <h3 class="dashboard_title">My Reviews</h3>
        <div class="dashboard_reviews">
            <div class="single_review_list_area">
                @if ($reviews->isNotEmpty())
                @include(EcommerceHelper::viewPath('customers.product-reviews.reviewed'))
                @endif
                @if ($products->isNotEmpty())
                @foreach ($products as $product)
                <div class="single_review">
                    <div class="img">
                        {{ RvMedia::image($product->order_product_image ?: $product->image, $product->name, 'thumb', true, ['class' => 'img-fluid rounded']) }}
                        <!-- <img src="assets/images/resource/products/moringa_powder_front.png" alt="Reviews"
                            class="img-fluid w-100"> -->
                    </div>
                    <div class="text">
                        <h5>
                            <a class="title" href="{{ $product->url }}">{!! BaseHelper::clean($product->order_product_name ?: $product->name) !!}</a>
                            <div class="d-flex ecommerce-product-star ecommerce-product-item" data-id="{{ $product->id }}">
                                @for ($i = 5; $i >= 1; $i--)
                                <label class="order-{{ $i }} cursor-pointer">
                                    <x-core::icon name="ti ti-star-filled" class="ecommerce-icon text-warning" data-star="{{ $i }}" />
                                </label>
                                @endfor
                            </div>
                        </h5>
                        <p class="date">{{ Carbon\Carbon::parse($product->order_completed_at)->translatedFormat('M d, Y') }}</p>
                        <div class="d-flex ecommerce-product-star ecommerce-product-item" data-id="{{ $product->id }}">
                            <p class="description ecommerce-icon text-warning" data-star="{{ $i }}">Write Review</p>
                        </div>
                    </div>
                </div>
                @endforeach


                <!-- <div class="bb-customer-card waiting-review-card">
                    <div class="bb-customer-card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-2">
                                    <x-core::icon name="ti ti-clock" class="text-warning" />
                                </div>
                                <div>
                                    <h3 class="bb-customer-card-title h5 mb-0">{{ __('Waiting for your review') }}</h3>
                                    <p class="text-muted small mb-0">{{ __('Share your experience with these products') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bb-customer-card-body">
                        <div class="bb-customer-card-list">
                            @foreach ($products as $product)
                            <div class="bb-customer-card-content">
                                <div class="row align-items-center g-3">
                                    <div class="col-auto">
                                        <div class="bb-customer-card-image">
                                            {{ RvMedia::image($product->order_product_image ?: $product->image, $product->name, 'thumb', true, ['class' => 'img-fluid rounded']) }}
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="bb-customer-card-details">
                                            <h4 class="bb-customer-card-name h6 mb-1">
                                                <a href="{{ $product->url }}" class="text-decoration-none">
                                                    {!! BaseHelper::clean($product->order_product_name ?: $product->name) !!}
                                                </a>
                                            </h4>

                                            @if ($product->order_completed_at)
                                            <div class="bb-customer-card-meta">
                                                <span class="text-muted small">
                                                    <x-core::icon name="ti ti-calendar" class="me-1" />
                                                    {{ __('Order completed') }}:
                                                    <time>{{ Carbon\Carbon::parse($product->order_completed_at)->translatedFormat('M d, Y') }}</time>
                                                </span>
                                            </div>
                                            @endif

                                            <div class="bb-customer-card-actions mt-2">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="text-muted small">{{ __('Rate this product:') }}</span>
                                                    <div class="d-flex ecommerce-product-star ecommerce-product-item" data-id="{{ $product->id }}">
                                                        @for ($i = 5; $i >= 1; $i--)
                                                        <label class="order-{{ $i }} cursor-pointer">
                                                            <x-core::icon name="ti ti-star-filled" class="ecommerce-icon text-warning" data-star="{{ $i }}" />
                                                        </label>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (!$loop->last)
                            <hr class="my-3">
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div> -->


                <!-- <div class="single_review">
                    <div class="img">
                        <img src="assets/images/resource/products/moringa_powder_front.png" alt="Reviews"
                            class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h5>
                            <a class="title" href="shop_details.html">Moringa Powder (500gm)</a>
                            <span>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </span>
                        </h5>
                        <p class="date">03 April 2025</p>
                        <p class="description">I mix this powder in my smoothies daily. The taste is
                            mild and it really helps me stay healthy. – Rajesh, Bangalore</p>
                    </div>
                </div> -->
                @endif
                <!-- <div class="single_review">
                    <div class="img">
                        <img src="assets/images/resource/products/moringa_powder_front.png" alt="Reviews"
                            class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h5>
                            <a class="title" href="shop_details.html">Moringa Powder (500gm)</a>
                            <span>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </span>
                        </h5>
                        <p class="date">03 April 2025</p>
                        <p class="description">I mix this powder in my smoothies daily. The taste is
                            mild and it really helps me stay healthy. – Rajesh, Bangalore</p>
                    </div>
                </div>
                <div class="single_review">
                    <div class="img">
                        <img src="assets/images/resource/products/moringa_capsules_back.png" alt="Reviews"
                            class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h5>
                            <a class="title" href="shop_details.html">Moringa Serum (100ml)</a>
                            <span>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                            </span>
                        </h5>
                        <p class="date">10 March 2025</p>
                        <p class="description">My skin feels smoother and glowing after using this
                            serum for 2 weeks. Very gentle and effective. – Ananya, Delhi</p>
                    </div>
                </div>
                <div class="single_review">
                    <div class="img">
                        <img src="assets/images/resource/products/moringa-powder.jpg" alt="Reviews"
                            class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h5>
                            <a class="title" href="shop_details.html">Moringa Glow (500gm)</a>
                            <span>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star" aria-hidden="true"></i>
                            </span>
                        </h5>
                        <p class="date">05 January 2025</p>
                        <p class="description">This product has improved my overall wellness. I feel
                            lighter and more energetic. – Sameer, Pune</p>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <div class="pagination_area">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-start mt_25">
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="far fa-arrow-left" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link active" href="#">01</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">02</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">03</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="far fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>





@include(EcommerceHelper::viewPath('customers.product-reviews.modal'))
@else
@include(EcommerceHelper::viewPath('customers.partials.empty-state'), [
'title' => __('No reviews yet!'),
'subtitle' => __('Start shopping and share your experience by reviewing products you\'ve purchased.'),
'actionUrl' => route('public.products'),
'actionLabel' => __('Start Shopping'),
])
@endif
@endsection