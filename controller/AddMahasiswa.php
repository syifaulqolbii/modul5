<?php
include '../connection.php';
error_reporting(E_ALL);
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$submit = $_POST['submit'];

if (isset($submit)) {
    $sql = "INSERT INTO mahasiswa (nim, nama, kelas, alamat) VALUES ('$nim', '$nama', '$kelas', '$alamat')";
    if (mysqli_query($conn, $sql)) {
        echo "alert('New record created successfully')";
        header("Location: ../view/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
