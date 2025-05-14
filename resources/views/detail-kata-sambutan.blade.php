@extends('layouts.app')
@section('title', 'Kata Sambutan')
@section('content')
        <!-- start page title --> 
        <section class="p-0">
            <div class="container">
                <div class="row align-items-center justify-content-center extra-very-small-screen">
                    <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="fw-700 text-dark-gray ls-minus-2px" style="margin-top: 100px;">Kata Sambutan</h1>
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
                    @if ($pimpinanStaff && $pimpinanStaff->foto)
                    <div class="image-container mb-3">
                        <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" alt="{{ $pimpinanStaff->nama }}" class="img-fluid">
                    </div>
                    @endif

                    <!-- Nama dan Status -->
                    <div class="section-text fs-18 text-dark-gray mt-3 mb-3">
                        <span class="fw-600">{{ $pimpinanStaff->nama }}</span>, {{ $pimpinanStaff->status }}
                    </div>
                </div>
                
                <!-- Kata Sambutan (Full-width) -->
                <div class="col-12">
                    @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                    <p class="section-text text-left">{!! $pimpinanStaff->kata_sambutan !!}</p>
                    @endif
                </div>
            </div>
        </div>
        <!-- end section -->
@endsection