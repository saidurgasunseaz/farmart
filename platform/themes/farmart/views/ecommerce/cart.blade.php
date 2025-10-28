<!-- <section class="page-title" style="background-image:url(assets/images/main-slider/banner.png)">
    <div class="auto-container">
        <h2>Shopping Cart</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="' . url('/') . '">Home</a></li>
            <li>Shopping Cart</li>
        </ul>
    </div>
</section> -->

<section class="shoping-cart-section">
    <div class="auto-container">
        @if (count($products) > 0)
        <div class="row clearfix">
            <div class="cart-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="cart-outer">
                        <div class="table-outer">
                            <div class="row cart-page-content py-5 mt-3">
                                <div class="col-12">
                                    <form
                                        class="form--shopping-cart cart-form"
                                        method="post"
                                        action="{{ route('public.cart.update') }}">
                                        @csrf
                                        <table class="cart-table">
                                            <thead class="cart-header">
                                                <tr>
                                                    <th class="prod-column">product</th>
                                                    <th>&nbsp;</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (Cart::instance('cart')->content() as $key => $cartItem)
                                                @php
                                                $product = $products->find($cartItem->id);
                                                @endphp

                                                @if (!empty($product))
                                                <tr>
                                                    <td colspan="2" class="prod-column">
                                                        <input
                                                            name="items[{{ $key }}][rowId]"
                                                            type="hidden"
                                                            value="{{ $cartItem->rowId }}">
                                                        <div class="column-box">
                                                            <figure class="prod-thumb">
                                                                <span
                                                                    class="cross-icon fa-xmark product-remove remove-cart-item"
                                                                    data-url="{{ route('public.cart.remove', $cartItem->rowId) }}"
                                                                    aria-label="Remove this item">
                                                                </span>

                                                                <a href="{{ $product->original_product->url }}">
                                                                    <img
                                                                        data-src="{{ RvMedia::getImageUrl($cartItem->options->image, 'thumb', false, RvMedia::getDefaultImage()) }}"
                                                                        src="{{ image_placeholder(RvMedia::getImageUrl($cartItem->options->image, 'thumb', false, RvMedia::getDefaultImage())) }}"
                                                                        alt="{{ $product->original_product->name }}">
                                                                </a>
                                                            </figure>

                                                            <h6 class="prod-title">{{ $product->original_product->name }}</h6>
                                                            @if ($attributes = Arr::get($cartItem->options, 'attributes'))
                                                            <p class="mb-0">
                                                                <small>{{ $attributes }}</small>
                                                            </p>
                                                            @endif
                                                            @if (EcommerceHelper::isEnabledProductOptions() && !empty($cartItem->options['options']))
                                                            {!! render_product_options_html($cartItem->options['options'], $product->front_sale_price_with_taxes) !!}
                                                            @endif

                                                            @include(
                                                            EcommerceHelper::viewPath('includes.cart-item-options-extras'),
                                                            ['options' => $cartItem->options]
                                                            )
                                                            <!-- <div class="prod-text">Net Weight : 500g <br> Quantity : 2</div> -->
                                                        </div>
                                                    </td>
                                                    <td class="price">{{ format_price($cartItem->price) }} @if ($product->front_sale_price != $product->price)
                                                        <small><del>{{ format_price($product->price) }}</del></small>
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="product-quantity product-md d-md-table-cell d-block"
                                                        data-title="{{ __('Quantity') }}">
                                                        <div class="product-button">
                                                            {!! Theme::partial(
                                                            'ecommerce.product-quantity',
                                                            compact('product') + [
                                                            'name' => 'items[' . $key . '][values][qty]',
                                                            'value' => $cartItem->qty,
                                                            ],
                                                            ) !!}
                                                        </div>

                                                    </td>
                                                    <td class="product-subtotal product-md d-md-table-cell d-block"
                                                        data-title="{{ __('Total') }}">
                                                        <div class="box-price">
                                                            <span class="d-md-none title-price">{{ __('Total') }}: </span>
                                                            <span class="fw-bold amount">
                                                                <span
                                                                    class="price-current">{{ format_price($cartItem->price * $cartItem->qty) }}</span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if (count($products) > 0)
                                        <!-- <div class="actions my-4 pb-4 border-bottom">
                                            <div class="actions__button-wrapper row justify-content-between">
                                                <div class="col-md-9">
                                                    <div class="actions__left d-grid d-md-block">
                                                        <a
                                                            class="btn btn-secondary mb-2"
                                                            href="{{ route('public.products') }}">
                                                            <span class="svg-icon">
                                                                <svg>
                                                                    <use
                                                                        href="#svg-icon-arrow-left"
                                                                        xlink:href="#svg-icon-arrow-left"></use>
                                                                </svg>
                                                            </span> {{ __('Continue Shopping') }}
                                                        </a>
                                                        <a
                                                            class="btn btn-secondary mb-2 ms-md-2"
                                                            href="{{ BaseHelper::getHomepageUrl() }}">
                                                            <span class="svg-icon">
                                                                <svg>
                                                                    <use
                                                                        href="#svg-icon-home"
                                                                        xlink:href="#svg-icon-home"></use>
                                                                </svg>
                                                            </span> {{ __('Back to Home') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row mt-4">
                                            <div class="col-lg-12 col-md-12 col-coupon form-coupon-wrapper">
                                                <div class="coupon">
                                                    <label class="form-label" for="coupon_code">
                                                        <h4>{{ __('Using A Promo Code?') }}</h4>
                                                    </label>
                                                    <div class="coupon-input input-group my-3">
                                                        <input
                                                            class="form-control coupon-code"
                                                            name="coupon_code"
                                                            type="text"
                                                            value="{{ old('coupon_code') }}"
                                                            placeholder="{{ __('Enter coupon code') }}">
                                                        <button
                                                            class="btn btn-primary lh-1 btn-apply-coupon-code"
                                                            data-url="{{ route('public.coupon.apply') }}"
                                                            type="button">{{ __('Apply') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-4 col-md-2"></div> -->
                                            <!-- <div class="col-lg-4 col-md-5">
                                                <div class="cart_totals bg-light p-4 rounded">
                                                    <h5 class="mb-3">{{ __('Cart totals') }}</h5>
                                                    <div class="cart_totals-table">
                                                        <div class="cart-subtotal d-flex justify-content-between border-bottom pb-3 mb-3">
                                                            <span class="title fw-bold">{{ __('Subtotal') }}:</span>
                                                            <span class="amount fw-bold">
                                                                <span
                                                                    class="price-current">{{ format_price(Cart::instance('cart')->rawSubTotal()) }}</span>
                                                            </span>
                                                        </div>
                                                        @if (EcommerceHelper::isTaxEnabled())
                                                        <div class="cart-subtotal d-flex justify-content-between border-bottom pb-3 mb-3">
                                                            <span class="title fw-bold">{{ __('Tax') }}:</span>
                                                            <span class="amount fw-bold">
                                                                <span
                                                                    class="price-current">{{ format_price(Cart::instance('cart')->rawTax()) }}</span>
                                                            </span>
                                                        </div>
                                                        @endif
                                                        @if ($couponDiscountAmount > 0 && session('applied_coupon_code'))
                                                        <div class="cart-subtotal d-flex justify-content-between border-bottom pb-3 mb-3">
                                                            <span class="title">
                                                                <span
                                                                    class="fw-bold">{{ __('Coupon code: :code', ['code' => session('applied_coupon_code')]) }}</span>
                                                                (<small>
                                                                    <a
                                                                        class="btn-remove-coupon-code text-danger"
                                                                        data-url="{{ route('public.coupon.remove') }}"
                                                                        data-processing-text="{{ __('Removing...') }}"
                                                                        href="#">{{ __('Remove') }}</a>
                                                                </small>)
                                                            </span>

                                                            <span class="amount fw-bold">{{ format_price($couponDiscountAmount) }}</span>
                                                        </div>
                                                        @endif
                                                        @if ($promotionDiscountAmount)
                                                        <div class="cart-subtotal d-flex justify-content-between border-bottom pb-3 mb-3">
                                                            <span class="title">
                                                                <span class="fw-bold">{{ __('Discount promotion') }}:</span>
                                                            </span>

                                                            <span
                                                                class="amount fw-bold">{{ format_price($promotionDiscountAmount) }}</span>
                                                        </div>
                                                        @endif
                                                        <div class="order-total d-flex justify-content-between pb-3 mb-3">
                                                            <span class="title">
                                                                <h6 class="mb-0">{{ __('Total') }}</h6>
                                                                <small>{{ __('(Shipping fees not included)') }}</small>
                                                            </span>
                                                            <span class="amount fw-bold fs-6 text-green">
                                                                <span
                                                                    class="price-current">{{ $promotionDiscountAmount + $couponDiscountAmount > Cart::instance('cart')->rawTotal() ? format_price(0) : format_price(Cart::instance('cart')->rawTotal() - $promotionDiscountAmount - $couponDiscountAmount) }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    @if (session('tracked_start_checkout'))
                                                    <div class="proceed-to-checkout">
                                                        <div class="d-grid gap-2">
                                                            <a
                                                                class="checkout-button btn btn-primary"
                                                                href="{{ route('public.checkout.information', session('tracked_start_checkout')) }}">{{ __('Proceed to checkout') }}</a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div> -->
                                        </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="total-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="cart-total-outer">
                        <div class="title-box">
                            <h6>Cart Totals</h6>
                        </div>
                        <div class="cart-total-box">
                            <ul class="cart-totals">
                                <li>Subtotals : <span>{{ format_price(Cart::instance('cart')->rawSubTotal()) }}</span></li>
                                @if (EcommerceHelper::isTaxEnabled())
                                <li>Tax : <span>{{ format_price(Cart::instance('cart')->rawTax()) }}</span></li>
                                @endif
                                @if ($couponDiscountAmount > 0 && session('applied_coupon_code'))
                                 <!-- <li> -->
                                  <!--  {{ __('Coupon code: :code', ['code' => session('applied_coupon_code')]) }} :  -->
                                    <div class="cart-subtotal d-flex justify-content-between border-bottom pb-3 mb-3">
                                        <span class="title">
                                            <span
                                                class="">{{ __('Coupon code: :code', ['code' => session('applied_coupon_code')]) }}</span>
                                            (<small>
                                                <a
                                                    class="btn-remove-coupon-code text-danger "
                                                    data-url="{{ route('public.coupon.remove') }}"
                                                    data-processing-text="{{ __('Removing...') }}"
                                                    href="#"><i class="fa-solid fa-delete-left"></i></a>
                                            </small>)
                                        </span>

                                        <li><span>{{ format_price($couponDiscountAmount) }}</span></li>
                                    </div>
                                <!-- </li> -->
                                @endif
                                @if ($promotionDiscountAmount)
                                <li>
                                    <div class="cart-subtotal d-flex justify-content-between border-bottom pb-3 mb-3">
                                        <span class="title">
                                            <span class="fw-bold">{{ __('Discount promotion') }}:</span>
                                        </span>

                                        <span
                                            class="amount fw-bold">{{ format_price($promotionDiscountAmount) }}</span>
                                    </div>
                                </li>
                                @endif
                                <li>Totals : <span>{{ $promotionDiscountAmount + $couponDiscountAmount > Cart::instance('cart')->rawTotal() ? format_price(0) : format_price(Cart::instance('cart')->rawTotal() - $promotionDiscountAmount - $couponDiscountAmount) }}</span></li>
                                <!-- <li>
                                    @if (session('tracked_start_checkout'))
                                    <div class="proceed-to-checkout">
                                        <div class="d-grid gap-2">
                                            <a
                                                class="checkout-button btn btn-primary"
                                                href="{{ route('public.checkout.information', session('tracked_start_checkout')) }}">{{ __('Proceed to checkout') }}</a>
                                        </div>
                                    </div>
                                    @endif
                                </li> -->
                            </ul>
                            <!-- <div class="check-box">
                                <input type="checkbox" name="remember-password" id="type-1">
                                <label for="type-1">Shipping & taxes calculated at checkout</label>
                            </div> -->
                            @if (session('tracked_start_checkout'))
                            <div class="buttons-box">
                                <button type="submit" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <a href="{{ route('public.checkout.information', session('tracked_start_checkout')) }}"><span class="text-one">proceed now <i
                                                    class="fas fa-arrow-right fa-fw"></i></span></a>
                                        <a href="{{ route('public.checkout.information', session('tracked_start_checkout')) }}"><span class="text-two">proceed now <i
                                                    class="fas fa-arrow-right fa-fw"></i></span></a>
                                    </span>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- <div class="shipping-outer">
                        <div class="title-box">
                            <h6>Calculate Shipping</h6>
                        </div>
                        <div class="cart-shipping-box">
                            <ul class="shipping-list">
                                <li>Pakistan</li>
                                <li>City Railway Staion Multan</li>
                                <li>Postal Code: 60000</li>
                            </ul>
                            <div class="buttons-box">
                                <button type="submit" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Calculate Shiping <i
                                                class="fas fa-arrow-right fa-fw"></i></span>
                                        <span class="text-two">Calculate Shiping <i
                                                class="fas fa-arrow-right fa-fw"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        @else
        <p class="text-center">{{ __('Your cart is empty!') }}</p>
        @endif

        @if ($crossSellProducts->isNotEmpty())
        @if (count($products) > 0)
        @else
        <p class="text-center" style="margin-top:100px;">{{ __('Your cart is empty!') }}</p>
        @endif
        
        @endif
    </div>
</section>