@extends('layouts.app')
@section('title', 'Detail Dosen')
@section('content')
        <!-- start section -->
    <div class="container mt-12">
        <div class="row">
            <!-- Profil Dosen -->
            <div class="col-md-4 text-center p-3 border rounded shadow-sm">
                @if ($pimpinanStaff && $pimpinanStaff->foto)
                <img src="{{ asset('storage/' . $pimpinanStaff->foto) }}" class="img-fluid rounded-circle tw-mx-auto" width="150" alt="Foto Dosen">
                @endif
                <h5 class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100 mt-5">{{ $pimpinanStaff->nama }}</h5>
                <p>
                    <i class="bi bi-person"></i> {{ $pimpinanStaff->nidn }} <br>
                    <i class="bi bi-envelope"></i> {{ $pimpinanStaff->email }}
                </p>
                @if ($pimpinanStaff->id_google_scholar)
                    @php
                        $scholarUrl = 'https://scholar.google.com/citations?user=' . $pimpinanStaff->id_google_scholar;
                    @endphp
                    <a href="{{ $scholarUrl }}" target="_blank" class="btn w-100" style="background-color: #0D47A1; color: white;">Google Scholar</a>
                @else
                    <span class="text-muted">Profil Google Scholar belum ditemukan.</span>
                @endif
            </div>
            
            <!-- Mata Kuliah dan Jadwal -->
            <div class="col-md-8">
            <h4>Data Penelitian</h4>
            <table class="table table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th style="width: 6%;">No</th>
                        <th>Judul Artikel</th>
                        <th style="width: 16%;">Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($results as $index => $article)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <a href="{{ $article['link'] ?? '#' }}" target="_blank">
                                {{ $article['title'] ?? '-' }}
                            </a>
                        </td>
                        <td>
                            {{ $article['year'] ?? '-' }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada artikel ditemukan untuk dosen ini.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            </div>

            @if (!empty($citationGraph))
                <h5 class="mt-4">Statistik Kutipan per Tahun</h5>
                <canvas id="citationChart" width="600" height="300"></canvas>

                <script>
                    // Ambil data mentah dari PHP ke JS
                    const citationData = @json($citationGraph);
                    console.log(citationData); // Cek di console: harus muncul array of objects

                    // Buat dua array: labels (tahun) dan values (jumlah kutipan)
                    const labels = citationData.map(item => item.year);
                    const values = citationData.map(item => item.citations);

                    // Inisialisasi Chart.js
                    const ctx = document.getElementById('citationChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Jumlah Kutipan',
                                data: values,
                                backgroundColor: 'rgba(13,71,161,0.6)',   // warna batang
                                borderColor: 'rgba(13,71,161,1)',         // warna garis tepi
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    precision: 0
                                }
                            }
                        }
                    });
                </script>
            @endif

            @isset($citationStats['citations'])
                <h5 class="mt-4">Statistik Kutipan</h5>
                <table class="table table-bordered" style="max-width: 500px">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Semua</th>
                            <th>Sejak 2020</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kutipan</td>
                            <td>{{ $citationStats['citations']['all'] ?? 0 }}</td>
                            <td>{{ $citationStats['citations']['since_2020'] ?? 0 }}</td>
                        </tr>
                        <tr>
                            <td>Indeks-h</td>
                            <td>{{ $citationStats['h_index']['all'] ?? 0 }}</td>
                            <td>{{ $citationStats['h_index']['since_2020'] ?? 0 }}</td>
                        </tr>
                        <tr>
                            <td>Indeks-i10</td>
                            <td>{{ $citationStats['i10_index']['all'] ?? 0 }}</td>
                            <td>{{ $citationStats['i10_index']['since_2020'] ?? 0 }}</td>
                        </tr>
                    </tbody>
                </table>
            @else
                <p>Data statistik kutipan tidak tersedia.</p>
            @endisset
        </div>
        <!-- end section -->
    </div>
@endsection