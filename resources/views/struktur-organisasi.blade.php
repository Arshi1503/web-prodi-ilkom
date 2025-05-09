@extends('layouts.app')
@section('title', 'Struktur Organisasi')
@section('content')
        <!-- Start Section -->
        <section id="kurikulum" class="tw-mb-[50px] pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul dengan animasi fade-in -->
                        <h5 class="text-dark-gray fw-700" 
                            data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                            Struktur Organisasi
                        </h5>

                        <!-- Paragraf dengan animasi fade-in dan slide-up -->
                        @if ($strukturOrganisasi && $strukturOrganisasi->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15"
                        style="text-align: justify;"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 400, "easing": "easeOutQuad" }'>
                            {!! $strukturOrganisasi->teks !!}
                        </p>
                        @endif

                        @if ($strukturOrganisasi && $strukturOrganisasi->foto)
                        <div class="d-flex justify-content-center align-items-center animation-float" 
                            data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                            <img class="w-50" src="{{ asset('storage/' . $strukturOrganisasi->foto) }}" alt="">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- start footer -->
@endsection