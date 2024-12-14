@extends('admin.main')
@section('content')
<form action="" enctype="multipart/form-data" method="post">
    <div class="admin-content-main-content-product-add">
        <div class="admin-content-main-content-left">
            <div class="admin-content-main-content-left-item">
                <div class="admin-content-main-content-two-input">
                    <input name="name" value="{{$product -> name}}" type="text" placeholder="Tên sản phẩm">
                </div>
                <div class="admin-content-main-content-two-input">
                    <input name="ram" value="{{$product -> ram}}" type="text" placeholder="Ram">
                    <input name="ssd" value="{{$product -> ssd}}" type="text" placeholder="SSD">
                </div>
                <div class="admin-content-main-content-two-input">
                    <input name="price_noma" value="{{$product -> price_noma}}" type="text" placeholder="Giá bán">
                    <input name="price_sale" value="{{$product -> price_sale}}" type="text" placeholder="Giá giảm">
                </div>
                <textarea name="description" id="" value="" placeholder="Đặc điểm nổi bật">{{$product -> description}}</textarea>
                <textarea name="content" id="" value="" placeholder="Mô tả sản phẩm">{{$product -> content}}</textarea>
            </div>
            <button type="submit" class="main-btn">Cập Nhật Sản Phẩm</button>
        </div>
        
    <div class="admin-content-main-content-right">
        <div class="admin-content-main-content-image">
            <label for="file"><i class="ri-folder-image-line"></i> Ảnh Đại Diện</label>
            <input type="file" id="file" name="file">
            <input type="hidden" name="avatar" value="{{$product -> avatar}}" id="input-file-img-hiden">
            <div class="image-show" id="input-file-img">
                <img src="{{asset($product -> avatar)}}" alt="">
            </div>
            
        </div>
        <div class="admin-content-main-content-images">
            <label for="files"><i class="ri-folder-image-line"></i>Ảnh Sản Phẩm</label>
            <input type="file" name="images" id="files" multiple>
            <div class="image-show" id="input-file-imgs">
                @php
                    $product_images = explode("*",$product -> images);
                @endphp
                @foreach ($product_images as $product_image)
                    <img src="{{asset($product_image)}}" alt="">
                    <input type="hidden" name="images[]" value="{{$product -> image}}" id="input-file-img-hiden">
                @endforeach
        </div>
    </div>
</div>
</div>
@csrf
</form>
                    
@endsection
