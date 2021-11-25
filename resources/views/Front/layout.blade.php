<!doctype html>
<html>

<head>
    @include('Front.include.head')
</head>

<body>

    <header>
        @include('Front.include.header')
    </header>
    <div class="layout_space">
        @yield('content')
    </div>
    <footer>
        @include('Front.include.footer')
    </footer>

</body>

</html>