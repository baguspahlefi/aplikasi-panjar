<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{url('images/LOGO-removebg-preview.png')}}">
        <title>@yield('title')</title>

        @stack('prepend-styles')
        @include('includes.admin.styles')
        @stack('addon-styles')
    </head>

    <body class="sb-nav-fixed">
        @include('includes.admin.navbar')
        @yield('content')
        
        @stack('prepend-scripts')
        @include('includes.admin.scripts')
        @stack('addon-scripts')
    </body>
</html>