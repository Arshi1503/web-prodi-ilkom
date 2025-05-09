@extends('layouts.app')
@section('title', 'Pendaftaran')
@section('content')
        <!-- end header --> 
        <!-- Start Section -->
        <section id="profil" class="tw-mb-[50px] pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "opacity": [0,1], "translateY": [30, 0], "duration": 600, "delay":100, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        <h5 class="text-dark-gray fw-700"
                            data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":200, "easing": "easeOutQuad" }'>
                            Pendaftaran
                        </h5>

                        <!-- Logo Universitas -->
                        <img src="images/Iwu.png" alt="Logo Universitas" class="mb-4" style="max-width: 150px;"
                            data-anime='{ "opacity": [0,1], "scale": [0.8, 1], "duration": 600, "delay":300, "easing": "easeOutQuad" }'>

                        <!-- Paragraf -->
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;"
                        data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":400, "easing": "easeOutQuad" }'>
                            Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the 
                            industry's standard dummy text ever since the 1500s, when an unknown.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
@endsection