@extends('template')

@section('title')
    Pengumuman
@endsection

@section('konten')
    <section class="section section-lg bg-default" style="padding-top: 40px !important;">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-lg-9">
                    <article class="post post-single">
                        <div class="post-image">
                            <figure><img src="http://localhost:8000/image/pengumuman/{{$data->gambar1}}" alt="" width="840" height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">{{$data->judul}}</h2>
                        </div>
                        <div class="post-meta small">
                            <ul class="list-bordered-horizontal">
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Date</dt>
                                        <dd>
                                            <time class="text-secondary" >{{date('d-m-Y',strtotime($data->tanggal))}}</time>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Pewarta</dt>
                                        <dd><a href="#">{{$data->penulis}}</a></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Foto</dt>
                                        <dd><a href="#">{{$data->ket_gambar}}</a></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <?= $data->isi_pengumuman ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
