@extends('template')

@section('title')
    Pendidikan
@endsection
@section('konten')
    <!-- Container fluid -->
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex flex-column gap-1">
                <h1 class="mb-0 h2 fw-bold">Pendidikan</h1>
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Education</li>
                    </ol>
                </nav>
                </div>
                <div>
                <a href="{{route('pendidikan.educationCreate')}}" class="btn btn-primary">New Pendidikan</a>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $item)
            <div class=" row-cols-1 row-cols-lg-2 row-cols-xl-3 row-cols-xxl-4 gy-4">
                <div class="col">
                    <div class="card h-100">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <!-- button -->
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <!-- button -->
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <!-- img -->
                            <div class="carousel-item active">
                            <img src="{{asset('image')}}/pendidikan/{{ $item->gambar1 }}" class="d-block w-100 rounded-top-md" alt="..." />
                            </div>
                            <!-- img -->
                            <div class="carousel-item">
                            <img src="{{asset('image')}}/pendidikan/{{ $item->gambar2 }}" class="d-block w-100 rounded-top-md" alt="..." />
                            </div>
                        </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body d-flex flex-column gap-4">
                        <div class="d-flex flex-column gap-2">
                            <!-- text -->
                            <h4 class="mb-0"><a href="product-single.html" class="text-inherit">{{$item->fakultas}}</a></h4>
                            <!-- rating -->
                            <span class="fw-semibold">
                                {{$item->biografi}}
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <!-- text -->
                            <h4 class="mb-0">action</h4>
                            <!-- color -->
                            <div>
                            <span style="cursor: pointer" data="{{ $item->id_pendidikan }}"  alamat="{{ route('pendidikan.educationDestroy') }}"  title="Hapus" class="hapus icon-shape icon-xxs bg-danger rounded-circle border border-2 border-white shadow"></span>
                            <span style="cursor: pointer" data="{{ $item->id_pendidikan }}"  title="Detail" class="detail icon-shape icon-xxs bg-warning rounded-circle border border-2 border-white shadow mx-n1"></span>
                            <span style="cursor: pointer" data="{{ $item->id_pendidikan }}" title="Edit" class="edit icon-shape icon-xxs bg-dark rounded-circle border border-2 border-white shadow"></span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </section>
<script>
    $(function () {
        $('.edit').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('pendidikanEducationShow') }}/" + id
            })
        $('.detail').on('click', function() {
                var id = $(this).attr('data')
                window.location.href = "{{ url('pendidikanEducationDetail') }}/" + id
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
                                        "{{ url('/pendidikanEducationIndex') }}"
                                })
                            }
                        })
                    }
                })
            })
    })
</script>
@endsection
