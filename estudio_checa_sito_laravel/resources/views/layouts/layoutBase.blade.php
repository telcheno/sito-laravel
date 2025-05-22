<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
@include('partials.header')
<div class="container">
    @yield('content') 
</div>  
</body>

@include('partials.footer')

</html>