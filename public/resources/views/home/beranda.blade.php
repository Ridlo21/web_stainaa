@extends('template')

@section('title')
    Home
@endsection

@section('konten')
    <section class="section bg-primary">
        {{-- <img class="img-fluid cover" src="dist/images/bg_3.jpg" alt="" /> --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($dataCover as $item)
                <div class="carousel-item active">
                    <img src="http://localhost:8000/image/cover/{{$item->cover}}" class="d-block" alt="...">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            {{-- <h2 class="text-center">I help people tackle their business issues</h2>
            <p class="text-center">It’s easy to get the results you want with the top-quality advice.</p> --}}
            <div class="row row-40 justify-content-center">
                @foreach ($dataPersonalBranding as $item)
                <div class="col-sm-6 col-lg-4 height-fill wow fadeInUp" data-wow-delay="0s">
                    <article class="icon-box shadow-lg">
                        <div class="box-top">
                            <div class="box-icon">
                                <span class="icon icon-md {{$item->icon}}" ></span>
                            </div>
                            <div class="box-header">
                                <h3 class="h4"><a href="about-me.html">{{$item->title}}</a></h3>
                            </div>
                        </div>
                        <div class="box-body">
                            <p>{{$item->context}}</p>
                        </div>
                    </article>
                </div>
                @endforeach
                {{-- <div class="col-sm-6 col-lg-4 height-fill wow fadeInUp" data-wow-delay="0.1s">
                    <article class="icon-box bg-primary">
                        <div class="box-top">
                            <div class="box-icon"><span class="icon icon-md icomoon-user"></span></div>
                            <div class="box-header">
                                <h3 class="h4"><a href="about-me.html"></a>Invokasi</h3>
                            </div>
                        </div>
                        <div class="box-body">
                            <p>Gain more balance between work and life and make a positive change today.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 height-fill wow fadeInUp" data-wow-delay="0.2s">
                    <article class="icon-box bg-aqua-grey context-dark">
                        <div class="box-top">
                            <div class="box-icon"><span class="icon icon-md icomoon-aim"></span></div>
                            <div class="box-header">
                                <h3 class="h4"><a href="about-me.html">Kampus Merdeka</a></h3>
                            </div>
                        </div>
                        <div class="box-body">
                            <p>Decide what to do next with your work to achieve success with your business.</p>
                        </div>
                    </article>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-40 justify-content-md-between flex-column-reverse flex-md-row">
                @foreach ($dataProfilSingkat as $item)
                    <div class="col-md-6">
                        <h2>{{$item->title}}</h2>
                        <p>{{$item->isi_profile}}</p>
                    </div>
                    <div class="col-md-5">
                        <img class="wow fadeIn" src="http://localhost:8000/image/profil/{{$item->gambar}}" alt="" width="510" height="680"
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
                    <h2>Pengumuman</h2>
                    <p>Berikut beberapa informasi mengenai perkuliahan di STAINAA.</p>
                </div>
                <div class="col-md-4 text-md-end"><a class="btn btn-nero-outline-1"
                        href="{{ url('/semua_pengumuman') }}">Lainnya</a></div>
            </div>
            <div class="row row-20 row-md-40 row-xl-60">
                <div class="col-sm-6 col-md-4 wow fadeInUp post-preview-wrap" data-wow-delay="0s">
                    <article class="icon-box-horizontal post post-preview">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left">
                                <span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4 style="margin-bottom: -20px !important;"><a
                                        href="{{ url('/pengumuman_detail') }}">Marketing</a></h4>
                                <div class="post-meta">
                                    <ul class="list-meta">
                                        <li>
                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                        </li>
                                    </ul>
                                </div>
                                <p>Understand how marketing concepts work and approach your marketing tasks
                                    efficiently.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp post-preview-wrap" data-wow-delay=".1s">
                    <article class="icon-box-horizontal post post-preview">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4 style="margin-bottom: -20px !important;"><a
                                        href="{{ url('/pengumuman_detail') }}">Management</a></h4>
                                <div class="post-meta">
                                    <ul class="list-meta">
                                        <li>
                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                        </li>
                                    </ul>
                                </div>
                                <p>Learn how to deal with managerial tasks to achieve the set goals for your
                                    business.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp post-preview-wrap" data-wow-delay=".2s">
                    <article class="icon-box-horizontal post post-preview">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4 style="margin-bottom: -20px !important;"><a
                                        href="{{ url('/pengumuman_detail') }}">Leadership</a></h4>
                                <div class="post-meta">
                                    <ul class="list-meta">
                                        <li>
                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                        </li>
                                    </ul>
                                </div>
                                <p>Establish powerful leadership in your company’s team through coaching.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp post-preview-wrap" data-wow-delay=".3s">
                    <article class="icon-box-horizontal post post-preview">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4 style="margin-bottom: -20px !important;"><a
                                        href="{{ url('/pengumuman_detail') }}">Finance</a></h4>
                                <div class="post-meta">
                                    <ul class="list-meta">
                                        <li>
                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                        </li>
                                    </ul>
                                </div>
                                <p>Handle your financial challenges easily with professional coaching by Lead
                                    Planner.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp post-preview-wrap" data-wow-delay=".4s">
                    <article class="icon-box-horizontal post post-preview">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4 style="margin-bottom: -20px !important;"><a
                                        href="{{ url('/pengumuman_detail') }}">Lead generation</a>
                                </h4>
                                <div class="post-meta">
                                    <ul class="list-meta">
                                        <li>
                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                        </li>
                                    </ul>
                                </div>
                                <p>Increase the consumer interest and discover how to successfully generate leads.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp post-preview-wrap" data-wow-delay=".5s">
                    <article class="icon-box-horizontal post post-preview">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4 style="margin-bottom: -20px !important;"><a
                                        href="{{ url('/pengumuman_detail') }}">Lead conversion</a>
                                </h4>
                                <div class="post-meta">
                                    <ul class="list-meta">
                                        <li>
                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                        </li>
                                    </ul>
                                </div>
                                <p>Turn a potential customer into a real and regular one in just a few simple steps.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-30 align-items-center">
                <div class="col-md-8">
                    <h2>Berita</h2>
                    <p>Berikut beberapa berita terkini</p>
                </div>
                <div class="col-md-4 text-md-end"><a class="btn btn-nero-outline-1"
                        href="{{ url('/semua_berita') }}">Lainnya</a>
                </div>
            </div>
            <div class="row row-20 row-md-40 row-xl-60">
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0s">
                    <div class="card shadow post post-preview">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body unit-body">
                            <h5 class="card-title" style="margin-bottom: -20px !important;"><a
                                    href="{{ url('/berita_detail') }}">Card
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
                                    href="{{ url('/berita_detail') }}">Card
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
                                    href="{{ url('/berita_detail') }}">Card
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
                                    href="{{ url('/berita_detail') }}">Card
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
            </div>
        </div>
    </section>

    <section class="section section-md bg-nero">
        <div class="container text-center">
            <h3>STAINAA dalam angka</h3>
            <div class="row row-40">
                <div class="col-sm-6 col-md-3">
                    <div class="box-counter"><span class="novi-icon icon icon-md icon-primary fa-university"></span>
                        <div class="text-large counter">58249</div>
                        <h5 class="box-header">Berdiri Sejak</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box-counter"><span class="novi-icon icon icon-md icon-primary material-icons-mood"></span>
                        <div class="text-large counter counter-k">246</div>
                        <h5 class="box-header">Mahasiswa</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box-counter"><span
                            class="novi-icon icon icon-md icon-primary material-icons-access_time"></span>
                        <div class="text-large counter">1200</div>
                        <h5 class="box-header">Dosen</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box-counter"><span class="novi-icon icon icon-md icon-primary fa-graduation-cap"></span>
                        <div class="text-large counter counter-k">834</div>
                        <h5 class="box-header">Lulusan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <img class="img-fluid image-2" src="dist/images/stai.png" alt="" />
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-20">
                <div class="col-sm-6 col-md-4 col-xl-2 wow fadeInUp" data-wow-delay="0s">
                    <div class="link-image-wrap"><a class="link-image" href="#"><img
                                src="dist/images/brand-01-180x80.png" alt="" width="180"
                                height="80" /></a></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 wow fadeInUp" data-wow-delay=".1s">
                    <div class="link-image-wrap"><a class="link-image" href="#"><img
                                src="dist/images/brand-02-180x80.png" alt="" width="180"
                                height="80" /></a></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 wow fadeInUp" data-wow-delay=".2s">
                    <div class="link-image-wrap"><a class="link-image" href="#"><img
                                src="dist/images/brand-03-180x80.png" alt="" width="180"
                                height="80" /></a></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 wow fadeInUp" data-wow-delay=".3s">
                    <div class="link-image-wrap"><a class="link-image" href="#"><img
                                src="dist/images/brand-04-180x80.png" alt="" width="180"
                                height="80" /></a></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 wow fadeInUp" data-wow-delay=".4s">
                    <div class="link-image-wrap"><a class="link-image" href="#"><img
                                src="dist/images/brand-05-180x80.png" alt="" width="180"
                                height="80" /></a></div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="link-image-wrap"><a class="link-image" href="#"><img
                                src="dist/images/brand-06-180x80.png" alt="" width="180"
                                height="80" /></a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
