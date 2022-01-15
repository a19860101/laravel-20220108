@extends('admin.template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>商品列表</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>商品編號</th>
                        <th>商品名稱</th>
                        <th>商品價格</th>
                        <th>商品圖片</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->cover}}</td>
                        <td>
                            <a href="" class='btn btn-success'>商品資料</a>
                            <a href="{{route('product.edit',['product'=>$product->id])}}" class="btn btn-info">編輯</a>
                            <form action="{{route('product.destroy',['product'=>$product->id])}}" method="post" class="d-inline-block">
                                @csrf
                                @method('delete')
                                <input type="submit" value="刪除商品" onclick="return confirm('確認刪除？')" class='btn btn-danger'>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
