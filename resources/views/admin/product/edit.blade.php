@extends('admin.template.master')

@section('main')
    <h2>編輯商品</h2>
    <form action="{{route('product.update',['product'=>$product->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <label for="title">商品名稱</label>
            <input type="text" name="title" id="title" value="{{$product->title}}">
        </div>
        <div>
            <label for="category_id">分類</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $item)
                <option
                    value="{{$item->id}}"
                    {{$item->id == $product->category_id ? 'selected':''}}
                >{{$item->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="price">售價</label>
            <input type="text" name="price" id="price" value="{{$product->price}}">
        </div>
        <div>
            <label for="cover">商品圖片</label>
            @if($product->cover != null)
            <img src="{{asset('images/'.$product->cover)}}" width="150">
            <input type="hidden" name="cover" value="{{$product->cover}}">
            @else
            <input type="file" name="cover">
            @endif
        </div>
        <div>
            <label for="description">商品敘述</label>
            <textarea name="description" id="description" cols="30" rows="10">{{$product->description}}</textarea>
        </div>
        <input type="submit" value="儲存">
        <input type="button" value="取消" onclick="history.back()">
    </form>
@endsection
