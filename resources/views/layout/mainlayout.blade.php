<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head')
</head>

<body>
    @if (request()->route()->getName() === 'index')
        @include('layout.partials.header')
    @endif
    @yield('content')
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
</body>

</html>
