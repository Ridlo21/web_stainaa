@extends('template')
@section('title')
    Kemahasiswaan | Ukm Detail
@endsection

<?php
    $data = DB::table('ukm')->where('id_ukm', $id)->first();
?>

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Kemahasiswaan</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Ukm</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
            <div class="card-body p-5">
                <div class="row">
                <div class="col-xl-6 col-12">
                    <div class="row gy-4">
                    <div class="col-12">
                        <div>
                        <!-- Gallery -->
                        <span >Gambar One</span>
                        <a href="#" class="glightbox" data-gallery="gallery1">
                            <img src="{{asset('image')}}/kemahasiswaan/{{ $data->gambar1 }}" alt="image" class="img-fluid rounded-3 w-100" />
                        </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                        <!-- Gallery -->
                        <span>Gambar two</span>
                        <a href="#" class="glightbox" data-gallery="gallery1">
                            <img src="{{asset('image')}}/kemahasiswaan/{{ $data->gambar2 }}" alt="image" class="img-fluid rounded-3 w-100" />
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="my-5 mx-lg-8">
                    <!-- heading -->
                    <div class="d-flex flex-column gap-2">
                        <h1 class="mb-0">DESKRIPSI</h1>
                        <div>
                        <!-- review -->
                        <span>
                            <span class="me-1 text-dark fw-semibold">
                                judul : {{$data->judul}}
                            </span> <br><br>
                            <span class="me-1 text-dark fw-semibold">
                                sub judul : {{$data->sub_judul}}
                            </span>
                        </span>
                        </div>
                    </div>
                    <hr class="my-3" />
                    <div class="mb-5 d-flex flex-column gap-1">
                        <!-- text -->
                        <h4 class="mb-0">
                            Isi
                        </h4>
                        <span>{{$data->isi_ukm}}</span>
                    </div>
                    <div class="mb-5 d-flex flex-column gap-1">
                        <!-- text -->
                        <h4 class="mb-0">
                            Sub Isi
                        </h4>
                        <span>{{$data->sub_isi_ukm}}</span>
                    </div>
                    <!-- row -->
                    <hr class="mt-4 mb-2" />
                    <div class="mb-5 d-flex flex-column gap-1">
                        <!-- text -->
                        <h4 class="mb-0">
                        Tanggal
                        </h4>
                        <span> Tanggal : {{$data->tanggal}}</span> <br>
                        <span> Hari : {{$data->tanggal}}</span><br>
                        <span> Jam : {{$data->jam}}</span><br>
                    </div>
                    <div class="mb-5 d-flex flex-column gap-1">
                        <!-- text -->
                        <h4 class="mb-0">
                        Penulis
                        </h4>
                        <span> Tanggal : {{$data->penulis}}</span>
                    </div>
                    <!-- row -->
                    <div class="row row flex-md-row flex-column gap-2 gap-md-0">
                        <!-- col -->
                        <div class="col-md-6">
                        <div class="d-grid">
                            <!-- btn -->
                            <a href="{{route('kemahasiswaan.ukmIndex')}}" class="btn btn-primary">
                                <i class="bi bi-skip-backward-circle"></i>
                                Kembali
                            </a>
                        </div>
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                        <div class="d-grid">
                            <!-- btn -->
                            <a href="" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-clockwise"></i>
                                Realod
                            </a>
                        </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $("#kembali").on('click', function() {
                Swal.fire({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, batalkan"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Dibatalkan",
                            text: "Input data berhasil dibatalkan",
                            icon: "success"
                        }).then(function() {
                            $('#spinnerWrapper').css('display', 'flex')
                            window.location.href = "{{ url('/pendidikanEducationIndex') }}"
                        })
                    }
                })
            })
        })

    </script>
@endsection
