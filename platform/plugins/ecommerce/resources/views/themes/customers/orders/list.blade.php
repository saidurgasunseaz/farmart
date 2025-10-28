@extends(EcommerceHelper::viewPath('customers.master'))

@section('title', __('Orders'))

@section('content')
    @if ($orders->isNotEmpty())
        <div class="col-lg-12 wow fadeInRight">
            <div class="dashboard_content ">
                <h3 class="dashboard_title">Order History</h3>
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
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->code }}</td>
                                        <td> {{ $order->created_at->translatedFormat('M d, Y \a\t g:i A') }}</td>
                                        <td><span class="complete">{!! BaseHelper::clean($order->status->toHtml()) !!}</span></td>
                                        <td>{{ $order->amount_format }}</td>
                                        <td>
                                            <a href="{{ route('customer.orders.view', $order->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        @include(EcommerceHelper::viewPath('customers.partials.empty-state'), [
            'title' => __('No orders yet!'),
            'subtitle' => __('You have not placed any orders yet.'),
            'actionUrl' => route('public.products'),
            'actionLabel' => __('Start shopping now'),
        ])
    @endif
@stop