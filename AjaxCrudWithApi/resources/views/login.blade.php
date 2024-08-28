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
    <div class="container">
       <div class="col-md-4 mt-5 border p-3">
        <h2 class="my-3 text-center">Login</h2>
        <form action="" method="POST">
            <div class="mb-1">
                <label for="">Email:</label>
                <input type="text" id="email" name="email" class="mt-1 form-control @error('email') is-invalid @enderror ">
                <p class="text-danger">@error('email') {{$message}} @enderror</p>
            </div>
            <div class="mb-1">
                <label for="">Password:</label>
                <input type="text" id="password" name="password" class="mt-1 form-control @error('password') is-invalid @enderror ">
                <p class="text-danger">@error('password') {{$message}} @enderror</p>
            </div>
            <button id="loginbtn" class="btn btn-sm btn-success">Login</button>
        </form>
       </div>
    </div> 
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#loginbtn').on('click', function(){
                const email=$('#email').val();
                const password=$('#password').val();
                $.ajax({
                    url:'/api/login',
                    type:'POST',
                    content-Type:'application/json',
                    data:JSON.stringify({
                        email:email,
                        password:password,
                    });
                    success:function(response){
                        console.log(response);
                    }
                    localStorage.setItem('api_token',response.token);
                    window.location.href='http://localhost:8000/allpost'
                },
            error:function(xkr,status,error){
                
            })
            })
        });
    </script>
</body>
</html>