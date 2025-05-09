@extends('layouts.app')
@section('title', 'Jadwal Penerimaan')
@section('content')
        <section id="profil" class="mb-0 pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "opacity": [0,1], "translateY": [30, 0], "duration": 600, "delay":100, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        <h5 class="text-dark-gray fw-700"
                            data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":200, "easing": "easeOutQuad" }'>
                            Jadwal Penerimaan
                        </h5>

                        <!-- Paragraf -->
                        @if ($jadwalPenerimaan && $jadwalPenerimaan->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;"
                        data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":400, "easing": "easeOutQuad" }'>
                            {!! $jadwalPenerimaan->teks !!}
                        </p>
                        @endif

                        <!-- Table with fade-in animation -->
                        <div class="table-responsive"
                            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 600, "easing": "easeOutQuad" }'>
                            <table class="table table-bordered mt-1">
                                <tbody>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Pendaftaran Sampai Dengan</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->pendaftaran_sampai_dengan)
                                        <td class="fs-15">{{ \Carbon\Carbon::parse($jadwalPenerimaan->pendaftaran_sampai_dengan)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Tes</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->tes)
                                        <td class="fs-15" style="text-align: center;">{{ \Carbon\Carbon::parse($jadwalPenerimaan->tes)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Pengumuman Hasil Tes</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->pengumuman_hasil_tes)
                                        <td class="fs-15" style="text-align: center;">{{ \Carbon\Carbon::parse($jadwalPenerimaan->pengumuman_hasil_tes)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Masa Orientasi</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->masa_orientasi)
                                        <td class="fs-15" style="text-align: center;">{{ \Carbon\Carbon::parse($jadwalPenerimaan->masa_orientasi)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Perkuliahan Perdana</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->perkuliahan_perdana)
                                        <td class="fs-15" style="text-align: center;">{{ \Carbon\Carbon::parse($jadwalPenerimaan->perkuliahan_perdana)->translatedFormat('d F Y') }}</td>
                                        @endif
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