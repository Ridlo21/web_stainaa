@extends('template')

@section('title')
    Akreditasi
@endsection

@section('konten')
    {{-- <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Akreditasi</h1>
            </div>
        </div>
    </section> --}}
    <div class="mm bg-default mb-5">
        <img class="img-fluid cover" src="dist/images/bg_3.jpg" alt="" />
        <div class="container judul">
            <div class="row">
                <div class="col-lg-4 col-md-6 bg-primary shadow pt-3">
                    <h3>Akreditasi</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam necessitatibus facilis iste qui
                        excepturi reprehenderit at, quis corrupti fugit sit, magnam dolorem nisi, accusamus aliquam et
                        cupiditate aliquid assumenda eos.</p>
                </div>
            </div>
        </div>
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
                                    <p class="small">Pellentesque et tellus feug</p>
                                    <ul class="list-marked pricing-list">
                                        <li>Donec quis vehicula diam</li>
                                        <li>Ut viverra ligula non</li>
                                        <li>Suscipit commodo orci</li>
                                        <li>Curabitur orci magna</li>
                                    </ul>
                                </div>
                                <div class="pricing-table-footer"><a class="btn btn-nero btn-block"
                                        href="{{ url('/akreditasi_detail') }}">Selengkapnya</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table">
                                <div class="pricing-table-body">
                                    <h3 class="h4 pricing-table-header">PAI</h3>
                                    {{-- <div class="pricing-object"><span>$</span><span class="price">5</span><span
                                            class="h4">/month</span></div> --}}
                                    <p class="small">Penatibus vulputate in sagittis at</p>
                                    <ul class="list-marked pricing-list">
                                        <li>Sed iaculis turpis sed</li>
                                        <li>Accumsan pretium</li>
                                        <li>In ultrices felis nulla non</li>
                                        <li>Pellentesque ornare erat</li>
                                    </ul>
                                </div>
                                <div class="pricing-table-footer"><a class="btn btn-nero btn-block"
                                        href="{{ url('/akreditasi_detail') }}">Selengkapnya</a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="pricing-table bg-aqua-grey">
                                <div class="pricing-table-body">
                                    <h3 class="h4 pricing-table-header">HES</h3>
                                    {{-- <div class="pricing-object"><span>$</span><span class="price">20</span><span
                                            class="h4">/month</span></div> --}}
                                    <p class="small">Etiam nibh risus nunc ridiculus</p>
                                    <ul class="list-marked pricing-list">
                                        <li>Condimentum nunc lectus</li>
                                        <li>Interdum eros dictum</li>
                                        <li>Convallis tortor nibh ornare</li>
                                        <li>Morbi iaculis auctor luctus</li>
                                    </ul>
                                </div>
                                <div class="pricing-table-footer"><a class="btn btn-nero-2 btn-block"
                                        href="{{ url('/akreditasi_detail') }}">Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
