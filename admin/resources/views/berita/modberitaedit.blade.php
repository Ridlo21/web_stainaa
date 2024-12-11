@extends('template')

@section('title')
    Edit mod Berita
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
                <form id="formBerita" data-parsley-validate method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $data->id_landing_berita }}">
                    <input type="hidden" name="gambar_old" value="{{ $data->gambar }}">
                    <div class="card">
                        <div class="card-header pb-1 pt-2">
                            <h4 class="card-title">Edit Mod Berita</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2 align-items-center">
                                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="title" name="title"
                                        autocomplete="off" placeholder="Judul" value="{{ $data->title }}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="descripton" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="descripton" required id="descripton" cols="30" rows="10">{{ $data->descripton }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            @if ($data->gambar)
                                                <div class="shadow border border-success rounded image-preview"
                                                    id="eprev"
                                                    style="height: 250px; background-size: cover; background-repeat: no-repeat; background-image: url('{{ asset('image') }}/mod_berita/{{ $data->gambar }}')">
                                                </div>
                                            @endif
                                            <div class="shadow border border-success rounded image-preview" id="prev"
                                                style="height: 250px; background-size: cover; background-repeat: no-repeat;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span><i class="text-danger">*</i><i> gambar harus berjenis jpg serta memiliki
                                                aspek
                                                rasio
                                                16:9</i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="gambar" class="col-sm-2 col-form-label">Sampul</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control"
                                            data-parsley-required-message="tidak boleh kosong" id="gambar"
                                            name="gambar">
                                        <button class="btn btn-danger" type="button" id="clear_button">Batal</button>
                                        <button class="btn btn-danger" type="button" id="clear">Batal</button>
                                    </div>
                                    <div id="error-gambar" class="text-danger"
                                        style="font-size: x-small;color: #ff0000 !important"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-start">
                                    <button type="button" id="batal" class="btn btn-danger btn-sm">Batal</button>
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
    </section>
    <script>
        $(document).ready(function() {
            $('#prev').css("display", "none")
            $('#clear_button').css("display", "none")

            $('#gambar').on('change', function() {
                console.log(this.files);
                if (this.files) {
                    var prev = new FileReader()
                    prev.onload = function(e) {
                        $("#eprev").css("display", "none");
                        $("#prev").css("display", "block");
                        $("#prev").css("background-image", 'url(' + e.target.result + ')');
                        $("#clear_button").css("display", "block");
                        $("#clear_button").css("border-top-right-radius", "6px");
                        $("#clear_button").css("border-bottom-right-radius", "6px");
                        $("#clear").css('display', 'none')
                    }
                    prev.readAsDataURL(this.files[0]);
                }
            })

            $('#formBerita').on('submit', function(e) {
                e.preventDefault()
                var url = "{{ route('modberita.update') }}"
                var form = $(this)
                var data = new FormData(this)
                form.parsley().validate()
                if (form.parsley().isValid()) {
                    $('#spinnerWrapper').css('display', 'flex')
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            $('#spinnerWrapper').css('display', 'none')
                            swal.fire({
                                title: response.title,
                                text: response.message,
                                icon: response.icon
                            }).then(function() {
                                $('#spinnerWrapper').css('display', 'flex')
                                window.location.href = "{{ route('berita.mod') }}"
                            })
                        }
                    })
                }
            })

            $('#gambar').parsley().on('field:validated', function() {
                var errorContainer = $('#error-gambar'); // Elemen khusus untuk pesan error
                if (this.validationResult === true) {
                    errorContainer.text(''); // Hapus pesan jika valid
                } else {
                    errorContainer.text(this.getErrorsMessages()[0]); // Tampilkan pesan error pertama
                }
            });

            $("#clear_button").on('click', function() {
                const fileInput = $('#gambar');
                $("#gambar").val("")
                $("#prev").css("display", "none")
                $("#eprev").css("display", "block")
                $("#clear_button").css("display", "none")
                $("#clear").css("display", "block")
                fileInput.parsley().reset();
            })

            $("#batal").on('click', function() {
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
                            window.location.href = "{{ route('pengumuman.mod') }}"
                        })
                    }
                })
            })
        })
    </script>
@endsection
