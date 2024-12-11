@extends('template')

@section('title')
    Mod menu berita
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Mod Berita</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pb-5 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <button type="button" id="btTambah" class="btn btn-sm btn-success">Tambah Data</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-12">
                            <div class="card">
                                <img src="{{ asset('image') }}/mod_berita/{{ $item->gambar }}" class="card-img-top"
                                    alt="">
                                <div class="card-body">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex flex-column gap-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="card-title">{{ $item->title }}</h5>
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
                                                            @if ($item->status == 'aktif')
                                                                <a class="dropdown-item btEdit" style="cursor: pointer"
                                                                    data="{{ $item->id_landing_berita }}">
                                                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                                                    Edit
                                                                </a>
                                                            @else
                                                                <a class="dropdown-item btHapus" style="cursor: pointer"
                                                                    data="{{ $item->id_landing_berita }}"
                                                                    alamat="{{ route('modberita.hapus') }}">
                                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                                    Hapus
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text">{{ $item->descripton }}</p>
                                </div>
                                <div class="card-footer p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="w-50 py-3 px-4">
                                            <h6 class="mb-0">Tanggal:</h6>
                                            <p class="text-dark fs-6 fw-semibold mb-0">
                                                {{ Carbon\Carbon::parse($item->tanggal)->locale('id')->translatedFormat('d F Y') }}
                                            </p>
                                        </div>
                                        <div class="border-start w-50 py-3 px-4">
                                            <h6 class="mb-0">Status:</h6>
                                            <span
                                                class="badge {{ $item->status == 'aktif' ? 'bg-success' : 'bg-danger' }}">{{ $item->status == 'aktif' ? 'Aktif' : 'Tidak Aktif' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12 col-md-12 col-12">
                        {{ $data->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#btTambah').on('click', function() {
                window.location.href = "{{ route('berita.mod.Add') }}"
            })

            $('.btEdit').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('modberitaEdit') }}/" + id
            })

            $('.btHapus').on('click', function() {
                var url = $(this).attr("alamat")
                var id = $(this).attr("data")
                Swal.fire({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, hapus"
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
                                        "{{ url('/beritaMod') }}"
                                })
                            }
                        })
                    }
                })
            })
        })
    </script>
@endsection
