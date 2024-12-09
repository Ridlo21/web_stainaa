@extends('template')

@section('title')
    Sejarah
@endsection

<?php
    $count = DB::table('tentang_sejarah')->where('status','aktif')->count()
?>
@section('konten')
    <!-- Container fluid -->
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex flex-column gap-1">
                <h1 class="mb-0 h2 fw-bold">Tentang</h1>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
                    </ol>
                </nav>
                </div>
                <div>
                    @if ($count>0)
                    <a href="#" class="btn btn-warning">Data sudah ada !!</a>
                    @else
                        <a href="{{route('tentang.sejarahCreate')}}" class="btn btn-primary">Tambah Data</a>
                    @endif
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-12 col-12">
                <div class="d-flex flex-column gap-4">
                    @foreach ($data as $item)
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                            <div>
                                {{-- <h4 class="mb-0">Sejarah</h4> --}}
                            </div>
                            <!-- dropdown  -->
                            <div>
                                <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="DropdownTen" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="DropdownTen">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#" id="edit"  data="{{ $item->id_tentang_sejarah }}">Edit</a>
                                    <a class="dropdown-item" href="#" id="hapus"  data="{{ $item->id_tentang_sejarah }}"  alamat="{{ route('tentang.sejarahDestroy') }}">Hapus</a>
                                </span>
                                </span>
                            </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="w-50 py-3 px-4">
                                    <p class="text-dark fs-6 fw-semibold mb-0 d-flex">
                                    <h6 class="mb-0">Judul : <span class="text-dark">{{$item->judul}}</span></h6>
                                        
                                    </p>
                                </div>
                                <div class="border-start w-50 py-3 px-4">
                                    <p class="text-dark fs-6 fw-semibold mb-0">
                                        <h6 class="mb-0">Sub Judul : <span class="text-dark"> {{$item->sub_judul}}</span></h6> 
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-1">
                                <p>
                                    {{$item->isi_sejarah}}
                                </p>
                                
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center flex-row gap-2">
                                        <i class="bi bi-calendar2-date"></i>
                                        <div class="">
                                        <h5 class="mb-0 text-body">Tanggal</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                        <p class="text-dark mb-0 fw-semibold">{{ date('d-M-Y', strtotime($item->tanggal)) }}</p>
                                        </div>
                                    </div>
                                    </div>
                                </li>
                                <li class="list-group-item px-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center flex-row gap-2">
                                        <i class="bi bi-feather"></i>
                                        <div>
                                        <h5 class="mb-0 text-body">Penulis</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                        <p class="text-dark mb-0 fw-semibold">{{$item->penulis}}</p>
                                        </div>
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>
<script>
    $(function () {
        $('#edit').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('tentangSejarahShow') }}/" + id
            })
        $('#hapus').on('click', function() {
                var url = $(this).attr("alamat")
                var id = $(this).attr("data")
                Swal.fire({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, nonaktifkan"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#spinnerWrapper').css('display', 'flex')
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "id": id
                            },
                            success: function(response) {
                                $('#spinnerWrapper').css('display', 'none')
                                swal.fire({
                                    title: "Berhasil",
                                    text: response.message,
                                    icon: "success"
                                }).then(function() {
                                    $('#spinnerWrapper').css('display', 'flex')
                                    window.location.href =
                                        "{{ url('/tentangSejarahIndex') }}"
                                })
                            }
                        })
                    }
                })
            })
    })
</script>
@endsection
