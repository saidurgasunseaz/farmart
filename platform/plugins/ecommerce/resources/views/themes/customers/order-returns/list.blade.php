@extends(EcommerceHelper::viewPath('customers.master'))

@section('title', __('Order Return Requests'))

@section('content')
@if($requests->isNotEmpty())
<div class="customer-list-order">
    <!-- Return Requests Grid -->

    <div class="col-lg-12 wow fadeInRight">
        <div class="dashboard_content">
            <h3 class="dashboard_title">Request For Product Return</h3>
            <div class="row">
                @foreach ($requests as $item)
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_return_request">
                        <div class="return_request_number">
                            <p>Request No: <span>  {{ __('  :code', ['code' => $item->code]) }}</span></p>
                            <a
                        href="{{ route('customer.order_returns.detail', $item->id) }}">
                        {{ __('Submited Request') }}
                    </a>
                            <!-- <a href="dashboard_return_request_details.html">Submited Request</a> -->
                        </div>
                        <div class="return_product_item">
                            
                            <a class="text" href="dashboard_return_request_details.html">
                                <span class="return_date">Date : {{ $item->created_at->translatedFormat('M d, Y \a\t g:i A') }}</span>
                                <span class="return_p_status d-flex">Status : <span>{!! BaseHelper::clean($item->return_status->toHtml()) !!}</span></span>
                                <span class="return_p_quantity"> Original Order : {{ $item->order->code }}</span>
                                <span class="return_p_price">Items:  {{ trans_choice('{1} :count item|[2,*] :count items', $item->items_count, ['count' => $item->items_count]) }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                 @endforeach
                <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_return_request">
                        <div class="return_request_number">
                            <p>Request No: <span> #JDS54545</span></p>
                            <a href="dashboard_return_request_details.html">Submited Request</a>
                        </div>
                        <div class="return_product_item">
                            <div class="img">
                                <img src="assets/images/resource/products/moringa_powder_front.png" alt="Product"
                                    class="img-fluid w-100">
                            </div>
                            <a class="text" href="dashboard_return_request_details.html">
                                <span class="return_date">March 17, 2025</span>
                                <span class="return_p_title">Moringa Powder</span>
                                <span class="return_p_quantity">Quantity: <b>01</b></span>
                                <span class="return_p_price">₹399.00</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_return_request">
                        <div class="return_request_number">
                            <p>Request No: <span> #JDS54545</span></p>
                            <a href="dashboard_return_request_details.html">Submited Request</a>
                        </div>
                        <div class="return_product_item">
                            <div class="img">
                                <img src="assets/images/resource/products/moringa_capsules_back.png" alt="Product"
                                    class="img-fluid w-100">
                            </div>
                            <a class="text" href="dashboard_return_request_details.html">
                                <span class="return_date">May 10, 2025</span>
                                <span class="return_p_title">Moringa Face Serum</span>
                                <span class="return_p_quantity">Quantity: <b>01</b></span>
                                <span class="return_p_price">₹449.00</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="dashboard_return_request">
                        <div class="return_request_number">
                            <p>Request No: <span> #1374837</span></p>
                            <a href="dashboard_return_request_details.html">Submited Request</a>
                        </div>
                        <div class="return_product_item">
                            <div class="img">
                                <img src="assets/images/resource/products/moringa-powder.jpg" alt="Product"
                                    class="img-fluid w-100">
                            </div>
                            <a class="text" href="dashboard_return_request_details.html">
                                <span class="return_date">May 26, 2025</span>
                                <span class="return_p_title">Moringa PODS Powder</span>
                                <span class="return_p_quantity">Quantity: <b>02</b></span>
                                <span class="return_p_price">₹499.00</span>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <!-- <div class="bb-customer-card-list order-return-cards mb-6">
        @foreach ($requests as $item)
        <div class="bb-customer-card order-return-card">
            <div class="bb-customer-card-header">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h3 class="bb-customer-card-title h6 mb-1">
                            {{ __('Return Request :code', ['code' => $item->code]) }}
                        </h3>
                        <p class="text-muted small mb-0">
                            {{ $item->created_at->translatedFormat('M d, Y \a\t g:i A') }}
                        </p>
                        <div class="bb-customer-card-status">
                            {!! BaseHelper::clean($item->return_status->toHtml()) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="bb-customer-card-body">
                <div class="bb-customer-card-info">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="info-item">
                                <span class="label">
                                    <x-core::icon name="ti ti-shopping-cart" class="me-1" />
                                    {{ __('Original Order') }}
                                </span>
                                <span class="value">
                                    <a
                                        href="{{ route('customer.orders.view', $item->order_id) }}"
                                        class="text-decoration-none fw-medium"
                                        title="{{ __('Click to view order details') }}">
                                        {{ $item->order->code }}
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <span class="label">
                                    <x-core::icon name="ti ti-package" class="me-1" />
                                    {{ __('Items Count') }}
                                </span>
                                <span class="value">
                                    {{ trans_choice('{1} :count item|[2,*] :count items', $item->items_count, ['count' => $item->items_count]) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bb-customer-card-footer">
                <div class="d-flex justify-content-end">
                    <a
                        class="btn btn-primary btn-sm"
                        href="{{ route('customer.order_returns.detail', $item->id) }}">
                        <x-core::icon name="ti ti-eye" class="me-1" />
                        {{ __('View Details') }}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div> -->

    <!-- Pagination -->
    @if($requests->hasPages())
    <div class="d-flex justify-content-center mt-4">
        {!! $requests->links() !!}
    </div>
    @endif
</div>
@else
@include(EcommerceHelper::viewPath('customers.partials.empty-state'), [
'title' => __('No order return requests yet!'),
'subtitle' => __('You have not placed any order return requests yet.'),
])
@endif
@stop