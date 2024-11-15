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
        <img class="img-fluid cover" src="dist/images/bg_3.jpg" alt="" />
        <div class="container judul">
            <div class="row">
                <div class="col-lg-4 col-md-6 bg-primary shadow pt-3">
                    <h3>Tentang Kami</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam necessitatibus facilis iste qui
                        excepturi reprehenderit at, quis corrupti fugit sit, magnam dolorem nisi, accusamus aliquam et
                        cupiditate aliquid assumenda eos.</p>
                </div>
            </div>
        </div>
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
                                <p>Once you decide to opt for any of our plans, you can run a 14-day free trial
                                    first. Including all the basic features of each of the offered pricing plans, it
                                    will help you decide which features are of the greatest value to you. Once the
                                    14 day period is over, you will be asked to make your choice.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <p>Web packages are there as a guideline and we can customize them so that they can
                                    fit your needs perfectly. We can either include or remove some functions and
                                    features. Just let us know what you need and we will give you the best solution.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <p>There are two ways to look at this question. If you are looking to cut the costs
                                    you can do the updates yourself. The website will be in CMS and you will get the
                                    instructions on how you can update it by yourself. If you would like us to do
                                    the updates for you, we will do it and not only will we update the content, but
                                    also work on search engine optimization. That way your website will be up to
                                    date, and you will get more visitors over time.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-4">
                                <p>Yes, we do. We can redesign your website so that it follows the latest trends.
                                    Redesign is less expensive than making a whole new website.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-5">
                                <p>Yes, you can. Our plans are month-to-month or yearly. You are free to cancel the
                                    selected plan anytime you wish. Once you decide to cancel the current plan, we
                                    will not charge you for the next period. As soon as you decide what other plan
                                    to opt for, we will contact you for verification.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
