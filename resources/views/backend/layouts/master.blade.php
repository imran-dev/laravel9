<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('pageTitle', 'Laravel 9 Role Admin')</title>

    @include('backend.layouts.partials.styles')
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
</body>

</html>