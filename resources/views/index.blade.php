@extends('template.master')
@section('main')
@include('template.header')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2>最新商品</h2>
        </div>
        @foreach ($new_products as $new)
        <div class="col-3">
            <a href="{{route('products.detail',['id'=>$new->id])}}">
                <img src="{{asset('images/'.$new->cover)}}" class="w-100">
                <h3>{{$new->title}}</h3>
                @if($new->sale)
                <div class="text-secondary">
                    <del>NT.{{$new->price}}</del>
                </div>
                <div class="text-danger fw-bold">
                    NT.{{$new->sale}}
                </div>
                @else
                <div class="fw-bold">
                    NT.{{$new->price}}
                </div>
                @endif
            </a>
        </div>
        @endforeach
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>特價商品</h2>
        </div>
        @foreach ($sale_products as $sale)
        <div class="col-3">
            <a href="{{route('products.detail',['id'=>$sale->id])}}">
                <img src="{{asset('images/'.$sale->cover)}}" class="w-100">
                <h3>{{$sale->title}}</h3>
                @if($sale->sale)
                <div class="text-secondary">
                    <del>NT.{{$sale->price}}</del>
                </div>
                <div class="text-danger fw-bold">
                    NT.{{$sale->sale}}
                </div>
                @else
                <div class="fw-bold">
                    NT.{{$sale->price}}
                </div>
                @endif
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
