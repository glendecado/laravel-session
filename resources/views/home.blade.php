<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('getValue')}}" method="post">
        @csrf
        <input type="text" name="FirstName">
        <input type="text" name="LastName">
        <input type="submit" value="Submit">
    </form>
    {{$stSample}}

    <a href="/SessionDisplay">link</a>
</body>
</html>