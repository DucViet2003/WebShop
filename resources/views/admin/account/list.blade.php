@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Trạng Thái</th>
                                        <th>Tùy Biến</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{$account -> id}}</td>
                                            <td>{{$account -> name}}</td>
                                            <td>{{$account -> email}}</td>
                                            <td>{{$account -> password}}</td>
                                            <td><a class="none-confirm-order" href="">Chưa xác nhận</a></td>
                                            <td><a class="delete-class" href="">Xóa</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
@endsection