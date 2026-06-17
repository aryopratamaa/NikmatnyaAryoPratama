<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <i class="bx bx-restaurant text-primary" style="font-size: 2rem;"></i>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-wrap" style="text-transform: none;">
                Nikmat Rasanyo!
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is('/') ? 'active' : '' }}">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('partnertype.*', 'partner.*', 'user.*', 'promo.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Master">Master</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('partnertype.*') ? 'active' : '' }}">
                    <a href="{{ route('partnertype.index') }}" class="menu-link">
                        <div data-i18n="Tipes of Partners">Tipes of Partners</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('partner.*') ? 'active' : '' }}">
                    <a href="{{ route('partner.index') }}" class="menu-link">
                        <div data-i18n="Partners">Partners</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}" class="menu-link">
                        <div data-i18n="Users">Users</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('promo.*') ? 'active' : '' }}">
                    <a href="{{ route('promo.index') }}" class="menu-link">
                        <div data-i18n="Promos">Promos</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('report/*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Reports">Reports</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('report/partnertype') ? 'active' : '' }}">
                    <a href="{{ route('report.index', 'partnertype') }}" class="menu-link">
                        <div data-i18n="Tipes of Partners">Tipes of Partners</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('report/partner') ? 'active' : '' }}">
                    <a href="{{ route('report.index', 'partner') }}" class="menu-link">
                        <div data-i18n="Partners">Partners</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('report/promo') ? 'active' : '' }}">
                    <a href="{{ route('report.index', 'promo') }}" class="menu-link">
                        <div data-i18n="Promos">Promos</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->routeIs('setting') ? 'active' : '' }}">
            <a href="{{ route('setting') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Setting">Setting</div>
            </a>
        </li>
        
        <li class="menu-item {{ request()->routeIs('support') ? 'active' : '' }}">
            <a href="{{ route('support') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>

    </ul>
</aside>