@extends('template')
@section('title')
    Tentang | Sejarah Tambah
@endsection
<?php
    $data = DB::table('tentang_sejarah')->where('id_tentang_sejarah', $id)->first();
?>
@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Tentang</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <form id="formSejarah" alamat="{{ route('tentang.sejarahUpdate') }}" data-parsley-validate method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{$data->id_tentang_sejarah}}">
                    @csrf
                    {{-- {{ csrf_field() }} --}}
                    <div class="card">
                        <div class="card-header pb-1 pt-2">
                            <h4 class="card-title">Edit Data </h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2 align-items-center">
                                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="title" name="judul"
                                        placeholder="Judul" value="{{$data->judul}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="title" class="col-sm-2 col-form-label">Sub Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="title" name="subJudul"
                                        placeholder="Sub Judul" value="{{$data->sub_judul}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="title" class="col-sm-2 col-form-label">Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="title" name="penulis"
                                        placeholder="Penulis" value="{{$data->penulis}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="selectDate" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="text" id="selectDate" class="form-control text-dark flatpickr"
                                      placeholder="Select Date" name="tanggal" required  value="{{$data->tanggal}}"/>
                                    <div class="invalid-feedback">Please enter valid date.</div>
                                </div>

                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="context" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" required name="isi" id="context" cols="50" rows="13"
                                        placeholder="Isi">{{$data->isi_sejarah}}</textarea>
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
            $("#formSejarah").on('submit', function(e) {
                e.preventDefault()
                var url = $(this).attr("alamat")
                var data = new FormData(this);
                $(this).parsley().validate()
                if ($(this).parsley().isValid()) {
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
                                title: "Berhasil",
                                text: response.message,
                                icon: "success"
                            }).then(function() {
                                $('#spinnerWrapper').css('display', 'flex')
                                window.location.href = "{{ url('/tentangSejarahIndex') }}"
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
                            window.location.href = "{{ url('/tentangSejarahIndex') }}"
                        })
                    }
                })
            })
        })

        $(function () {
            $("#priview3").css("display", "none");
            $("#batal3").css("display", "none");
            $("#gambar").change(function(){
                if (this.files && this.files[0]) {
                    var size = this.files[0].size;
                    if (size > 100000000) {
                        alert("Maximum file size 1000px exceeds");
                        $("#gambar").val("")
                        return;
                    } else {
                        if (this.files && this.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $("#ed_priview3").css("display", "none");
                                $("#priview3").css("display", "block");
                                $("#batal3").css("display", "block");
                                $("#pr_img3").css('background-image', 'url(' + e.target.result + ')');
                                $("#pr_img3").css("background-position", "left");
                                $("#pr_img3").css("background-size", "contain");
                                $("#pr_img3").css("background-repeat", "no-repeat");
                            };
                            reader.readAsDataURL(this.files[0]);
                        }
                    }
                }
            });
            $("#batal3").click(function(){
                $("#gambar").val("");
                $("#priview3").css("display", "none");
                $("#batal3").css("display", "none");
                $("#ed_priview3").css("display", "block");
            });
        })
    </script>
@endsection
