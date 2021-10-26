<!DOCTYPE html>
<html lang="en">

@include('layoutUser.header')

<body class="sb-nav-fixed">
    
    @include('layoutUser.navbar')
    
    @yield('content')
    
    @include('layoutUser.footer')
    
    @yield('script')
    
    @yield('modal')
    
    
</body>

</html>