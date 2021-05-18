<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
td{
  font-size: 30px;
 border: 1px solid black;
}
table{
  background-color: white; 
}

</style>

  <?php
  $gegevens  = array(
    "Naam"    => "Samuel Adu",
    "Leeftijd"  => 19,
    "Klas"  => "0C",   
    "Muziek" => "Hip-hop",
    "Merk fiets" => "Gazelle",
    "Woonplaats"  => "Amsterdam",
    "Sport"       => "Voetbal",
    "Eten"    => "Jollof"
  );
  echo "<table style= width:60%;>";
  foreach ($gegevens as $key => $value){
    maakRij($key, $value);
  }
  
      
  
  function maakRij($key, $value){
    echo "<tr>
    <td> $key </td>
    <td> $value </td>
    </tr>";
    
}
  echo "</table>" ;
  echo "<style>table{border: ".$_POST["border"]."px solid black;}</style>";
  echo "<style>table td{padding: ".$_POST["padding"]."px;}</style>";
  echo "<style>body{background-color: ".$_POST["background"].";}</style>";
  echo "<style>body{color: ".$_POST["tekstkleuren"].";}</style>";
  ?>
</body>
</html>