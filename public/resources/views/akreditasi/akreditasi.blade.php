@extends('template')

@section('title')
    Akreditasi
@endsection

@section('konten')
    <div class="mm bg-default mb-5">
        @foreach ($data as $item)
            
        <img class="img-fluid cover" src="http://localhost:8000/image/akreditasi/{{$item->gambar}}" alt="" />
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
    <section class="section section-lg bg-default mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-10 col-xl-12">
                    <div class="row row-20 row-md-40 justify-content-center">
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table">
                                <div class="pricing-table-body">
                                    <h3 class="h4 pricing-table-header">APT</h3>
                                    {{-- <div class="pricing-object"><span>$</span><span class="price">0</span></div> --}}
                                    <p class="small">Dokument Akreditasi Perguruan Tinggi</p>
                                </div>
                                <div class="pricing-table-footer"><a class="btn btn-nero btn-block"
                                        href="{{ url('/akreditasiShow/APT') }}">Selengkapnya</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table">
                                <div class="pricing-table-body">
                                    <h3 class="h4 pricing-table-header">PAI</h3>
                                    {{-- <div class="pricing-object"><span>$</span><span class="price">5</span><span
                                            class="h4">/month</span></div> --}}
                                    <p class="small">Dokument Fakulatas Pendidikan Agama Islam</p>
                                </div>
                                <div class="pricing-table-footer"><a class="btn btn-nero btn-block"
                                        href="{{ url('/akreditasiShow/PAI') }}">Selengkapnya</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table bg-aqua-grey">
                                <div class="pricing-table-body">
                                    <h3 class="h4 pricing-table-header">HES</h3>
                                    {{-- <div class="pricing-object"><span>$</span><span class="price">20</span><span
                                            class="h4">/month</span></div> --}}
                                    <p class="small">Dokument Fakulatas Hukum Ekonomi Syari'ah</p>
                                    {{-- <ul class="list-marked pricing-list">
                                        <li>Condimentum nunc lectus</li>
                                        <li>Interdum eros dictum</li>
                                        <li>Convallis tortor nibh ornare</li>
                                        <li>Morbi iaculis auctor luctus</li>
                                    </ul> --}}
                                </div>
                                <div class="pricing-table-footer"><a class="btn btn-nero-2 btn-block"
                                        href="{{ url('/akreditasiShow/HES') }}">Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
