@extends('shop.main')
@section('contents')
<section class="oder-confirm p-to-top">
    <div class="container">
        <div class="row-flex row-flex-product-detail">
            <p class="heading-text">Xác Nhận Đơn Hàng: <span style="font-weight: bold;" id="user-oder">Nguyễn Đức Việt#203</span></p>
        </div> 
        <div class="row-flex">
            <div class="order-confirm-content">
                <p>Đơn hàng của bạn dã được gửi <span style="font-weight: bold;">Thành Công</span>! <br>
                    <span style="font-size: small;" >Vui lòng check <a style=" font-weight: bold; font-style: italic; color: blue;" href="https://mail.google.com">Email</a> đã đăng ký để xác nhận để xác nhận đơn hàng</span></p>
                <br>
                <a href="/shop" class="button">Tiếp tục mua hàng</a>  
            </div>
        </div>
    </div> 
</section>

@endsection