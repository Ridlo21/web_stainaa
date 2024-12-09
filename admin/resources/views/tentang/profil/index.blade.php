@extends('template')

@section('title')
    Profil
@endsection
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
                    <li class="breadcrumb-item active" aria-current="page">Profil Pimpinan</li>
                    </ol>
                </nav>
                </div>
                <div>
                <a href="{{route('tentang.profilCreate')}}" class="btn btn-primary">New Profil</a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                @foreach ($data as $item)
                <div class="card">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div></div>
                                <div class="d-flex align-items-center">
                                    <div class="dropdown dropstart">
                                        <a href="#" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            id="dropdownProjectOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item btEdit"id="edit"  style="cursor: pointer"
                                                data="{{ $item->id_tentang_profil_pimpinan }}">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                            <a class="dropdown-item " id="btNonaktif" style="cursor: pointer"
                                                data="{{ $item->id_tentang_profil_pimpinan }}"
                                                alamat="{{ route('tentang.profilDestroy') }}">
                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                Nonaktifkan
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column gap-4">
                        <div>
                            <div class="text-center d-flex flex-column align-items-center gap-3">
                                <img src="{{asset('image')}}/tentang/{{ $item->gambar }}"
                                    class="rounded-circle avatar-xl" alt="gambar" />
                                <div>
                                    <h4 class="mb-0">{{$item->nama}}.{{$item->gelar}}</h4>
                                    <p class="mb-0">
                                        <i class="fe fe-map-pin me-1 fs-6"></i>
                                        STAINAA
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <span>jabatan</span>
                                <span class="text-dark">{{$item->jabatan}}</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <span>biografi</span>
                                <div class="d-flex align-items-end">
                                    <span class="text-dark">
                                        .......
                                    </span>
                                    <div class="dropdown dropstart dropup" style="cursor: pointer">
                                        <a href="#" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            id="dropdownProjectOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" title="selengkapnya">
                                            <i class="bi bi-chat-right-text-fill"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownProjectOne" style="width: 600px">
                                            <span class="dropdown-header">Biografi</span>
                                            <span>{{$item->biografi}}</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pt-2">
                                <span>status</span>
                                <span class="text-dark">
                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                {{$item->status}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </section>
<script>
    $(function () {
        $('#edit').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('tentangProfilShow') }}/" + id
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
                                        "{{ url('/tentangProfilIndex') }}"
                                })
                            }
                        })
                    }
                })
            })
    })
</script>
@endsection
