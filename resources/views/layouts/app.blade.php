<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Home1')</title>

    <!-- Bootstrap CSS (MISSING BEFORE ❗❗❗) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Vite CSS & JS (MUST be in head) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @font-face {
            font-family: 'Ink Brush Arabic';
            src: url('{{ asset("fonts/InkBrushArabic_DEMO-Textured.otf") }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Rakkas-Regular';
            src: url('{{ asset("fonts/Rakkas-Regular.ttf") }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>

<body id="page-top">

    @yield('content')

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SimpleLightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

    <!-- Theme JS -->

</body>

</html>