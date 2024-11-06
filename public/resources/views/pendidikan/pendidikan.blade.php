@extends('template')

@section('title')
    Pendidikan
@endsection

@section('konten')
    <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Pendidikan</h1>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row justify-content-center justify-content-xl-start text-center text-xl-start">
                <div class="col-md-10 col-xl-12 col-xxl-7">
                    <h3>Pendidikan</h3>
                    <p>Sekolah Tinggi Agama Islam menyelenggarakan pendidikan program sarjana dengan dua program studi </p>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-10 col-xl-12">
                    <div class="row row-20 row-md-40 justify-content-center">
                        <div class="col-sm-12 col-md-6 col-xl-5">
                            <div class="card shadow">
                                <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                                    style="height: 300px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ url('/pendidikan_detail') }}">Pendidikan Agama
                                            Islam</a></h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of
                                        the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-5">
                            <div class="card shadow">
                                <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                                    style="height: 300px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ url('/pendidikan_detail') }}">Hukum Ekonomi
                                            Syariah</a></h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of
                                        the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
