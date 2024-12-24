@extends('template')

@section('title')
    Tentang
@endsection

@section('konten')
    {{-- <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Tentang</h1>
            </div>
        </div>
    </section> --}}
    <div class="mm bg-default mb-5">
        @foreach ($data as $item)
            <img class="img-fluid cover" src="http://localhost:8000/image/tentang/{{$item->gambar}}" alt="" />
            <div class="container judul">
                <div class="row">
                    <div class="col-lg-4 col-md-6 bg-primary shadow pt-3">
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->descripton}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <section class="section section-md bg-default mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xl-10">
                    <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                        <ul class="nav nav-tabs">
                            <li><a class="nav-link active" href="#tabs-1-1" data-bs-toggle="tab">Profil Pimpinan</a></li>
                            <li><a class="nav-link" href="#tabs-1-2" data-bs-toggle="tab">Sejarah</a></li>
                            <li><a class="nav-link" href="#tabs-1-3" data-bs-toggle="tab">Visi</a></li>
                            <li><a class="nav-link" href="#tabs-1-4" data-bs-toggle="tab">Misi</a></li>
                            <li><a class="nav-link" href="#tabs-1-5" data-bs-toggle="tab">Motto</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <div class="rd-navbar-btn-wrap">
                                    <a class="btn btn-180 btn-icon btn-icon-right btn-nero-outline-1"
                                        href="{{ route('tentangPimpinan.show') }}">
                                    Profil Pimpinan</a></div>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                @foreach ($tentangSejarah as $sejarah)
                                    <p>{{$sejarah->isi_sejarah}}</p>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                @foreach ($tentangVisi as $visi)
                                    <p>{{$visi->isi_visi}}</p>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="tabs-1-4">
                                @foreach ($tentangMisi as $misi)
                                    <p>{{$misi->isi_misi}}</p>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="tabs-1-5">
                                @foreach ($tentangMotto as $motto)
                                    <p>{{$motto->isi_motto}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
