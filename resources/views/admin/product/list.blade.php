@extends('admin.main')
@section('content')
<div class="admin-content-main-content-product-list">
    <div class="table-heght">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ảnh</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Ram</th>
                                        <th>SSD</th>
                                        <th>Giá Bán</th>
                                        <th>Giá Giảm</th>
                                        <th>Ngày Đăng</th>
                                        <th>Tùy Chỉnh</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product -> id}}</td>
                                        <td><img style="width: 70px;" src="{{asset($product -> avatar)}}" alt=""></td>
                                        <td>{{$product -> name}}</td>
                                        <td>{{$product -> ram}}</td>
                                        <td>{{$product -> ssd}}</td>
                                        <td>{{number_format($product -> price_noma)}}</td>
                                        <td>{{number_format($product -> price_sale)}}</td>
                                        <td>{{$product -> created_at}}</td>
                                        <td>
                                            <a class="edit-class" href="/admin/product/edit/{{$product -> id}}">Sửa</a>
                                            <a onclick="removeRow(product_id=<?php echo $product -> id?>,url='/admin/product/delete')" class="delete-class" href="">Xóa</a>
                                        </td>
                                    </tr>  
                                    @endforeach
                                    
                                    
                                </tbody>
                           
                            </table>
                        </div>
                        </div>
@endsection