<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('admin.template.nav')
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
        <ul>
            <li></li>
        </ul>
    </div>
</body>
</html>
