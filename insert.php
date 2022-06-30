<?php
require_once('koneksi.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];

    $sql = "insert into siswa (nama,kelas,jurusan,alamat,hp) values ('$nama','$kelas','$jurusan','$alamat','$hp')";

    if(mysqli_query($con, $sql)){
        echo "Data berhasil di tambahkan";
    }else{
        echo "Data gagal di tambahkan";
    }

    mysqli_close($con);
}
?>