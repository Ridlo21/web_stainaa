@extends('template')
@section('title')
    Personal Branding
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
                <div class="pb-5 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <button type="button" id="btTambah" class="btn btn-sm btn-success">Tambah Data</button>
                    </div>
                    <div>
                        <input type="search" class="form-control" placeholder="Cari" />
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-12">
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
                                                            {{ $item->title }}
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
                                                            {{-- <a class="dropdown-item" href="#">
                                                                <i class="fe fe-info dropdown-item-icon"></i>
                                                                Detail
                                                            </a> --}}
                                                            <a class="dropdown-item btEdit" style="cursor: pointer"
                                                                data="{{ $item->id_personal_branding }}">
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
                                                    {{ $item->context }}
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
                    <div class="col-lg-12 col-md-12 col-12">
                        {{ $data->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#btTambah').on('click', function() {
                $('#spinnerWrapper').css('display', 'flex')
                window.location.href = "{{ route('personalBrand.Add') }}"
            })

            $('.btEdit').on('click', function() {
                var uuid = $(this).attr('data')
                $('#spinnerWrapper').css('display', 'flex')
                window.location.href = "{{ url('personalBrand.Edit') }}/" + uuid
            })
        })
    </script>
@endsection
