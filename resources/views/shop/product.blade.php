@extends('shop.main')
@section('contents')
<section class="product-detail p-to-top">
    <form action="/shop/cart/add" method="post">
        <div class="container">
            <div class="row-flex row-flex-product-detail">
                <p>Sản Phẩm </p><i class="ri-arrow-right-line"></i><p>{{$product -> name}}</p>
            </div>
            <div class="row-grid">
                <div class="product-detail-left">
                    <img class="main-image" src="{{asset($product -> avatar)}}" alt="">
                    <div class="product-image-item">
    
                        @php
                            $product_images = explode('*',$product -> images);
                        @endphp
                        @foreach ($product_images as $product_image )
                        <img src="{{asset($product_image)}}" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="product-detail-right">
                    <div class="product-detail-right-infor">
                        <h1 style="padding-bottom: 30px; color: blue; margin-top: -30px">{{$product -> name}}</h1>
                    <span>{{$product -> ram }} </span><span> - </span> <span> {{ $product -> ssd}}</span>
                    <div class="hot-product-item-price">
                        <p><span class="sale">{{number_format($product -> price_sale)}}<sup style="padding-right: 20px">₫</sup></span><span  class="money">{{number_format($product -> price_noma)}}<sup>₫</sup></span> </p>
                    </div>
    
                    </div>
                    <h2>Thông số kỹ thuật</h2>
                    <br>
                    <div class="product-detail-right-price">
                        
                        <ul>
                            {!! nl2br(e($product -> description)) !!}
                        </ul>
                    </div>
                    <div class="product-detail-right-quantity">
                        <h2>Số lượng</h2>
                        <div class="product-detail-right-quantity-input">
                            <i class="ri-subtract-line"></i>
                            <input onkeyDown="return false" class="quantity-input" name="product_qty" type="number" value="1">
                            <input type="hidden" value="{{$product -> id}}" name="product_id" >
                            <i class="ri-add-line"></i>
                        </div>
                    </div>
                    <div class="product-detail-right-button">
                        <button type="submit" class="mainbutton">Thêm Vào Giỏ Hàng</button>
                    </div>
                </div>
            </div>
            <div class="row-flex">
                <div class="product-detail-content">
                    <h2>Chi tiết sản phẩm</h2>
                    <p>
                           {{$product -> content}} 
                    </p>
                    <img src="" alt="">
                </div>
            </div>
        </div>
        @csrf
    </form>
    
</section>


<footer>
    @include('shop.part.footer')
</footer>
@endsection
