<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>ホーム画面</h1>
    <p>テキストを入力</p>
    <form action="/" method="post">
        @csrf
        <input name="text" type="text">
        <input type="submit" value="送信">
    </form>
    <table border="1">
        @foreach ($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->text}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
