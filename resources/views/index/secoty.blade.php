<!doctype html>
<html lang="en" style="

height: 100%;
min-width: 999px;
overflow: auto;
">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>匿名小纸条</title>
</head>
<body>
<center>
    匿名小纸条
    <form action="/index/secoty_sub" method="post">
        <table>
            <input type="hidden" value="{{$id}}"><br>
            <input type="text" name="content"><br><br><br>
            <button type="submit">提交</button>
        </table>
    </form>


</center>

</body>
</html>
