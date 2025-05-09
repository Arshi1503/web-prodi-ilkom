@extends('layouts.app')
@section('title', 'Artikel')
@section('content')
        <!-- start page title -->
        <section class="page-title-section" style="padding-top: 120px; padding-bottom: 0px;">
            <div class="container">
                <div class="row align-items-center justify-content-center extra-very-small-screen">
                    <div class="col-xl-10 col-lg-11 text-center position-relative page-title-extra-large"
                        data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        
                        @if ($publikasi && $publikasi->judul)
                        <h1 class="fw-700 text-dark-gray ls-minus-2px mb-3" style="word-break: break-word;">
                            {!! $publikasi->judul !!}
                        </h1>
                        @endif

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
                    @if ($publikasi && $publikasi->gambar)
                    <div class="image-container mb-3">
                        <img src="{{ asset('storage/' . $publikasi->gambar) }}" alt="{{ $publikasi->gambar }}" class="img-fluid">
                    </div>
                    @endif

                    <!-- Nama dan Status -->
                    <div class="section-text fs-18 text-dark-gray mt-3 mb-3">
                        <span class="fw-600">{{ \Carbon\Carbon::parse($publikasi->waktu)->translatedFormat('d F Y') }}</span>
                    </div>
                </div>
                    <!-- Kata Sambutan (Full-width) -->
                    <div class="col-12">
                        @if ($publikasi && $publikasi->deskripsi)
                        <p class="section-text text-left">{!! $publikasi->deskripsi !!}</p>
                        @endif
                    </div>
            </div>
        </div>
        <!-- end section -->
@endsection