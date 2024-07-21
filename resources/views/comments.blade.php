<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>

/////////////////


<br>
<h3>this is the comments page</h3>
<br>


this is the commments <br>
    @foreach ($comments as $comment)
        <td>{{$comment->content}}</td>
        <br>
    @endforeach
<br>
<br>

--------------------start form form --------------- <br><br>
@if ($errors->any())
    @foreach ($errors->all() as $error)
         {{ $error }}
    @endforeach

@endif

<form action="" method="post">
@csrf
<input type="text" name="name" placeholder="enter name"><br>
<input type="password" name="password" placeholder="enter password"><br>
<input type="submit" value="submit">
</form>

--------------------end form --------------- <br><br>






///////////////////////
</body>
</html>
