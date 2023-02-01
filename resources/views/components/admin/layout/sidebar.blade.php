<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Admin</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                {{ __('Main') }}
            </li>

            <x-admin.layout.sidebar-item :title="__('Dashboard')"
                                         icon="sliders"
                                         :url="route('admin.dashboard.index')"
                                         route="admin.dashboard.index"
            />

            <li class="sidebar-header">
                {{ __('Content') }}
            </li>

            @can('pages.index')
                <x-admin.layout.sidebar-item :title="__('Pages')"
                                             icon="sliders"
                                             :url="route('admin.pages.index')"
                                             route="admin.pages*"
                />
            @endcan

            @can('menus.index')
                <x-admin.layout.sidebar-item :title="__('Menu')"
                                             icon="sliders"
                                             :url="route('admin.menus.index')"
                                             route="admin.menus*"
                />
            @endcan

            @can('banners.index')
                <x-admin.layout.sidebar-item :title="__('Banners')"
                                             icon="sliders"
                                             :url="route('admin.banners.index')"
                                             route="admin.banners*"
                />
            @endcan

            @can('news.index')
                <x-admin.layout.sidebar-item :title="__('News')"
                                             icon="users"
                                             :url="route('admin.news.index')"
                                             route="admin.news*"
                />
            @endcan


            <li class="sidebar-header">
                {{ __('Media') }}
            </li>


            @can('products.index')
                <x-admin.layout.sidebar-item :title="__('Products')"
                                             icon="users"
                                             :url="route('admin.products.index')"
                                             route="admin.products*"
                />
            @endcan


            @can('goods.index')
                <x-admin.layout.sidebar-item :title="__('Goods')"
                                             icon="users"
                                             :url="route('admin.goods.index')"
                                             route="admin.goods*"
                />
            @endcan

            @can('services.index')
                <x-admin.layout.sidebar-item :title="__('Services')"
                                             icon="users"
                                             :url="route('admin.services.index')"
                                             route="admin.services*"
                />
            @endcan

            @can('pages.orders')
                <x-admin.layout.sidebar-item :title="__('Orders')"
                                             icon="users"
                                             :url="route('admin.orders.index')"
                                             route="admin.orders*"
                />
            @endcan


            <li class="sidebar-header">
                {{ __('Users') }}
            </li>

            @can('users.index')
                <x-admin.layout.sidebar-item :title="__('Users')"
                                             icon="users"
                                             :url="route('admin.users.index')"
                                             route="admin.users*"
                />
            @endcan

            @can('roles.index')
                <x-admin.layout.sidebar-item :title="__('Roles')"
                                             icon="users"
                                             :url="route('admin.roles.index')"
                                             route="admin.roles*"
                />
            @endcan


            <li class="sidebar-header">
                {{ __('Settings') }}
            </li>

            @can('settings.index')
                <x-admin.layout.sidebar-item :title="__('Settings')"
                                             icon="sliders"
                                             :url="route('admin.settings.index')"
                                             route="admin.settings*"
                />
            @endcan

        </ul>
    </div>
</nav>
