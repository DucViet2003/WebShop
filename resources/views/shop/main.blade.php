<!DOCTYPE html>
<html lang="en">
<head>
    @include('shop.part.head')
</head>
<body>
<!-------header-->
    <header id="header">
        @include('shop.part.header')
    </header>

    <!--slider-->
 
    @yield('contents')

    
<!--footer-->
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="{{asset('frontend/asset/js/script.js')}}"></script>
<script src="{{asset('frontend/asset/js/apiprovince.js')}}"></script>
</body>
</html>