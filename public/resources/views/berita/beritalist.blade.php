@extends('template')
@section('title')
    Semua Berita
@endsection

@section('konten')
    <div class="mm bg-default mb-5">
        <img class="img-fluid cover" src="http://localhost:8000/image/mod_berita/{{ $mod->gambar }}" alt="" />
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
            <div class="row justify-content-md-center">
                <div class="col-xl-8">
                    <dl class="blog-timeline">
                        <dd>
                            @foreach ($data as $item)
                                <article class="post-classic-minimal">
                                    <div class="post-left">
                                        <time
                                            datetime="{{ $item->tanggal }}">{{ \Carbon\Carbon::parse($item->tanggal)->format('j M') }}</time>
                                    </div>
                                    <div class="post-main">
                                        <div class="post-media post-gallery">
                                            <figure><img src="http://localhost:8000/image/berita/{{ $item->gambar1 }}"
                                                    alt="" width="620" height="464" />
                                            </figure>
                                        </div>
                                        <div class="post-header">
                                            <h2 class="h3"><a
                                                    href="{{ route('berita.show', ['id' => $item->judul_seo]) }}">{{ $item->judul }}</a>
                                            </h2>
                                            <p>{{ substr($item->isi_berita, 3, 167) }}...</p>
                                        </div>
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li>
                                                    <dl>
                                                        <dt>Pewarta</dt>
                                                        <dd>
                                                            <ul class="list-tags-inline">
                                                                <li><a href="#">{{ $item->penulis }}</a></li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>Dibaca</dt>
                                                        <dd><a href="#">{{ $item->dibaca }} x dibaca</a></dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </dd>
                    </dl>
                </div>
                <ul class="pag pag-simple mt-3">
                    <li class="pag-simple-item">
                        <a class="pag-simple-link pag-simple-link-prev {{ $data->onFirstPage() ? 'inactive' : '' }}"
                            href="{{ $data->previousPageUrl() ?? '#' }}">
                            <span class="mdi mdi-arrow-left novi-icon"></span>
                        </a>
                    </li>

                    @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                        <li class="pag-simple-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                            <a class="pag-simple-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <li class="pag-simple-item">
                        <a class="pag-simple-link pag-simple-link-next {{ $data->hasMorePages() ? '' : 'inactive' }}"
                            href="{{ $data->nextPageUrl() ?? '#' }}">
                            <span class="mdi mdi-arrow-right novi-icon"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
