@extends('template')

@section('title')
    {{ $data->judul }}
@endsection
@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-2 mb-2 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">{{ $data->judul }}</h1>
                        <p>
                            {{ $data->dibaca .' x dibaca | ' .$data->hari .', ' .Carbon\Carbon::parse($data->tanggal)->locale('id')->translatedFormat('d F Y') .' ' .Carbon\Carbon::parse($data->jam)->locale('id')->translatedFormat('H:i') .' ' .'WIB | ' .'Pewarta : ' .$data->penulis .' | Foto : ' .$data->ket_gambar }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-8">
                <div class="mb-3">
                    <img src="{{ asset('image') }}/berita/{{ $data->gambar1 }}" alt="gambar 1" width="670">
                </div>
                {!! $data->isi_berita !!}
                <div class="mt-3">
                    <button class="btn btn-default" id="kembali"><i class="fe fe-arrow-left"></i>Kembali</button>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#kembali').on('click', function() {
                window.location.href = "{{ route('berita.list') }}"
            })
        })
    </script>
@endsection
