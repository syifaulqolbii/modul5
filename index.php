<html>
<head>
    <title>Input Data</title>
</head>
<body>
<form action="controller/AddMahasiswa.php" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                <input type="radio" name="kelas" value="A" required>A
                <input type="radio" name="kelas" value="B" required>B
                <input type="radio" name="kelas" value="C" required>C
            </td>
        </tr>
        <tr>
            <td>Alamaat</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>