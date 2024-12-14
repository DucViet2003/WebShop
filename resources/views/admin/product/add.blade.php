@extends('admin.main')
@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post">
    <div class="admin-content-main-content-product-add">
        <div class="admin-content-main-content-left">
            <div class="admin-content-main-content-left-item">
                <div class="admin-content-main-content-two-input">
                    <input name="name" value="{{old('name')}}" type="text" placeholder="Tên sản phẩm">
                </div>
                <div class="admin-content-main-content-two-input">
                    <input name="ram" value="{{old('ram')}}" type="text" placeholder="Ram">
                    <input name="ssd" value="{{old('ssd')}}" type="text" placeholder="SSD">
                </div>
                <div class="admin-content-main-content-two-input">
                    <input name="price_noma" value="{{old('price_noma')}}" type="text" placeholder="Giá bán">
                    <input name="price_sale" value="{{old('price_sale')}}" type="text" placeholder="Giá giảm">
                </div>
                <textarea name="description" id="" value="{{old('description')}}" placeholder="Đặc điểm nổi bật"></textarea>
                <textarea name="content" id="" value="{{old('content')}}" placeholder="Mô tả sản phẩm"></textarea>
            </div>
            <button type="submit" class="main-btn">Thêm Sản Phẩm</button>
           
        </div>
        
    <div class="admin-content-main-content-right">
        <div class="admin-content-main-content-image">
            <label for="file"><i class="ri-folder-image-line"></i> Ảnh Đại Diện</label>
            <input type="file" id="file" name="file">
            <input type="hidden" name="avatar" id="input-file-img-hiden">
            <div class="image-show" id="input-file-img">
        </div>
            
        </div>
        <div class="admin-content-main-content-images">
            <label for="files"><i class="ri-folder-image-line"></i>Ảnh Sản Phẩm</label>
            <input type="file" name="images" id="files" multiple>
            <div class="image-show" id="input-file-imgs">
                 
        </div>
    </div>
</div>
</div>

@csrf
</form>
                    
@endsection
