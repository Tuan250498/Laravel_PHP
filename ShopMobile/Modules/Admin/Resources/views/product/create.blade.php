@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="{{route('Admin.list.Category')}}" title="Danh mục">Danh Mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
            </ol>
        </nav>
    </div>
    <div class="">
        @include("admin::product.form")
    </div>

@endsection
