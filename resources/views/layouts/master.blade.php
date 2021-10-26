<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body class="sb-nav-fixed">
    
    @include('layouts.navbar')
    
    @yield('content')
    
    @include('layouts.footer')
    
    @yield('script')
    
    @yield('modal')
    
    
</body>

</html>