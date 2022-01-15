@extends('admin.template.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">

            <h2>新增商品</h2>
            <hr>
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">*商品名稱</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category_id">*分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">*售價</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">特價</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="cover">商品圖片</label>
                    <input type="file" name="cover">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">*商品敘述</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="新增商品" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
@endsection
