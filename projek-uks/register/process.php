<?php 

require '../koneksi.php';

$nama_lengkap = htmlspecialchars ($_POST["nama_lengkap"]);
$username = htmlspecialchars ($_POST["username"]);
$password = htmlspecialchars ($_POST["password"]);
$roles = htmlspecialchars ($_POST["roles"]);

$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$username', '$nama_lengkap', '$password', '$roles')");

if($query){
    echo "
        <script type='text/javascript'>
            alert('Register berhasil, silahkan login');
            window.location = '../login/index.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Register gagal, silahkan cek data kamu kembali!');
        window.location = '../login/index.php';
    </script>
";
}

?>