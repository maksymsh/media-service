<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">

        <x-admin.link class="sidebar-brand" :href="route('admin.dashboard.index')">
            <span class="align-middle">{{ __('Admin') }}</span>
        </x-admin.link>

        <ul class="sidebar-nav">
            <li class="sidebar-header">{{ __('Main') }}</li>

            <x-admin.layout.sidebar-item :title="__('Dashboard')"
                                         icon="sliders"
                                         :url="route('admin.dashboard.index')"
                                         route="admin.dashboard.index"
            />

            <li class="sidebar-header">{{ __('Content') }}</li>

            @can('pages.index')
                <x-admin.layout.sidebar-item :title="__('Pages')"
                                             icon="sliders"
                                             :url="route('admin.pages.index')"
                                             route="admin.pages*"
                />
            @endcan

            @can('layouts.index')
                <x-admin.layout.sidebar-item :title="__('Layouts')"
                                             icon="sliders"
                                             :url="route('admin.layouts.index')"
                                             route="admin.layouts*"
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


            <li class="sidebar-header">{{ __('Media') }}</li>

            @can('news.index')
                <x-admin.layout.sidebar-item :title="__('News')"
                                             icon="users"
                                             :url="route('admin.news.index')"
                                             route="admin.news*"
                                             :active="request()->get('type') === 'news' ? true : null"
                >
                    <x-admin.layout.sidebar-item :title="__('News')"
                                                 icon="users"
                                                 :url="route('admin.news.index')"
                                                 route="admin.news.*"
                    />

                    <x-admin.layout.sidebar-item :title="__('News Categories')"
                                                 icon="users"
                                                 :url="route('admin.categories.index', ['type' => 'news'])"
                                                 :active="request()->get('type') === 'news'"
                    />
                </x-admin.layout.sidebar-item>
            @endcan

            @can('products.index')
                <x-admin.layout.sidebar-item :title="__('Products')"
                                             icon="users"
                                             :url="route('admin.products.index')"
                                             route="admin.products*"
                                             :active="request()->get('type') === 'products' ? true : null"
                >
                    <x-admin.layout.sidebar-item :title="__('Products')"
                                                 icon="users"
                                                 :url="route('admin.products.index')"
                                                 route="admin.products.*"
                    />

                    <x-admin.layout.sidebar-item :title="__('Product Categories')"
                                                 icon="users"
                                                 :url="route('admin.categories.index', ['type' => 'products'])"
                                                 :active="request()->get('type') === 'products'"
                    />
                </x-admin.layout.sidebar-item>
            @endcan


            @can('goods.index')
                <x-admin.layout.sidebar-item :title="__('Goods')"
                                             icon="users"
                                             :url="route('admin.goods.index')"
                                             route="admin.goods*"
                                             :active="request()->is('*attributes*') ? true : (request()->is('*categories*') ? (request()->get('type') === 'goods' ? true : null) : null)"
                >
                    <x-admin.layout.sidebar-item :title="__('Goods')"
                                                 icon="users"
                                                 :url="route('admin.goods.index')"
                                                 route="admin.goods.*"
                    />

                    <x-admin.layout.sidebar-item :title="__('Attributes')"
                                                 icon="users"
                                                 :url="route('admin.attributes.index')"
                                                 route="admin.attributes.*"
                    />

                    <x-admin.layout.sidebar-item :title="__('Good Categories')"
                                                 icon="users"
                                                 :url="route('admin.categories.index', ['type' => 'goods'])"
                                                 :active="request()->get('type') === 'goods'"
                    />
                </x-admin.layout.sidebar-item>
            @endcan

            @can('services.index')
                <x-admin.layout.sidebar-item :title="__('Services')"
                                             icon="users"
                                             :url="route('admin.services.index')"
                                             route="admin.services*"
                                             :active="request()->get('type') === 'services' ? true : null"
                >
                    <x-admin.layout.sidebar-item :title="__('Services')"
                                                 icon="users"
                                                 :url="route('admin.services.index')"
                                                 route="admin.services.*"
                    />

                    <x-admin.layout.sidebar-item :title="__('Service Categories')"
                                                 icon="users"
                                                 :url="route('admin.categories.index', ['type' => 'services'])"
                                                 :active="request()->get('type') === 'services'"
                    />
                </x-admin.layout.sidebar-item>
            @endcan

            @can('projects.index')
                <x-admin.layout.sidebar-item :title="__('Projects')"
                                             icon="users"
                                             :url="route('admin.projects.index')"
                                             route="admin.projects*"
                />
            @endcan

            @can('vacancies.index')
                <x-admin.layout.sidebar-item :title="__('Vacancies')"
                                             icon="users"
                                             :url="route('admin.vacancies.index')"
                                             route="admin.vacancies*"
                />
            @endcan

            @can('courses.index')
                <x-admin.layout.sidebar-item :title="__('Courses')"
                                             icon="users"
                                             :url="route('admin.courses.index')"
                                             route="admin.courses*"
                />
            @endcan

            <li class="sidebar-header">{{ __('Orders') }}</li>

            @can('pages.orders')
                <x-admin.layout.sidebar-item :title="__('Orders')"
                                             icon="users"
                                             :url="route('admin.orders.index')"
                                             route="admin.orders*"
                />
                <x-admin.layout.sidebar-item :title="__('Calculation')"
                                             icon="users"
                                             :url="route('admin.orders.index')"
                                             route="admin.order.calculation"
                />
                <x-admin.layout.sidebar-item :title="__('Demo')"
                                             icon="users"
                                             :url="route('admin.orders.index')"
                                             route="admin.order.demo"
                />
                <x-admin.layout.sidebar-item :title="__('Consult')"
                                             icon="users"
                                             :url="route('admin.orders.index')"
                                             route="admin.order.consult"
                />
            @endcan


            <li class="sidebar-header">{{ __('Users') }}</li>

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


            <li class="sidebar-header">{{ __('Settings') }}</li>

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
