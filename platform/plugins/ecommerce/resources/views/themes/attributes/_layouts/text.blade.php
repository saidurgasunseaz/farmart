<style>
.bb-product-attribute-swatch-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.bb-product-attribute-swatch-item {
    position: relative;
    transition: all 0.3s ease-in-out;
}

.bb-product-attribute-swatch-item label {
    display: flex;
    align-items: center;
    cursor: pointer;
}

/* Hide radio button */
.bb-product-attribute-swatch-item input[type="radio"] {
    display: none;
}

/* Default look (unselected) */
.bb-product-attribute-text-display {
    display: inline-block;
    padding: 7px;
    background: #ffffff;
    border: 2px solid #e5e7eb;
    border-radius: 2px;
    color: #333;
    font-weight: 400;
    font-size: 15px;
    letter-spacing: 0.3px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    transition: all 0.25s ease;
}

/* Hover effect */
.bb-product-attribute-swatch-item:not(.disabled):hover .bb-product-attribute-text-display {
    border-color: #10753c;
    background-color: #f0f7ff;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(28, 100, 242, 0.15);
}

/* Checked (selected) */
.bb-product-attribute-swatch-item input[type="radio"]:checked + .bb-product-attribute-text-display {
    background-color: #10753c;
    border-color: #10753c;
    color: #fff;
    box-shadow: 0 4px 10px rgba(28, 100, 242, 0.3);
    transform: translateY(-1px);
}

/* Disabled */
.bb-product-attribute-swatch-item.disabled .bb-product-attribute-text-display {
    background: #f3f4f6;
    color: #999;
    border-style: dashed;
    cursor: not-allowed;
    opacity: 0.6;
}

</style>


@php
    $displayAttributes = $attributes->where('attribute_set_id', $set->id);
@endphp

@if ($displayAttributes && $displayAttributes->isNotEmpty())
    <div
        class="bb-product-attribute-swatch text-swatches-wrapper attribute-swatches-wrapper"
        data-type="text"
        data-slug="{{ $set->slug }}"
    >
        <h4 class="bb-product-attribute-swatch-title mb-2">{{ $set->title }}:</h4>
        <ul class="bb-product-attribute-swatch-list text-swatch attribute-swatch" style="display:flex;">
            @foreach ($displayAttributes as $attribute)
                @php
                    $isDisabled = ! $variationInfo->where('id', $attribute->id)->isNotEmpty();
                @endphp
                <li
                    data-slug="{{ $attribute->slug }}"
                    data-id="{{ $attribute->id }}"
                    @class([
                        'bb-product-attribute-swatch-item attribute-swatch-item',
                        'disabled' => $isDisabled,
                    ])
                >
                    <label>
                        <input
                            name="attribute_{{ $set->slug }}_{{ $key }}"
                            data-slug="{{ $attribute->slug }}"
                            @if (! empty($referenceProduct)) data-reference-product="{{ $referenceProduct->slug }}" @endif
                            type="radio"
                            value="{{ $attribute->id }}"
                            @checked($selected->where('id', $attribute->id)->isNotEmpty())
                            class="product-filter-item"
                            @if($isDisabled) disabled @endif
                        >
                        <span class="bb-product-attribute-text-display">{{ $attribute->title }}</span>
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
@endif
