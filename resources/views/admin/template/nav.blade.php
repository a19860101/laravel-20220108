<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('admin.index')}}">後台管理介面</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        @if(Auth::user()->role == 0)
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.index')}}">商品列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.create')}}">新增商品</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.create')}}">分類管理</a>
                </li>
            </ul>
        @endif
        </div>
    </div>
</nav>

