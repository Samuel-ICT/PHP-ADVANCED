<?php
$student  = array(
    "Voornaam"    => "Jan",
    "Achternaam"  => "Janssen",
    "Klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
  
  foreach ($student as $key => $value) {
      echo "<table>";
      echo " <tr> <th>  $key </th> </tr>" ;
      echo " <tr> <td> $value </td> </tr>" ;  
      echo "</table>";
  }
?>
