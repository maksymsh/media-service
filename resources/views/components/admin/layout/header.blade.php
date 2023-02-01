<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="{{ auth()->user()->avatar }}" class="avatar img-fluid rounded me-1" alt="{{ auth()->user()->name }}" />
                    <span class="text-dark">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <x-admin.link class="dropdown-item" :href="route('admin.users.edit', auth()->user())">
                        <x-admin.icon class="align-middle me-1" name="user" /> {{ __('Profile') }}
                    </x-admin.link>
                    <div class="dropdown-divider"></div>
                    <x-admin.link class="dropdown-item" :href="route('admin.logout')">
                        <x-admin.icon class="align-middle me-1" name="settings" /> {{ __('Settings') }}
                    </x-admin.link>
                    <div class="dropdown-divider"></div>
                    <x-admin.link class="dropdown-item" :href="route('admin.logout')">Log out</x-admin.link>
                </div>
            </li>
        </ul>
    </div>
</nav>
