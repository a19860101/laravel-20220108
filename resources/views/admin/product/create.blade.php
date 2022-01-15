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

    <h2>新增商品</h2>
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">商品名稱</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="category_id">分類</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="price">售價</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="cover">商品圖片</label>
            <input type="file" name="cover">
        </div>
        <div>
            <label for="description">商品敘述</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增商品">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>
