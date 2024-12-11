@extends('template')

@section('title')
    Berita
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Berita</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pb-5 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <button type="button" id="btTambah" class="btn btn-sm btn-success">Tambah Data</button>
                    </div>
                    <div>
                        <form action="{{ route('berita.list') }}" method="GET">
                            <input type="search" id="searchInput" class="form-control" name="search" placeholder="Cari"
                                value="{{ old('search', $search) }}" oninput="this.form.submit()" autocomplete="off" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="row gy-4">
                    @foreach ($data as $item)
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-12">
                            <div class="card h-100">
                                <img src="{{ asset('image') }}/berita/{{ $item->gambar1 }}" class="card-img-top"
                                    alt="">
                                <div class="card-body">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex flex-column gap-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h4 class="mb-0">
                                                        @php
                                                            $panjang_teks = 40;
                                                            $teks_pendek =
                                                                substr($item->judul, 0, $panjang_teks) . '...'; // Memotong teks dan menambahkan '...'
                                                        @endphp
                                                        <a href="#" class="text-inherit">
                                                            {{ $teks_pendek }}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown dropstart">
                                                        <a href="#"
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            id="dropdownProjectOne" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="bi bi-three-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item btInfo" style="cursor: pointer;"
                                                                data="{{ $item->judul_seo }}">
                                                                <i class="fe fe-info dropdown-item-icon"></i>
                                                                Selengkapnya
                                                            </a>
                                                            <a class="dropdown-item btEdit" style="cursor: pointer"
                                                                data="{{ $item->id_berita }}">
                                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item btNonaktif" style="cursor: pointer"
                                                                data="{{ $item->id_berita }}"
                                                                alamat="{{ route('berita.nonaktif') }}">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Nonaktifkan
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <?= substr($item->isi_berita, 0, 200) . '...' ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $item->hari }},
                                        {{ Carbon\Carbon::parse($item->tanggal)->locale('id')->translatedFormat('d F Y') }}
                                        {{ Carbon\Carbon::parse($item->jam)->locale('id')->translatedFormat('H:i') }} WIB
                                    </li>
                                    <li class="list-group-item">{{ $item->dibaca }} x dibaca</li>
                                </ul>
                            </div>

                        </div>
                    @endforeach

                    <div class="col-lg-12 col-md-12 col-12">
                        {{ $data->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let timeout = null;
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                document.querySelector('form').submit();
            }, 800);
        });

        $(document).ready(function() {
            $('#btTambah').on('click', function() {
                window.location.href = "{{ route('berita.Add') }}"
            })

            $('.btEdit').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('beritaEdit') }}/" + id
            })

            $('.btNonaktif').on('click', function() {
                var url = $(this).attr("alamat")
                var id = $(this).attr("data")
                Swal.fire({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, nonaktifkan"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#spinnerWrapper').css('display', 'flex')
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "id": id
                            },
                            success: function(response) {
                                $('#spinnerWrapper').css('display', 'none')
                                swal.fire({
                                    title: "Berhasil",
                                    text: response.message,
                                    icon: "success"
                                }).then(function() {
                                    $('#spinnerWrapper').css('display', 'flex')
                                    window.location.href =
                                        "{{ url('/beritaList') }}"
                                })
                            }
                        })
                    }
                })
            })

            $('.btInfo').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('beritaInfo') }}/" + id
            })
        })
    </script>
@endsection
