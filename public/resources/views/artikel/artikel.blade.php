@extends('template')

@section('title')
    Kemahasiswaan
@endsection

@section('konten')
<section class="section section-xs novi-background bg-primary">
    <div class="container">
        <div class="page-title">
            <h1 class="h2">Prices</h1>
        </div>
    </div>
</section>
<section class="section section-lg bg-default">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-start text-center text-xl-start">
            <div class="col-md-10 col-xl-8 col-xxl-7">
                <h2>We'll suggest the plan that's right for your business</h2>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-10 col-xl-12">
                <div class="row row-20 row-md-40">
                    <div class="col-md-6 col-xl-3">
                        <div class="pricing-table">
                            <div class="pricing-table-body">
                                <h3 class="h4 pricing-table-header">Free consultation</h3>
                                <div class="pricing-object"><span>$</span><span class="price">0</span></div>
                                <p class="small">Pellentesque et tellus feug</p>
                                <ul class="list-marked pricing-list">
                                    <li>Donec quis vehicula diam</li>
                                    <li>Ut viverra ligula non</li>
                                    <li>Suscipit commodo orci</li>
                                    <li>Curabitur orci magna</li>
                                </ul>
                            </div>
                            <div class="pricing-table-footer"><a class="btn btn-nero btn-block" href="#">Buy
                                    now</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="pricing-table">
                            <div class="pricing-table-body">
                                <h3 class="h4 pricing-table-header">Basic</h3>
                                <div class="pricing-object"><span>$</span><span class="price">5</span><span
                                        class="h4">/month</span></div>
                                <p class="small">Penatibus vulputate in sagittis at</p>
                                <ul class="list-marked pricing-list">
                                    <li>Sed iaculis turpis sed</li>
                                    <li>Accumsan pretium</li>
                                    <li>In ultrices felis nulla non</li>
                                    <li>Pellentesque ornare erat</li>
                                </ul>
                            </div>
                            <div class="pricing-table-footer"><a class="btn btn-nero btn-block" href="#">Buy
                                    now</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="pricing-table bg-aqua-grey">
                            <div class="pricing-table-body">
                                <h3 class="h4 pricing-table-header">Standard</h3>
                                <div class="pricing-object"><span>$</span><span class="price">20</span><span
                                        class="h4">/month</span></div>
                                <p class="small">Etiam nibh risus nunc ridiculus</p>
                                <ul class="list-marked pricing-list">
                                    <li>Condimentum nunc lectus</li>
                                    <li>Interdum eros dictum</li>
                                    <li>Convallis tortor nibh ornare</li>
                                    <li>Morbi iaculis auctor luctus</li>
                                </ul>
                            </div>
                            <div class="pricing-table-footer"><a class="btn btn-nero-2 btn-block" href="#">Buy
                                    now</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="pricing-table">
                            <div class="pricing-table-body">
                                <h3 class="h4 pricing-table-header">Premium</h3>
                                <div class="pricing-object"><span>$</span><span class="price">50</span><span
                                        class="h4">/month</span></div>
                                <p class="small">Porta nunc facilisi cras quisque eget</p>
                                <ul class="list-marked pricing-list">
                                    <li>Proin iaculis diam et</li>
                                    <li>Placerat lacinia odio nisl</li>
                                    <li>Congue tellus sed</li>
                                    <li>Placerat nunc neque id urna</li>
                                </ul>
                            </div>
                            <div class="pricing-table-footer"><a class="btn btn-nero btn-block" href="#">Buy
                                    now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection