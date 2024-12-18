@extends('template')

@section('title')
    Mail
@endsection

@section('konten')
<section class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
            <div class="d-flex flex-column gap-1">
            <h1 class="mb-0 h2 fw-bold">Mail</h1>
            <!-- Breadcrumb -->
            </div>
            <div>
                {{-- <a href="{{route('akreditasi.accreditationCreate')}}" class="btn btn-primary">New accreditation</a> --}}
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Comment</th>
                            <th>Status</th>
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
                                            {{$item->nama}}
                                        </div>
                                    </td>
                                    <td>
                                    <div class="d-flex align-items-center flex-row gap-2">
                                        {{$item->email}}
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                        {{$item->hari}}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-row gap-2">
                                            {{$item->tanggal}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-row gap-2">
                                            {{$item->comment}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center flex-row gap-2">
                                            {{$item->status}}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm balas"  data="{{ $item->id_contact }}">
                                            <i class="bi bi-envelope-arrow-up-fill"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm lihat"  data="{{ $item->id_contact }}" alamat="{{ route('akreditasi.accreditationDestroy') }}">
                                            <i class="bi bi-eye"></i>
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
        $('.balas').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('contactMailShow') }}/" + id
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
