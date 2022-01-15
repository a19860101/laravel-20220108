@extends('template.master')
@section('main')
@include('template.header')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2>最新商品</h2>
        </div>
        @foreach ($products as $new)
        <div class="col-3">
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
        </div>
        @endforeach
    </div>
</div>
@endsection
