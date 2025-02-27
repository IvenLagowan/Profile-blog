{{-- <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <img src="/img/logo/logo-title.png" alt="andromind" width="20%">
            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-capitalize">Andro Mind</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle bi bi-speedometer2"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
            <a href="/dashboard/categories" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-tag"></i>
                <div data-i18n="Basic">Categories</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/news*') ? 'active' : '' }}">
            <a href="/dashboard/news" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-newspaper"></i>
                <div data-i18n="Basic">News</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/prospect*') ? 'active' : '' }}">
            <a href="/dashboard/prospect" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-journal-text"></i>
                <div data-i18n="Basic">Job Prospect</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/startup*') ? 'active' : '' }}">
            <a href="/dashboard/startup" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-building-up"></i>
                <div data-i18n="Basic">Startup</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/work*') ? 'active' : '' }}">
            <a href="/dashboard/work" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-person-workspace"></i>
                <div data-i18n="Basic">Carier</div>
            </a>
        </li>

        <li class="menu-item {{ Request::is('dashboard/apply*') ? 'active' : '' }}">
            <a href="/dashboard/apply" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection bi bi-envelope-plus"></i>
                <div data-i18n="Basic">Applicant</div>
            </a>
        </li>

    </ul>
</aside> --}}

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : 'collapsed' }}" href="/dashboard">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Data</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') || Request::is('dashboard/news*') || Request::is('dashboard/prospect*') || Request::is('dashboard/startup*') ? 'active' : 'collapsed' }}"
                data-bs-target="#olah-data" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Olah Data</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="olah-data"
                class="nav-content collapse {{ Request::is('dashboard/categories*') || Request::is('dashboard/news*') || Request::is('dashboard/prospect*') || Request::is('dashboard/startup*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/dashboard/categories"
                        class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/news"
                        class="nav-link {{ Request::is('dashboard/news*') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Berita</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/prospect"
                        class="nav-link {{ Request::is('dashboard/prospect*') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Prospect</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/startup"
                        class="nav-link {{ Request::is('dashboard/startup*') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Perusahaan</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-heading">Karir</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/work*') || Request::is('dashboard/apply*') ? 'active' : 'collapsed' }}"
                data-bs-target="#data-karir" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Karir</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="data-karir"
                class="nav-content collapse {{ Request::is('dashboard/work*') || Request::is('dashboard/apply*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/dashboard/work"
                        class="nav-link {{ Request::is('dashboard/work*') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Lowongan</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/apply"
                        class="nav-link {{ Request::is('dashboard/apply*') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Lamaran</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</aside>

{{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="components-alerts.html">
                <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
        </li>
    </ul>
</li> --}}
