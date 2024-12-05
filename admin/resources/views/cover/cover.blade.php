@extends('template')

@section('title')
    Cover
@endsection

<?php 
    $dataCount = DB::table('cover')->where('status','aktif')->count();
    $dataProgres = $dataCount*25;
?>

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-2 mb-2 d-flex flex-column flex-lg-row gap-2 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Cover Website</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="border-bottom p-4 d-flex flex-column gap-3">
                        <div class="d-flex flex-column gap-4">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-6">
                                        @if ($dataCount==4)
                                        <a href='#' class='btn btn-sm btn-danger'>Data Sudah Maksimal Harap dihapus jika ingin menambahkan</a>
                                        @else
                                        <a href="{{ route('cover.create') }}" class="btn btn-sm btn-success">Tambah Data</a>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <h1 class="mb-0 h3 fw-bold text-center">Cover Website maksimal hanya 4</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>
                                        (<?= $dataCount;?> isi)
                                    </span>
                                </div>
                                <div>
                                    <span>
                                        (<?= 4-$dataCount;?> kosong)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="progress" style="height: 8px">
                            <div class="progress-bar" role="progressbar" style="width: <?= $dataProgres ?>%" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="<?= $dataProgres-25?>%" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="row gy-3">
                    @foreach ($data as $item)
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex flex-column ">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h4 class="mb-0">
                                                        {{ $item->nama_cover }}
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
                                                            <form action="{{route('cover.destroy',$item->id_cover)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item">
                                                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <img src="{{asset('image')}}/cover/{{ $item->cover }}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer p-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="w-50 py-3 px-4">
                                            <h6 class="mb-0">Tanggal:</h6>
                                            <p class="text-dark fs-6 fw-semibold mb-0">
                                                {{ date('d-M-Y', strtotime($item->tanggal)) }}</p>
                                        </div>
                                        <div class="border-start w-50 py-3 px-4">
                                            <h6 class="mb-0">Status:</h6>
                                            <span
                                                class="badge {{ $item->status == 'aktif' ? 'bg-success' : 'bg-danger' }}">{{ $item->status == 'aktif' ? 'Aktif' : 'Tidak Aktif' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
@endsection
