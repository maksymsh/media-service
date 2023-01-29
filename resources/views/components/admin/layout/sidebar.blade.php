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
                {{ __('Pages') }}
            </li>

            <x-admin.layout.sidebar-item :title="__('Dashboard')"
                                         icon="sliders"
                                         :url="route('admin.dashboard.index')"
                                         route="admin.dashboard.index"
            >
                <x-admin.layout.sidebar-item :title="__('Dashboard')"
                                             icon="sliders"
                                             :url="route('admin.dashboard.index')"
                                             route="admin.dashboard.index"
                />
            </x-admin.layout.sidebar-item>

        </ul>
    </div>
</nav>
