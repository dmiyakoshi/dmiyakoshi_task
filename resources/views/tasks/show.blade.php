<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Show</title>
</head>
<body>
    <h1>タスク詳細</h1>
    <p>【タイトル】</p>
    <p>{{ $task->title }}</p>
    <p>【内容】</p>
    <p>{{ $task->body }}</p>
    <div class="button-group">
        <button type="button" onclick="location.href='/tasks'">一覧に戻る</button>
        <button type="button" onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
        <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('本当に削除しますか？')){return false};">
        </form>
    </div>
</button>
</body>
</html>
