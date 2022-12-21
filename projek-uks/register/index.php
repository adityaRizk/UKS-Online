<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
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
                    <h2>Please create an account</h2>
                    <div class="kotak2 w-50">
                        <form action="process.php" method="POST">

                            <label for="nama_lengkap" class="label">Nama lengkap</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" class="in form-control" placeholder="Masukan Nama lengkap"><br>
                            
                            <label for="username" class="label">username</label>
                            <input type="text" id="username" name="username" class="in form-control" placeholder="Masukan username"><br>

                            <label for="password" class="label">Passowrd</label>
                            <input type="password" id="password" name="password" class="in form-control" placeholder="Masukan Password"><br>
                            
                            <input type="hidden" name="roles" value="Siswa">

                            <p class="label">Already have an account? <a href="../index.php" class="label">Login</a></p>

                            <button type="submit" name="submit" class="tombol btn btn-success">Kirim</button>
                        </form>
                    </div>                   
            </div>
        </div>
    </div>
</html>