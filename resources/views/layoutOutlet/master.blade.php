<!DOCTYPE html>
<html lang="en">

@include('layoutOutlet.header')

<body class="sb-nav-fixed">
    
    @include('layoutOutlet.navbar')
    
    @yield('content')
    
    @include('layoutOutlet.footer')
    
    @yield('script')
    
    @yield('modal')
    
    
</body>

</html>