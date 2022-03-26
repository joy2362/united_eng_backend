<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('home')}}">
            <span class="align-middle">{{$app_name}}</span>
        </a>

        <ul class="sidebar-nav">

            <li class="sidebar-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <a class="sidebar-link" href=" {{ route('home') }}  ">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('setting.index') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('setting.index') }}">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Over view</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('brand.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('brand.index') }}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Brand</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('client.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('client.index') }}">
                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Client</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('gallery.index') }}">
                    <i class="align-middle" data-feather="image"></i> <span class="align-middle">Gallery</span>
                </a>
            </li>

        </ul>

    </div>
</nav>