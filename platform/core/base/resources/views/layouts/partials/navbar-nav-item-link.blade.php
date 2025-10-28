
@php
$name = Str::contains($name = $menu['name'], '::') ? BaseHelper::clean(trans($name)) : $name;
 $rawName = $menu['name'];
$lowerName = Str::lower($rawName);
  $isEcommerceReport = Str::contains($lowerName, 'ecommerce') &&
                         Str::contains($lowerName, 'report');
$isEcommerceProductInventory =
        Str::contains($lowerName, 'ecommerce') &&
        (Str::contains($lowerName, 'product-inventory') ||
         Str::contains($lowerName, 'inventory'));
@endphp
@if (
    Str::lower($name) != 'pages' &&
    Str::lower($name) != 'ads' &&
    Str::lower($name) != 'simple sliders' &&
    Str::lower($name) != 'media' &&
   Str::lower($name) != 'plugins' &&
   Str::lower($name) != 'blog' &&
   Str::lower($name) != 'appearance' &&
     ! $isEcommerceShipments &&
     !$isEcommerceProductInventory
)

<a
    @class([ 'nav-link'=> $isNav = $isNav ?? true,
    'dropdown-item' => !$isNav,
    'dropdown-toggle' => $hasChildren,
    'nav-priority-' . $menu['priority'],
    'active show' => $menu['active'],
    ])
    href="{{ $hasChildren ? "#$menu[id]" : $menu['url'] }}"
    id="{{ $menu['id'] }}"
    @if ($hasChildren)
    data-bs-toggle="dropdown"
    data-bs-auto-close="{{ $autoClose ?? 'false' }}"
    role="button"
    aria-expanded="{{ $menu['active'] ? 'true' : 'false' }}"
    @endif
    title="{{ $menu['title'] ?? $name }}"
    >
    @if (AdminAppearance::showMenuItemIcon() && $menu['icon'] !== false)
    <span class="nav-link-icon d-md-none d-lg-inline-block" title="{{ $name }}">
        <x-core::icon :name="$menu['icon'] ?: 'ti ti-point'" />
    </span>
    @endif

    <span @class(['nav-link-title text-truncate'])>
        {!! $name !!}
        {!! apply_filters(BASE_FILTER_APPEND_MENU_NAME, null, $menu['id']) !!}
    </span>
</a>
@endif