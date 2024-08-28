<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Hello Admin.</h3>
        <h3>Name:{{$request['name']}}</h3>
        <h3>Email:{{$request['email']}}</h3>
        <h3>Age: {{$request['age']}}</h3>
        <h3> Roll : {{$request['roll']}}</h3>
    </div>
</body>
</html>