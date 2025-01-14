@extends('template')

@section('title')
    Contact Me
@endsection

@section('konten')
    <div class="mm bg-default mb-5">
        @foreach ($data as $item)
            
        <img class="img-fluid cover" src="http://localhost:8000/image/contact/{{$item->gambar}}" alt="" />
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
            <div class="row row-50 justify-content-md-between">
                <div class="col-md-12">
                    <h2>Stainaa menyediakan contact yang bisa dihubungi</h2>
                    <p style="max-width: 450px;">ketika ada yang dibutuhkan kami siap melayani dengan menghubungi email dan nomor dibawah ini</p>
                    <address class="contact-info">
                        <p class="h4">P:&nbsp;<a class="link-default" href="tel:#">082845289894</a></p><a
                            class="link-default mt-0 text-decoration-underline" href="mailto:#">stainaa@stainaa.email</a>
                        <p class="offset-top-5">JL KH.Agus Salim No 165 RT008/RW002 Alasbuluh Wongosorejo Banyuwangi
                        </p>
                    </address>
                    <div class="unit unit-spacing-sm text-secondary align-items-center">
                        <div class="unit-left"><span class="icon icon-sm icomoon-marker"></span></div>
                        <div class="unit-right"><a class="small" href="#" data-bs-toggle="modal"
                                data-bs-target="#map">Show on a map</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
