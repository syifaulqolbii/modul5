<html>
<head>
    <title>Show Data Mahasiswa</title>
</head>
<body>
<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th colspan="2">Action</th>

    </tr>
    <?php
    include '../connection.php';
    $sql = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $sql);
    $no = 1;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['NIM']; ?></td>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Kelas']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><a href="editMahasiswaView.php">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <?php
        }
    } else {
        echo "0 results";
    }
    ?>
</table>
</html>