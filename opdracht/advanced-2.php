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
    body {
      background-color: <?php echo $_POST["background"] ?>;
      color: <?php echo $_POST["tekstkleuren"] ?>;
    }

    td {
      font-size: 30px;
      border: 1px solid black;
    }

    table {
      background-color: white;
      border: <?php echo $_POST["border"] ?>px solid black;
    }

    table td {
      padding: <?php echo $_POST["padding"] ?>px;
    }
  </style>

  <?php
  $gegevens  = array(
    "Naam"        => "Samuel Adu",
    "Leeftijd"    => 19,
    "Klas"        => "0C",
    "Muziek"      => "Hip-hop",
    "Merk fiets"  => "Gazelle",
    "Woonplaats"  => "Amsterdam",
    "Sport"       => "Voetbal",
    "Eten"        => "Jollof"
  );
  echo "<table style= width:60%;>";
  foreach ($gegevens as $key => $value) {
    maakRij($key, $value);
  }



  function maakRij($key, $value)
  {
    echo "<tr>
    <td> $key </td>
    <td> $value </td>
    </tr>";
  }
  echo "</table>";

  ?>
</body>

</html>