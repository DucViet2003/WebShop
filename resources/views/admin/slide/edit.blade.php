@extends('admin.main')
@section('content')
<form action="" enctype="multipart/form-data" method="post">
    <div class="admin-content-main-content-product-add">
        <div class="admin-content-main-content-image">
            <label for="file"><i class="ri-folder-image-line"></i> Ảnh BANNER</label>
            <input type="file" id="file" name="file">
            <input type="hidden" name="banner" value="{{$slide -> banner}}" id="input-file-img-hiden">
            <div class="image-show" id="input-file-img">
                <img src="{{asset($slide -> banner)}}" alt="">
            </div>



            <br>
            <br>
            <br>
            <br>
            <br>
            <button type="submit" class="main-btn">Sửa Banner</button>
           
        </div>
</div>
</div>

@csrf
</form>
                    
@endsection
