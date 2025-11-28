<form class="cart-form" action="{{ route('public.cart.add-to-cart') }}" method="POST">
    @csrf

    @if (!empty($withVariations) && $product->variations()->count())
        <div class="pr_switch_wrap">
            {!! render_product_swatches($product, [
                'selected' => $selectedAttrs,
            ]) !!}
        </div>
    @endif

    @if (isset($withProductOptions) && $withProductOptions)
        {!! render_product_options($product) !!}
    @endif

    {{-- Hidden Product ID --}}
    <input class="hidden-product-id" name="id" type="hidden"
        value="{{ $product->is_variation || !$product->defaultVariation->product_id
            ? $product->id
            : $product->defaultVariation->product_id }}" />

    <!-- {{-- Product Variations --}}
    @if (!empty($withVariations) && $product->variations()->count())
<div class="pr_switch_wrap mb-3">
            {!! render_product_swatches($product, ['selected' => $selectedAttrs]) !!}
        </div>
@endif

    {{-- Product Options --}}
    @if (isset($withProductOptions) && $withProductOptions)
<div class="product-options mb-3">
            {!! render_product_options($product) !!}
        </div>
@endif -->

    {{-- Extra HTML Filters --}}
    {!! apply_filters(ECOMMERCE_PRODUCT_DETAIL_EXTRA_HTML, null, $product) !!}

    {{-- Product Buttons --}}
    <div class="product-button d-flex align-items-center flex-wrap gap-2">

        {{-- Quick Shop for variable products --}}
        @if ($product->has_variation && empty($isQuickShop) && empty($withButtons))
            <button type="button"
                class="theme-btn btn-style-one me-2 js-quick-shop-button @if ($product->isOutOfStock()) disabled @endif"
                data-url="{{ route('public.ajax.quick-shop', $product->slug) }}" title="{{ __('Select Options') }}"
                @if ($product->isOutOfStock()) disabled @endif>
                <span class="btn-wrap">
                    <span class="text-one">
                        {{ __('Select Options') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>
                    </span>
                    <span class="text-two">
                        {{ __('Select Options') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>
                    </span>
                </span>
            </button>


            {{-- Simple Product / Quick Shop --}}
        @else
            {{-- Quantity Selector --}}
            <div class="quantity-box d-flex align-items-center me-3">
                <button type="button" class="btn btn-light decrease" onclick="decreaseQty(this)">-</button>
                <input class="input-text qty text-center form-control mx-1" name="{{ $name ?? 'qty' }}" type="number"
                    value="{{ $value ?? $product->min_cart_quantity }}" min="{{ $product->min_cart_quantity }}"
                    max="{{ $product->max_cart_quantity }}" step="1" required style="width: 70px;">
                <button type="button" class="btn btn-light increase" onclick="increaseQty(this)">+</button>
            </div>

            {{-- Add to Cart Button --}}
            @php
                $isComingSoon = $product->isOutOfStock() || !$product->price || $product->price <= 0;
            @endphp
            
            <button type="submit" 
                    name="add_to_cart" 
                    value="{{ $product->min_cart_quantity }}"
                    class="product-form add-to-cart-form theme-btn btn-style-one me-2 @if ($isComingSoon) disabled @endif"
                    title="{{ $isComingSoon ? __('Coming Soon') : __('Add to cart') }}"
                    @if ($isComingSoon) disabled @endif>
            
                @if ($isComingSoon)
                    <span class="btn-wrap">
                        <span class="text-one">
                            {{ __('Coming Soon') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>
                        </span>
                        <span class="text-two">
                            {{ __('Coming Soon') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>
                        </span>
                    </span>
                @else
                    <span class="btn-wrap">
                        <span class="text-one">
                            {{ __('Add to Cart') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>
                        </span>
                        <span class="text-two">
                            {{ __('Add to Cart') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>
                        </span>
                    </span>
                @endif
            </button>

            <!--<button type="submit" name="add_to_cart" value="{{ $product->min_cart_quantity }}"-->
            <!--    class="product-form add-to-cart-form theme-btn btn-style-one me-2 @if ($product->isOutOfStock()) disabled @endif"-->
            <!--    title="{{ __('Add to cart') }}" @if ($product->isOutOfStock()) disabled @endif>-->
            <!--    @if ($product->isOutOfStock())-->
            <!--        <span class="btn-wrap ">-->
            <!--            <span class="text-one">-->
            <!--                {{ __('Comming Soon') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>-->
            <!--            </span>-->
            <!--            <span class="text-two">-->
            <!--                {{ __('Comming Soon') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>-->
            <!--            </span>-->
            <!--        </span>-->
            <!--    @else-->
            <!--        <span class="btn-wrap ">-->
            <!--            <span class="text-one">-->
            <!--                {{ __('Add to Cart') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>-->
            <!--            </span>-->
            <!--            <span class="text-two">-->
            <!--                {{ __('Add to Cart') }} <i class="fa-solid fa-cart-shopping fa-fw"></i>-->
            <!--            </span>-->
            <!--        </span>-->
            <!--    @endif-->
            <!--</button>-->
        @endif

        {{-- Purchase Now Button --}}
        @if (EcommerceHelper::isQuickBuyButtonEnabled() && isset($withBuyNow) && $withBuyNow)
            @auth
                <button type="submit" class="theme-btn btn-style-one @if ($product->isOutOfStock()) disabled @endif"
                    name="checkout" value="{{ $product->min_cart_quantity }}" title="{{ __('Purchase Now') }}"
                    @if ($product->isOutOfStock()) disabled @endif>
                    <span class="btn-wrap">
                        <span class="text-one">
                            {{ __('Purchase Now') }} <i class="fa-solid fa-bolt fa-fw"></i>
                        </span>
                        <span class="text-two">
                            {{ __('Purchase Now') }} <i class="fa-solid fa-bolt fa-fw"></i>
                        </span>
                    </span>
                </button>
            @endauth

            @guest
                <a href="{{ route('customer.login') }}" class="theme-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one">
                            {{ __('Purchase Now') }} <i class="fa-solid fa-bolt fa-fw"></i>
                        </span>
                        <span class="text-two">
                            {{ __('Purchase Now') }} <i class="fa-solid fa-bolt fa-fw"></i>
                        </span>
                    </span>
                </a>
            @endguest
        @endif

        {{-- Wishlist / Compare Buttons --}}
        @if (!empty($withButtons))
            <div style="width:100%;">
                {!! Theme::partial('ecommerce.product-loop-buttons', compact('product', 'wishlistIds')) !!}
            </div>
        @endif
    </div>
</form>

{{-- JS for Quantity Buttons --}}
<script>
    function increaseQty(el) {
        const input = el.parentElement.querySelector('.qty');
        const max = parseInt(input.max) || 9999;
        input.value = Math.min(parseInt(input.value) + 1, max);
    }

    function decreaseQty(el) {
        const input = el.parentElement.querySelector('.qty');
        const min = parseInt(input.min) || 1;
        input.value = Math.max(parseInt(input.value) - 1, min);
    }
</script>
