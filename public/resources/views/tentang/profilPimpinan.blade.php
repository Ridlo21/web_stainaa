@extends('template')

@section('title')
    Profil Pimpinan
@endsection

@section('konten')
@foreach ($data as $item)
    
<section class="section section-lg bg-primary position-relative overflow-hidden">
    <div class="container">
        <div class="row row-40 justify-content-md-end">
            <div class="col-md-6 col-xl-5 position-relative z-1">
                <p>{{$item->biografi}}</p>
                <h3 class="h4 offset-xl-top-55">{{$item->nama}}, {{$item->gelar}}</h3>
                <p class="mt-2 small mt-0">{{$item->jabatan}}</p>
            </div>
        </div>
        <img class="img-mod-2" src="http://localhost:8000/image/tentang/{{$item->gambar}}" alt="" width="950" height="920" />
    </div>
</section>

@endforeach
@endsection
