<style>
    /* 🔖 Stock Ribbons */
    .ribbon {
        padding: 4px 10px;
        color: #fff;
        border-radius: 4px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
        margin-right: 4px;
    }
    .ribbon.out-stock { background: #b00404; }
    .ribbon.on-backorder { background: #e8a317; }
    .ribbon.in-stock { background: #1b9c1b; }

    /* 🟥 Out of Stock Overlay */
    .out-of-stock-overlay {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0, 0, 0, 0.55);
        display: flex; align-items: center; justify-content: center;
        color: #fff; font-size: 18px; font-weight: bold;
        text-transform: uppercase; z-index: 3;
        border-radius: 8px;
    }

    /* 💰 Price Styles */
    .service-block_two-price strong { color: #1b9c1b; }
    .service-block_two-price del { color: #999; margin-left: 6px; font-size: 14px; }

    /* ⏳ Coming Soon */
    .coming-soon { color: #d4a017; font-weight: bold; font-size: 16px; padding-bottom:10%; }

    /* Disabled Add to Cart */
    .add-to-cart-btn[disabled] { opacity: 0.6; cursor: not-allowed; }
</style>

<div class="service-block_two">
    <div class="service-block_two-inner">
        <div class="service-block_two-image position-relative">
            <div class="product-card__badge-list">
                <on-sale-badge discount-mode="percentage" class="badge badge--on-sale"
                    style="background: none !important; border: 0px;">

                    {{-- 🟢 Stock Logic Based on Storehouse Management --}}
                    {{-- @if ($product->with_storehouse_management == 0)
                        @if ($product->stock_status == 'in_stock')
                            <span class="ribbon in-stock">{{ __('In Stock') }}</span>
                        @elseif ($product->stock_status == 'on_backorder')
                            <span class="ribbon on-backorder">{{ __('On Backorder') }}</span>
                        @else
                            <span class="ribbon out-stock">{{ __('Out Of Stock') }}</span>
                        @endif
                    @else
                        @if ($product->quantity <= 0 || $product->price <= 0)
                            <span class="ribbon out-stock">{{ __('Out Of Stock') }}</span>
                        @else
                            <span class="ribbon in-stock">{{ __('In Stock') }}</span>
                        @endif
                    @endif --}}

                    {{-- 🏷️ Product Labels or Discount --}}
                    @if ($product->productLabels->isNotEmpty())
                        @foreach ($product->productLabels as $label)
                            @if ($label->name)
                                <span class="ribbon" {!! $label->css_styles !!}>{{ $label->name }}</span>
                            @endif
                        @endforeach
                    @else
                        @if ($product->front_sale_price !== $product->price && $product->price > 0)
                            <span class="badge badge--on-sale style">
                                {{ get_sale_percentage($product->price, $product->front_sale_price) }}
                            </span>
                        @endif
                    @endif
                </on-sale-badge>
            </div>

            {{-- 🖼️ Product Image --}}
            <a href="{{ $product->url }}" tabindex="0">
                <img class="lazyload product-thumbnail__img"
                    data-src="{{ RvMedia::getImageUrl($product->image, 'small', false, RvMedia::getDefaultImage()) }}"
                    src="{{ image_placeholder($product->image, 'small') }}"
                    alt="{{ $product->name }}">
            </a>

            {{-- 🟥 Out of Stock Overlay --}}
            @if (
                ($product->with_storehouse_management == 1 && ($product->quantity <= 0 || $product->price <= 0)) ||
                ($product->with_storehouse_management == 0 && !in_array($product->stock_status, ['in_stock', 'on_backorder']))
            )
                <div class="out-of-stock-overlay">
                    {{ __('Out Of Stock') }}
                </div>
            @endif
        </div>

        {{-- 🧾 Product Title --}}
        <div class="service-block_two-content">
            <h4 class="service-block_two-title">
                <a href="{{ $product->url }}">{{ $product->name }}</a>
            </h4>
        </div>

        {{-- 🧩 Overlay Section --}}
        <div class="service-block_two-overlay overlay-layer"
            style="background-image:url({{ RvMedia::getImageUrl($product->image, 'small', false, RvMedia::getDefaultImage()) }})">

            {{-- 🏬 Vendor Info --}}
            @if (is_plugin_active('marketplace') && $product->store->id)
                <a href="{{ $product->store->url }}" class="text-xs link-faded prod-vendor">
                    {{ $product->store->name }}
                </a>
            @endif

            {{-- 🛍️ Product Title --}}
            <h4 class="service-block_two-title_two">
                <a href="{{ $product->url }}">{{ $product->name }}</a>
            </h4>

            {{-- 💰 Price Section --}}
            <div class="service-block_two-price-rating">
                <div class="service-block_two-price">
                    @if (
                        ($product->with_storehouse_management == 1 && ($product->quantity <= 0 || $product->price <= 0)) ||
                        ($product->with_storehouse_management == 0 && !in_array($product->stock_status, ['in_stock', 'on_backorder']))
                    )
                        <span class="coming-soon">{{ __('Coming Soon') }}</span>
                    @else
                        <strong>{{ format_price($product->front_sale_price_with_taxes) }}</strong>
                        @if ($product->front_sale_price != $product->price)
                            <del>{{ format_price($product->price_with_taxes) }}</del>
                        @endif
                    @endif
                </div>

                {{-- ⭐ Rating --}}
                <div class="service-block_two-rating">
                    @php
                        $avgRating = $product->reviews_avg ?? 0;
                        $reviewCount = $product->reviews_count ?? 0;
                    @endphp
                    <span class="stars">
                        {!! str_repeat('★', round($avgRating)) !!}
                        {!! str_repeat('☆', 5 - round($avgRating)) !!}
                    </span>
                    <span class="review-count">{{ $reviewCount }} {{ __('reviews') }}</span>
                </div>
            </div>

            {{-- 🛒 Add to Cart --}}
            <div class="add-to-cart-wrapper">
                <form class="product-form add-to-cart-form" action="{{ route('public.cart.add-to-cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">

                    <button type="submit" class="service-block_two-more add-to-cart-btn"
                        @if (
                            ($product->with_storehouse_management == 1 && ($product->quantity <= 0 || $product->price <= 0)) ||
                            ($product->with_storehouse_management == 0 && !in_array($product->stock_status, ['in_stock', 'on_backorder']))
                        ) disabled @endif>
                        {{
                            (($product->with_storehouse_management == 1 && ($product->quantity <= 0 || $product->price <= 0)) ||
                            ($product->with_storehouse_management == 0 && !in_array($product->stock_status, ['in_stock', 'on_backorder'])))
                                ? __('Unavailable')
                                : __('Add to Cart')
                        }}
                        <i class="fa-solid fa-cart-shopping fa-fw"></i>
                    </button>
                </form>
            </div>

            {{-- 🔥 Flash Sale Section --}}
            @if (!empty($isFlashSale))
                <div class="deal-sold row mt-2">
                    @if (Botble\Ecommerce\Facades\FlashSale::isShowSaleCountLeft())
                        <div class="deal-text col-auto">
                            <span class="sold fw-bold">
                                @if ($product->pivot->quantity > $product->pivot->sold)
                                    <span class="text">{{ __('Sold') }}: </span>
                                    <span class="value">{{ (int) $product->pivot->sold }} / {{ (int) $product->pivot->quantity }}</span>
                                @else
                                    <span class="text text-danger">{{ __('Sold out') }}</span>
                                @endif
                            </span>
                        </div>
                    @endif
                    <div class="deal-progress col">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                aria-valuenow="{{ $product->pivot->quantity > 0 ? ($product->pivot->sold / $product->pivot->quantity) * 100 : 0 }}"
                                aria-valuemin="0" aria-valuemax="100"
                                style="width: {{ $product->pivot->quantity > 0 ? ($product->pivot->sold / $product->pivot->quantity) * 100 : 0 }}%">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
