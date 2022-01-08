<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('admin.template.nav')
    <h2>編輯商品</h2>
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">商品名稱</label>
            <input type="text" name="title" id="title" value="{{$product->title}}">
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
</body>
</html>
