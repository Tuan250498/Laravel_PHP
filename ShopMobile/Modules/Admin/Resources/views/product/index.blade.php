@extends('admin::layouts.master')

@section('content')
    <div class="sub-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('Admin.list.Product')}}" title="Danh mục">Sản Phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
            </ol>
        </nav>
    </div>
    <div class="table-responsive">
        <h2>Quản Lý Sản Phẩm</h2>
        <a href="{{route('Admin.create.Product')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
                @if(isset($products))
                    @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->p_name}}</td>
                            <td>{{$product->p_category_id}}</td>
                            <td>
                                <a href="" class="label {{$product->getStatus($product->p_active)['class']}}">{{$product->getStatus($product->p_active)['name']}}</a>
                            </td>
                            <td>
                                <a href="{{route('Admin.edit.Product', $product->id)}}">Edit</a>
                                <a href="{{route('Admin.action.Product',['delete',$product->id])}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
            </tbody>
        </table>
    </div>
@endsection
