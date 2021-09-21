<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Edit</title>
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>タスク編集</h1>
    <div class="button-group">
        <form action="/tasks/{{ $task->id }}" method="POST" id="update">
            @csrf
            @method('PATCH')
            <p>
                <label for='title'>タイトル</label>
                <input type="text" name="title" value="{{ old('title', $task->title) }}">
            </p>
            <p>
                <label for='body'>内容</label>
                <textarea name="body">{{ old('body', $task->body) }}</textarea>
            </p>
            <input type="submit" value="更新" form="update">
            <button type="button" onclick="location.href='/tasks'">詳細に戻る</button>
        </form>
        </div>
</body>

</html>
