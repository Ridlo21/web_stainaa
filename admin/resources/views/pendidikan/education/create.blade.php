@extends('template')
@section('title')
    Tentang | Profil Tambah
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Tentang</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Profil Pimpinan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <form id="formPendidikan" alamat="{{ route('pendidikan.educationStore') }}" data-parsley-validate method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ csrf_field() }} --}}
                    <div class="card">
                        <div class="card-header pb-1 pt-2">
                            <h4 class="card-title">Tambah Data </h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2 align-items-center">
                                <label for="title" class="col-sm-2 col-form-label">fakultas</label>
                                <div class="col-sm-10">
                                    <select name="fakultas" id="fakultas" class="form-control">
                                        <option value="" selected>--- Pilih ---</option>
                                        <option value="PAI">Pendidikan Agama Islam</option>
                                        <option value="HES">Hukum Ekonimi Syari'ah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="context" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" required name="deskripsi" id="context" cols="30" rows="5"
                                        placeholder="Deskripsi"></textarea>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="context" class="col-sm-2 col-form-label">Biografi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" required name="biografi" id="context" cols="30" rows="5"
                                        placeholder="Biografi"></textarea>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="ket" class="col-sm-2 col-form-label">gambar 1</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="form-label" for="option1">
                                            <i class="fe fe-image me-1 "></i>
                                            Photo
                                          </label>
                                        <div id="priview3" class="col-md-12 mb-3 p-1 border" style="height:250px;">
                                            <div id="pr_img3" style="width:100%;height:100%;">
                                            </div>
                                        </div>
                                        <div id="batal3" class="col-md-12 p-0 mt-1 mb-1">
                                            <button type="button" class="btn btn-xs btn-warning">
                                                <i class="fas fa-times"></i>
                                                Batal
                                            </button>
                                        </div>
                                        <input class="form-control" type="file"  name="gambar1" id="gambar1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="ket" class="col-sm-2 col-form-label">gambar 2</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="form-label" for="option1">
                                            <i class="fe fe-image me-1 "></i>
                                            Photo
                                          </label>
                                        <div id="priview4" class="col-md-12 mb-3 p-1 border" style="height:250px;">
                                            <div id="pr_img4" style="width:100%;height:100%;">
                                            </div>
                                        </div>
                                        <div id="batal4" class="col-md-12 p-0 mt-1 mb-1">
                                            <button type="button" class="btn btn-xs btn-warning">
                                                <i class="fas fa-times"></i>
                                                Batal
                                            </button>
                                        </div>
                                        <input class="form-control" type="file"  name="gambar2" id="gambar2" required>
                                    </div>
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
            $("#formPendidikan").on('submit', function(e) {
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
                                window.location.href = "{{ url('/pendidikanEducationIndex') }}"
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
                            window.location.href = "{{ url('/pendidikanEducationIndex') }}"
                        })
                    }
                })
            })
        })

        $(function () {
            $("#priview3").css("display", "none");
            $("#batal3").css("display", "none");
            $("#priview4").css("display", "none");
            $("#batal4").css("display", "none");
            $("#gambar1").change(function(){
                if (this.files && this.files[0]) {
                    var size = this.files[0].size;
                    if (size > 100000000) {
                        alert("Maximum file size 1000px exceeds");
                        $("#gambar1").val("")
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
            $("#gambar2").change(function(){
                if (this.files && this.files[0]) {
                    var size = this.files[0].size;
                    if (size > 100000000) {
                        alert("Maximum file size 1000px exceeds");
                        $("#gambar2").val("")
                        return;
                    } else {
                        if (this.files && this.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $("#ed_priview4").css("display", "none");
                                $("#priview4").css("display", "block");
                                $("#batal4").css("display", "block");
                                $("#pr_img4").css('background-image', 'url(' + e.target.result + ')');
                                $("#pr_img4").css("background-position", "left");
                                $("#pr_img4").css("background-size", "contain");
                                $("#pr_img4").css("background-repeat", "no-repeat");
                            };
                            reader.readAsDataURL(this.files[0]);
                        }
                    }
                }
            });
            $("#batal3").click(function(){
                $("#gambar1").val("");
                $("#priview3").css("display", "none");
                $("#batal3").css("display", "none");
                $("#ed_priview3").css("display", "block");
            });
            $("#batal4").click(function(){
                $("#gambar2").val("");
                $("#priview4").css("display", "none");
                $("#batal4").css("display", "none");
                $("#ed_priview4").css("display", "block");
            });
        })
    </script>
@endsection
