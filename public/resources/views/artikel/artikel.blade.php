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
        <img class="img-fluid cover" src="http://localhost:8000/image/mod_artikel/{{ $mod->gambar }}" alt="" />
        <div class="container judul">
            <div class="row">
                <div class="col-lg-4 col-md-6 bg-primary shadow pt-3">
                    <h3>{{ $mod->title }}</h3>
                    <p>{{ $mod->descripton }}</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-lg bg-default mt-5 pt-5">
        <div class="container">
            <div class="row row-50 justify-content-between">
                <div class="col-lg-8">
                    @if ($data->isEmpty())
                        <p class="mb-4"><i>Tidak ada arikel pada kategori yang anda pilih!</i></p>
                    @else
                        @foreach ($data as $item)
                            <article class="post post-single mb-5">
                                <div class="post-image">
                                    <figure><img src="http://localhost:8000/image/artikel/{{ $item->gambar1 }}"
                                            alt="" width="840" height="464" />
                                    </figure>
                                </div>
                                <div class="post-header">
                                    <h3 class="h3">{{ $item->judul }}</h3>
                                </div>
                                <div class="divider-fullwidth"></div>
                                <div class="post-body">
                                    <p>
                                        <?= substr($item->isi_artikel, 3, 200) ?>
                                    </p>
                                </div>
                                <a class="btn btn-nero" href="{{ route('artikel.Info', ['id' => $item->judul_seo]) }}">Read
                                    More</a>
                            </article>
                        @endforeach
                    @endif
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
                                <li>
                                    <a href="{{ route('artikel.List') }}"><span>All</span><span
                                            class="list-counter">({{ $total }})</span></a>
                                </li>
                                @foreach ($kategori as $kat)
                                    <li>
                                        <a href="{{ url('/artikel?kategori=' . urlencode($kat->kategori)) }}"><span>{{ $kat->kategori }}</span><span
                                                class="list-counter">({{ $kat->total_artikel }})</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog-aside-item">
                            <h4>Popular posts</h4>
                            <div class="post-preview-wrap">
                                @foreach ($populer as $item)
                                    <article class="post post-preview"><a
                                            href="{{ route('artikel.Info', ['id' => $item->judul_seo]) }}">
                                            <div class="unit unit-spacing-md">
                                                <div class="unit-body">
                                                    <div class="post-header">
                                                        <p>{{ $item->judul }}</p>
                                                    </div>
                                                    <div class="post-meta">
                                                        <ul class="list-meta">
                                                            <li>
                                                                <time
                                                                    datetime="{{ $item->tanggal }}">{{ \Carbon\Carbon::parse($item->tanggal)->format('M j, Y') }}</time>
                                                            </li>
                                                            <li>{{ $item->dibaca }} x dibaca</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
