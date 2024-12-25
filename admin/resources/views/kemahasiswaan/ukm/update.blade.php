@extends('template')
@section('title')
    Kemahasiswaan | Ukm Edit
@endsection

<?php
    $data = DB::table('ukm')->where('id_ukm', $id)->first();
    $hari = array("sennin", "selesa","rabu","kamis","jumat","sabtu","minggu");

?>

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
                <form id="formUkm" alamat="{{ route('kemahasiswaan.ukmUpdate') }}" data-parsley-validate method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id_ukm}}">
                    <input type="hidden" name="gambarLama1" value="{{$data->gambar1}}">
                    <input type="hidden" name="gambarLama2" value="{{$data->gambar2}}">
                    {{-- {{ csrf_field() }} --}}
                    <div class="card">
                        <div class="card-header pb-1 pt-2">
                            <h4 class="card-title">Edit Data </h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2 align-items-center">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="judul" name="judul"
                                        placeholder="Judul" value="{{$data->judul}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="subJudul" class="col-sm-2 col-form-label">Sub Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="subJudul" name="subJudul"
                                        placeholder="Sub Judul" value="{{$data->sub_judul}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="judulSeo" class="col-sm-2 col-form-label">Judul Seo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="judulSeo" name="judulSeo"
                                        placeholder="Judul Seo" value="{{$data->judul_seo}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="context" class="col-sm-2 col-form-label">Isi Ukm</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" required name="isiUkm" id="context" cols="30" rows="5"
                                        placeholder="Isi Ukm">{{$data->isi_ukm}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="context" class="col-sm-2 col-form-label">Sub Isi Ukm</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" required name="subIsiUkm" id="context" cols="30" rows="5"
                                        placeholder="Sub Isi Ukm">{{$data->sub_isi_ukm}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="ket" class="col-sm-2 col-form-label">gambar satu</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="form-label" for="option1">
                                            <i class="fe fe-image me-1 "></i>
                                            Photo
                                        </label>
                                        <?php
                                            if($data->gambar1!=""){
                                                $gambar1="";
                                                ?>
                                                <div id="ed_priview3" class="col-md-12 mb-3 p-1 border" style="height:150px;">
                                                    <div  id="ed_pr_img3" style="background-repeat: no-repeat;background-position: left;background-size: contain;background-image:url('<?php echo asset('image')."/kemahasiswaan"."/".$data->gambar1 ?>');width:100%;height:100%;">
                                                    </div>
                                                </div>
                                                <?php
                                            }else{
                                                $gambar1="required";
                                            }
                                        ?>
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
                                        <input class="form-control" type="file"  name="gambarSatu" id="gambarSatu"  <?= $gambar1?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="ket" class="col-sm-2 col-form-label">gambar dua</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="form-label" for="option1">
                                            <i class="fe fe-image me-1 "></i>
                                            Photo
                                          </label>
                                          <?php
                                            if($data->gambar2!=""){
                                                $gambar2="";
                                                ?>
                                                <div id="ed_priview4" class="col-md-12 mb-3 p-1 border" style="height:150px;">
                                                    <div  id="ed_pr_img4" style="background-repeat: no-repeat;background-position: left;background-size: contain;background-image:url('<?php echo asset('image')."/kemahasiswaan"."/".$data->gambar2 ?>');width:100%;height:100%;">
                                                    </div>
                                                </div>
                                                <?php
                                            }else{
                                                $gambar2="required";
                                            }
                                        ?>
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
                                        <input class="form-control" type="file"  name="gambarDua" id="gambarDua" <?= $gambar2?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="ketGambar" class="col-sm-2 col-form-label">Keterangan Gambar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="ketGambar" name="ketGambar"
                                        placeholder="Keterangan Gambar" value="{{$data->ket_gambar}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="hari" id="hari">
                                        <option value="">--- pilih hari ---</option>
                                        @foreach ($hari as $item)
                                            <option {{ $data->hari == $item ? "selected" : ""}} value="<?=$item?>"><?= $item?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" required id="tanggal" name="tanggal"
                                        placeholder="Tanggal" value="{{$data->tanggal}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" required id="jam" name="jam"
                                        placeholder="Jam" value="{{$data->jam}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="penulis" name="penulis"
                                        placeholder="Penulis" value="{{$data->penulis}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required id="tag" name="tag"
                                        placeholder="Tag" value="{{$data->tag}}">
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
            $("#formUkm").on('submit', function(e) {
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
                                window.location.href = "{{ url('/kemahasiswaanUkmIndex') }}"
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
                            window.location.href = "{{ url('/kemahasiswaanUkmIndex') }}"
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
            $("#gambarSatu").change(function(){
                if (this.files && this.files[0]) {
                    var size = this.files[0].size;
                    if (size > 100000000) {
                        alert("Maximum file size 1000px exceeds");
                        $("#gambarSatu").val("")
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
            $("#gambarDua").change(function(){
                if (this.files && this.files[0]) {
                    var size = this.files[0].size;
                    if (size > 100000000) {
                        alert("Maximum file size 1000px exceeds");
                        $("#gambarDua").val("")
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
                $("#gambarSatu").val("");
                $("#priview3").css("display", "none");
                $("#batal3").css("display", "none");
                $("#ed_priview3").css("display", "block");
            });
            $("#batal4").click(function(){
                $("#gambarDua").val("");
                $("#priview4").css("display", "none");
                $("#batal4").css("display", "none");
                $("#ed_priview4").css("display", "block");
            });
        })
    </script>
@endsection
