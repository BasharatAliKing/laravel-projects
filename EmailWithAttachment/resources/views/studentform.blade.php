<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <form action="{{route('submitform')}}" method="POST" class="col-md-4 p-3 border" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center">Student Form</h3>
        <div class="mb-1">
            <label for="">Name:</label>
            <input type="text" class="form-control mt-1 @error('name') is-invalid @enderror" name="name">
            <p class="text-danger">@error('name')    {{$message}}   @enderror</p>
        </div>
        <div class="mb-1">
            <label for="">Email:</label>
            <input type="text" class="form-control mt-1 @error('email') is-invalid @enderror" name="email">
            <p class="text-danger">@error('email')    {{$message}}   @enderror</p>
        </div>
        <div class="mb-1">
            <label for="">Age:</label>
            <input type="text" class="form-control mt-1 @error('age') is-invalid @enderror" name="age">
            <p class="text-danger">@error('age')    {{$message}}   @enderror</p>
        </div>
        <div class="mb-1">
            <label for="">Roll No:</label>
            <input type="text" class="form-control mt-1 @error('roll') is-invalid @enderror" name="roll">
            <p class="text-danger">@error('roll')    {{$message}}   @enderror</p>
        </div>
        <div class="mb-1">
            <label for="">File:</label>
            <input type="file" class="form-control mt-1 @error('file') is-invalid @enderror" name="file">
            <p class="text-danger">@error('file')    {{$message}}   @enderror</p>
        </div>
        <button class="btn btn-sm btn-success mt-2">Submit</button>
    </form>
    </div>
</body>
</html>