@extends('layouts.app')
@section('title', 'Karir')
@section('content')
        <!-- Start Section -->
        <section id="peluang-karir" class="mb-4 pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden" data-anime='{ "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        <h5 class="text-dark-gray fw-700" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "easing": "easeOutQuad" }'>Peluang Karir</h5>
                        
                        <!-- Paragraf -->
                        @if ($karir->first() && $karir->first()->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify; margin-top: 30px;" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 200, "easing": "easeOutQuad" }'>
                            {!! $karir->first()->teks !!}  
                        </p>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered mt-1" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <thead>
                                    <tr data-anime='{ "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 25%;">Sektor</th>
                                        <th>Deskripsi Peluang Karir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1; @endphp
                                    @foreach ($karir as $item)
                                    <tr data-anime='{ "opacity": [0,1], "duration": 600, "delay": 300, "easing": "easeOutQuad" }'>
                                        <td class="fs-15">{{ $counter++ }}</td>
                                        @if ($item->sektor)
                                        <td class="fs-15">{!! $item->sektor !!}</td>
                                        @endif
                                        @if ($item->deskripsi)
                                        <td style="text-align: justify;" class="fs-15">
                                            <ul style="list-style-type: disc; padding-left: 20px;">
                                                <li>{!! $item->deskripsi !!}</li>
                                            </ul>
                                        </td>
                                        @endif
                                    </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- start footer -->
@endsection