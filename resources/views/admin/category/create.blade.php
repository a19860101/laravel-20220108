@extends('admin.template.master')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-7">
            <h3>新增分類</h3>
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">分類標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">分類英文標題</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="建立分類">
            </form>
        </div>
        <div class="col-5">
            <h3>分類列表</h3>
            <ul class="list-group">
                @foreach ($datas as $data)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$data->title}}
                    <form action="{{route('category.destroy',['category'=>$data->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="刪除" class="btn btn-danger" onclick="return confirm('確認刪除？')">
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
