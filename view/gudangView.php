<html>
<head>
    <title>Show Data Gudang</title>
</head>
<body>
<h1>Show Data Gudang</h1>
<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Gudang</th>
        <th>Nama Gudang</th>
        <th>Alamat Gudang</th>
        <th colspan="2">Action</th>

    </tr>
    <?php
    include '../connection_gudang.php';
    $sql = "SELECT * FROM gudang";
    $result = mysqli_query($conn, $sql);
    $no = 1;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['kode_gudang']; ?></td>
                <td><?php echo $row['nama_gudang']; ?></td>
                <td><?php echo $row['lokasi']; ?></td>
                <td><a href="editGudangView.php">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <?php
        }
    } else {
        echo "0 results";
    }
    ?>
</html>
