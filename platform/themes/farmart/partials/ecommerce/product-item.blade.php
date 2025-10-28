<style>
    .ribbon {
        padding: 4px;
        color: #fff;
    }

    .style {
        background: rgb(176, 4, 4) !important;
    }
</style>
<div class="service-block_two">
    <div class="service-block_two-inner">
        <div class="service-block_two-image">
            <div class="product-card__badge-list">
                <on-sale-badge discount-mode="percentage" class="badge badge--on-sale">
                    @if ($product->isOutOfStock())
                    <span class="ribbon out-stock">{{ __('Out Of Stock') }}</span>
                    @else
                    @if ($product->productLabels->isNotEmpty())
                    @foreach ($product->productLabels as $label)
                    @if($label->name)
                    <span class="ribbon" {!! $label->css_styles !!}>{{ $label->name }}</span>
                    @endif
                    @endforeach
                    @else
                    @if ($product->front_sale_price !== $product->price)
                    <span class="badge badge--on-sale style">
                        {{ get_sale_percentage($product->price, $product->front_sale_price) }}
                    </span>
                    @endif
                    @endif
                    @endif
                </on-sale-badge>
            </div>

            <a href="{{ $product->url }}" tabindex="0">
                <img
                    class="lazyload product-thumbnail__img"
                    data-src="{{ RvMedia::getImageUrl($product->image, 'small', false, RvMedia::getDefaultImage()) }}"
                    src="{{ image_placeholder($product->image, 'small') }}"
                    alt="{{ $product->name }}">
            </a>
        </div>

        <div class="service-block_two-content">
            <h4 class="service-block_two-title">
                <a href="{{ $product->url }}">{{ $product->name }}</a>
            </h4>
        </div>

        <div class="service-block_two-overlay overlay-layer"
            style="background-image:url({{ RvMedia::getImageUrl($product->image, 'small', false, RvMedia::getDefaultImage()) }})">

            @if (is_plugin_active('marketplace') && $product->store->id)
            <a href="{{ $product->store->url }}" class="text-xs link-faded prod-vendor">
                {{ $product->store->name }}
            </a>
            @endif

            <h4 class="service-block_two-title_two">
                <a href="{{ $product->url }}">{{ $product->name }}</a>
            </h4>

            <div class="service-block_two-price-rating">
                <div class="service-block_two-price">
                    <strong>
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        {{ format_price($product->front_sale_price_with_taxes) }}
                    </strong>
                    @if ($product->front_sale_price != $product->price)
                    <del>{{ format_price($product->price_with_taxes) }}</del>
                    @endif
                </div>

                <div class="service-block_two-rating">
                    @php
                    $avgRating = $product->reviews_avg ?? 0;
                    $reviewCount = $product->reviews_count ?? 0;
                    @endphp
                    <span class="stars">
                        {!! str_repeat('★', round($avgRating)) !!}
                        {!! str_repeat('☆', 5 - round($avgRating)) !!}
                    </span>
                    <span class="review-count">{{ $reviewCount }} reviews</span>
                </div>
            </div>

            {{-- ✅ Add to Cart Button --}}
            <div class="add-to-cart-wrapper">
                <form class="product-form add-to-cart-form" action="{{ route('public.cart.add-to-cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">

                    <button type="submit" class="service-block_two-more add-to-cart-btn">
                        {{ __('Add to Cart') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>
                    </button>
                </form>
            </div>

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
                        <div
                            class="progress-bar"
                            role="progressbar"
                            aria-valuenow="{{ $product->pivot->quantity > 0 ? ($product->pivot->sold / $product->pivot->quantity) * 100 : 0 }}"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="width: {{ $product->pivot->quantity > 0 ? ($product->pivot->sold / $product->pivot->quantity) * 100 : 0 }}%">
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>