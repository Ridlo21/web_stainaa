@extends('template')

@section('title')
    Home
@endsection

@section('konten')
    <style>
        .cover {
            width: 100%;
            height: auto;
            max-width: 100%;
            display: block;
            object-fit: cover;
        }
    </style>
    {{-- jumbotron --}}
    <section class="section section-intro bg-primary position-relative">
        {{-- <div class="container">
        <div class="row row-40">
            <div class="col-md-8 col-lg-6 position-relative z-1">
                <h1 class="wow">Transform your business. Take back your life.</h1>
                <p class="wow">Get the most out of your business with my coaching services.</p>
                <div class="group-sm group-btn wow fadeInUp" data-wow-delay=".3s"><a class="btn btn-nero"
                        href="about-me.html">More about me</a><a class="btn btn-nero-outline-2"
                        href="contact-me.html">Free consultation</a></div>
            </div>
        </div>
    </div> --}}
        <img class="img-fluid cover" src="dist/images/bg_3.jpg" alt="" />
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            {{-- <h2 class="text-center">I help people tackle their business issues</h2>
            <p class="text-center">It’s easy to get the results you want with the top-quality advice.</p> --}}
            <div class="row row-40 justify-content-center">
                <div class="col-sm-6 col-lg-4 height-fill wow fadeInUp" data-wow-delay="0s">
                    <article class="icon-box shadow-lg">
                        <div class="box-top">
                            <div class="box-icon"><span class="icon icon-md icomoon-stats"></span></div>
                            <div class="box-header">
                                <h3 class="h4"><a href="about-me.html">Kuliah & Ngaji</a></h3>
                            </div>
                        </div>
                        <div class="box-body">
                            <p>Accelerate your career and achieve your goals through mentoring at Lead Planner.</p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 height-fill wow fadeInUp" data-wow-delay="0.1s">
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
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-40 justify-content-md-between flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <h2>Selayang Pandang</h2>
                    <p>My name is John Adams and I am a business coach and trainer. I work with you to increase your
                        awareness and choices, so you can set meaningful goals and get the results you truly want. I
                        will challenge you to learn and think differently.</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, molestias iste fugit minus
                        iusto quas eveniet neque libero rerum at. Doloribus perferendis ipsum reiciendis sequi at voluptatum
                        maiores enim neque!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, molestias iste fugit minus
                        iusto quas eveniet neque libero rerum at. Doloribus perferendis ipsum reiciendis sequi at voluptatum
                        maiores enim neque!
                    </p>
                </div>
                <div class="col-md-5"><img class="wow fadeIn" src="dist/images/t.jpg" alt="" width="510"
                        height="680" data-wow-delay=".3s" />
                </div>
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
                <div class="col-md-4 text-md-end"><a class="btn btn-nero-outline-1" href="contact-me.html">Lainnya</a></div>
            </div>
            <div class="row row-20 row-md-40 row-xl-60">
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0s">
                    <article class="icon-box-horizontal">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4><a href="coaching.html">Marketing</a></h4>
                                <p>Understand how marketing concepts work and approach your marketing tasks
                                    efficiently.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".1s">
                    <article class="icon-box-horizontal">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4><a href="coaching.html">Management</a></h4>
                                <p>Learn how to deal with managerial tasks to achieve the set goals for your
                                    business.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <article class="icon-box-horizontal">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4><a href="coaching.html">Leadership</a></h4>
                                <p>Establish powerful leadership in your company’s team through coaching.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".3s">
                    <article class="icon-box-horizontal">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4><a href="coaching.html">Finance</a></h4>
                                <p>Handle your financial challenges easily with professional coaching by Lead
                                    Planner.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                    <article class="icon-box-horizontal">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4><a href="coaching.html">Lead generation</a></h4>
                                <p>Increase the consumer interest and discover how to successfully generate leads.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInUp" data-wow-delay=".5s">
                    <article class="icon-box-horizontal">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4><a href="coaching.html">Lead conversion</a></h4>
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
                    <p>Berita Terkini</p>
                </div>
                <div class="col-md-4 text-md-end"><a class="btn btn-nero-outline-1" href="contact-me.html">Lainnya</a>
                </div>
            </div>
            <div class="row row-20 row-md-40 row-xl-60">
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0s">
                    <div class="card shadow">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".1s">
                    <div class="card shadow">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="card shadow">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay=".3s">
                    <div class="card shadow">
                        <img src="dist/images/b4.jpg" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-primary">
        <div class="container">
            <div class="row g-0">
                <div class="col-sm-6 col-md-6 mb-0 border-black border-end border-bottom p-5">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="text-center me-5">
                            <div class="box-counter-main">
                                <div class="counter">2021</div>
                            </div>
                            <p class="box-counter-title">Berdiri Sejak</p>
                        </div>
                        <img src="dist/images/school.png" width="90" alt="" class="ms-2">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 mb-0 border-black border-start border-bottom p-5">
                    <div class="d-flex align-items-center justify-content-start">
                        <img src="dist/images/mahasiswa.png" width="90" alt="" class="ms-2">
                        <div class="text-center ms-5">
                            <div class="box-counter-main">
                                <div class="counter">149</div>
                            </div>
                            <p class="box-counter-title">Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 mb-0 border-black border-end border-top p-5">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="text-center me-5">
                            <div class="box-counter-main">
                                <div class="counter">30</div>
                            </div>
                            <p class="box-counter-title">Dosen</p>
                        </div>
                        <img src="dist/images/dosen.png" width="90" alt="" class="ms-2">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 mb-0 border-black border-start border-top p-5">
                    <div class="d-flex align-items-center justify-content-start">
                        <img src="dist/images/lulusan.png" width="90" alt="" class="ms-2">
                        <div class="text-center ms-5">
                            <div class="box-counter-main">
                                <div class="counter">0</div>
                            </div>
                            <p class="box-counter-title">Lulusan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xl-8">
                    <h2>Kind words from my happy clients</h2>
                    <p>My clients appreciate the provided guidance and assistance I offer along the way to help them
                        become stronger leaders and unlock the full potential of their businesses. Read their latest
                        testimonials below.</p>
                </div>
            </div>
            <div class="owl-carousel owl-style-minimal" data-items="1" data-sm-items="2" data-lg-items="3"
                data-margin="40" data-dots="true">
                <blockquote class="quote-primary">
                    <div class="quote-body">
                        <div class="quote-body-inner">
                            <p>
                                <q>The coaching has been really rewarding. I have learned how to communicate clearly
                                    with my team and to reflect on my leadership skills.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-md align-items-center">
                            <div class="unit-left"><img class="img-circle" src="dist/images/person-01-64x64.jpg"
                                    alt="" width="64" height="64" />
                            </div>
                            <div class="unit-body">
                                <cite class="h4">Courtney Johnson</cite>
                                <p class="small">28.10.2023</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote-primary">
                    <div class="quote-body">
                        <div class="quote-body-inner">
                            <p>
                                <q>I have worked with John for almost a year, and during this time I’ve learned how
                                    to be realistic about my work.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-md align-items-center">
                            <div class="unit-left"><img class="img-circle" src="dist/images/person-02-64x64.jpg"
                                    alt="" width="64" height="64" />
                            </div>
                            <div class="unit-body">
                                <cite class="h4">Jenny Wilson</cite>
                                <p class="small">28.10.2023</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote-primary">
                    <div class="quote-body">
                        <div class="quote-body-inner">
                            <p>
                                <q>Working with Mr. Adams has enabled me to shape and implement a set of personal
                                    objectives that have materially improved my performance as a leader.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-md align-items-center">
                            <div class="unit-left"><img class="img-circle" src="dist/images/person-03-64x64.jpg"
                                    alt="" width="64" height="64" />
                            </div>
                            <div class="unit-body">
                                <cite class="h4">Andrew Jackson</cite>
                                <p class="small">28.10.2023</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote-primary">
                    <div class="quote-body">
                        <div class="quote-body-inner">
                            <p>
                                <q>The coaching has been really rewarding. I have learned how to communicate clearly
                                    with my team and to reflect on my leadership skills.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-md align-items-center">
                            <div class="unit-left"><img class="img-circle" src="dist/images/person-01-64x64.jpg"
                                    alt="" width="64" height="64" />
                            </div>
                            <div class="unit-body">
                                <cite class="h4">Courtney Johnson</cite>
                                <p class="small">28.10.2023</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote-primary">
                    <div class="quote-body">
                        <div class="quote-body-inner">
                            <p>
                                <q>I have worked with John for almost a year, and during this time I’ve learned how
                                    to be realistic about my work.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-md align-items-center">
                            <div class="unit-left"><img class="img-circle" src="dist/images/person-02-64x64.jpg"
                                    alt="" width="64" height="64" />
                            </div>
                            <div class="unit-body">
                                <cite class="h4">Jenny Wilson</cite>
                                <p class="small">28.10.2023</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
                <blockquote class="quote-primary">
                    <div class="quote-body">
                        <div class="quote-body-inner">
                            <p>
                                <q>Working with Mr. Adams has enabled me to shape and implement a set of personal
                                    objectives that have materially improved my performance as a leader.</q>
                            </p>
                        </div>
                    </div>
                    <div class="quote-footer">
                        <div class="unit unit-horizontal unit-spacing-md align-items-center">
                            <div class="unit-left"><img class="img-circle" src="dist/images/person-03-64x64.jpg"
                                    alt="" width="64" height="64" />
                            </div>
                            <div class="unit-body">
                                <cite class="h4">Andrew Jackson</cite>
                                <p class="small">28.10.2023</p>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="container mt-0">
        <hr>
    </div>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h2>I help millions of owners create a business that works flawlessly</h2>
                </div>
            </div>
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
