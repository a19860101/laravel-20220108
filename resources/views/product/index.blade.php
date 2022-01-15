@extends('template.master')
@section('main')
@include('template.headerSmall')
<div class="container my-5">
    <div class="row">
        @foreach($products as $product)
        <div class="col-3">
            <a href="{{route('products.detail',['id'=>$product->id])}}">

                <img src="{{asset('images/'.$product->cover)}}" class="w-100">
                <div>
                    {{$product->title}}
                </div>
                @if($product->sale)
                <div class="text-secondary">
                    <del>NT.{{$product->price}}</del>
                </div>
                <div class="text-danger fw-bold">
                    NT.{{$product->product}}
                </div>
                @else
                <div class="fw-bold">
                    NT.{{$product->price}}
                </div>
                @endif
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
