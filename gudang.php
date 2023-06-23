<html>
<head>
    <title>Input Data Gudang</title>
</head>
<body>
<h1>Input Data Gudang</h1>
<form action="controller/AddGudang.php" method="post">
    <table>
        <tr>
            <td>Kode Gudang</td>
            <td><input type="text" name="kode_gudang" required></td>
        </tr>
        <tr>
            <td>Nama Gudang</td>
            <td><input type="text" name="nama_gudang" required></td>
        </tr>
        <tr>
            <td>Alamat Gudang</td>
            <td><input type="text" name="alamat_gudang" required></td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </table>
</html>