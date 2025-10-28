@extends(EcommerceHelper::viewPath('customers.master'))

@section('title', __('Address books'))

@section('content')
    <div class="col-lg-12 wow fadeInRight">
        <div class="dashboard_content ">
            {!! Form::open(['route' => ['customer.address.edit', $address->id]]) !!}
            @include(EcommerceHelper::viewPath('customers.address.form'), compact('form', 'address'))
            {!! Form::close() !!}
        </div>
    </div>
@endsection