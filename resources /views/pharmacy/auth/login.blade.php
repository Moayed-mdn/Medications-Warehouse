<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/pharmacy/login" method="POST">
        @csrf
        <input type="text" name='phone_number' placeholder="phone nubmer">
        <input type="text" name='password' placeholder="password">
        <button>Submit</button>
    </form>

    @if(session("error"))
        {{session("error")}}
    @endif
</body>
</html>