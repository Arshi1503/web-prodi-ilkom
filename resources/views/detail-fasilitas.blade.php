@extends('layouts.app')
@section('title', 'Fasilitas')
@section('content')
        <!-- start page title --> 
        <section class="p-0">
            <div class="container">
                <div class="row align-items-center justify-content-center extra-very-small-screen">
                    <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="fw-700 text-dark-gray ls-minus-2px" style="margin-top: 100px;">{{ $kampus->nama }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 d-flex flex-column align-items-center text-center">
                    <!-- Foto -->
                    @if ($kampus && $kampus->gambar)
                    <div class="image-container mb-3">
                        <img src="{{ asset('storage/' . $kampus->gambar) }}" alt="{{ $kampus->nama }}" class="img-fluid">
                    </div>
                    @endif

                    <!-- Nama dan Status -->
                    <div class="section-text fs-18 text-dark-gray mt-3 mb-3">
                        <span class="fw-600">{{ $kampus->nama }}
                    </div>
                </div>
                
                <!-- Kata Sambutan (Full-width) -->
                <div class="col-12">
                    @if ($kampus && $kampus->deskripsi)
                    <p class="section-text text-left">{!! $kampus->deskripsi !!}</p>
                    @endif
                </div>
            </div>

                <!-- Fasilitas Kampus -->
                <div class="row mt-5">
                    <div class="col-12">
                        <h4 class="text-center text-dark-gray fw-700">Fasilitas {{ $kampus->nama }}</h4>
                    </div>
                    <div class="col-12">
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" 
                            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            
                            <li class="grid-sizer"></li>
                            
                            <!-- Looping Fasilitas -->
                            @foreach ($kampus->fasilitas as $fasilitas)
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" 
                                    style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        @if ($fasilitas->gambar)
                                        <a href="#" class="d-block">
                                            <img src="{{ asset('storage/' . $fasilitas->gambar) }}" alt="{{ $fasilitas->nama }}" 
                                                style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                        @endif
                                    </div>
                                    
                                    <div class="card-body p-12 lg-p-10" 
                                        style="display: flex; flex-direction: column; justify-content: flex-start;">
                                        
                                        @if ($fasilitas->nama)
                                        <span class="card-title fw-600 fs-20 text-dark-gray d-inline-block mb-1" 
                                            style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {{ $fasilitas->nama }}
                                        </span>
                                        @endif
                                        
                                        @if ($fasilitas->deskripsi)
                                        <p class="mb-0" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! $fasilitas->deskripsi !!}
                                        </p>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            <!-- End Looping Fasilitas -->
                            
                        </ul>
                    </div>
                </div>
        </div>
        <!-- End Section -->
@endsection