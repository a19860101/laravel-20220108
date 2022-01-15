@extends('admin.template.master')

@section('main')

<h2>商品列表</h2>
<div>
    @foreach ($products as $product)
    <div>
        <img src="{{asset('images/'.$product->cover)}}" width="100">
        <div>
            <h3>{{$product->title}}</h3>
            <div>{{$product->price}}</div>
        </div>
        <a href="{{route('product.edit',['product'=>$product->id])}}">編輯商品資料</a>
        <form action="{{route('product.destroy',['product'=>$product->id])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="刪除商品" onclick="return confirm('確認刪除？')">
        </form>
        <hr>
    </div>
    @endforeach
</div>


@endsection
