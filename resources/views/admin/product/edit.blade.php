@extends('admin.template.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">

            <h2>編輯商品</h2>
            <hr>
            <form action="{{route('product.update',['product'=>$product->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="title" class="form-label">商品名稱</label>
                    <input type="text" name="title" id="title" value="{{$product->title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $item)
                        <option
                            value="{{$item->id}}"
                            {{$item->id == $product->category_id ? 'selected':''}}
                        >{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">售價</label>
                    <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="sale" class="form-label">特價</label>
                    <input type="text" name="sale" id="sale" value="{{$product->sale}}" class="form-control">
                </div>
                <div>
                    <label for="cover" class="form-label">商品圖片</label>
                    @if($product->cover != null)
                    <img src="{{asset('images/'.$product->cover)}}" width="150">
                    <input type="hidden" name="cover" value="{{$product->cover}}">
                    @else
                    <input type="file" name="cover">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">商品敘述</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                </div>
                <input type="submit" value="儲存" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

@endsection
