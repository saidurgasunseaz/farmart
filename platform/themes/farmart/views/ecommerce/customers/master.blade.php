@php
Theme::layout('full-width');
Theme::asset()
->container('footer')
->remove('ecommerce-utilities-js');
@endphp
{!! Theme::partial('page-header', ['size' => 'xxxl']) !!}

<section class="dashboard ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 wow fadeInUp">
                <div class="dashboard_sidebar mb-5">
                    <div class="dashboard_sidebar_area">
                        <div class="dashboard_sidebar_user">

                            <h3>{{ auth('customer')->user()->name }}</h3>
                            <p>{{ auth('customer')->user()->email }}</p>
                        </div>
                        <div class="dashboard_sidebar_menu">
                            <ul>

                                @foreach (DashboardMenu::getAll('customer') as $item)
    @if (
        !Str::contains($item['url'], 'customer/become-vendor') &&
        !Str::contains($item['url'], 'customer/downloads')
    )
        <li class="nav-item" id="{{ $item['id'] }}">
            <a
                class="nav-link @if ($item['active']) active @endif"
                href="{{ $item['url'] }}"
                aria-current="@if ($item['active']) true @else false @endif">
                @if ($item['icon'])
                    <span>
                        <x-core::icon :name="$item['icon']" />
                    </span>
                @endif
                {{ __($item['name']) }}
            </a>
        </li>
    @endif
@endforeach
                                <!-- <li>
                                    <p>dashboard</p>
                                </li>
                                <li>
                                    <a class="active" href="my_account.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                                            </svg>
                                        </span>
                                        overview
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_order.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                            </svg>
                                        </span>
                                        Order
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_download.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m9 13.5 3 3m0 0 3-3m-3 3v-6m1.06-4.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                            </svg>
                                        </span>
                                        download
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_return_request.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 9.75h4.875a2.625 2.625 0 0 1 0 5.25H12M8.25 9.75 10.5 7.5M8.25 9.75 10.5 12m9-7.243V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185Z" />
                                            </svg>
                                        </span>
                                        return policy
                                    </a>
                                </li>
                                <li>
                                    <p>Account settings</p>
                                </li>
                                <li>
                                    <a href="dashboard_profile.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>
                                        </span>
                                        Personal Info
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_address.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                            </svg>
                                        </span>
                                        address
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_wishlist.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </span>
                                        Wishlist
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_reviews.html">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                            </svg>
                                        </span>
                                        Reviews
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                            </svg>
                                        </span>
                                        Logout
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- @foreach (DashboardMenu::getAll('customer') as $item)
                    <li class="nav-item" id="{{ $item['id'] }}">
                        <a
                            class="nav-link
                            @if ($item['active']) active @endif"
                            href="{{ $item['url']  }}"
                            aria-current="@if ($item['active']) true @else false @endif"
                        >
                            @if ($item['icon'])
                                <x-core::icon :name="$item['icon']" />
                            @endif
                            {{ __($item['name']) }}
                        </a>
                    </li>
                @endforeach -->

            <div class="col-md-9 customer-page">
                <div class="customer-dashboard-container">
                    <div class="customer-dashboard-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>