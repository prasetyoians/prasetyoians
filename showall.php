<?php
require_once('koneksi.php');

$sql = "select *from siswa";

$r = mysqli_query($con, $sql);

$hasil = array();

while($row = mysqli_fetch_array($r)){
    array_push($hasil, array(
        'id' => $row['id'],
        'nama' => $row['nama'],
        'kelas' => $row['kelas'],
        'jurusan' => $row['jurusan'],
        'alamat' => $row['alamat'],
        'hp' => $row['hp'],
    ));
}

echo json_encode(array('result'=> $hasil));

mysqli_close($con);
?>