@extends('template')

@section('title')
    Visi
@endsection

@section('konten')
    <!-- Container fluid -->
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex flex-column gap-1">
                <h1 class="mb-0 h2 fw-bold">Tentang</h1>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">visi</li>
                    </ol>
                </nav>
                </div>
                <div>
                    <a href="{{route('tentang.visiCreate')}}" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-12 col-12">
                <div class="d-flex flex-column gap-4">
                    <div class="card">
                        <div class="table-responsive border-0 overflow-y-hidden">
                            <table class="table mb-0 text-nowrap table-hover table-centered">
                              <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Visi</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        <h5 class="mb-0">
                                        <a  class="text-inherit">{{$item->isi_visi}}</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <a  class="text-inherit">{{$item->tanggal}}</a>
                                    </td>
                                    <td>
                                        <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                        <a href="#" class="text-inherit">{{$item->status}}</a>
                                    </td>
                                    <td>
                                        <a href="#" id="edit" data="{{ $item->id_tentang_visi }}" class="edit text-inherit"><i class="bi bi-pencil-square"></i></a>
                                        <a href="#" id="hapus" data="{{ $item->id_tentang_visi }}"  alamat="{{ route('tentang.visiDestroy') }}" class="hapus text-inherit"><i class="bi bi-trash3"></i></a>
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
</section>
<script>
    $(function () {
        $('.edit').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('tentangVisiShow') }}/" + id
            })
        $('.hapus').on('click', function() {
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
                                        "{{ url('/tentangVisiIndex') }}"
                                })
                            }
                        })
                    }
                })
            })
    })
</script>
@endsection
