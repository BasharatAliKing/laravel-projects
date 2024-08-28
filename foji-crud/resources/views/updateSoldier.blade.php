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
        <h1>Update Soldier</h1>
        <div class="row">
            <div class="col-md-4 p-3 shadow border">
               @foreach ($data as $id=>$soldier )
               <form action="{{route('updatesoldier',$soldier->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{$soldier->name}}" name="name" required>
                </div>
                <div class="form-group">
                    <label for="name">Age</label>
                    <input type="number" class="form-control" value="{{$soldier->age}}" name="age" required>
                </div>
                <div class="form-group">
                    <label for="name">Rank</label>
                    <input type="text" class="form-control" value="{{$soldier->rank}}" name="rank" required>
                </div>
                <div class="form-group">
                    <label for="name">Contact</label>
                    <input type="number" class="form-control" value="{{$soldier->contact}}" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" class="form-control" value="{{$soldier->address}}" name="address" required>
                </div>
                <button class="btn btn-sm btn-warning mt-3">Update Soldier</button>
            </form>
               @endforeach
            </div>
        </div>
    </div>
</body>
</html>