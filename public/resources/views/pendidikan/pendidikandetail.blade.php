@extends('template')

@section('title')
    Pendidikan
@endsection

<?php
    $data = DB::table('pendidikan')->where('id_pendidikan', $id)->first();
?>

@section('konten')
    <section class="section section-lg bg-default" style="padding-top: 40px !important;">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-lg-10">
                    <article class="post post-single">
                        <div class="post-image">
                            <figure><img src="http://localhost:8000/image/pendidikan/{{$data->gambar1}}" alt="" width="840" height="464" />
                            </figure>
                        </div>
                        <div class="post-header">
                            <h2 class="h3">{{$data->fakultas}}</h2>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="post-body">
                            <p>
                                {{$data->biografi}}
                            </p>
                            <div class="row row-30 justify-content-end-md-justify">
                                <div class="col-md-6">
                                    <figure><img src="http://localhost:8000/image/pendidikan/{{$data->gambar2}}" alt="" width="570"
                                            height="386" />
                                    </figure>
                                </div>
                                <div class="col-md-6">
                                    <div class="inset-lg-left-40 inset-xl-left-70">
                                        <p>{{$data->biografi}}</p>
                                    </div>
                                </div>
                            </div>
                            <p>
                                {{$data->biografi}}
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
