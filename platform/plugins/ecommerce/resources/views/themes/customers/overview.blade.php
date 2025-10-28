@extends(EcommerceHelper::viewPath('customers.master'))

@section('title', __('Overview'))

@section('content')
@php
$customer = auth('customer')->user();
EcommerceHelper::registerThemeAssets();
@endphp


<div class="col-lg-12 mb-5">
    <div class="dashboard_content">
        <div class="row">
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="dashboard_overview_item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>

                    </div>
                    <?php
                    $allorders = DB::table('ec_orders')->where('user_id', auth('customer')->user()->id)->count();
                    // echo $id = auth('customer')->user()->id;
                    ?>
                    <h3> {{$allorders}} <span>Total Order</span></h3>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="dashboard_overview_item blue">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                        </svg>

                    </div>
                    <?php
                    $completeorders = DB::table('ec_orders')->where('status', 'completed')->where('user_id', auth('customer')->user()->id)->count();
                    ?>
                    <h3> {{$completeorders}} <span>Completed Order</span></h3>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="dashboard_overview_item orange">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>

                    </div>
                    <?php
                    $pendingorders = DB::table('ec_orders')->where('user_id', auth('customer')->user()->id)->where('status', 'pending')->count();
                    ?>
                    <h3> {{$pendingorders}} <span>pending order</span></h3>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="dashboard_overview_item red">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <?php
                    $canceledorders = DB::table('ec_orders')->where('user_id', auth('customer')->user()->id)->where('status', 'canceled')->count();
                    ?>
                    <h3> {{$canceledorders}} <span>Canceled Order</span></h3>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="dashboard_overview_item purple">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </div>
                    <h3> {{ auth('customer')->check()? auth('customer')->user()->wishlist()->count(): Cart::instance('wishlist')->count() }} <span>Total Wishlist</span></h3>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 wow fadeInUp">
                <div class="dashboard_overview_item olive">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                    </div>
                    <?php
                    $reviews = DB::table('ec_reviews')->where('customer_id', auth('customer')->user()->id)->count();
                    ?>
                    <h3> {{$reviews}} <span>Total Reviews</span></h3>
                </div>
            </div>
        </div>
        <!-- <div class="row mt_25">
            <div class="col-xl-7 wow fadeInLeft">
                <div class="dashboard_recent_order">
                    <h3>Your Recent order</h3>
                    <div class="dashboard_order_table">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#75HJFDYD4</td>
                                        <td>July 16, 2023</td>
                                        <td><span class="complete">Completed</span></td>
                                        <td>₹200</td>
                                        <td>
                                            <a href="dashboard_order_invoice.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                                View
                                            </a>
                                            <a class="review_order"
                                                href="dashboard_order_review.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                                </svg>
                                                Review
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#75HJF6WER</td>
                                        <td>June 23, 2023</td>
                                        <td><span class="active">Active</span></td>
                                        <td>₹60</td>
                                        <td>
                                            <a href="dashboard_order_invoice.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>

                                                View
                                            </a>
                                            <a class="cancel_order"
                                                href="dashboard_order_cancel.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                                Cancel
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#75HJF457G</td>
                                        <td>Aug 18, 2023</td>
                                        <td><span class="complete">Completed</span></td>
                                        <td>₹180</td>
                                        <td>
                                            <a href="dashboard_order_invoice.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                                View
                                            </a>
                                            <a class="review_order"
                                                href="dashboard_order_review.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                                </svg>
                                                Review
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#75HJF5FKI</td>
                                        <td>June 22, 2023</td>
                                        <td><span class="complete">Completed</span></td>
                                        <td>₹140</td>
                                        <td>
                                            <a href="dashboard_order_invoice.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>

                                                View
                                            </a>
                                            <a class="review_order"
                                                href="dashboard_order_review.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                                </svg>
                                                Review
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#75HJF47O7</td>
                                        <td>Jan 12, 2023</td>
                                        <td><span class="cancel">Canceled</span></td>
                                        <td>₹80</td>
                                        <td>
                                            <a href="dashboard_order_invoice.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight">
                <div class="dashboard_recent_review">
                    <h3>Your Recent Reviews</h3>
                    <div class="single_review_list_area">
                        <div class="single_review">
                            <div class="text">
                                <h5>
                                    <a class="title" href="shop_details.html">Organic Moringa
                                        Powder</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </h5>
                                <p class="date">10 October 2025</p>
                                <p class="description">High-quality organic moringa powder from
                                    Tetra Elements LLP. Boosts immunity and energy naturally.</p>
                            </div>
                        </div>
                        <div class="single_review">
                            <div class="text">
                                <h5>
                                    <a class="title" href="shop_details.html">Moringa Capsules</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                </h5>
                                <p class="date">05 October 2025</p>
                                <p class="description">Convenient moringa capsules for daily
                                    wellness. Trusted by Tetra Elements LLP customers.</p>
                            </div>
                        </div>
                        <div class="single_review">
                            <div class="text">
                                <h5>
                                    <a class="title" href="shop_details.html">Moringa Tea Blend</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </h5>
                                <p class="date">01 October 2025</p>
                                <p class="description">Refreshing moringa tea blend, rich in
                                    antioxidants. Recommended by Tetra Elements LLP.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>


