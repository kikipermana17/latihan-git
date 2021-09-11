<html>
    <fieldset>
        <legend>Perhitungan Bangun Ruang</legend>
    <form action=" " method="post">
        Jari Jari : <input type="text" name="jari">
        <input type="submit" name="save" value="save">
</form>

<?php
if (isset($_POST['save'])) {
    $a = $_POST['jari'];

function luasRuang ($jari, $phi = 3.14)
 {
  $luas = $phi * $jari * $jari;
  return $luas;
}
function kelilingRuang ($jari, $phi = 3.14) 
{
    $keliling = ($jari * $phi) * 2;
    return $keliling;
  }
?>
Jari Jari = <?php echo $a ?><br>
Luas Lingkaran : <?php echo luasRuang($a);?><br>
Keliling Lingkaran : <?php echo kelilingRuang($a); ?>
<?php } ?>
</fieldset>
</html>
