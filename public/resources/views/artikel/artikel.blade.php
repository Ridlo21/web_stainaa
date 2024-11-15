@extends('template')

@section('title')
    Artikel
@endsection

@section('konten')
    {{-- <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Artikel</h1>
            </div>
        </div>
    </section> --}}
    <div class="mm bg-default mb-5">
        <img class="img-fluid cover" src="dist/images/bg_3.jpg" alt="" />
        <div class="container judul">
            <div class="row">
                <div class="col-lg-4 col-md-6 bg-primary shadow pt-3">
                    <h3>Artikel</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam necessitatibus facilis iste qui
                        excepturi reprehenderit at, quis corrupti fugit sit, magnam dolorem nisi, accusamus aliquam et
                        cupiditate aliquid assumenda eos.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-lg bg-default mt-5 pt-5">
        <div class="container">
            <div class="row row-50 justify-content-between">
                <div class="col-lg-8">
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
                    <article class="post post-single mb-5">
                        <div class="post-image">
                            <figure><img src="dist/images/post-1-840x464.jpg" alt="" width="840"
                                    height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">The ultimate guide to time management</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec venenatis elit,
                                sed vehicula sapien. Praesent facilisis varius imperdiet. Ut et ligula quis mi
                                viverra sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam et
                                placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id urna.
                                Phasellus nec massa purus.</p>
                        </div>
                        <a class="btn btn-nero" style="margin-top: 20px !important;"
                            href="{{ url('/artikel_detail') }}">Read More</a>
                    </article>
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
                <div class="col-lg-4 col-xl-3">
                    <div class="blog-aside">
                        <div class="blog-aside-item">
                            <form class="rd-search rd-search-classic" action="search-results.html" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-search-form-input-1">Search</label>
                                    <input class="form-input" id="rd-search-form-input-1" type="text" name="s"
                                        autocomplete="off">
                                </div>
                                <button class="rd-search-submit" type="submit"></button>
                            </form>
                        </div>
                        <div class="blog-aside-item">
                            <h4>Categories</h4>
                            <ul class="list-marked-variant-3">
                                <li><a href="#"><span>Management</span><span class="list-counter">(3)</span></a>
                                </li>
                                <li><a href="#"><span>Marketing</span><span class="list-counter">(4)</span></a></li>
                                <li><a href="#"><span>Business</span><span class="list-counter">(4)</span></a></li>
                            </ul>
                        </div>
                        <div class="blog-aside-item">
                            <h4>Popular posts</h4>
                            <div class="post-preview-wrap">
                                <article class="post post-preview"><a href="{{ url('/artikel_detail') }}">
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
                                    </a></article>
                                <article class="post post-preview"><a href="{{ url('/artikel_detail') }}">
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
                                    </a></article>
                                <article class="post post-preview"><a href="{{ url('/artikel_detail') }}">
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
                                    </a></article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
