<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel View</title>
</head>
<body>
    <h1>This is our first Laravel view.</h1>
    <div>Hello, {{ $name }}.</div>
    <a href='/test'>Test</a><br>
    <a href="{{route('test')}}">Test route</a>
</body>
</html>