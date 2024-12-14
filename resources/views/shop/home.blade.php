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

<section class="slider"> 
    @include('shop.part.slides')
</section>  
<!--hotproduct-->
 {{--  <section class="hot-products">
    @include('shop.part.hotproduct')
</section>
  
<!--footer-->
<footer>
        @include('shop.part.footer')
</footer> --}}
<script src="{{asset('frontend/asset/js/script.js')}}"></script>
</body>
</html>