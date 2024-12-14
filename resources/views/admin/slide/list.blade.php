@extends('admin.main')
@section('content')
<div class="admin-content-main-content-product-list">
    <div class="table-heght">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Banner</th>
                                        
                                        <th>Tùy Chỉnh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slide as $slide)
                                    <tr>
                                        <td>{{$slide -> id}}</td>
                                        <td><img style="width: 420px;padding: 10px;" src="{{asset($slide -> banner)}}" alt=""></td>
                                        
                                        <td>
                                            <a class="edit-class" href="/admin/slide/edit/{{$slide -> id}}">Sửa</a>
                                            <a onclick="removeRows(slide=<?php echo $slide -> id?>,url='/admin/slide/delete')" class="delete-class" href="">Xóa</a>
                                        </td>
                                    </tr>  
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
@endsection