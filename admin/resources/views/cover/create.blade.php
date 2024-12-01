@extends('template')

@section('title')
    Cover
@endsection

@section('konten')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-2 mb-2 d-flex flex-column flex-lg-row gap-2 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Cover Website Tambah</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="card">
                <div class="row">
                <div class="col-md-12">
                    <div class="border-bottom p-4 d-flex flex-column gap-3">
                    <div class="d-flex flex-column gap-4">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('')}}" class="btn btn-sm btn-success">Tambah Data</button>
                                </div>
                                <div class="col-6">
                                    <h1 class="mb-0 h3 fw-bold text-center">Cover Website maksimal hanya 4</h1>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                        <div>
                            <span>
                            (3 aktif)
                            </span>
                        </div>
                        <div>
                            <span>
                            1 non aktif
                            </span>
                        </div>
                        </div>
                    </div>
                    <div class="progress" style="height: 8px">
                        <div class="progress-bar" role="progressbar" style="width: <?= 4?>%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-12 mt-3">
                <div class="row gy-4">
                    @foreach ($data as $item)
                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex flex-column gap-4">
                                        <div class="d-flex flex-column gap-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h4 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            {{ $item->nama_cover }}
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
                                                            <a class="dropdown-item btEdit" style="cursor: pointer"
                                                                data="{{ $item->cover }}">
                                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Hapus
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="mb-0">
                                                    {{ $item->nama_cover }}
                                                </p>
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
        </div> --}}
    </section>
  
@endsection
