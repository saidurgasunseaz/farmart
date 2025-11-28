<style>
    .payment-checkout-btn {
        background: rgb(16, 117, 60);
    }

    .payment-checkout-btn-step:hover {
        background: rgb(131 192 66);
    }
</style>
@if (EcommerceHelper::isValidToProcessCheckout())
    @auth
        <button class="btn payment-checkout-btn payment-checkout-btn-step checkout-btn-responsive"
            data-processing-text="{{ __('Processing. Please wait...') }}" data-error-header="{{ __('Error') }}"
            type="submit"
            style="
            min-height: 48px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
        ">
            {{ __('Checkout') }}
        </button>
        @endauth

@guest
<a 
        href="{{ route('customer.login') }}" 
        class="btn payment-checkout-btn payment-checkout-btn-step checkout-btn-responsive"
        style="
            min-height: 48px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
        "
    >
        {{ __('Checkout') }}
    </a>
@endguest
    @else
        <span class="btn payment-checkout-btn-step checkout-btn-responsive disabled"
            style="
            min-height: 48px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
        ">
            {{ __('Checkout') }} 
        </span>
    @endif

<style>
    @media (min-width: 768px) {
        .checkout-btn-responsive {
            width: auto !important;
            float: right;
            min-width: 150px;
        }
    }

    @media (max-width: 767.98px) {
        .checkout-btn-responsive {
            width: 100% !important;
            margin-bottom: 1rem;
        }

        /* Ensure the button container takes full width on mobile */
        .checkout-btn-responsive:not(.disabled):active,
        .checkout-btn-responsive:not(.disabled):focus {
            transform: translateY(1px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    }
</style>
