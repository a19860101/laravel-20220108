@extends('admin.template.master')
@section('main')
<div class="container">
    <div class="row">

        <div class="col-12">
            <h2>商品資料</h2>
            <hr>
            <h3>{{$product->title}}</h3>
            <div>
                <img src="{{asset('images/'.$product->cover)}}" width="300">
            </div>
            <div>
                分類:{{$product->category->title}}
            </div>
            <div>
                {{$product->description}}
            </div>
            <div>
                {{$product->price}}
            </div>
            <a href="{{route('product.index')}}" class="btn btn-success">回商品列表</a>
        </div>
    </div>
</div>
@endsection
