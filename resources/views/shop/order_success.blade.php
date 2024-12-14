@extends('shop.main')
@section('contents')
<section class="oder-confirm p-to-top">
    <div class="container">
        <div class="row-flex row-flex-product-detail">
            <p class="heading-text">Xác Nhận Đơn Hàng: <span style="font-weight: bold;" id="user-oder">Thành Công</span></p>
        </div> 
        <div class="row-flex">
            <div class="order-confirm-content">
                <p>Đơn hàng của bạn dã được xác nhận <span style="font-weight: bold;color: rgb(73, 255, 7);">Thành Công!</span>! <br>
                    <span style="font-size: small;" >Chúng tôi sẽ <a style=" font-weight: bold; font-style: italic; color: blue;" href="https://mail.google.com">Giao Hàng</a> trong thời gian tối đa là 3 ngày làm việc</span></p>
                <br>
                <button class="mainbutton">Tiếp tục mua hàng</button>    
            </div>
        </div>
    </div> 
</section>

@endsection