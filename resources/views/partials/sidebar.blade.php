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
        <li class="menu-item">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Master">Master</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item">
                    <a href="{{ route('partnertype.index') }}" class="menu-link"
                        {{ request()->routeIs('partnertype.*') ? 'active' : '' }} class="menu-link">
                        <div data-i18n="Tipes of Partners">Tipes of Partners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('partner.index') }}" class="menu-link" 
                        {{ request()->routeIs('partner.*') ? 'active' : '' }}>
                        <div data-i18n="Partners">Partners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-fluid.html" class="menu-link">
                        <div data-i18n="Users">Users</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Promos">Promos</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Reports">Reports</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item">
                    <a href="{{ route('partnertype.index') }}" class="menu-link"
                        {{ request()->routeIs('partnertype.*') ? 'active' : '' }}>
                        <div data-i18n="Tipes of Partners">Tipes of Partners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('partner.index') }}" class="menu-link" 
                        {{ request()->routeIs('partner.*') ? 'active' : '' }}>
                        <div data-i18n="Partners">Partners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div data-i18n="Promos">Promos</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Setting">Setting</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>


    </ul>
</aside>
