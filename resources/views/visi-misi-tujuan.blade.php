@extends('layouts.app')
@section('title', 'Visi, Misi dan Tujuan')
@section('content')
        <!-- Start Section -->
        <section id="visi-misi" class="tw-mb-[50px] pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden mb-0" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body p-4">
                        <h5 class="text-dark-gray fw-700" data-aos="fade-down" data-aos-duration="1000">Visi, Misi dan Tujuan</h5>
                        
                        <ul class="nav nav-tabs mb-1" id="myTab" role="tablist" style="border-bottom: 2px solid #ddd;" data-aos="fade-left" data-aos-duration="1000">
                            <li class="nav-item me-0" role="presentation" style="margin-top: 30px;">
                                <button class="nav-link active" id="visi-tab" data-bs-toggle="tab" data-bs-target="#visi" type="button" role="tab" aria-controls="visi" aria-selected="true">Visi</button>
                            </li>
                            <li class="nav-item me-1" role="presentation" style="margin-top: 30px;">
                                <button class="nav-link" id="misi-tab" data-bs-toggle="tab" data-bs-target="#misi" type="button" role="tab" aria-controls="misi" aria-selected="false">Misi</button>
                            </li>
                            <li class="nav-item" role="presentation" style="margin-top: 30px;">
                                <button class="nav-link" id="tujuan-tab" data-bs-toggle="tab" data-bs-target="#tujuan" type="button" role="tab" aria-controls="tujuan" aria-selected="false">Tujuan</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <!-- Tab Visi -->
                            <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="visi-tab">
                                <h6 class="fw-bold text-start mb-0" style="color: black; font-size: 21px;" data-aos="fade-right" data-aos-duration="1000">Visi</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1" data-aos="fade-up" data-aos-duration="1000">
                                        <thead>
                                            <tr>
                                                <th style="width: 4%;">No</th>
                                                <th>Visi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $counter = 1; @endphp
                                            @foreach ($visiMisiTujuan as $item)
                                            <tr> 
                                                <td class="fs-15">{{ $counter++ }}</td>
                                                @if ($item->visi)
                                                <td style="text-align: justify;" class="fs-15">{!! $item->visi !!}</td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Tab Misi -->
                            <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="misi-tab">
                                <h6 class="fw-bold text-start mb-0" style="color: black; font-size: 21px;" data-aos="fade-right" data-aos-duration="1000">Misi</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1" data-aos="fade-up" data-aos-duration="1000">
                                        <thead>
                                            <tr>
                                                <th style="width: 4%;">No</th>
                                                <th>Misi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $counter = 1; @endphp
                                            @foreach ($visiMisiTujuan as $item)
                                            <tr>
                                                <td class="fs-15">{{ $counter++ }}</td>
                                                @if ($item->misi)
                                                <td style="text-align: justify;" class="fs-15">{!! $item->misi !!}</td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Tab Tujuan -->
                            <div class="tab-pane fade" id="tujuan" role="tabpanel" aria-labelledby="tujuan-tab">
                                <h6 class="fw-bold text-start mb-0" style="color: black; font-size: 21px;" data-aos="fade-right" data-aos-duration="1000">Tujuan</h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1" data-aos="fade-up" data-aos-duration="1000">
                                        <thead>
                                            <tr>
                                                <th style="width: 4%;">No</th>
                                                <th>Tujuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $counter = 1; @endphp
                                            @foreach ($visiMisiTujuan as $item)
                                            <tr>
                                                <td class="fs-15">{{ $counter++ }}</td>
                                                @if ($item->tujuan)
                                                <td style="text-align: justify;" class="fs-15">{!! $item->tujuan !!}</td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
@endsection