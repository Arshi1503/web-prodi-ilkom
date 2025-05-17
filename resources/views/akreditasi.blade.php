@extends('layouts.app')
@section('title', 'Akreditasi')
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
                            Akreditasi
                        </h5>

                        <!-- Paragraf dengan animasi fade-in dan slide-up -->
                        @if ($akreditasi && $akreditasi->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15"
                        style="text-align: justify;"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 400, "easing": "easeOutQuad" }'>
                        {!! $akreditasi->teks !!}
                        </p>
                        @endif

                        @if ($akreditasi && $akreditasi->foto)
                        <div x-data="{ open: false }" class="d-flex justify-content-center align-items-center tw-w-full tw-relative" 
                            data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                            <img 
                            class="w-50" 
                            src="{{ asset('storage/' . $akreditasi->foto) }}" 
                            alt=""
                            @click="open = true">

                            <div 
                                    x-show="open" 
                                    @click.away="open = false" 
                                    class="tw-fixed tw-inset-0 tw-bg-black/70 tw-flex tw-items-center tw-justify-center tw-z-[9999]"
                                >
                                    <div class="tw-bg-white tw-p-4 tw-rounded-xl tw-relative tw-max-w-4xl tw-w-full">
                                        <button 
                                            @click="open = false" 
                                            class="tw-absolute tw-top-4 tw-right-4 tw-bg-white tw-text-black tw-rounded-full tw-shadow-md tw-w-10 tw-h-10 tw-flex tw-items-center tw-justify-center hover:tw-text-red-500 tw-mt-3 tw-mr-3"
                                        >
                                            &times;
                                        </button>
                                        @if ($akreditasi && $akreditasi->foto)
                                        <img 
                                            src="{{ asset('storage/' . $akreditasi->foto) }}" 
                                            alt="Struktur Organisasi Besar"
                                            class="tw-w-full tw-rounded-lg"
                                        >   
                                        @endif
                                        {{-- <img 
                                            src="{{ asset('images/gambar/small-hero.jpg') }}" 
                                            alt="Struktur Organisasi Besar"
                                            class="tw-w-full tw-rounded-lg"
                                        > --}}
                                    </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
@endsection