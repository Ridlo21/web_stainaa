@extends('template')

@section('title')
    Artikel | Tambah
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Artikel</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="form_artikel" alamat="{{ route('artikel.Tambah') }}" data-parsley-validate
                    enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header pb-1 pt-2">
                            <h4 class="card-title">Tambah Data Artikel</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2 align-items-center">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-uppercase" required id="judul"
                                        name="judul" autocomplete="off" placeholder="Judul">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="sub_judul" class="col-sm-2 col-form-label">Sub Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control text-uppercase" required id="sub_judul"
                                        name="sub_judul" autocomplete="off" placeholder="Sub Judul">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="isi_artikel" class="col-sm-2 col-form-label">Isi Artikel</label>
                                <div class="col-sm-10">
                                    <textarea name="isi_artikel" required id="isi_artikel"></textarea>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="sub_isi_artikel" class="col-sm-2 col-form-label">Sub Isi Artikel</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="sub_isi_artikel"
                                        name="sub_isi_artikel" autocomplete="off" placeholder="Sub Isi Artikel">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori Artikel</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="kategori" id="kategori" required>
                                        <option value="">Kategori Artikel</option>
                                        @foreach ($kategory as $item)
                                            <option value="{{ $item->id_kategori_artikel }}">{{ $item->kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="penulis" name="penulis"
                                        autocomplete="off" placeholder="Penulis">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="shadow border border-success rounded image-preview" id="prev_a"
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
                                <label for="gambar_a" class="col-sm-2 col-form-label">Gambar 1</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="gambar_a" name="gambar_a">
                                        <button class="btn btn-danger " type="button" id="clear_button_a">Batal</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="shadow border border-success rounded image-preview" id="prev_b"
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
                                <label for="gambar_b" class="col-sm-2 col-form-label">Gambar 2</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="gambar_b" name="gambar_b">
                                        <button class="btn btn-danger " type="button" id="clear_button_b">Batal</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="ket_gambar" class="col-sm-2 col-form-label">Ket Gambar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="ket_gambar"
                                        name="ket_gambar" autocomplete="off" placeholder="Keterangan Gambar">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tag" required name="tag"
                                        autocomplete="off" placeholder="Tag">
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
            $('#prev_a').css("display", "none")
            $('#clear_button_a').css("display", "none")

            $('#prev_b').css("display", "none")
            $('#clear_button_b').css("display", "none")

            $('#isi_artikel').summernote({
                placeholder: 'Isi Artikel',
                tabsize: 2,
                height: 200,
                callbacks: {
                    onChange: function(contents, $editable) {
                        $('#isi_artikel').val(contents);

                        $('#isi_artikel').parsley().validate();
                    }
                }
            })

            $('#gambar_a').on('change', function() {
                console.log(this.files);
                if (this.files) {
                    var prev = new FileReader()
                    prev.onload = function(e) {
                        $("#prev_a").css("display", "block");
                        $("#prev_a").css("background-image", 'url(' + e.target.result + ')');
                        $("#clear_button_a").css("display", "block");

                    }
                    prev.readAsDataURL(this.files[0]);
                }
            })

            $("#clear_button_a").on('click', function() {
                $("#gambar_a").val("")
                $("#prev_a").css("display", "none")
                $("#clear_button_a").css("display", "none")
            })

            $('#gambar_b').on('change', function() {
                console.log(this.files);
                if (this.files) {
                    var prev = new FileReader()
                    prev.onload = function(e) {
                        $("#prev_b").css("display", "block");
                        $("#prev_b").css("background-image", 'url(' + e.target.result + ')');
                        $("#clear_button_b").css("display", "block");

                    }
                    prev.readAsDataURL(this.files[0]);
                }
            })

            $("#clear_button_b").on('click', function() {
                $("#gambar_b").val("")
                $("#prev_b").css("display", "none")
                $("#clear_button_b").css("display", "none")
            })

            $('#form_artikel').on('submit', function(e) {
                e.preventDefault()
                var url = $(this).attr('alamat')
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
                                window.location.href = "{{ route('artikel.List') }}"
                            })
                        }
                    })
                }
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
                            window.location.href = "{{ route('artikel.List') }}"
                        })
                    }
                })
            })
        })
    </script>
@endsection
