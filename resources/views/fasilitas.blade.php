@extends('layouts.app')
@section('title', 'Fasilitas')
@section('content')
        <!-- Start Section -->
        <section id="profil" class="mb-0 pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                @foreach ($kampus as $item)
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "opacity": [0,1], "translateY": [30, 0], "duration": 600, "delay":100, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        @if ($item->nama)
                        <h5 class="text-dark-gray fw-700"
                            data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":200, "easing": "easeOutQuad" }'>
                            {!! $item->nama !!}
                        </h5>
                        @endif

                        <div class="row align-items-center justify-content-center">
                            @if ($item->gambar)
                            <div class="col-lg-5 col-md-6 sm-mb-30px">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="w-100 border-radius-6px" />
                            </div>
                            @endif
                            <div class="col-lg-4 col-md-5 offset-md-1 text-center text-md-start">
                                @if ($item->deskripsi)
                                <p>{!! $item->deskripsi !!}</p>
                                @endif
                                @if ($item->alamat)
                                <span class="d-block"><span class="text-dark-gray fw-600">Alamat:</span><a> {!! $item->alamat !!}</a></span>
                                @endif
                                @if ($item->nomor)
                                <span class="d-block mb-30px"><span class="text-dark-gray fw-600">Nomor:</span> <a>{!! $item->nomor !!}</a></span>
                                @endif
                                <div class="col-md-7 text-center text-md-end">
                                    <a href="{{ route('detail-fasilitas', ['id' => $item->id]) }}" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- End Section -->
@endsection