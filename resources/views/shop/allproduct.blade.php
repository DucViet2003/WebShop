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
<h1 style="padding-top: 100px;text-align: center;padding-bottom: 25px ">
    Tất Cả Các Sản Phẩm
</h1>

<!--hotproduct-->
<section class="hot-products">
    @include('shop.part.hotproduct')
</section>
    
<!--footer-->
<footer>
        @include('shop.part.footer')
</footer>
<script src="{{asset('frontend/asset/js/script.js')}}"></script>
</body>
</html>