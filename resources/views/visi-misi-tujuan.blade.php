@extends('layouts.app')
@section('title', 'Visi, Misi dan Tujuan')
@section('content')
        <!-- Start Section -->
        <section id="visi-misi" class="tw-mb-[50px] pb-0" style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden mb-0" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body p-4">
                        <h5 class="text-dark-gray fw-700" data-aos="fade-down" data-aos-duration="1000">Visi, Misi dan Tujuan</h5>
                            <ul class="nav nav-tabs" id="vmtTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="visi-tab" data-bs-toggle="tab" data-bs-target="#visi" type="button" role="tab">Visi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="misi-tab" data-bs-toggle="tab" data-bs-target="#misi" type="button" role="tab">Misi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tujuan-tab" data-bs-toggle="tab" data-bs-target="#tujuan" type="button" role="tab">Tujuan</button>
                                </li>
                            </ul>

                        <div class="tab-content mt-3">
                            <div class="tab-pane fade" id="visi" role="tabpanel">
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

                            <div class="tab-pane fade" id="misi" role="tabpanel">
                            <h6 class="fw-bold text-start mb-0"
                                style="color: black; font-size: 21px;"
                                data-aos="fade-right"
                                data-aos-duration="1000">
                                Misi
                            </h6>
                            <div class="table-responsive">
                                <table class="table table-bordered mt-1"
                                    data-aos="fade-up"
                                    data-aos-duration="1000">
                                <thead>
                                    <tr>
                                    <th style="width: 4%;">No</th>
                                    <th>Misi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visiMisiTujuan as $item)
                                    @if (is_array($item->misi))
                                        @foreach ($item->misi as $index => $m)
                                        <tr>
                                            <td class="fs-15 text-center">{{ $index + 1 }}</td>
                                            <td class="fs-15" style="text-align: justify;">
                                            {!! $m['text'] !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        {{-- Fallback: kalau data lama masih berupa teks --}}
                                        <tr>
                                        <td class="fs-15 text-center">1</td>
                                        <td class="fs-15" style="text-align: justify;">
                                            {!! $item->misi !!}
                                        </td>
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                            </div>

                            <div class="tab-pane fade" id="tujuan" role="tabpanel">
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
                                            @foreach ($visiMisiTujuan as $item)
                                            @if (is_array($item->tujuan))
                                                @foreach ($item->tujuan as $index => $m)
                                                <tr>
                                                    <td class="fs-15 text-center">{{ $index + 1 }}</td>
                                                    <td class="fs-15" style="text-align: justify;">
                                                    {!! $m['text'] !!}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                {{-- Fallback: kalau data lama masih berupa teks --}}
                                                <tr>
                                                <td class="fs-15 text-center">1</td>
                                                <td class="fs-15" style="text-align: justify;">
                                                    {!! $item->tujuan !!}
                                                </td>
                                                </tr>
                                            @endif
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
        <!-- End Section -->>
        <!-- start footer -->
@endsection