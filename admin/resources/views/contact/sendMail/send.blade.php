<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email Via SMTP GMAIL </title>

    <script src="{{ asset('assets') }}/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets') }}/fonts/feather/feather.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/summernote/summernote-bs5.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/crooper/cropper.css" rel="stylesheet">
</head>

<body>
<h2>{{ $data['title'] }}</h2>

<div>
    {{-- <img src="{{ $message->embed({{ asset('assets') }}/images/avatar/avatar-1.jpg) }}"> --}}
    {{ $data['body'] }}
</div>

</body>


    <!-- Theme JS -->
    <script src="{{ asset('assets') }}/js/theme.min.js"></script>

    <script src="{{ asset('assets') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendors/chart.js"></script>
    <script src="{{ asset('assets') }}/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendors/flatpickr.js"></script>
    <!-- Libs JS -->
    <script src="{{ asset('assets') }}/crooper/cropper.js"></script>
</html>