<!-- Welcome Section -->
<!-- <div class="bb-customer-profile-wrapper">
        <div class="bb-customer-profile">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="bb-customer-profile-avatar">
                        {{ RvMedia::image($customer->avatar_url, $customer->name, attributes: ['class' => 'bb-customer-profile-avatar-img', 'data-bb-value' => 'customer-avatar']) }}
                        <div class="bb-customer-profile-avatar-overlay">
                            <input type="file" id="customer-avatar" name="avatar" data-bb-toggle="change-customer-avatar" data-url="{{ route('customer.avatar') }}" />
                            <label for="customer-avatar" title="{{ __('Change avatar') }}">
                                <x-core::icon name="ti ti-camera" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bb-customer-profile-info text-md-center text-start">
                        <h2 class="h4 mb-2">
                            {!! BaseHelper::clean(__('Welcome back, <strong>:name</strong>!', ['name' => $customer->name])) !!}
                        </h2>
                        <p class="text-muted mb-0">
                            {{ __('Manage your account, view orders, and update your preferences from your personal dashboard.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 bg-primary bg-opacity-10">
                <div class="card-body text-center">
                    <div class="bg-primary bg-opacity-20 rounded-circle p-3 d-inline-flex mb-3">
                        <x-core::icon name="ti ti-shopping-bag" class="text-white" size="lg" />
                    </div>
                    <h5 class="card-title h6 mb-2">{{ __('View Orders') }}</h5>
                    <p class="card-text text-muted small mb-3">{{ __('Track your recent orders and order history') }}</p>
                    <a href="{{ route('customer.orders') }}" class="btn btn-primary btn-sm">
                        {{ __('View Orders') }}
                        <x-core::icon name="ti ti-arrow-right" class="ms-1" />
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 bg-success bg-opacity-10">
                <div class="card-body text-center">
                    <div class="bg-success bg-opacity-20 rounded-circle p-3 d-inline-flex mb-3">
                        <x-core::icon name="ti ti-map-pin" class="text-white" size="lg" />
                    </div>
                    <h5 class="card-title h6 mb-2">{{ __('Manage Addresses') }}</h5>
                    <p class="card-text text-muted small mb-3">{{ __('Update your shipping and billing addresses') }}</p>
                    <a href="{{ route('customer.address') }}" class="btn btn-success btn-sm">
                        {{ __('Manage Addresses') }}
                        <x-core::icon name="ti ti-arrow-right" class="ms-1" />
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 bg-warning bg-opacity-10">
                <div class="card-body text-center">
                    <div class="bg-warning bg-opacity-20 rounded-circle p-3 d-inline-flex mb-3">
                        <x-core::icon name="ti ti-settings" class="text-white" size="lg" />
                    </div>
                    <h5 class="card-title h6 mb-2">{{ __('Account Settings') }}</h5>
                    <p class="card-text text-muted small mb-3">{{ __('Edit your profile and account details') }}</p>
                    <a href="{{ route('customer.edit-account') }}" class="btn btn-warning btn-sm">
                        {{ __('Edit Account') }}
                        <x-core::icon name="ti ti-arrow-right" class="ms-1" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    @if (! $customer->orders()->exists())
        <div class="card border-0 bg-info bg-opacity-10">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-12 col-md text-center text-md-start">
                        <span class="bg-info bg-opacity-20 rounded-circle p-3 mb-3 mb-md-0 d-inline-block">
                            <x-core::icon name="ti ti-shopping-cart" class="text-white" size="lg" />
                        </span>
                    </div>
                    <div class="col-12 col-md text-center text-md-start">
                        <h5 class="card-title h6 mb-1">{{ __('Ready to start shopping?') }}</h5>
                        <p class="card-text text-muted small mb-3 mb-md-0">
                            {{ __("You haven't placed any orders yet. Browse our products and find something you love!") }}
                        </p>
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="{{ route('public.products') }}" class="btn btn-info w-100 w-md-auto">
                            <x-core::icon name="ti ti-shopping-bag" class="me-1" />
                            {{ __('Browse Products') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif -->
@endsection