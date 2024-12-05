@extends('template')

@section('title')
    Pengumuman
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Pengumuman</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pb-5 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <button type="button" id="btTambah" alamat="{{ route('pengumuman.Add') }}"
                            class="btn btn-sm btn-success">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#btTambah').on('click', function() {
                var url = $(this).attr('alamat')
                window.location.href = url
            })
        })
    </script>
@endsection
