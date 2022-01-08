<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{route('product.create')}}">新增商品</a>
    </nav>
    <h2>商品列表</h2>
    <div>
        @foreach ($products as $product)
            <div>
                <img src="{{asset('images/'.$product->cover)}}" width="100">
                <div>
                    <h3>{{$product->title}}</h3>
                    <div>{{$product->price}}</div>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
</body>
</html>
