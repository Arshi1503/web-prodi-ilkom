<header>
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
                <a class="navbar-brand" href="demo-marketing.html">
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
                        <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                        <li class="nav-item"><a href="demo-marketing-about.html" class="nav-link">Tentang Kami</a></li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="demo-marketing-services.html" class="nav-link">Akademik</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="demo-marketing-services-details.html"><i class="feather icon-feather-users"></i>
                                        <div class="submenu-icon-content">
                                            <span>Engaging audiences</span>
                                            <p>Lorem ipsum simply dummy text</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="demo-marketing-services-details.html"><i class="feather icon-feather-send"></i>
                                        <div class="submenu-icon-content">
                                            <span>Marketing research</span>
                                            <p>Lorem ipsum simply dummy text</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="demo-marketing-services-details.html"><i class="feather icon-feather-briefcase"></i>
                                        <div class="submenu-icon-content">
                                            <span>Sales development</span>
                                            <p>Lorem ipsum simply dummy text</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="demo-marketing-services-details.html"><i class="feather icon-feather-box"></i>
                                        <div class="submenu-icon-content">
                                            <span>Marketing campaigns</span>
                                            <p>Lorem ipsum simply dummy text</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="demo-marketing-services-details.html"><i class="feather icon-feather-share-2"></i>
                                        <div class="submenu-icon-content">
                                            <span>Social media analysis</span>
                                            <p>Lorem ipsum simply dummy text</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="demo-marketing-case-studies.html" class="nav-link">Publikasi</a></li>
                        <li class="nav-item"><a href="demo-marketing-pricing.html" class="nav-link">Daftar Sekarang!</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end">
                <div class="header-icon"> 
                    <div class="header-social-icon icon">
                        <a href="http://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>  
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>