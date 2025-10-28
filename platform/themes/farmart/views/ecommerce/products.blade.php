@php
Theme::layout('full-width');
$products->loadMissing('defaultVariation');
@endphp

<style>
    .sidebar-page-container{
        background:#fff;
    }
</style>
<section class="page-title" style="background-image:url('{{asset('assets/images/main-slider/banner.png')}}')">
    <div class="auto-container">
        <h2>Our Shop</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Our Products</li>
        </ul>
    </div>
</section>

<!-- {!! $widgets = dynamic_sidebar('products_list_sidebar') !!} -->

@if (empty($widgets))
{!! Theme::partial('page-header', ['size' => 'xxxl', 'withTitle' => false]) !!}
@endif

<div class="container-xxxl">
    <!-- <div class="row my-3 my-md-5">
        <div class="col-12">
            <div class="row catalog-header justify-content-between">
                <div class="col-auto catalog-header__left d-flex align-items-center">
                    <h1 class="h2 catalog-header__title d-none d-lg-block">{{ SeoHelper::getTitleOnly() }}</h1>

                    @if (EcommerceHelper::hasAnyProductFilters())
                        <a
                            class="d-lg-none sidebar-filter-mobile"
                            href="#"
                        >
                            <span class="svg-icon me-2">
                                <svg>
                                    <use
                                        href="#svg-icon-filter"
                                        xlink:href="#svg-icon-filter"
                                    ></use>
                                </svg>
                            </span>
                            <span>{{ __('Filter') }}</span>
                        </a>
                    @endif
                </div>
                <div class="col-auto catalog-header__right">
                    <div class="catalog-toolbar row align-items-center">
                        @include(Theme::getThemeNamespace('views.ecommerce.includes.sort'))
                        @include(Theme::getThemeNamespace('views.ecommerce.includes.layout'))
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    @if (Theme::get('pageDescription'))
    <div class="ps-block__content">
        <div class="ps-section__content">
            {!! BaseHelper::clean(Theme::get('pageDescription')) !!}
        </div>
    </div>
    @endif

  
        <div class="sidebar-page-container left-sidebar">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar sticky-top">
                            <div class="sidebar-inner padding-right">
                                <div class="row clearfix">
                                    <div class="sidebar-widget category-widget col-lg-12 col-md-6 col-sm-12">
                                        <!-- Sidebar Title -->
                                        <div class="sidebar-title">
                                            <h4>CATEGORIES</h4>
                                        </div>
                                        <div class="widget-content">
                                            @include(EcommerceHelper::viewPath('includes.filters'))
                                        </div>
                                    </div>
                                    <div class="sidebar-widget related-posts col-lg-12 col-md-12 col-sm-12">
                                        <div class="sidebar-title">
                                            <h4>NEW ARRIVALS</h4>
                                        </div>
                                        <?php
                                        $latestProducts = DB::table('ec_products')
                                            ->where('slug', '!=', '')          
                                            ->orderBy('created_at', 'desc')    
                                            ->limit(3)                        
                                            ->get();
                                        ?>
                                        <div class="widget-content">
                                            @foreach ($latestProducts as $product)
                                            <div class="post">
                                                <div class="image">
                                                    @php
                                                    $images = json_decode($product->images, true); // decode JSON to array
                                                    $firstImage = $images[0] ?? null; // get first image or null
                                                    @endphp

                                                    <figure class="post-thumb">
                                                        <a href="{{'/products/'.$product->slug}}">
                                                            <img src="{{ RvMedia::getImageUrl($firstImage, 'medium') }}" alt="{{ $product->name }}">
                                                        </a>
                                                    </figure>
                                                </div>

                                                <h4><a href="{{url('product/'.$product->slug)}}"><?php echo  $product->name ; ?></a></h4>
                                                <div class="price"> <i class="fa-solid fa-indian-rupee-sign"></i> {{$product->price}}.00</div>
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="content-side shop-products col-lg-8 col-md-12 col-sm-12">
                        @include(Theme::getThemeNamespace('views.ecommerce.includes.product-items'))
                    </div>
                </div>
            </div>
        </div>
        

</div>