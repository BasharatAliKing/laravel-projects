<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Add User</h1>
        <div class="row">
            <div class="col-md-4 shadow border p-3">
                <form action="{{route('add')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="username" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror">
                    @error('username')
    <div class="text-danger">{{ $message }}</div>
@enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="useremail" value="{{old('useremail')}}" class="form-control @error ('useremail') is-invalid  @enderror ">
                    @error('useremail')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="userpassword" value="{{old('userpassword')}}" class="form-control @error ('userpassword')  is-invalid @enderror ">
                    @error('userpassword') <div class="text-danger">{{$message}}</div>  @enderror
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="useraddress" value="{{old('useraddress')}}" class="form-control @error('useraddress') is-invalid @enderror ">
                    @error('useraddress') <div class="text-danger">{{$message}}</div> @enderror
                </div>
                <button class="btn btn-sm btn-success mt-3">Add User</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>