@extends('template')

@section('title')
    Semua Pengumuman
@endsection

@section('konten')
    {{-- <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Semua Pengumuman</h1>
            </div>
        </div>
    </section> --}}
    <div class="mm bg-default mb-5">
        <img class="img-fluid cover" src="dist/images/bg_3.jpg" alt="" />
        <div class="container judul">
            <div class="row">
                <div class="col-lg-4 col-md-6 bg-primary shadow pt-3">
                    <h3>Pengumuman</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam necessitatibus facilis iste qui
                        excepturi reprehenderit at, quis corrupti fugit sit, magnam dolorem nisi, accusamus aliquam et
                        cupiditate aliquid assumenda eos.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-lg bg-default mt-5 pt-5">
        <div class="container">
            <div class="row row-20 row-md-40 row-xl-60">
                <div class="col-sm-6 col-md-4 wow fadeInUp post-preview-wrap" data-wow-delay=".0s">
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
                                <h4 style="margin-bottom: -20px !important;"><a href="{{ url('/pengumuman_detail') }}">Lead
                                        generation</a>
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
                                <h4 style="margin-bottom: -20px !important;"><a href="{{ url('/pengumuman_detail') }}">Lead
                                        conversion</a>
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
                <ul class="pag pag-simple mt-5">
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
