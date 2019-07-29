<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
    @include('layouts.meta')

    @yield('title')

    @include('layouts.css')
    
    @yield('css')

</head>
<body>
    @include('layouts.sidebar')
    <div id="right-panel" class="right-panel">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
    @include('layouts.scripts')

</body>
</html>