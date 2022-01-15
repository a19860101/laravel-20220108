@extends('admin.template.master')

@section('main')
    <div>
        <form action="{{route('category.store')}}" method="post">
            @csrf
            <div>
                <label for="title" class="form-label">分類標題</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div>
                <label for="slug" class="form-label">分類英文標題</label>
                <input type="text" name="slug" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" value="建立分類">
        </form>
    </div>
    <div>
        <ul class="list-group">
            @foreach ($datas as $data)
            <li class="list-group-item">
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
@endsection
