<?php
    $categories = \App\Category::get();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}">QWERTY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('products.index')}}" class="nav-link">所有商品</a>
                </li>
                @foreach($categories as $category)
                <li class="nav-item">
                    <a href="#" class="nav-link">{{$category->title}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

