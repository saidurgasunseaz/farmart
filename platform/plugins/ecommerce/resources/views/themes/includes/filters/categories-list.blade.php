@php
    $categoriesRequest ??= [];
    $categoryId ??= 0;
    $urlCurrent ??= url()->current();

    if (!isset($groupedCategories)) {
        $groupedCategories = $categories->groupBy('parent_id');
    }

    $currentCategories = $groupedCategories->get($parentId ?? 0);
@endphp

@if ($currentCategories)
    <ul class="shop-cat">
         @foreach ($currentCategories as $category)
            @if (!empty($categoriesRequest) && $loop->first && !($parentId ?? 0))
                <li>
                    <a href="{{ $currentMainFilterUrl ?? route('public.products') }}"
                    class="{{ empty($categoriesRequest) ? 'active' : '' }}">
                        <x-core::icon name="ti ti-chevron-left" />
                        {{ __('All categories') }}
                    </a>
                </li>
            @endif
            @php
                // Example: get product count in this category
                $productCount = DB::table('ec_product_category_product')->where('category_id', $category->id)->count();
            @endphp

            <li>
                <a href="{{ route('public.single', $category->url) }}"
                   class="{{ $categoryId == $category->id || $urlCurrent == route('public.single', $category->url) ? 'active' : '' }}">
                    {{ $category->name }} <span>{{ $productCount }}</span>
                </a>
            </li>
        @endforeach
    </ul>
@endif



