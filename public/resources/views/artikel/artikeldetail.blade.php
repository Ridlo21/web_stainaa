@extends('template')
@section('title')
    Artikel
@endsection

@section('konten')
    <section class="section section-lg bg-default" style="padding-top: 40px !important;">
        <div class="container">
            <div class="row row-50 justify-content-between">
                <div class="col-lg-8">
                    <article class="post post-single">
                        <div class="post-image">
                            <figure><img src="http://localhost:8000/image/artikel/{{ $data->gambar1 }}" alt=""
                                    width="840" height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">{{ $data->judul }}</h2>
                        </div>
                        <div class="post-meta small">
                            <ul class="list-bordered-horizontal">
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Tanggal</dt>
                                        <dd>
                                            <time class="text-secondary"
                                                datetime="2023-01-22">{{ Carbon\Carbon::parse($data->tanggal)->locale('id')->translatedFormat('d F Y') }}</time>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Penerbit</dt>
                                        <dd><a href="#">{{ $data->penulis }}</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Foto</dt>
                                        <dd><a href="#">{{ $data->ket_gambar }}</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Kategori</dt>
                                        <dd><a href="#">{{ $data->kategori }}</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Dibaca</dt>
                                        <dd><a href="#">{{ $data->dibaca }} x dibaca</a></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <?= $data->isi_artikel ?>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="blog-aside">
                        <div class="blog-aside-item">
                            <h4>Popular Post</h4>
                            <div class="post-preview-wrap">
                                @foreach ($populer as $item)
                                    <article class="post post-preview"><a
                                            href="{{ route('artikel.Info', ['id' => $item->judul_seo]) }}">
                                            <div class="unit unit-spacing-md">
                                                {{-- <div class="unit-left">
                                                <figure class="post-image"><img src="dist/images/post-preview-1-80x80.jpg"
                                                        alt="" width="80" height="80" />
                                                </figure>
                                            </div> --}}
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
