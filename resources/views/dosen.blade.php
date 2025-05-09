@extends('layouts.app')
@section('title', 'Dosen')
@section('content')
        <!-- end header -->
        <!-- Start Section -->
        <section id="staff-dosen" class="mb-0 pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden mb-4">
                    <div class="card-body p-4">
                        <h5 class="text-dark-gray fw-700">Dosen dan Staf Prodi Ilmu Komunikasi</h5>
                        <div class="row">
                            <div class="col-12 p-md-0">
                            <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" 
                                data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'
                                style="list-style: none; padding-left: 0;">
                                    <li class="grid-sizer" style="list-style-type: none;"></li>
                                    <!-- start blog item -->
                                    @foreach ($pimpinanStaff as $item)
                                    <li class="grid-item" style="list-style-type: none; display: inline-block;">
                                        <div class="card bg-transparent border-0 h-100">
                                            @if ($item->foto)
                                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                                <a href="{{ route('detail-dosen', ['id' => $item->id]) }}"><img src="{{ asset('storage/' . $item->foto) }}" alt=""></a>
                                            </div>
                                            @endif
                                            <div class="card-body p-0 pt-30px sm-pt-20px lg-pb-20px">
                                            @if ($item->nama)
                                        <!-- Link nama ke halaman detail berdasarkan ID -->
                                            <a href="{{ route('detail-dosen', ['id' => $item->id]) }}" class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">
                                                {!! $item->nama !!}
                                            </a>
                                        @endif
                                        @if ($item->status)
                                        <!-- Link status ke halaman detail berdasarkan ID -->
                                        <a href="{{ route('detail-dosen', ['id' => $item->id]) }}">
                                            {!! $item->status !!}
                                        </a>
                                        @endif
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <!-- end blog item -->  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <!-- End Section -->
@endsection