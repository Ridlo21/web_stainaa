@extends('template')

@section('title')
    Kemahasiswaan
@endsection

@section('konten')
    {{-- <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Kemahasiswaan</h1>
            </div>
        </div>
    </section> --}}
    <div class="mm bg-default mb-5">
        @foreach ($data as $item)
            
        <img class="img-fluid cover" src="http://localhost:8000/image/kemahasiswaan/{{$item->gambar}}" alt="" />
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
            <div class="row row-40 justify-content-md-between flex-column-reverse flex-md-row">
                @foreach ($bems as $bem)
                    
                <div class="col-md-6">
                    <h3>{{$bem->judul}}</h3>
                    <p><?= $bem->isi?></p>
                </div>
                <div class="col-md-5">
                    <img class="wow fadeIn" src="http://localhost:8000/image/kemahasiswaan/{{$item->gambar}}" alt="" width="510" height="680"
                        data-wow-delay=".3s" />
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-30 align-items-center">
                <div class="col-md-8">
                    <h3>Unit Kegiatan Mahasiswa</h3>
                    <p>Berikut informasi terkait kegiatan mahasiswa</p>
                </div>
            </div>
            <div class="row row-20 row-md-40 row-xl-60">
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0s">
                    <div class="card shadow post post-preview">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body unit-body">
                            <h5 class="card-title" style="margin-bottom: -20px !important;"><a
                                    href="{{ url('/ukm_detail') }}">Card
                                    title</a></h5>
                            <div class="post-meta">
                                <ul class="list-meta">
                                    <li>
                                        <time datetime="2023-02-04">Feb 4, 2023</time>
                                    </li>
                                </ul>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0s">
                    <div class="card shadow post post-preview">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body unit-body">
                            <h5 class="card-title" style="margin-bottom: -20px !important;"><a
                                    href="{{ url('/ukm_detail') }}">Card
                                    title</a></h5>
                            <div class="post-meta">
                                <ul class="list-meta">
                                    <li>
                                        <time datetime="2023-02-04">Feb 4, 2023</time>
                                    </li>
                                </ul>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0s">
                    <div class="card shadow post post-preview">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body unit-body">
                            <h5 class="card-title" style="margin-bottom: -20px !important;"><a
                                    href="{{ url('/ukm_detail') }}">Card
                                    title</a></h5>
                            <div class="post-meta">
                                <ul class="list-meta">
                                    <li>
                                        <time datetime="2023-02-04">Feb 4, 2023</time>
                                    </li>
                                </ul>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0s">
                    <div class="card shadow post post-preview">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body unit-body">
                            <h5 class="card-title" style="margin-bottom: -20px !important;"><a
                                    href="{{ url('/ukm_detail') }}">Card
                                    title</a></h5>
                            <div class="post-meta">
                                <ul class="list-meta">
                                    <li>
                                        <time datetime="2023-02-04">Feb 4, 2023</time>
                                    </li>
                                </ul>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <ul class="pag pag-simple">
                    <li class="pag-simple-item"><a class="pag-simple-link pag-simple-link-prev inactive"
                            href="#"><span class="mdi mdi-arrow-left novi-icon"></span></a>
                    </li>
                    <li class="pag-simple-item active"><a class="pag-simple-link" href="#">1</a>
                    </li>
                    <li class="pag-simple-item"><a class="pag-simple-link" href="#">2</a>
                    </li>
                    <li class="pag-simple-item"><a class="pag-simple-link" href="#">3</a>
                    </li>
                    <li class="pag-simple-item"><a class="pag-simple-link" href="#">4</a>
                    </li>
                    <li class="pag-simple-item"><a class="pag-simple-link inactive" href="#">...</a>
                    </li>
                    <li class="pag-simple-item"><a class="pag-simple-link" href="#">7</a>
                    </li>
                    <li class="pag-simple-item"><a class="pag-simple-link pag-simple-link-next" href="#"><span
                                class="mdi mdi-arrow-right novi-icon"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
