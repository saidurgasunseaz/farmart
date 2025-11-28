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

    .style {
        margin-bottom: -30px;
        position: relative;
        display: flex;
        padding-left:5px;
    }

    .style1 {
        margin-top: -34px !important;
        position: relative !important;
        float: right !important;
         padding-right:5px;
    }
</style>

{{-- <div class="item-quantity">
    <div class="input-group bootstrap-touchspin">
        <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
            <input class="qty-spinner form-control" type="text" value="1"
            name="quantity" style="display: block;">
            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
            <span class="input-group-btn-vertical">
                <button class="btn btn-default bootstrap-touchspin-up" type="button">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </button>
                <button class="btn btn-default bootstrap-touchspin-down" type="button">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </button>
            </span>
    </div>
</div> --}}


<div class="quantity">
    <div class="qty-box">
        <span class="svg-icon decrease">
            <svg xmlns="http://www.w3.org/2000/svg" class="style" width="18" height="18" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
        </span>
        <input class="input-text qty" name="{{ $name ?? 'qty' }}" type="number"
            value="{{ $value ?? $product->min_cart_quantity }}" min="{{ $product->min_cart_quantity }}"
            max="{{ $product->max_cart_quantity }}" title="Qty" tabindex="0" step="1" required>
        <span class="svg-icon increase">
            <svg xmlns="http://www.w3.org/2000/svg" class="style1" width="18" height="18" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
        </span>
    </div>
</div>
