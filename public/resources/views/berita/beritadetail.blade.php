@extends('template')
@section('title')
    Berita
@endsection

@section('konten')
    <section class="section section-lg bg-default" style="padding-top: 40px !important;">
        <div class="container">
            <div class="row row-50 justify-content-between">
                <div class="col-lg-8">
                    <article class="post post-single">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840" height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="post-meta small">
                            <ul class="list-bordered-horizontal">
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Date</dt>
                                        <dd>
                                            <time class="text-secondary" datetime="2023-01-22">January 22,
                                                2023</time>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Pewarta</dt>
                                        <dd><a href="#">Amelia Lee</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Foto</dt>
                                        <dd><a href="#">Gunawan</a></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.
                            </p>
                            <p>
                                Pulvinar tortor viverra fusce phasellus sed id quam. Scelerisque accumsan est mi nunc
                                egestas. Nulla quam mauris aliquet ac aliquam tortor nulla. Mattis nulla egestas
                                ornare dictum. Sed sed molestie augue posuere erat eget. Vitae mattis elementum amet
                                quam. Pretium vivamus blandit scelerisque diam purus imperdiet sit nunc amet. Porta
                                dolor nisi lacus quam morbi.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.
                            </p>
                            <p>
                                Pulvinar tortor viverra fusce phasellus sed id quam. Scelerisque accumsan est mi nunc
                                egestas. Nulla quam mauris aliquet ac aliquam tortor nulla. Mattis nulla egestas
                                ornare dictum. Sed sed molestie augue posuere erat eget. Vitae mattis elementum amet
                                quam. Pretium vivamus blandit scelerisque diam purus imperdiet sit nunc amet. Porta
                                dolor nisi lacus quam morbi.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.
                            </p>
                            <p>
                                Pulvinar tortor viverra fusce phasellus sed id quam. Scelerisque accumsan est mi nunc
                                egestas. Nulla quam mauris aliquet ac aliquam tortor nulla. Mattis nulla egestas
                                ornare dictum. Sed sed molestie augue posuere erat eget. Vitae mattis elementum amet
                                quam. Pretium vivamus blandit scelerisque diam purus imperdiet sit nunc amet. Porta
                                dolor nisi lacus quam morbi.
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="blog-aside">
                        <div class="blog-aside-item">
                            <h4>Berita Lainnya</h4>
                            <div class="post-preview-wrap">
                                <article class="post post-preview"><a href="{{ url('/berita_detail') }}">
                                        <div class="unit unit-spacing-md">
                                            <div class="unit-left">
                                                <figure class="post-image"><img src="dist/images/post-preview-1-80x80.jpg"
                                                        alt="" width="80" height="80" />
                                                </figure>
                                            </div>
                                            <div class="unit-body">
                                                <div class="post-header">
                                                    <p>Find more time in your day through a simple time audit</p>
                                                </div>
                                                <div class="post-meta">
                                                    <ul class="list-meta">
                                                        <li>
                                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                                        </li>
                                                        <li>3 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                                <article class="post post-preview"><a href="{{ url('/berita_detail') }}">
                                        <div class="unit unit-spacing-md">
                                            <div class="unit-left">
                                                <figure class="post-image"><img src="dist/images/post-preview-2-80x80.jpg"
                                                        alt="" width="80" height="80" />
                                                </figure>
                                            </div>
                                            <div class="unit-body">
                                                <div class="post-header">
                                                    <p>How to get more out of your business</p>
                                                </div>
                                                <div class="post-meta">
                                                    <ul class="list-meta">
                                                        <li>
                                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                                        </li>
                                                        <li>3 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                                <article class="post post-preview"><a href="{{ url('/berita_detail') }}">
                                        <div class="unit unit-spacing-md">
                                            <div class="unit-left">
                                                <figure class="post-image"><img src="dist/images/post-preview-3-80x80.jpg"
                                                        alt="" width="80" height="80" />
                                                </figure>
                                            </div>
                                            <div class="unit-body">
                                                <div class="post-header">
                                                    <p>5 steps to increasing your effectiveness</p>
                                                </div>
                                                <div class="post-meta">
                                                    <ul class="list-meta">
                                                        <li>
                                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                                        </li>
                                                        <li>3 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                                <article class="post post-preview"><a href="{{ url('/berita_detail') }}">
                                        <div class="unit unit-spacing-md">
                                            <div class="unit-left">
                                                <figure class="post-image"><img src="dist/images/post-preview-2-80x80.jpg"
                                                        alt="" width="80" height="80" />
                                                </figure>
                                            </div>
                                            <div class="unit-body">
                                                <div class="post-header">
                                                    <p>How to get more out of your business</p>
                                                </div>
                                                <div class="post-meta">
                                                    <ul class="list-meta">
                                                        <li>
                                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                                        </li>
                                                        <li>3 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                                <article class="post post-preview"><a href="{{ url('/berita_detail') }}">
                                        <div class="unit unit-spacing-md">
                                            <div class="unit-left">
                                                <figure class="post-image"><img src="dist/images/post-preview-3-80x80.jpg"
                                                        alt="" width="80" height="80" />
                                                </figure>
                                            </div>
                                            <div class="unit-body">
                                                <div class="post-header">
                                                    <p>5 steps to increasing your effectiveness</p>
                                                </div>
                                                <div class="post-meta">
                                                    <ul class="list-meta">
                                                        <li>
                                                            <time datetime="2023-02-04">Feb 4, 2023</time>
                                                        </li>
                                                        <li>3 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
