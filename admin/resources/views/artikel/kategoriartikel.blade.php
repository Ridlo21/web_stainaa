@extends('template')

@section('title')
    Kategori Artikel
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Kategori Artikel</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-12 mb-2">
                                        <button type="button" id="btTambah" class="btn btn-sm btn-success">Tambah
                                            Data</button>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <form action="" method="GET">
                                            <input type="search" id="searchInput" class="form-control" name="search"
                                                placeholder="Cari" value="" oninput="" autocomplete="off" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 table-centered">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{ $data->firstItem() + $key }}</td>
                                            <td>{{ $item->kategori }}</td>
                                            <td>{{ Carbon\Carbon::parse($item->tanggal)->locale('id')->translatedFormat('d F Y') }}
                                            </td>
                                            <td>
                                                <span
                                                    class="badge {{ $item->status == 'aktif' ? 'bg-success' : 'bg-danger' }}">{{ $item->status == 'aktif' ? 'Aktif' : 'Tidak Aktif' }}</span>
                                            </td>
                                            <td>
                                                <button data="{{ $item->id_kategori_artikel }}"
                                                    class="btn btn-sm btn-warning btn-edit">Edit</button>
                                                <button data="{{ $item->id_kategori_artikel }}"
                                                    class="btn btn-sm btn-danger btn-nonaktif">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12 col-md-12 col-12">
                                {{ $data->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kategori Artikel</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambah" class="form" data-parsley-validate method="POST">
                        {{ csrf_field() }}
                        <div class="row mb-2 align-items-center">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control kategori" required id="kategori" name="kategori"
                                    autocomplete="off" placeholder="Kategori">
                            </div>
                        </div>
                        <div class="row mt-4 pt-3 border-top">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col text-start">
                                        <button type="button" id="batalTambah" class="btn btn-danger btn-sm">Batal</button>
                                    </div>
                                    <div class="col text-end">
                                        <button class="btn btn-success btn-sm">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalaEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEdit" class="form" data-parsley-validate method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" id="id_kategori_artikel" name="id">
                        <div class="row mb-2 align-items-center">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control kategori" required id="ktgr"
                                    name="kategori" autocomplete="off" placeholder="Kategori">
                            </div>
                        </div>
                        <div class="row mt-4 pt-3 border-top">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col text-start">
                                        <button type="button" id="batalEdit"
                                            class="btn btn-danger btn-sm">Batal</button>
                                    </div>
                                    <div class="col text-end">
                                        <button class="btn btn-success btn-sm">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('.btn-nonaktif').on('click', function() {
                var url = "{{ route('katartikel.nonaktif') }}"
                var id = $(this).attr("data")
                Swal.fire({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus"
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
                                        "{{ route('artikel.Kat') }}"
                                })
                            }
                        })
                    }
                })
            })

            $('#btTambah').on('click', function() {
                $('#staticBackdrop').modal('show')
            })

            $('#batalTambah').on('click', function() {
                $('#staticBackdrop').modal('hide')
                var form = $('.form');
                form[0].reset();
                form.parsley().reset();
            })

            $('#batalEdit').on('click', function() {
                $('#modalaEdit').modal('hide')
                var form = $('.form');
                form[0].reset();
                form.parsley().reset();
            })

            $('.btn-edit').on('click', function() {
                var id = $(this).attr('data')
                var url = "{{ route('katartikel.Edit', ':id') }}".replace(':id', id)
                $('#spinnerWrapper').css('display', 'flex')
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function(response) {
                        $('#spinnerWrapper').css('display', 'none')
                        $('#modalaEdit').modal('show')
                        $('#ktgr').val(response.kategori)
                        $('#id_kategori_artikel').val(response.id_kategori_artikel)
                    },
                    error: function(xhr) {
                        $('#spinnerWrapper').css('display', 'none')
                        swal.fire({
                            title: 'Error',
                            text: 'Gagal mengambil data kategori. Silakan coba lagi.',
                            icon: 'error'
                        })
                    }
                })
            })

            $("#formTambah").on('submit', function(e) {
                e.preventDefault()
                var url = "{{ route('katartikel.Tambah') }}"
                var form = $(this)
                form.parsley().validate()
                if ($(this).parsley().isValid()) {
                    $('#spinnerWrapper').css('display', 'flex')
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: form.serialize(),
                        success: function(response) {
                            $('#staticBackdrop').modal('hide')
                            $('#spinnerWrapper').css('display', 'none')
                            swal.fire({
                                title: "Berhasil",
                                text: response.message,
                                icon: "success"
                            }).then(function() {
                                $('#spinnerWrapper').css('display', 'flex')
                                window.location.href = "{{ route('artikel.Kat') }}"
                            })
                        },
                        error: function(xhr) {
                            $('#spinnerWrapper').css('display', 'none')
                            if (xhr.status === 400) {
                                swal.fire({
                                    title: xhr.responseJSON.title,
                                    text: xhr.responseJSON.message,
                                    icon: xhr.responseJSON.icon
                                })
                            } else {
                                swal.fire({
                                    title: "Error",
                                    text: "Terjadi kesalahan, silakan coba lagi.",
                                    icon: "error"
                                })
                            }
                        }
                    })
                }
            })

            $("#formEdit").on('submit', function(e) {
                e.preventDefault()
                var url = "{{ route('katartikel.update') }}"
                var form = $(this)
                form.parsley().validate()
                if ($(this).parsley().isValid()) {
                    $('#spinnerWrapper').css('display', 'flex')
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: form.serialize(),
                        success: function(response) {
                            $('#modalaEdit').modal('hide')
                            $('#spinnerWrapper').css('display', 'none')
                            swal.fire({
                                title: "Berhasil",
                                text: response.message,
                                icon: "success"
                            }).then(function() {
                                $('#spinnerWrapper').css('display', 'flex')
                                window.location.href = "{{ route('artikel.Kat') }}"
                            })
                        },
                        error: function(xhr) {
                            $('#spinnerWrapper').css('display', 'none')
                            if (xhr.status === 400) {
                                swal.fire({
                                    title: xhr.responseJSON.title,
                                    text: xhr.responseJSON.message,
                                    icon: xhr.responseJSON.icon
                                })
                            } else {
                                swal.fire({
                                    title: "Error",
                                    text: "Terjadi kesalahan, silakan coba lagi.",
                                    icon: "error"
                                })
                            }
                        }
                    })
                }
            })

        })
    </script>
@endsection
