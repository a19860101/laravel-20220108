@extends('template.master')

@section('main')
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-6">
            <img src="{{asset('images/'.$product->cover)}}" class="w-100">
        </div>
        <div class="col-6">
            <h3>{{$product->title}}</h3>
            @if($product->sale != null)
            <div class="text-secondary">
                <del>{{$product->price}}</del>
            </div>
            <div class="text-danger fw-bold">
                {{$product->sale}}
            </div>
            @else
            <div class="fw-bold">
                {{$product->price}}
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{$product->description}}
        </div>
    </div>
</div>

@endsection
