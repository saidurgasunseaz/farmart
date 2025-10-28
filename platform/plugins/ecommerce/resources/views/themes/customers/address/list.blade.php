@extends(EcommerceHelper::viewPath('customers.master'))

@section('title', __('Address books'))

@section('content')
    @if ($addresses->isNotEmpty())
        <div class="col-lg-12 wow fadeInRight">
            <div class="dashboard_content">
                <h3 class="dashboard_title">Address List <a class="common_btn"
                        href="{{ route('customer.address.create') }}">Add New</a>
                </h3>

                <div class="dashboard_addredd_list">
                    <div class="checkout_address_area">
                        <div class="row">
                            @foreach ($addresses as $address)
                                @include(EcommerceHelper::viewPath('customers.address.item'), [
                                    'address' => $address,
                                ])
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @include(EcommerceHelper::viewPath('customers.partials.empty-state'), [
            'title' => __('No addresses yet!'),
            'subtitle' => __('Add your first shipping or billing address to get started.'),
            'actionUrl' => route('customer.address.create'),
            'actionLabel' => __('Add Your First Address'),
        ])
    @endif
@endsection