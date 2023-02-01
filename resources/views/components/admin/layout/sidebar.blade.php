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

            <x-admin.layout.sidebar-item :title="__('Pages')"
                                         icon="sliders"
                                         :url="route('admin.pages.index')"
                                         route="admin.pages*"
            />

            <x-admin.layout.sidebar-item :title="__('Menu')"
                                         icon="sliders"
                                         :url="route('admin.menus.index')"
                                         route="admin.menus*"
            />

            <x-admin.layout.sidebar-item :title="__('Banners')"
                                         icon="sliders"
                                         :url="route('admin.banners.index')"
                                         route="admin.banners*"
            />

            <x-admin.layout.sidebar-item :title="__('News')"
                                         icon="users"
                                         :url="route('admin.news.index')"
                                         route="admin.news*"
            />


            <li class="sidebar-header">
                {{ __('Media') }}
            </li>


            <x-admin.layout.sidebar-item :title="__('Products')"
                                         icon="users"
                                         :url="route('admin.products.index')"
                                         route="admin.products*"
            />


            <x-admin.layout.sidebar-item :title="__('Goods')"
                                         icon="users"
                                         :url="route('admin.goods.index')"
                                         route="admin.goods*"
            />


            <x-admin.layout.sidebar-item :title="__('Services')"
                                         icon="users"
                                         :url="route('admin.services.index')"
                                         route="admin.services*"
            />

            <x-admin.layout.sidebar-item :title="__('Orders')"
                                         icon="users"
                                         :url="route('admin.orders.index')"
                                         route="admin.orders*"
            />


            <li class="sidebar-header">
                {{ __('Users') }}
            </li>

            <x-admin.layout.sidebar-item :title="__('Users')"
                                         icon="users"
                                         :url="route('admin.users.index')"
                                         route="admin.users*"
            />

            <x-admin.layout.sidebar-item :title="__('Roles')"
                                         icon="users"
                                         :url="route('admin.roles.index')"
                                         route="admin.roles*"
            />

            <li class="sidebar-header">
                {{ __('Settings') }}
            </li>

            <x-admin.layout.sidebar-item :title="__('Settings')"
                                         icon="sliders"
                                         :url="route('admin.settings.index')"
                                         route="admin.settings*"
            />

        </ul>
    </div>
</nav>
