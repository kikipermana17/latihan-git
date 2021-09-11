<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
    <form action="latpro.php" method="post">
        <fieldset>
        <legend>
        <h2>PENGGAJIAN</h2>
        </legend>
        <table>
        <label>Nama : </label>
        <input type="text" name="nama">
        <br>
        <label>Jenis Kelamin : </label>
        <input type="radio" name="jk" value="Laki - Laki">Laki Laki
        <input type="radio" name="jk" value="Perempuan">Perempuan
        <br>
        <label>Agama : </label>

    <select name="agama">
        <option value=" ">Agama </option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select><br>

        <td>Golongan</td> 
        <td>:</td>
        <td><select name="golongan" require>
        <option value=" ">Golongan </option>
        <option value="1">Golongan 1</option>
        <option value="2">Golongan 2</option>
        <option value="3">Golongan 3</option>
        <option value="4">Golongan 4</option>
        </select>
        </td>

        <tr>
            <td>
                <label for="jamkerja">Jam Kerja</label>
            </td>
            <td>
                :
            </td>
            <td>
                <input type="number" name="jamKerja" value="jam">
            </td>
        </tr>
        </table>
        
        <input type="submit" name="save" value="save">
    </fieldset>
    </form>


</body>
</html>