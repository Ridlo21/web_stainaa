@extends('template')
@section('title')
    Kemahasiswaan | Bem Tambah
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Bem</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <form id="formKemahasiswaan" alamat="{{ route('kemahasiswaan.bemStore') }}" data-parsley-validate method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ csrf_field() }} --}}
                    <div class="card">
                        <div class="card-header pb-1 pt-2">
                            <h4 class="card-title">Tambah Data </h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2 align-items-center">
                                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="title" name="title"
                                        placeholder="Judul">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="context" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" required name="isi" id="context" cols="30" rows="5"
                                        placeholder="isi"></textarea>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="ket" class="col-sm-2 col-form-label">gambar</label>
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
                                        <input class="form-control" type="file"  name="gambarbem" id="gambarbem" required>
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
            $("#formKemahasiswaan").on('submit', function(e) {
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
                                window.location.href = "{{ url('/kemahasiswaanBemIndex') }}"
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
                            window.location.href = "{{ url('/kemahasiswaanBemIndex') }}"
                        })
                    }
                })
            })
        })

        $(function () {
            $("#priview3").css("display", "none");
            $("#batal3").css("display", "none");
            $("#gambarbem").change(function(){
                if (this.files && this.files[0]) {
                    var size = this.files[0].size;
                    if (size > 100000000) {
                        alert("Maximum file size 1000px exceeds");
                        $("#gambarbem").val("")
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
                $("#gambarbem").val("");
                $("#priview3").css("display", "none");
                $("#batal3").css("display", "none");
                $("#ed_priview3").css("display", "block");
            });
        })
    </script>
@endsection
