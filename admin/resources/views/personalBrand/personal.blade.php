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
                <div class="pb-2 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <a href="{{ url('/personalBrandAdd') }}" class="btn btn-sm btn-success">Tambah Data</a>
                    </div>
                    <div>
                        <input type="search" class="form-control" placeholder="Cari" />
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="row gy-4">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex flex-column gap-4">
                                    <div class="d-flex flex-column gap-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <h4 class="mb-0">
                                                    <a href="#" class="text-inherit">
                                                        Web Application Design
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown dropstart">
                                                    <a href="#" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        id="dropdownProjectOne" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-info dropdown-item-icon"></i>
                                                            Detail
                                                        </a>
                                                        <a class="dropdown-item" href="{{ url('/personalBrandEdit') }}">
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
                                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Culpa accusantium sunt dolores repellendus deserunt placeat
                                                reiciendis animi, enim, cupiditate eum quisquam ipsa expedita ullam
                                                atque ipsum, ratione at tenetur magni!
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
                                        <p class="text-dark fs-6 fw-semibold mb-0">1 Jan, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Status:</h6>
                                        <span class="badge bg-success">Aktif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <div>
                            <!-- Pagination -->
                            <nav>
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link mx-1 rounded" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link mx-1 rounded" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link mx-1 rounded" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link mx-1 rounded" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link mx-1 rounded" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                                fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
