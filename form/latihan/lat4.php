<html>
    <head><title>Jam Kerja</title>
</head>
<body>
    <h2>Borma Kopo Sayati</h2>
    <form action="proses4.php" method="post">
    <table>
        <tr>
            <td>Jumlah Jam kerja</td>
            <td>:</td>
            <td><input type="text" name="jam" require></td>
        </tr>

        <tr>
            <td>Golongan kerja</td>
            <td>:</td>
            <td>
            <input type="radio" name="golongan" value="a" checked>A
            <input type="radio" name="golongan" value="b" checked>B
            <input type="radio" name="golongan" value="c" checked>C
            <input type="radio" name="golongan" value="d" checked>D
        </td>
        </tr>

        <tr>
    <td><input type="submit" name="input" value="proses"></td>
        </tr>
    </table>
    </form>
</body>
</html>