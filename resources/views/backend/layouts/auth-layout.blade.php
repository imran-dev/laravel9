<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('pageTitle')</title>
    <!-- CSS files -->
    <link href="./backend/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="./backend/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="./backend/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="./backend/dist/css/tabler-vendors.min.css" rel="stylesheet" />

    @stack('stylesheets')
    <link href="./dist/css/demo.min.css" rel="stylesheet" />
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    @yield('content')

    <!-- Libs JS -->

    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>

    @stack('scripts')
    <script src="./dist/js/demo.min.js"></script>
</body>

</html>