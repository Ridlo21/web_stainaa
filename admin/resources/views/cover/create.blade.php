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
        
        <div class="row">
          <div class="col-xl-12 col-lg-8 col-md-12 col-12">
            <!-- Card -->
            <div class="card border-0">
              <!-- Card header -->
              <div class="card-header">
                <h4 class="mb-0">Create Post</h4>
              </div>
              <form class="needs-validation" method="POST" action="{{ route('cover.store')}}" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="card-body">
                  <div class="mb-3 col-md-12">

                    <label class="form-label" for="option1">
                      <i class="fe fe-image me-1 "></i>
                      Photo
                    </label>
                    <input type="file" id="selectedImg" class="form-control" accept="image/png, image/gif, image/jpeg" required>
                    <input type="file" id="croppedImg" name="croppedImg" class="form-control" hidden>
                    <div id="my-dropzone" class="dropzone mt-4 border-dashed"></div>
                  </div>
                  <!-- Add the "Upload" button -->
                  <div class="mt-4">
                      <div class="mb-3 col-md-12">
                        <!-- Title -->
                        <label for="postTitle" class="form-label">Title</label>
                        <input type="text" id="postTitle" class="form-control text-dark" placeholder="Post Title"
                          required name="nama" />
                        <small>Keep your post titles under 60 characters. Write heading that describe the topic content.
                          Contextualize for Your Audience.</small>
                        <div class="invalid-feedback">Please enter title.</div>
                      </div>
                  </div>
                  <!-- button -->
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a type="button" href="{{route('cover.index')}}" class="btn btn-danger">batal</a>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>
<!-- Modal -->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crop Image Cover Website</h1>
      </div>
      <div class="modal-body">
        <div class="d-flex p-2">
          <div class="p-2">
            <button id="crop" class="mt-2 mb-2 btn btn-primary" hidden>Crop</button>
            <button id="batal" class="mt-2 mb-2 btn btn-danger" >batal</button>
            <button type="submit" id="submit" class="mt-2 mb-2 btn btn-success" disabled>ready</button>
            <img src="" alt="" id="image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(function () {
    setTimeout(() => {
      $("#pesan").html("")
    }, 5000);
  })

  let cropper;
  document.addEventListener('DOMContentLoaded', () => {

    const imageInput = document.getElementById('selectedImg');

    imageInput.addEventListener('change', () => {
        $("#submit").attr('disabled',true);
        // Destroy previous CropperJS instance if it exists
        if (typeof cropper != 'undefined') {
            console.log("Destroy previous");
            cropper.destroy();
            cropper = null;
        }
        const file = imageInput.files[0];
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => {
                // console.log(e,e.target);
                const imgResult = e.target.result;

                const image = document.getElementById('image');
                image.src = imgResult;
                cropper = new Cropper(image, {
                    aspectRatio: 16/9,
                    cropBoxResizable: false,
                    cropBoxMovable: true,
                    crop(event) {
                        $("#submit").attr('disabled',true);
                    }
                });
                $("#crop").attr('hidden',false);
            };
            reader.readAsDataURL(file);
        }
    });
});

$('#selectedImg').on('click', function () {
    $('#exampleModal').modal('show'); 
})

$("#batal").click(function () {
  $('#exampleModal').modal('hide'); 
  $('#image').val(""); 
  $('#croppedImage').val("")
  
})

$("#crop").click(function () {
    let canvas = cropper.getCroppedCanvas();
    canvas.toBlob(function (blob) {
        const file = new File([blob], 'croppedImage.png', { type: blob.type });
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(file);
        const croppedImageInput = $("input[name='croppedImg']");
        croppedImageInput[0].files = dataTransfer.files;
        $("#submit").attr('disabled',false);
        $('#exampleModal').modal('hide');
    });

});

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
