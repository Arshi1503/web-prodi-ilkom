@extends('layouts.app')
@section('title', 'Biaya')
@section('content')
        <!-- Start Section -->
        <section id="profil" class="tw-mt-[50px] pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "opacity": [0,1], "translateY": [30, 0], "duration": 600, "delay":100, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        <h5 class="text-dark-gray fw-700"
                            data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":200, "easing": "easeOutQuad" }'>
                            Biaya
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

                        <!-- Table with fade-in animation -->
                        <div class="table-responsive"
                            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 600, "easing": "easeOutQuad" }'>
                            <table class="table table-bordered mt-1">
                                <thead>
                                    <tr>
                                        <th style="width: 4%;">No</th>
                                        <th>Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fs-15">1</td>
                                        <td style="text-align: left;" class="fs-15">Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</td>
                                    </tr>
                                    <tr>
                                        <td class="fs-15">2</td>
                                        <td style="text-align: left;" class="fs-15">Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown:
                                            <ul style="list-style-type: disc; padding-left: 20px;">
                                                <li>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</li>
                                                <li>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fs-15">3</td>
                                        <td style="text-align: left;" class="fs-15">Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
@endsection