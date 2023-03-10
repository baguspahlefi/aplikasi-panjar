<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{url('images/LOGO-removebg-preview.png')}}">
        <title>@yield('title')</title>

        @stack('prepend-styles')
        @include('includes.styles')
        @stack('addon-styles')
    </head>

    <body>
        @include('includes.navbar')
        @yield('content')
        @include('includes.footer')
        
        @stack('prepend-scripts')
        @include('includes.scripts')
        @stack('addon-scripts')
    </body>
</html>