<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo text-bold">

            </span>
            <span class="app-brand-text  demo menu-text fw-bold"><small>Smart Economy</small></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>




    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }} ">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Dasbor</div>
            </a>
        </li>

        {{-- @can('admin', auth()->user())
            <li class="menu-item {{ Request::is('account/management') ? 'active' : '' }} ">
                <a href="{{ route('account_management') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div>Account Management</div>
                </a>
            </li>
        @endcan --}}

        <li
            class="menu-item {{ Request::is('classification/maps') || Request::is('classification/c50') || Request::is('classification/ecm') || Request::is('classification/pakar*') || Request::is('village/create') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-brand-google-maps"></i>
                <div>Peta</div>
            </a>
            <ul class="menu-sub ">
                <li class="menu-item {{ Request::is('classification/maps') ? 'active' : '' }}">
                    <a href="{{ route('classification.maps') }}" class="menu-link">
                        <div>Peta</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::is('village/create') || Request::is('village') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-building-cottage"></i>
                <div>Desa</div>
            </a>
            <ul class="menu-sub ">
                <li class="menu-item {{ Request::is('village') ? 'active' : '' }}">
                    <a href="{{ route('village.index') }}" class="menu-link">
                        <div>Analisis</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('village/create') ? 'active' : '' }}">
                    <a href="{{ route('village.create') }}" class="menu-link">
                        <div>Form</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::is('pakar/create') || Request::is('pakar') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div>Pakar</div>
            </a>
            <ul class="menu-sub ">
                <li class="menu-item {{ Request::is('pakar') ? 'active' : '' }}">
                    <a href="{{ route('pakar.index') }}" class="menu-link">
                        <div>Analisis</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('pakar/create') ? 'active' : '' }}">
                    <a href="{{ route('pakar.create') }}" class="menu-link">
                        <div>Form</div>
                    </a>
                </li>
            </ul>
        </li>

        <li
            class="menu-item {{ Request::is('algoritmaC50/create') || Request::is('algoritmaC50') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-binary-tree-2"></i>
                <div>Algoritma C5.0</div>
            </a>
            <ul class="menu-sub ">
                <li class="menu-item {{ Request::is('algoritmaC50') ? 'active' : '' }}">
                    <a href="{{ route('algoritmaC50.index') }}" class="menu-link">
                        <div>Analisis</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('algoritmaC50/create') ? 'active' : '' }}">
                    <a href="{{ route('algoritmaC50.create') }}" class="menu-link">
                        <div>Form</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ Request::is('mpe/create') || Request::is('mpe') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-math-function-y"></i>
                <div>Metode Perbandingan Eksponensial (MPE)</div>
            </a>
            <ul class="menu-sub ">
                <li class="menu-item {{ Request::is('mpe') ? 'active' : '' }}">
                    <a href="{{ route('mpe.index') }}" class="menu-link">
                        <div>Analisis</div>
                    </a>
                </li>
                {{-- <li class="menu-item {{ Request::is('mpe/create') ? 'active' : '' }}">
                    <a href="{{ route('mpe.create') }}" class="menu-link">
                        <div>Form</div>
                    </a>
                </li> --}}
            </ul>
        </li>
    </ul>


</aside>
