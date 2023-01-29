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
                {{ __('Users') }}
            </li>

            <x-admin.layout.sidebar-item :title="__('Users')"
                                         icon="users"
                                         :url="route('admin.users.index')"
                                         route="admin.users.index"
            />

            <x-admin.layout.sidebar-item :title="__('Roles')"
                                         icon="users"
                                         :url="route('admin.roles.index')"
                                         route="admin.roles.index"
            />

            <li class="sidebar-header">
                {{ __('Users') }}
            </li>

        </ul>
    </div>
</nav>
