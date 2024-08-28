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
        <h1>All Soldiers Data</h1>
        <a href="addsoldier" class="btn btn-sm btn-success my-3">Add Soldier</a>
        <div class="row">
            <div class="col-md-9">
                <table class="table border table-striped border">
                       <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Rank</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                       </thead>
                       <tbody>
                        @foreach ($data as $id=>$soldier)
                        <tr>
                            <td>{{$soldier->id}}</td>
                            <td>{{$soldier->name}}</td>
                            <td>{{$soldier->age}}</td>
                            <td>{{$soldier->rank}}</td>
                            <td>{{$soldier->contact}}</td>
                            <td>{{$soldier->address}}</td>
                            <td>
                                <a href="{{route('view',$soldier->id)}}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{route('delete',$soldier->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                <a href="{{route('update',$soldier->id)}}" class="btn btn-sm btn-warning">Update</a>
                            </td>
                        </tr>
                            
                        @endforeach
                       </tbody>
                </table>
                {{$data->links()}}
            </div>
        </div>
    </div>
</body>
</html>