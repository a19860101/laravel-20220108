@extends('template.master')
@section('main')
    @include('template.headerSmall')
    <div class="container my-5">
        <div class="row">
            @if(count($products) == 0)
            <div class="col-12">
                目前尚無商品
            </div>
            @endif
            @foreach($products as $product)
            <div class="col-3">
                <img src="{{asset('images/'.$product->cover)}}" class="w-100">
                <h3>{{$product->title}}</h3>
                @if($product->sale)
                <div class="text-secondary">
                    <del>NT.{{$product->price}}</del>
                </div>
                <div class="text-danger fw-bold">
                    NT.{{$product->sale}}
                </div>
                @else
                <div class="fw-bold">
                    NT.{{$product->price}}
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
@endsection
