<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="https://vindococo.com/wp-content/uploads/2021/12/cropped-logopng-1.png" alt="EduWell Template" width="80px" height="80px">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        @guest
                            @if (Route::has('login'))
                                <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                                <li class="scroll-to-section"><a href="#services">About </a></li>
                                <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                                <li><a href="login">Join Us</a></li>
                            @endif
                            @else
                            @if (Auth::user()->role == 'Helpdesk')
                                {{-- <li class="scroll-to-section">
                                    <a href="#courses">Courses</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#courses">Data Kursus</a>
                                                <a href="#courses">Tambah Kursus</a>
                                            </li>
                                        </ul>
                                    </li>
                                </li> --}}
                                <li class="scroll-to-section">
                                    <a href="#courses">Data Peserta</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="/datapeserta">Data Peserta</a>
                                                <a href="/terimasiswa">Terima Peserta</a>
                                                <a href="/nilaipeserta">Nilai Peserta</a>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="#courses">Materi</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="/tampilmateri">Data Materi</a>
                                                <a href="/formtambahmateri">Tambah Materi</a>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="logout"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                            @endif
                            @if (Auth::user()->role == 'Pengajar')
                                <li class="scroll-to-section">
                                    <a href="#courses">Data Peserta</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="/datapeserta">Data Peserta</a>
                                                <a href="/terimasiswa">Terima Peserta</a>
                                                <a href="/nilaipeserta">Nilai Peserta</a>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="#courses">Materi</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="/materistd">Data Materi</a>
                                                <a href="/formtambahmateri">Tambah Materi</a>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="#courses">Nilai</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="/showformnilai">Nilai Peserta</a>
                                                <a href="/nilaipeserta">Input Nilai</a>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="logout"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                            @endif
                            @if (Auth::user()->role == 'Peserta')
                                <li class="scroll-to-section">
                                    <a href="#courses">Materi</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="/materistd">Data Materi</a>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="logout"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                            @endif
                            @if (Auth::user()->role == 'Pengunjung')
                                <li class="scroll-to-section">
                                    <a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                                    <li class="has-sub">
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="logout"  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </li>
                                <li>
                                    <a>Halooo Sudah Siap Menjadi EKSPORTIR SUKSES ?, Yuk segera hubungi : 08xxxxxxxxxxxxx</a>
                                </li>
                            @endif
                        @endguest
                        {{-- <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#services">About </a></li>
                        <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="our-services.html">Our Services</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#contact-section">Contact Us</a></li>
                        @guest
                            @if (Route::has('login'))
                                <li><a href="login">Join Us</a></li>
                            @endif
                            @else
                            <li class="has-sub">
                                <a href="javascript:void(0)">{{ Auth::user()->name }}</a>
                                <ul class="sub-menu">
                                    @if (Auth::user()->role == "Pengunjung")
                                    <li>
                                        <a href="logout"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    @endif
                                    @if (Auth::user()->role == 'Peserta' || Auth::user()->role == 'Helpdesk' || Auth::user()->role == 'Pengajar')
                                    <li><a href="/dashboard">Dashboard</a></li>
                                    <li>
                                        <a href="logout"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                        @endguest --}}
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
