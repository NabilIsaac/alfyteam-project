@include('layout.partials.header')
<body>
    @include('layout.partials.nav')

    @yield('content')

    @include('layout.partials.scripts')

    @stack('scripts')
    
</body>
</html>