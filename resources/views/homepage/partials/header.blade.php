<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="/" class="logo">
            <img src="/assets/home/img/logo/logo.png" alt="Andromind">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a class="nav-link scrollto {{($active === 'home') ? 'active' : '' }}"
                        href="/">Beranda </a>
                </li>
                <li class="dropdown"><a class="nav-link scrollto {{($active === 'startup') ? 'active' : '' }}"
                        href="/startup"><span>Anggota</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/startup/#unicorn">Unicorn</a></li>
                        <li><a href="/startup/#unicorn">Decacorn</a></li>
                        <li><a href="/startup/#unicorn">Hectocron</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto {{($active === 'news') ? 'active' : '' }}" href="/news">Berita</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ ($active === 'karier' || Request::path()==='karier' ||
                        (Request::is('detail_work/*') && Request::segment(2)===$work->slug)) ? 'active' : '' }}"
                        href="/karier">Karier</a>
                </li>


                <li>
                    <a class="nav-link scrollto {{($active === 'contact' ) ? 'active' : '' }}"
                        href="/contact">Kontak</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
