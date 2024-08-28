<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B.D Register..</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-3 shadow">
                <h2 class="my-3 text-center">SignUp</h2>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror  " name="name">
                        <span class="text-danger">@error('name') {{$message}} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" name="email">
                        <span class="text-danger">@error('email') {{$message}} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror"" name="password">
                        <span class="text-danger">@error('password') {{$message}} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" value="{{old('password_confirmation')}}" class="form-control" name="password_confirmation">
                        <span class="text-danger">@error('password_confirmation') {{$message}} @enderror </span>
                    </div>
                    <button class="btn btn-sm btn-success mt-3">SignUp</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>