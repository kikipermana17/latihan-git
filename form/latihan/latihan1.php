<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
    <form action="latihanpro.php" method="post">
        <fieldset>
        <legend>
        <h2>RENTAL MOBIL</h2>
        </legend>
        <table>

        <tr>
            <td>Nama </td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
     
        <tr>
            <td>Nomor Induk Kependudukan </td>
            <td>:</td>
            <td><input type="text" name="nik"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Laki - Laki">Laki Laki</td>
            <td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama">
            <option value=" ">Pilih Agama </option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            </select></td>
        </tr>
     
        <tr>
            <td>Nama Mobil</td>
            <td>:</td>
            <td><input type="text" name="mobil"></td>
        </tr>

        <tr>
            <td>Jenis Mobil</td>
            <td>:</td>
            <td><select name="jenis">
            <option value=" ">Pilih Jenis Mobil </option>
            <option value="Honda">Honda</option>
            <option value="Sedan">Sedan</option>
            <option value="Toyota">Toyota</option>
            <option value="Suv">Suv</option>
            </select></td>
        </tr>
        
        <tr>
            <td>Merek Mobil</td>
            <td>:</td>
            <td><select name="merk">
            <option value=" ">Pilih Merk Mobil </option>
            <option value="Honda">Honda</option>
            <option value="Daihatsu">Daihatsu</option>
            <option value="Toyota">Toyota</option>
            <option value="Mitsubihi">Mitsubihi</option>
            </select></td>
        </tr>

        <tr>
            <td>Plat Mobil</td>
            <td>:</td>
            <td>
            <input type="checkbox" name="plat" value="A 2432 DSC" checked>A 2432 DSC<br>
            <input type="checkbox" name="plat" value="B 5434 HGF" checked>B 5434 HGF<br>
            <input type="checkbox" name="plat" value="D 5464 TZY" checked>D 5464 TZY<br></td>
        </tr>

        <tr>
            <td>Tanggal Peminjaman</td>
            <td>:</td>
            <td><input type="date" name="tanggalPinjam"></td>
        </tr>
        
        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><input type="date" name="tanggalKembali"></td>
        </tr>
       
        <tr>
            <td>Penjamin</td>
            <td>:</td>
            <td><select name="penjamin">
            <option value=" ">Pilih Penjamin </option>
            <option value="Fotocopyktp">Fotocopyktp</option>
            <option value="Fotocopysim">Fotocopysim</option>
            <option value="Fotocopykk">Fotocopykk</option>
            </select></td>
        </tr>

    <tr>
        <td>Supir</td> 
        <td>:</td>
        <td><select name="supir" require>
        <option value=" ">Pilih Menggunakan Supir </option>
        <option value="Ya">Ya</option>
        <option value="Tidak">Tidak</option>
        </select></td>
    </tr>
        </table>
        
        <input type="submit" name="save" value="save">
        <input type="reset" name="reset" value="clear">
    </fieldset>
    </form>


</body>
</html>