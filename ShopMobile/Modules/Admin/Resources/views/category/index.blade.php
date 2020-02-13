@extends('admin::layouts.master')

@section('content')
    <div class="sub-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('Admin.list.Category')}}" title="Danh mục">Danh Mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh Sách</li>
            </ol>
        </nav>
    </div>
    <div class="table-responsive">
        <h2>Quản Lý Danh Mục</h2>
        <a href="{{route('Admin.create.Category')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Title Seo</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($categories))
                @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->c_name}}</td>
                <td>{{$category->c_title_seo}}</td>
                <td>
                    <a href="" class="label {{$category->getStatus($category->p_active)['class']}}">{{$category->getStatus($category->c_active)['name']}}</a>
                </td>
                <td>
                    <a href="{{route('Admin.edit.Category', $category->id)}}">Edit</a>
                    <a href="{{route('Admin.action.Category',['delete',$category->id])}}">Delete</a>
                </td>
            </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
