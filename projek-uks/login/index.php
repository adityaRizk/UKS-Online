<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style>
    .side{
        min-height: 100vh;
        width: 300px; 
        background-color: #96dfaa;
    }

    h1{
        display: inline;
        color: white;
    }
    label{
        color:  rgba(131, 131, 131, 0.582);
    }
    p{
        color:  rgba(131, 131, 131, 0.582);
    }
    .kotak{
        background-color: rgba(209, 209, 209, 0.582);
    }
    .kotak2{
        margin: auto;
    }
    .in{
        background-color: rgba(190, 190, 190, 0.582);
    }
    input{
        margin: auto;
    }
    h2{
        text-align: center;
    }
    .img{
        margin: auto;
        display: block; 
    }
    a{
        transition: 0.5s;
        text-decoration: none;
        color: rgba(131, 131, 131, 0.582);
    }
    .f{
        margin: auto;
    }

</style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="f col-lg-5 col-12 mt-5">
            <div class="kotak p-2">
            <img src="../foto/bck.png" width="100px" class="img">
                <h2 class="text-2">Welcome!</h2>
                    <h2 class="tes">Please login</h2>
                    <div class="kotak2 w-50">
                        <form action="process.php" method="POST">
                            <label for="username" class="label">username</label><br>
                            <input type="text" name="username" id="username" class="in form-control" placeholder="masukan Nama"><br>
                            
                            
                            <label for="password" class="label">password</label><br>
                            <input type="password" name="password" id="password" class="in form-control" placeholder="masukan password"><br>

                            <p class="label">Do You have an account? <a href="../register/index.php" class="label">Register</a></p>

                            <button type="submit" name="submit" class="btn btn-success">Login</button><br><br>
                        </form>
                    </div>                   
            </div>
        </div>
    </div>
</html>