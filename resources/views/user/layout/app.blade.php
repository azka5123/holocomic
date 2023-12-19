<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('user.layout.bootstrapcdn')

    @include('user.layout.style')

    @include('user.layout.jsfront')
</head>

<body>
    @include('user.layout.nav')

    {{-- body --}}
    <div class="container mt-4 mb-5">
        @yield('main-content')
    </div>
    {{-- end body --}}

    @include('user.layout.footer')
    @include('user.layout.jsfrontfooter')
</body>

</html>
