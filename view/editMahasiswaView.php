<?php
include '../connection.php';
$nim = $_GET['nim'];
$sql = "SELECT * FROM mahasiswa WHERE NIM='$nim'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
<form action="../controller/EditMahasiswa.php" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="<?php echo $row['NIM']; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $row['Nama']; ?>" required></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                <input type="radio" name="kelas" value="A" <?php if ($row['Kelas'] == "A") {
                    echo "checked";
                } ?> required>A
                <input type="radio" name="kelas" value="B" <?php if ($row['Kelas'] == "B") {
                    echo "checked";
                } ?> required>B
                <input type="radio" name="kelas" value="C" <?php if ($row['Kelas'] == "C") {
                    echo "checked";
                } ?> required>C
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $row['Alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </table>
</body>
</html>