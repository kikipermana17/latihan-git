<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <legend>Mahasiswa</legend>
        <table>
        <form action=" " method="post">
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>: <input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>: <input type="text" name="matkul"></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td>: <input type="text" name="dosen"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>: <input type="number" name="nilai" min=1 max=100></td>
            </tr>
            <tr>
                <td><input type="submit" name="save" value="save"><input type="reset" name="reset" value="reset"></td>
            </tr>

        </form>
    </table>

<?php

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $dosen = $_POST['dosen'];

    class mahasiswa
    {

        public function __construct($nilai)
        {
            $this->nilai = $nilai;

        }
    }

    class guru extends mahasiswa
    {
        public function sifat()
        {

            if ($this->nilai >= 85) {
                $tugas = "Lulus";
            } elseif ($this->nilai >= 75) {
                $tugas = "Lulus";
            } elseif ($this->nilai >= 65) {
                $tugas = "Perbaikan";
            } elseif ($this->nilai <= 65) {
                $tugas = "Tidak Lulus";
            }
            return $tugas;
        }

        public function grade()
        {

            if ($this->nilai >= 85) {
                $grd = "Grade A";
            } elseif ($this->nilai >= 75) {
                $grd = "Grade B";
            } elseif ($this->nilai >= 65) {
                $grd = "Grade C";
            } elseif ($this->nilai <= 65) {
                $grd = "Grade D";
            }
            return $grd;

        }
    }
    $input = new guru($nilai);
    ?>
<table>
    <tr>
        <td><?php echo "Nama Mahasiswa : " . $nama . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Nim : " . $nim . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Mata Kuliah : " . $matkul . "<br>"; ?> </td>
    </tr>
     <tr>
        <td><?php echo "Nama Dosen : " . $dosen . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Nilai : " . $nilai . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Grade : " . $input->grade() . "<br>"; ?> </td>
    </tr>
    <tr>
        <td><?php echo "Status : " . $input->sifat() . "<br>"; ?> </td>
    </tr>
</table>
<?php
}
?>

</body>
</html>
