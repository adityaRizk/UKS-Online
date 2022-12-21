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


function ambilObat($data){
    global $conn;
    $waktu_pengambilan = htmlspecialchars ($data["waktu_pengambilan"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $kelas = htmlspecialchars ($data["kelas"]);
    $jenis_obat = htmlspecialchars ($data["jenis_obat"]);
    $nama_obat = htmlspecialchars ($data["nama_obat"]);
    $jumlah_obat = htmlspecialchars ($data["jumlah_obat"]);
    $status = htmlspecialchars ($data["status"]);

    $query = "INSERT INTO data_pengambilan_obat VALUES(NULL, '$waktu_pengambilan', '$nama_lengkap', '$kelas', '$jenis_obat','$nama_obat','$jumlah_obat','$status')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function tambahKunjungan($data){
    global $conn;
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $kelas = htmlspecialchars ($data["kelas"]);
    $tanggal = htmlspecialchars ($data["tanggal"]);
    $keperluan = htmlspecialchars ($data["keperluan"]);

    
    
    $query = "INSERT INTO data_kunjungan VALUES(NULL, '$nama_lengkap', '$kelas', '$tanggal','$keperluan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

    
}

?>