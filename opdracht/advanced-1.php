<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form name = "Form"  action = "advanced-2.php" method = "POST">
  Tabel-border dikte (px): <input type = "text" name = "border">
  <br> <br>
  Cel-padding (px): <input type = "text" name = "padding">
  <br> <br>
  <label for="background">Achtergrondkleur:</label>
  <select name="background" >
      <?php
        $kleuren = array("red", "blue", "green", "black", "brown");
        foreach ($kleuren as $achtergroundkleur) {
           echo "<option> $achtergroundkleur </option>";
        }
        
        ?>
      </select>
      <br> <br>
    <label for="tekstkleuren">Tekstkleur:</label>
    <select name="tekstkleuren" >
      <?php
        $kleuren = array("red", "blue", "green", "black", "brown");
        foreach ($kleuren as $tekstkleur) {
           echo "<option> $tekstkleur </option>";
        }
        
        ?>
      </select>
    <br> <br>
    <input type = "submit" value = "Verzend">
  </form>
</body>
</html>