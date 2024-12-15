@extends('template')

@section('title')
    Kemahasiswaan
@endsection
<?php
    $totalArtikel = DB::table('ukm')->count();
    $totalPenulis = DB::table('ukm')->whereNot('penulis','')->count();
    $totalDibaca = DB::table('ukm')->sum('dibaca');
    $totalTidakDibaca = DB::table('ukm')->where('dibaca',0)->sum('dibaca');
?>

@section('konten')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
            <div class="d-flex flex-column gap-1">
            <h1 class="mb-0 h2 fw-bold">Kemahasiswaan</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Ukm</li>
                </ol>
            </nav>
            </div>
            <div>
                <a href="{{route('kemahasiswaan.ukmCreate')}}" class="btn btn-primary">New Ukm</a>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="row gy-4 mb-4">
                <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                  <!-- Card -->
                  <div class="card">
                    <!-- Card body -->
                    <div class="card-body d-flex flex-column gap-2">
                      <span class="fs-6 text-uppercase fw-semibold ls-md">Total Artikel</span>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="lh-1 d-flex flex-column gap-1">
                          <h2 class="h1 fw-bold mb-0"><?=$totalArtikel?>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                  <!-- Card -->
                  <div class="card">
                    <!-- Card Body -->
                    <div class="card-body d-flex flex-column gap-2">
                      <span class="fs-6 text-uppercase fw-semibold ls-md">Total Penulis</span>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="lh-1 d-flex flex-column gap-1">
                          <h2 class="h1 fw-bold mb-0"><?=$totalPenulis?>
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                  <!-- Card -->
                  <div class="card">
                    <!-- Card Body -->
                    <div class="card-body d-flex flex-column gap-2">
                      <span class="fs-6 text-uppercase fw-semibold ls-md">Total Dibaca</span>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="lh-1 d-flex flex-column gap-1">
                          <h2 class="h1 fw-bold mb-0"><?=$totalDibaca?></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                  <!-- Card -->
                  <div class="card">
                    <!-- Card Body -->
                    <div class="card-body d-flex flex-column gap-2">
                      <span class="fs-6 text-uppercase fw-semibold ls-md">Total Tidak DIbaca</span>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="lh-1 d-flex flex-column gap-1">
                          <h2 class="h1 fw-bold mb-0"><?=$totalTidakDibaca?></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                  <!-- Card -->
                  <div class="card mb-4">
                    <!-- Card header -->
                    <div class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height">
                      <h4 class="mb-0">Recent Posts</h4>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap table-centered table-hover">
                            <thead class="table-light">
                              <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Dibaca</th>
                                <th>Penulis</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{$no++}}
                                        </td>
                                        <td>
                                        <a href="#" class="text-inherit">
                                            <div class="d-flex align-items-center gap-3">
                                                <div>
                                                    <img src="{{asset('image')}}/kemahasiswaan/{{ $item->gambar1 }}" alt="gambar_one" class="img-4by3-lg rounded" /><br><br>
                                                    <img src="{{asset('image')}}/kemahasiswaan/{{ $item->gambar2 }}" alt="gambar_two" class="img-4by3-lg rounded" />
                                                </div>
                                            </div>
                                        </a>
                                        </td>
                                        <td>
                                        <div class="d-flex align-items-center flex-row gap-2">
                                            {{$item->judul}}
                                        </div>
                                        </td>
                                        <td>
                                        <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                            {{$item->dibaca}}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center flex-row gap-2">
                                                {{$item->penulis}}
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm edit"  data="{{ $item->id_ukm }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm btNonaktif"  data="{{ $item->id_ukm }}" alamat="{{ route('kemahasiswaan.ukmDestroy') }}">
                                                <i class="fe fe-trash"></i>
                                            </a>
                                            <a href="#" class="btn btn-warning btn-sm detail"  data="{{ $item->id_ukm }}">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</section>
<script>
    $(function () {
        $('.edit').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('kemahasiswaanUkmShow') }}/" + id
            })
        $('.detail').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('kemahasiswaanUkmDetail') }}/" + id
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
                                        "{{ url('/kemahasiswaanUkmIndex') }}"
                                })
                            }
                        })
                    }
                })
            })
    })
</script>
@endsection
