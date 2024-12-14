@extends('admin.main')
@section('content')

                        <div class="admin-content-main-content-order-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th>Số Lượng</th>
                                        <th>Thành Tiền</th> 
                                        <th>Tùy Biến</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($products as $product)
                                    @php
                                        $price = $product -> price_sale*$order_detail[$product -> id];
                                        $total+=$price;
                                    @endphp
                                    <tr>
                                        <td>{{$product -> id}}</td>
                                        <td><img style="width: 70px;" src="{{asset($product -> avatar)}}" alt=""></td>
                                        <td>{{$product -> name}}</td>                                
                                        <td>{{number_format($product -> price_sale)}}</td>
                                        <td>{{number_format($price)}}</td>
                                        <td>{{$order_detail[$product -> id]}}</td>
                                        <td><a class="delete-class" href="">Xóa</a></td>                                       
                                    </tr>
                                    
                                    @endforeach
                                    <tr class="end-table">
                                        <td colspan="5">Tổng Cộng</td>
                                        <td>{{number_format($total)}}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
@endsection