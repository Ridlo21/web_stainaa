@extends('template')
@section('title')
    Semua Berita
@endsection

@section('konten')
    <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Semua Berita</h1>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xl-8">
                    <dl class="blog-timeline">
                        <dd>
                            <article class="post-classic-minimal">
                                <div class="post-left">
                                    <time datetime="2023-06-17">Jun 17</time>
                                </div>
                                <div class="post-main">
                                    <div class="post-media post-gallery">
                                        <figure><img src="dist/images/blog-line-1-620x464.jpg" alt="" width="620"
                                                height="464" />
                                        </figure>
                                    </div>
                                    <div class="post-header">
                                        <h2 class="h3"><a href="{{ url('/berita_detail') }}">The ultimate guide to time
                                                management</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec
                                            venenatis elit, sed vehicula sapien. Praesent facilisis varius
                                            imperdiet. Ut et ligula quis mi viverra sodales. Vivamus lectus magna,
                                            faucibus vel ipsum. Proin iaculis, diam et placerat lacinia, odio nisl
                                            congue tellus, sed placerat nunc neque id urna. Phasellus nec massa
                                            purus.</p>
                                    </div>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li>
                                                <dl>
                                                    <dt>in</dt>
                                                    <dd>
                                                        <ul class="list-tags-inline">
                                                            <li><a href="#">Business</a></li>
                                                            <li><a href="#">Blog</a></li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>by</dt>
                                                    <dd><a href="#">John Adams</a></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="post-classic-minimal">
                                <div class="post-left">
                                    <time datetime="2023-05-23">May 23</time>
                                </div>
                                <div class="post-main">
                                    <div class="post-media post-gallery">
                                        <figure><img src="dist/images/blog-line-1-620x464.jpg" alt="" width="620"
                                                height="464" />
                                        </figure>
                                    </div>
                                    <div class="post-header">
                                        <h2 class="h3"><a href="{{ url('/berita_detail') }}">Find more time in your day
                                                by
                                                conducting a simple time audit</a></h2>
                                        <p>Praesent facilisis varius imperdiet. Ut et ligula quis mi viverra
                                            sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis, diam
                                            et placerat lacinia, odio nisl congue tellus, sed placerat nunc neque id
                                            urna. Phasellus nec massa purus.</p>
                                    </div>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li>
                                                <dl>
                                                    <dt>in</dt>
                                                    <dd>
                                                        <ul class="list-tags-inline">
                                                            <li><a href="#">Business</a></li>
                                                            <li><a href="#">Blog</a></li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>by</dt>
                                                    <dd><a href="#">John Adams</a></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="post-classic-minimal">
                                <div class="post-left">
                                    <time datetime="2023-04-14">Apr 14</time>
                                </div>
                                <div class="post-main">
                                    <div class="post-media post-gallery">
                                        <figure><img src="dist/images/blog-line-2-620x464.jpg" alt="" width="620"
                                                height="464" />
                                        </figure>
                                    </div>
                                    <div class="post-header">
                                        <h2 class="h3"><a href="{{ url('/berita_detail') }}">How to get more out of your
                                                business</a></h2>
                                        <p>Donec nec venenatis elit, sed vehicula sapien. Praesent facilisis varius
                                            imperdiet. Ut et ligula quis mi viverra sodales. Vivamus lectus magna,
                                            faucibus vel ipsum. Proin iaculis, diam et placerat lacinia, odio nisl
                                            congue tellus, sed placerat nunc neque id urna. Phasellus nec massa
                                            purus.</p>
                                    </div>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li>
                                                <dl>
                                                    <dt>in</dt>
                                                    <dd>
                                                        <ul class="list-tags-inline">
                                                            <li><a href="#">Business</a></li>
                                                            <li><a href="#">Blog</a></li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>by</dt>
                                                    <dd><a href="#">John Adams</a></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="post-classic-minimal">
                                <div class="post-left">
                                    <time datetime="2023-03-02">Mar 2</time>
                                </div>
                                <div class="post-main">
                                    <div class="post-media post-gallery">
                                        <figure><img src="dist/images/blog-line-2-620x464.jpg" alt="" width="620"
                                                height="464" />
                                        </figure>
                                    </div>
                                    <div class="post-header">
                                        <h2 class="h3"><a href="{{ url('/berita_detail') }}">5 steps to increasing your
                                                effectiveness</a></h2>
                                        <p>Praesent facilisis varius imperdiet. Ut et ligula quis mi viverra
                                            sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis,
                                            diMauris lorem massa, gravida ac justo at, rutrum accumsan sem. In
                                            ornare bibendum faucibus. Suspendisse tincidunt diam ut sem cursus, vel
                                            sodales nisl mollis.</p>
                                    </div>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li>
                                                <dl>
                                                    <dt>in</dt>
                                                    <dd>
                                                        <ul class="list-tags-inline">
                                                            <li><a href="#">Business</a></li>
                                                            <li><a href="#">Blog</a></li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>by</dt>
                                                    <dd><a href="#">John Adams</a></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="post-classic-minimal">
                                <div class="post-left">
                                    <time datetime="2023-03-02">Mar 2</time>
                                </div>
                                <div class="post-main">
                                    <div class="post-media post-gallery">
                                        <figure><img src="dist/images/blog-line-2-620x464.jpg" alt="" width="620"
                                                height="464" />
                                        </figure>
                                    </div>
                                    <div class="post-header">
                                        <h2 class="h3"><a href="{{ url('/berita_detail') }}">5 steps to increasing your
                                                effectiveness</a></h2>
                                        <p>Praesent facilisis varius imperdiet. Ut et ligula quis mi viverra
                                            sodales. Vivamus lectus magna, faucibus vel ipsum. Proin iaculis,
                                            diMauris lorem massa, gravida ac justo at, rutrum accumsan sem. In
                                            ornare bibendum faucibus. Suspendisse tincidunt diam ut sem cursus, vel
                                            sodales nisl mollis.</p>
                                    </div>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li>
                                                <dl>
                                                    <dt>in</dt>
                                                    <dd>
                                                        <ul class="list-tags-inline">
                                                            <li><a href="#">Business</a></li>
                                                            <li><a href="#">Blog</a></li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </li>
                                            <li>
                                                <dl>
                                                    <dt>by</dt>
                                                    <dd><a href="#">John Adams</a></dd>
                                                </dl>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </dd>
                    </dl>
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
