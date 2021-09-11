<?php
$data = '{
  "Instructions": "delete everything in this object and make your own JSON object using different data.",
  "Title": "Spider-Man",
  "Year": "1967",
  "Rated": "Approved",
  "Released": "22 Dec 1967",
  "Runtime": "106 min",
  "Genre": [
    "Comedy",
    "Drama",
    "Romance"
  ],
  "Director": "Mike Nichols",
  "Writers": [
    "Calder Willingham (screenplay)",
    "Buck Henry (screenplay)",
    "Charles Webb (based on the novel by)"
  ],
  "Actors": [
    "Anne Bancroft",
    "Dustin Hoffman",
    "Katharine Ross",
    "William Daniels"
  ],
  "Plot": "Ben has recently graduated college, with his parents now expecting great things from him. At his \"Homecoming\" party,<br> Mrs. Robinson, the wife of his fathers business partner, has Ben drive her home, which leads to an affair between the two.<br> The affair eventually ends, but comes back to haunt him when he finds himself falling for Elaine, Mrs. Robinsons daughter.",
  "Language": "English",
  "Country": "USA",
  "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
  "Poster": "https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
  "imdbRating": "8.1",
  "imdbVotes": "183,131",
  "imdbID": "tt0061722"
}';
$json = json_decode($data);

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
      <table>
    <center>Data Film</center>
    <center><b><?php echo $json->Title;?></b></center>
    <center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" alt="Spiderman3" width="400" height="600"></center>
    <center><?php echo $json->Plot;?></center>
    <br><br>
    <tr>
        <th style='text-align:left'>Judul Film </th>
        <td>:<?php echo $json->Title;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>Tahun Rilis </th>
        <td>:<?php echo $json->Year;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>Tanggal Rilis </th>
        <td>:<?php echo $json->Released;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>Lama Durasi </th>
        <td>:<?php echo $json->Runtime;?></td>
    </tr>
    
    <tr>
        <th style='text-align:left'>Genre </th>
        <td><li><?php echo implode("<li> ", $json->Genre); ?></li></td>
    </tr>
    
    <tr>
        <th style='text-align:left'>Penulis </th>
        <td><li><?php echo implode("<li> ", $json->Writers); ?></li></td>
    </tr>
    <tr>
        <th style='text-align:left'>Aktor </th>
        <td><li><?php echo implode("<li> ", $json->Actors); ?></li></td>
    </tr>
    <tr>
        <th style='text-align:left'>Director </th>
        <td>:<?php echo $json->Director;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>Language </th>
        <td>:<?php echo $json->Language;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>Country </th>
        <td>:<?php echo $json->Country;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>Awards </th>
        <td>:<?php echo $json->Awards;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>Rating </th>
        <td>:<?php echo $json->Rated;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>imdbRating </th>
        <td>:<?php echo $json->imdbRating;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>imdbVotes </th>
        <td>:<?php echo $json->imdbVotes;?></td>
    </tr>
    <tr>
        <th style='text-align:left'>imdbID </th>
        <td>:<?php echo $json->imdbID;?></td>
    </tr>
    </table>
</fieldset>

</body>
</html>