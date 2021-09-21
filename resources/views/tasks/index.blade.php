<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Index</title>
</head>
<body>    
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
        <div class="button-group">
            <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            <form action="/tasks/{{ $task->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する" onclick="if(!confirm('本当に削除しますか？')){return false};">
            </form>
        </div>
    @endforeach
    <hr>

    <h1>新規タスク投稿</h1>
    <form action="/tasks" method="POST">
        @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">内容</label>
            <textarea name="body">{{ old('body') }}</textarea>
        </p>
        <input type="submit" value="create task" onclick="location.href='/task'">
    </form>
</body>
</html>
