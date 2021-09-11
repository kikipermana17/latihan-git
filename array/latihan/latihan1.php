<?php
    $data = [
        [
            'namaMahasiswa'=>"Abdul",
            'mataKuliah'=>[
                ['mataKuliah'=>'Sejarah'],
                ['mataKuliah'=>'Hukum'],
                ['mataKuliah'=>'Kimia'],
            ],
            'hobi'=>[
                ['hobi'=>'SepakBola'],
                ['hobi'=>'Tenis Meja'],
            ],
            'namaDosen'=>'Aceng FIkri'
        ],
        [
            'namaMahasiswa'=>"Ahmad",
            'mataKuliah'=>[
                ['mataKuliah'=>'Fisika'],
                ['mataKuliah'=>'Bahasa'],
                ['mataKuliah'=>'Biologi'],
            ],
            'hobi'=>[
                ['hobi'=>'Bulu Tangkis'],
                ['hobi'=>'Main Game'],
            ],
            'namaDosen'=>'Aceng FIkri'
        ],
        [
            'namaMahasiswa'=>"Acep",
            'mataKuliah'=>[
                ['mataKuliah'=>'Sains'],
                ['mataKuliah'=>'Kimia'],
                ['mataKuliah'=>'Sejarah'],
            ],
            'hobi'=>[
                ['hobi'=>'Mancing'],
                ['hobi'=>'Berburu'],
            ],
            'namaDosen'=>'Aceng FIkri'
        ],
        [
            'namaMahasiswa'=>"Nadin",
            'mataKuliah'=>[
                ['mataKuliah'=>'Bahasa'],
                ['mataKuliah'=>'Matematika'],
                ['mataKuliah'=>'Biologi'],
            ],
            'hobi'=>[
                ['hobi'=>'Membaca'],
                ['hobi'=>'Menulis'],
            ],
            'namaDosen'=>'Ujang Betok'
        ],
        [
            'namaMahasiswa'=>"Zara",
            'mataKuliah'=>[
                ['mataKuliah'=>'Bahasa'],
                ['mataKuliah'=>'Sejarah'],
                ['mataKuliah'=>'Hukum'],
            ],
            'hobi'=>[
                ['hobi'=>'Membaca'],
                ['hobi'=>'Melukis'],
            ],
            'namaDosen'=>'Ujang Betok'
        ],
        [
            'namaMahasiswa'=>"Andin",
            'mataKuliah'=>[
                ['mataKuliah'=>'RPL'],
                ['mataKuliah'=>'Database'],
                ['mataKuliah'=>'Produktif'],
            ],
            'hobi'=>[
                ['hobi'=>'Mapala'],
                ['hobi'=>'Bersepeda'],
            ],
            'namaDosen'=>'Ujang Betok'
        ],
    ];
   // $no = 1;
    //foreach($data as $key => $val) {
       // echo "<li>Data Ke-". $no++. "</li>";
       // echo "Nama Mahasiswa : ". $val['namaMahasiswa']."<br>";
       // echo "<ul>";
        
       // echo "Daftar Mata Kuliah :";
        //    echo "<ol>";
        //    foreach($val['mataKuliah'] as $sub) {
         //       echo "<li>". $sub['mataKuliah']. "</li>";
          //  }
          //  echo "</ol>";
          //  echo "Daftar Hobi : ";
           // echo "<ol>";
       // foreach($val['hobi'] as $hobi) {
         //   echo "<li>". $hobi['hobi']. "</li>";
       // }
       // echo "</ol>";
       // echo "Nama Dosen : ". $val['namaDosen']. "<br>";
        //echo"<br>";
    //echo "</ul>";
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend>Data Mahasiswa</legend>
        <table border=1>
            <tr>
            <th><?php echo "No"; ?></th>
            <th><?php echo "Nama Mahasiswa"; ?></th>
            <th><?php echo "Nama Dosen"; ?></th>
                <th><?php echo "Mata Kuliah"; ?></th>
                <th><?php echo "Hobi"; ?></th>
    
            </tr>
        <?php
        $no=1;?>
        <?php foreach($data as $val){
                ?><tr><td><?php 
                echo $no++;?></td>
                <td><?php echo $val['namaMahasiswa'];?></td>
                <td><?php echo $val['namaDosen'];?></td>
                <?php
                echo "<td>";
                echo "<ul>";
                foreach($val['mataKuliah'] as $sub){
                    ?><li><?php echo $sub['mataKuliah'];?>
                <?php
                }
                echo "</ul>";
                echo "</td><td>";
                echo "<ul>";
                ?><?php
                foreach($val['hobi'] as $hobi){
                    echo "<li>".$hobi['hobi'];
                }
                echo "</ul>";
                echo "</td></li>";
                    
            }
?>
        </table>
    </fieldset>
</body>
</html>