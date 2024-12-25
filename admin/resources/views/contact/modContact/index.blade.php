@extends('template')

@section('title')
    Contact
@endsection
<?php
    $count = DB::table('landing_contact')->where('status','aktif')->count();
?>
@section('konten')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
            <div class="d-flex flex-column gap-1">
            <h1 class="mb-0 h2 fw-bold">Contact</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Mod</li>
                </ol>
            </nav>
            </div>
            <div>
                @if ($count>0)
                    <a href="#" class="btn btn-warning">Data Sudah ada !!</a>
                @else
                <a href="{{route('contact.modCreate')}}" class="btn btn-primary">New Contact</a>
                @endif
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="row gy-3">
                @foreach ($data as $item)
                    <div class="col-lg-12 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                {{-- <h4 class="mb-0">
                                                    <span>Judul : </span>
                                                    {{ $item->title }}
                                                </h4> --}}
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown dropstart">
                                                    <a href="#"
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        id="dropdownProjectOne" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                                                        <span class="dropdown-header">Settings</span>
                                                        <button type="submit" id="edit" class="dropdown-item"
                                                        data="{{ $item->id_landing_contact }}">
                                                            <i class="bi bi-pencil-square dropdown-item-icon"></i>
                                                            Edit
                                                        </button>
                                                        <button type="submit" id="btNonaktif" class="dropdown-item"
                                                        data="{{ $item->id_landing_contact }}"
                                                        alamat="{{ route('contact.modDestroy') }}">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <img src="{{asset('image')}}/contact/{{ $item->gambar }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Tanggal:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">
                                            {{ date('d-M-Y', strtotime($item->tanggal)) }}</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Status:</h6>
                                        <span
                                            class="badge {{ $item->status == 'aktif' ? 'bg-success' : 'bg-danger' }}">{{ $item->status == 'aktif' ? 'Aktif' : 'Tidak Aktif' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Deskripsi:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">
                                            {{ $item->descripton }}</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">No Contact:</h6>
                                        <span>{{$item->no_contact}}</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Email:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">
                                            {{ $item->email }}</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Map / koordinat :</h6>
                                        <span>{{$item->map}}</span>
                                        
                                    </div>
                                </div>
                            </div>
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
                window.location.href = "{{ url('contactModShow') }}/" + id
            })

        $('#btNonaktif').on('click', function() {
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
                                        "{{ url('/contactModIndex') }}"
                                })
                            }
                        })
                    }
                })
            })
    })
</script>
@endsection
