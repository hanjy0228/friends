@extends('Home.layouts.main')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <center>
       <h1>请在这里输入私信</h1>
       <form action="si" method="post">
           {{ csrf_field() }}
           <textarea name="content" cols="100" rows="20"></textarea><br/>
           <input type="submit" value="发送">
       </form>
   </center>
</body>
</html>
@stop