@extends('template')
@section('title')
    Reply 
@endsection

<?php
    $data = DB::table('contact')->where('id_contact', $id)->first();
?>

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">contact</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <form id="formcontact" alamat="{{ route('contact.mailReplay') }}" data-parsley-validate method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id_contact}}">
                    {{-- {{ csrf_field() }} --}}
                    <div class="card">
                        <div class="card-header pb-1 pt-2">
                            <h4 class="card-title">Reply Data </h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2 align-items-center">
                                <label for="nama" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly id="nama" name="nama"
                                        placeholder="No Butir" value="{{$data->nama}}" >
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" readonly id="email" name="email"
                                        placeholder="email" value="{{$data->email}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly id="hari" name="hari"
                                        placeholder="hari" value="{{$data->hari}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" readonly id="tanggal" name="tanggal"
                                        placeholder="tanggal" value="{{$data->tanggal}}">
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="context" class="col-sm-2 col-form-label">Comment</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" readonly name="comment" id="context" cols="30" rows="5"
                                        placeholder="Comment">{{$data->comment}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <p class="text-center text-h4">Balasan</p>
                            <div class="row mb-2 align-items-center">
                                <div class="col-sm-12">
                                    <textarea class="form-control"  name="balasanComment" id="context" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-start">
                                    <button type="button" id="batal" class="btn btn-danger btn-sm">Batal</button>
                                </div>
                                <div class="col text-end">
                                    <button class="btn btn-success btn-sm">Balas</button>
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
            $("#formcontact").on('submit', function(e) {
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
                                window.location.href = "{{ url('/contactMailIndex') }}"
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
                            window.location.href = "{{ url('/contactMailIndex') }}"
                        })
                    }
                })
            })
        })

    </script>
@endsection
