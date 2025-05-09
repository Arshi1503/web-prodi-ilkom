@extends('layouts.app')
@section('title', 'Kegiatan')
@section('content')
        <!-- start section -->
        <section id="berita-terbaru" class="bg-gradient-tranquil-white overflow-hidden position-relative overlap-height pb-5 md-pb-7 xs-pb-50px">
            <div class="container overlap-gap-section">
                <div class="row justify-content-center align-items-center text-center text-md-start">
                    <div class="text-center" style="margin-top: 50px;">
                        <h5 class="text-dark-gray fw-700 mb-0" data-aos="fade-down" data-aos-duration="1000">
                            Kegiatan
                        </h5>
                    </div>                    
                </div>                
                <div class="row">
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog list -->
                        @foreach ($publikasi->where('status', 'Kegiatan')->sortByDesc('waktu')->take(3) as $item)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                <div class="blog-image" style="height: 200px; overflow: hidden;">
                                    @if ($item->gambar)
                                    <a href="{{ route('detail-kegiatan', ['id' => $item->id]) }}" class="d-block">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>
                                    @endif
                                </div>
                                <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                    @if ($item->judul)
                                    <a href="{{ route('detail-kegiatan', ['id' => $item->id]) }}" 
                                    class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                    style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->judul, 90) !!}
                                    </a>
                                    @endif
                                    @if ($item->deskripsi)
                                    <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
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
                        <!-- end blog list -->
                    </ul>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection