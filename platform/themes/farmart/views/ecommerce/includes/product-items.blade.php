@php
    $products->loadMissing(['defaultVariation', 'options', 'options.values']);
@endphp
<div class="loading loading-container">
    <div class="half-circle-spinner">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>
</div>
<input
    name="page"
    data-value="{{ $products->currentPage() }}"
    type="hidden"
>
<input
    name="q"
    type="hidden"
    value="{{ BaseHelper::stringify(request()->query('q')) }}"
>
<div
    class="row">
    @forelse ($products as $product)
        <div class="shop-item col-lg-4 col-md-4 col-sm-12">
            <div class="product-inner">
                {!! Theme::partial('ecommerce.product-item', compact('product')) !!}
            </div>
        </div>
    @empty
        <div class="col-12 w-100">
            <div
                class="alert alert-warning mt-4 w-100"
                role="alert"
            >
                {{ __(':total Product(s) found', ['total' => 0]) }}
            </div>
        </div>
    @endforelse
</div>

<div class="row mt-2 mb-3">
    @php
       if (Route::currentRouteName() !== 'public.products') {
           request()->merge(['categories' => null]);
       }
    @endphp
    {!! $products->withQueryString()->links(Theme::getThemeNamespace('partials.pagination-numeric')) !!}
</div>
