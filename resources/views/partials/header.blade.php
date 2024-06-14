                                <header id="header-sticky" class="{{ Request::is('/') ? 'sticky-menu-home' : 'transparent-header s-transparent-header' }}">
                                    <div class="container">
                                        <div class="s-header-wrap">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3">
                                                    <div class="logo">
                                                        <a href="index.html"><img src="{{asset('img/logo/fw_logo.png')}}" alt="Logo"></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 text-end d-none d-lg-block">
                                                    <div class="menu-area s-menu-area d-inline-block">
                                                        <div class="main-menu">
                                                            <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Beranda</a></li>
                                        <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                                        <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                        <li><a href="{{ url('/service') }}">Layanan</a>
                                            <ul class="submenu ps-3">
                                                <li class="lg-8"><a href="{{ url('/service/video') }}">Video</a></li>
                                                <li><a href="{{ url('/service/foto') }}">Foto</a></li>
                                                <li><a href="{{ url('/service/desain') }}">Desain</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/contact') }}">Kontak</a></li>
                                    </ul>                               
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu s-mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->