<?php
include '../connection_gudang.php';
error_reporting(E_ALL);
$kode_gudang = $_POST['kode_gudang'];
$nama_gudang = $_POST['nama_gudang'];
$alamat_gudang = $_POST['alamat_gudang'];
$submit = $_POST['submit'];

if (isset($submit)) {
    $sql = "INSERT INTO gudang (kode_gudang, nama_gudang, lokasi) VALUES ('$kode_gudang', '$nama_gudang', '$alamat_gudang')";
    if (mysqli_query($conn, $sql)) {
        echo "alert('New record created successfully')";
        header("Location: ../view/gudangView.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
