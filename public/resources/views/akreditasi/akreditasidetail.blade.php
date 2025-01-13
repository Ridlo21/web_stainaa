@extends('template')

@section('title')
    Akreditasi
@endsection

@section('konten')
    <section class="section section-xs bg-nero">
        <div class="container">
            <div class="page-title">
                <h1 class="h2">Akreditasi {{$fakultas}}</h1>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-10 col-xl-10">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="3">{{$fakultas}}</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>No Butir</th>
                                <th>Nama Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$no ++}}</td>
                                    <td>{{$item->no_butir}}</td>
                                    <td>
                                        <a href="{{$item->link}}"  target="blank">{{$item->description}}</a>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
