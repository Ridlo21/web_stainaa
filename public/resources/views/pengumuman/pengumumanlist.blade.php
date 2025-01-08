@extends('template')

@section('title')
    Semua Pengumuman
@endsection

@section('konten')
    <div class="mm bg-default mb-5">
        @foreach ($dataLanding as $item)
        <img class="img-fluid cover" src="http://localhost:8000/image/mod_pengumuman/{{$item->gambar}}" alt="" />
        <div class="container judul">
            <div class="row">
                <div class="col-lg-4 col-md-6 bg-primary shadow pt-3">
                    <h3>{{$item->title}}</h3>
                    <p>{{$item->descripton}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <section class="section section-lg bg-default mt-5 pt-5">
        <div class="container">
            <div class="row row-20 row-md-40 row-xl-60">
                @foreach ($data as $item)
                
                <div class="col-sm-6 col-md-4 wow fadeInUp post-preview-wrap" data-wow-delay=".1s">
                    <article class="icon-box-horizontal post post-preview">
                        <div class="unit unit-spacing-xs">
                            <div class="unit-left"><span class="novi-icon icon icomoon-arrow icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h4 style="margin-bottom: -20px !important;"><a
                                        href="{{ url('/pengumuman_detail') }}/{{$item->judul_seo}}">{{$item->judul}}</a></h4>
                                <div class="post-meta">
                                    <ul class="list-meta">
                                        <li>
                                            <time datetime="2023-02-04">{{$item->tanggal}}</time>
                                        </li>
                                    </ul>
                                </div>
                                {{substr($item->isi_pengumuman, 3,100)}}...
                            </div>
                        </div>
                    </article>
                </div>
                    
                @endforeach
                <div class="pag pag-simple mt-5">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection
