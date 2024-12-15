@extends('template')

@section('title')
    Akreditsi
@endsection

@section('konten')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
            <div class="d-flex flex-column gap-1">
            <h1 class="mb-0 h2 fw-bold">Akreditsi</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">accreditation</li>
                </ol>
            </nav>
            </div>
            <div>
                <a href="{{route('akreditasi.accreditationCreate')}}" class="btn btn-primary">New accreditation</a>
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="row gy-3">
                <div class="table-responsive border-0 overflow-y-hidden">
                    <table class="table mb-0 text-nowrap table-centered table-hover">
                        <thead class="table-light">
                          <tr>
                            <th>#</th>
                            <th>Fakultas</th>
                            <th>No Butir</th>
                            <th>Link</th>
                            <th>Diskripsi</th>
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
                                        <div class="d-flex align-items-center flex-row gap-2">
                                            {{$item->fakultas}}
                                        </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center flex-row gap-2">
                                        {{$item->no_butir}}
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                        {{$item->link}}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-row gap-2">
                                            {{$item->description}}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm edit"  data="{{ $item->id_akreditasi }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm btNonaktif"  data="{{ $item->id_akreditasi }}" alamat="{{ route('akreditasi.accreditationDestroy') }}">
                                            <i class="fe fe-trash"></i>
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
</section>
<script>
    $(function () {
        $('.edit').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('akreditasiAccreditationShow') }}/" + id
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
                                        "{{ url('/akreditasiAccreditationIndex') }}"
                                })
                            }
                        })
                    }
                })
            })
    })
</script>
@endsection
