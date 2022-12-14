<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('pageTitle', 'Laravel 9 Role Admin')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/template/static/logo-small.svg') }}">

    @include('backend.layouts.partials.styles')
    @yield('styles')
</head>

<body>
    <div class="wrapper">
        @include('backend.layouts.partials.sidebar')

        @include('backend.layouts.partials.header')


        <div class="page-wrapper">
            @yield('admin-content')

            @include('backend.layouts.partials.footer')

        </div>
    </div>

    @include('backend.layouts.partials.scripts')
    @yield('scripts')
</body>

</html>
