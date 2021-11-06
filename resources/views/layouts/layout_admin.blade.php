<!DOCTYPE html>
<html>

<head>
    @include('layouts.components.head')
</head>

<body>
    @yield('header')
    @yield('content')
    @yield('footer')
    @include('layouts.components.javascript')
    @yield('js')
</body>

</html>
