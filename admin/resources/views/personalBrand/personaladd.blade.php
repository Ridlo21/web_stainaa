@extends('template')
@section('title')
    Personal Branding | Tambah
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Personal Branding</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <form action="{{ route('personal.tambah') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header pb-1 pt-2">
                            <h4 class="card-title">Tambah Data Personal Branding</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2 align-items-center">
                                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Judul">

                                    {{-- @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="context" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="context" id="context" cols="30" rows="5" placeholder="Deskripsi"></textarea>

                                    {{-- @error('context')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>
                            </div>
                            <div class="row mb-2 align-items-center">
                                <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="ket" id="ket" cols="30" rows="5" placeholder="Keterangan"></textarea>

                                    {{-- @error('ket')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col text-start">
                                    <a href="{{ url('/personalBrand') }}" class="btn btn-danger btn-sm">Batal</a>
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

    {{-- <script>
        $(document).ready(function() {
            $("#formPersonalBrand").on('submit', function(e) {
                e.preventDefault()
                $.ajax({
                    type: 'POST',
                    url: {{ route('personaltambah') }},
                    data: $(this).serialize(),
                    success: function(hasil) {
                        if (hasil == 'N') {
                            swal.fire('huhu')
                        }
                    }
                })
            })
        })
    </script> --}}
@endsection
