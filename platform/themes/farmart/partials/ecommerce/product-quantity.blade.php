<style>
input.input-text.qty::-webkit-inner-spin-button,
input.input-text.qty::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input.input-text.qty {
    -moz-appearance: textfield;
    text-align: center;
}
</style>
<div class="quantity">
    <div class="qty-box">
        <span class="svg-icon decrease">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
        </span>
        <input
            class="input-text qty"
            name="{{ $name ?? 'qty' }}"
            type="number"
            value="{{ $value ?? $product->min_cart_quantity }}"
            min="{{ $product->min_cart_quantity }}"
            max="{{ $product->max_cart_quantity }}"
            title="Qty"
            tabindex="0"
            step="1"
            required
        >
        <span class="svg-icon increase">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
        </span>
    </div>
</div>