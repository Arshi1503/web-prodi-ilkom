@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
        <!-- end header -->
        <!-- start page title -->
        <section class="cover-background page-title-big-typography ipad-top-space-margin xs-py-0" style="background-image: url('{{ asset('images/gambar/hero-2.jpg') }}')" data-anime='{ "opacity": [0, 1], "easing": "easeOutQuad" }'>
            <div class="container">
                <div class="row align-items-center extra-small-screen">
                    <div class="col-9 col-xl-4 col-sm-6 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-50, 0], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h1 class="mb-20px text-base-color fw-500 ls-minus-05px">Program Studi</h1>
                        <h2 class=" fw-700 tw-text-white mb-0 ls-minus-2px sm-ls-minus-1px">Ilmu Komunikasi</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title --> 
        <!-- start section --> 
        {{-- <section> 
            <div class="container">  
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-7 col-md-8 col-sm-9 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px">Mengapa memilih program studi Ilmu Komunikasi?</h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5" data-anime='{ "el": "childs", "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="{{asset('svg/camera.svg')}}" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Peluang Karir Luas</a>
                                <p class="mb-30px ls-minus-05px">Lulusan Ilmu Komunikasi dibutuhkan di berbagai bidang seperti media massa, periklanan, hubungan masyarakat, perusahaan startup, hingga lembaga pemerintahan.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="{{asset('svg/file.svg')}}" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Kemampuan yang Fleksibel</a>
                                <p class="mb-30px">Kemampuan berkomunikasi yang baik sangat dibutuhkan di semua sektor, membuat lulusan Ilkom mudah beradaptasi di berbagai lingkungan kerja.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="{{asset('svg/mic.svg')}}" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Relevan di Era Digital</a>
                                <p class="mb-30px">Di tengah perkembangan teknologi informasi, lulusan Ilkom memiliki keunggulan dalam memahami strategi komunikasi digital</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section> --}}
        <!-- end section -->
        <!-- start section -->
        <section class="tw-mt-10 pt-0 big-section">
            <div class="container">
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23"> 
                        <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                            @if ($tentang && $tentang->thumbnail)
                                <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large">
                            @endif
                            {{-- <img src="{{ asset('images/gambar/hero.jpg') }}" alt="" class="border-radius-8px w-100"> --}}
                        </div>
                        <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            {{-- tambahkan gambar pada backend --}}
                            <img src="{{ asset('images/gambar/hero-3.jpg') }}" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                        </div>
                    </div> 
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Apa yang Dipelajari dalam Prodi Ilmu Komunikasi?</h3>
                        @if ($tentang && $tentang->deskripsi)
                            <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">{!! $tentang->deskripsi !!}</p>                            
                        @endif
                        {{-- <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">Ilmu Komunikasi adalah bidang studi yang mempelajari proses penyampaian pesan secara efektif melalui berbagai media, baik lisan, tulisan, maupun visual. Mahasiswa Ilmu Komunikasi dilatih untuk menjadi komunikator yang handal, memahami media massa, public relations, jurnalistik, dan komunikasi digital.</p>  --}}
                        <a href="/tentang" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                            Selengkapnya
                            <span class="bg-orient-blue text-white">
                                <i class="feather icon-feather-arrow-right icon-small"></i>
                            </span>
                        </a>                        
                    </div> 
                </div> 
            </div>
        </section>  
        <!-- end section -->
        <!-- start section --> 
        <!-- end section -->
        <!-- start section --> 
                <section class="bg-very-light-gray overflow-hidden cover-background position-relative overlap-height">
            <div class="container overlap-gap-section">
                <div class="row align-items-center justify-content-center mb-7"> 
                    <div class="col-xl-5 col-lg-6 mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px mb-50px">Visi, Misi, dan Tujuan</h3>
                        <div class="row row-cols-1">
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-binoculars fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Visi</span>
                                        @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                                        <span class="w-90 sm-w-100">{!! $visiMisiTujuan->visi !!}</span>
                                        @endif
                                        {{-- <p class="w-90 sm-w-100">Menjadi Program Studi Kimia yang unggul dalam pendidikan, penelitian, dan pengabdian kepada masyarakat, serta mampu bersaing di tingkat nasional maupun internasional pada tahun 2030.</p> --}}
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-flag fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Misi</span>
                                        @if ($visiMisiTujuan && is_array($visiMisiTujuan->misi) && count($visiMisiTujuan->misi) > 0)
                                        <span class="w-90 sm-w-100">
                                            {!! $visiMisiTujuan->misi[0]['text'] !!}
                                        </span>
                                        @endif
                                        {{-- <p class="w-90 sm-w-100">Mengembangkan penelitian inovatif yang mendukung kemajuan ilmu pengetahuan dan kebutuhan industri.</p> --}}
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-trophy fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-30px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Tujuan</span>
                                        @if ($visiMisiTujuan && is_array($visiMisiTujuan->tujuan) && count($visiMisiTujuan->tujuan) > 0)
                                        <span class="w-90 sm-w-100">
                                            {!! $visiMisiTujuan->tujuan[0]['text'] !!}
                                        </span>
                                        @endif
                                        {{-- <p class="w-90 sm-w-100">Mendorong terciptanya inovasi dan solusi praktis melalui kegiatan penelitian dan pengabdian masyarakat.</p> --}}
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <div class="tw-flex lg:tw-justify-start tw-justify-center">
                                <a href="/visi-misi-tujuan" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                                    Selengkapnya
                                    <span class="bg-orient-blue text-white">
                                        <i class="feather icon-feather-arrow-right icon-small"></i>
                                    </span>
                                </a>  
                            </div>
                        </div>  
                    </div> 
                    <div class="col-lg-6 text-center md-mb-20px offset-xl-1">
                        {{-- Tambahkan Gambar berukuran besar di backend --}}
                        <figure class="position-relative mb-0 overflow-hidden tw-hidden lg:tw-block" data-shadow-animation="true" data-bottom-top="transform: translateY(70px)" data-top-bottom="transform: translateY(-70px)">
                            @if ($tentang && $tentang->thumbnail)
                                <img src="{{ asset('storage/'. $tentang->thumbnail) }}" class="w-100 border-radius-6px" alt=""> 
                            @endif
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        {{-- start section --}}
        <section class="pt-0 big-section tw-my-20">
            <div class="container">
                <div class="tw-flex tw-flex-col-reverse lg:tw-flex-row tw-items-center tw-gap-4" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Kata Sambutan</h3> 
                        <div class="tw-space-y-4 tw-text-justify tw-text-base tw-leading-relaxed tw-w-90 lg:tw-w-95 md:tw-w-full">
                            @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                                <p>{!! $pimpinanStaff->kata_sambutan !!}</p>
                                <p class="tw-font-semibold tw-mb-0 tw-mt-2">{!! $pimpinanStaff->nama !!}, {!! $pimpinanStaff->status !!}</p>
                            @endif
                            {{-- <p>Selamat datang di Program Studi Ilmu Komunikasi IWU. Kami berkomitmen untuk membekali mahasiswa dengan keterampilan komunikasi yang relevan dan berdaya saing global. Melalui kurikulum berbasis praktik dan penguatan karakter, kami membentuk lulusan yang siap menghadapi tantangan dunia kerja dan sosial.</p> --}}
                        </div>
                        
                        <a href="{{ route('pimpinanStaff.showDetail', $pimpinanStaff->id) }}" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow tw-mt-7">
                            Selengkapnya
                            <span class="bg-orient-blue text-white">
                                <i class="feather icon-feather-arrow-right icon-small"></i>
                            </span>
                        </a>                        
                    </div>
                    <div class="col-lg-6 position-relative md-mt-14 sm-mt-17 xs-mt-23"> 
                        <div class="tw-flex tw-justify-center w-100" data-animation-delay="50">
                            @if ($pimpinanStaff && $pimpinanStaff->foto)
                                <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" alt="" class=" border-radius-8px tw-w-[100%] md:tw-w-[60%]">
                            @endif
                            {{-- <img src="{{ asset('images/gambar/alumni2.jpg') }}" alt="" class=" border-radius-8px tw-w-[100%] md:tw-w-[60%]"> --}}
                        </div>
                    </div> 
                </div> 
            </div>
        </section>  
        {{-- end section  --}}
        <!-- start section --> 
        <!-- end section -->
        <!-- start section -->
        <section class="py-0">
            <div class="container tw-mb-4">        
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-6 col-md-7 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Berita Terkini</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item)
                                <li class="grid-item">
                                    <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="blog-image" style="height: 200px; overflow: hidden;">
                                            @if ($item->gambar)
                                            <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" class="d-block">
                                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                            </a>
                                            @endif
                                        </div>
                                        <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                            @if ($item->judul)
                                            <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" 
                                            class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                {!! Str::limit($item->judul, 90) !!}
                                            </a>
                                            @endif
                                            @if ($item->deskripsi)
                                            <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                {!! Str::limit($item->deskripsi, 120) !!}
                                            </p>
                                            @endif
                                            <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                                <div class="me-auto">
                                                    @if ($item->waktu)
                                                    <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                        {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            <!-- start blog list -->
                            {{-- <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- end blog list -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection