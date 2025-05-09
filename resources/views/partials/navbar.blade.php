<header>
    @php
        $navTextClass = $isHome ? '!tw-text-gray-200 !hover:tw-text-white' : '!tw-text-gray-800 !hover:tw-text-black';
    @endphp
    <div class="tw-w-full tw-bg-primary tw-shadow tw-pt-3 tw-pb-0.5 tw-px-6 tw-flex tw-justify-between tw-items-center tw-text-sm tw-font-medium tw-sticky tw-top-0">

        <!-- Kiri: Logo atau Judul -->
        
        <!-- Tengah: Menu Navigasi -->
        <div class="tw-hidden lg:tw-flex tw-gap-6">
          <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-mortarboard"></i> Dashboard
          </a>
          <a href="https://siakad.iwu.ac.id/login/" class="tw-flex tw-text-base tw-text-gray-200 tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-journal-bookmark"></i> LMS IWU
          </a>
          <a href="https://pmb.iwu.ac.id/" class="tw-flex tw-text-gray-200 tw-text-base tw-items-center tw-gap-1 hover:tw-text-gray-100 transition-all duration-300">
            <i class="bi bi-book"></i> PMB IWU
          </a>
        </div>
        
        <!-- Kanan: Pilihan Bahasa -->
        <div class="tw-hidden lg:tw-flex tw-gap-2">
          <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/idn-flag.png')}}" alt="" width="20">🇮🇩</button>
          <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/eng-flag.png')}}" alt="" width="20">🇺🇸</button>
          <button class="tw-bg-primary tw-px-3 tw-py-1 tw-rounded hover:tw-bg-secondary tw-text-gray-300 hover:tw-text-gray-100 transition">
            <img src="{{asset ('images/gambar/kr-flag.png')}}" alt=" " width="20">🇰🇷</button>
        </div>
        
        </div>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light header-transparent bg-transparent disable-fixed lg:tw-mt-12">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('images/gambar/logo.png')}}" alt="" class="default-logo">
                    <img src="{{asset('images/gambar/logo.png')}}" alt="" class="alt-logo">
                    <img src="{{asset('images/gambar/logo.png')}}" alt="" class="mobile-logo"> 
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> 
                    <ul class="navbar-nav"> 
                        <li class="nav-item"><a href="{{asset('/')}}" class="nav-link {{$navTextClass}}">Beranda</a></li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="{{asset('/tentang')}}" class="nav-link {{$navTextClass}}">Tentang Kami</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href={{asset('/tentang')}}><i class="bi bi-info-circle"></i>
                                        <div class="submenu-icon-content">
                                            <span>Tentang Ilmu Komunikasi</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/visi-misi-tujuan')}}"><i class="bi bi-bullseye"></i>
                                        <div class="submenu-icon-content">
                                            <span>Visi, Misi dan Tujuan</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/struktur-organisasi')}}"><i class="bi bi-diagram-3"></i>
                                        <div class="submenu-icon-content">
                                            <span>Struktur Organisasi</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                <a href="{{asset('/fasilitas')}}"><i class="bi bi-house-door"></i>
                                        <div class="submenu-icon-content">
                                            <span>Fasilitas</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/dosen')}}"><i class="bi bi-mortarboard"></i>
                                        <div class="submenu-icon-content">
                                            <span>Dosen</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/akreditasi')}}"><i class="bi bi-check-circle"></i>
                                        <div class="submenu-icon-content">
                                            <span>Akreditasi</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/karir')}}"><i class="bi bi-briefcase"></i>
                                        <div class="submenu-icon-content">
                                            <span>Karir</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="{{asset('/kurikulum')}}" class="nav-link {{$navTextClass}}">Akademik</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="{{asset('/kurikulum')}}"><i class="bi bi-journal-bookmark"></i>
                                        <div class="submenu-icon-content">
                                            <span>Kurikulum</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/profil-lulusan')}}"><i class="bi bi-person-check"></i>
                                        <div class="submenu-icon-content">
                                            <span>Profil Lulusan</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="{{asset('/artikel')}}" class="nav-link {{$navTextClass}}">Publikasi</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="{{asset('/artikel')}}"><i class="bi bi-journal"></i>
                                        <div class="submenu-icon-content">
                                            <span>Artikel</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/berita')}}"><i class="bi bi-newspaper"></i>
                                        <div class="submenu-icon-content">
                                            <span>Berita</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/kegiatan')}}"><i class="bi bi-calendar-event"></i>
                                        <div class="submenu-icon-content">
                                            <span>Kegiatan</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="https://pmb.iwu.ac.id/" class="nav-link {{$navTextClass}}">Daftar Sekarang</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="https://pmb.iwu.ac.id/"><i class="bi bi-pencil-square"></i>
                                        <div class="submenu-icon-content">
                                            <span>Pendaftaran</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/jadwal-penerimaan')}}"><i class="bi bi-calendar-event"></i>
                                        <div class="submenu-icon-content">
                                            <span>Jadwal Penerimaan</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{asset('/persyaratan-masuk')}}"><i class="bi bi-check-circle"></i>
                                        <div class="submenu-icon-content">
                                            <span>Persyaratan Masuk</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end">
                <div class="header-icon"> 
                    <div class="header-social-icon icon">
                        <a href="http://www.facebook.com" target="_blank"><i class="fa-brands {{$navTextClass}} fa-facebook-f"></i></a>
                        <a href="https://www.facebook.com/IWUIndonesia/?_rdc=1&_rdr#" target="_blank"><i class="fa-brands {{$navTextClass}} fa-instagram"></i></a>
                        <a href="https://x.com/i/flow/login?redirect_after_login=%2Fiwuindonesia" target="_blank"><i class="fa-brands {{$navTextClass}} fa-twitter"></i></a>
                    </div>
                </div>  
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>