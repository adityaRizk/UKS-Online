<?php
require '../koneksi.php';

function query($query){
    
    global $conn;
    $row = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambahUser($data){
    global $conn;
    $username = htmlspecialchars ($data["username"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $password = htmlspecialchars ($data["password"]);
    $roles = htmlspecialchars ($data["roles"]);

    $query = "INSERT INTO user VALUES(NULL, '$username', '$nama_lengkap', '$password', '$roles')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapusUser($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");
    return mysqli_affected_rows($rows);
}

function editUser($data){
    global $conn;

    $id = htmlspecialchars($data["id_user"]);    
    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "UPDATE user SET 
    username = '$username',
    nama_lengkap = '$nama_lengkap',
    password = '$password',
    roles = '$roles' WHERE id_user = '$id'
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}


function tambahObat($data){
    global $conn;

    $nama_obat = htmlspecialchars($data["nama_obat"]);    
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $jenis = htmlspecialchars($data["jenis"]);
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO data_obat VALUES(NULL, '$nama_obat', '$foto', '$jenis', '$stok', '$deskripsi')";
    move_uploaded_file($files, "../foto/".$foto);
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function hapusObat($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM data_obat WHERE id_obat = '$id'");
    return mysqli_affected_rows($rows);
}


function editObat($data){
    global $conn;

    $id = htmlspecialchars($data["id_obat"]);    
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $jenis = htmlspecialchars($data["jenis"]);
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);


    if(empty($foto)){

    $query = "UPDATE data_obat SET 
    nama_obat = '$nama_obat',
    jenis = '$jenis',
    stok = '$stok',
    deskripsi = '$deskripsi' WHERE id_obat = '$id'
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

    }else{

    $query = "UPDATE data_obat SET 
    nama_obat = '$nama_obat',
    foto = '$foto',
    jenis = '$jenis',
    stok = '$stok',
    deskripsi = '$deskripsi' WHERE id_obat = '$id'
    ";

    move_uploaded_file($files, "../foto/".$foto);
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
    }
    
}

function hapusKunjugan($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM data_kunjungan WHERE id_kunjungan = '$id'");
    return mysqli_affected_rows($rows);
}


function editKunjungan($data){
    global $conn;

    $id = htmlspecialchars($data["id_kunjungan"]);    
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $keperluan = htmlspecialchars($data["keperluan"]);


    if(empty($foto)){

    $query = "UPDATE data_kunjungan SET 
    nama_lengkap = '$nama_lengkap',
    kelas = '$kelas',
    tanggal = '$tanggal',
    keperluan = '$keperluan' WHERE id_kunjungan = '$id'
    ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

    }else{

    $query = "UPDATE data_kunjungan SET 
    nama_lengkap = '$nama_kunjungan',
    foto = '$foto',
    kelas = '$kelas',
    tanggal = '$tanggal',
    keperluan = '$keperluan' WHERE id_kunjungan = '$id'
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
    }
    
}

?>