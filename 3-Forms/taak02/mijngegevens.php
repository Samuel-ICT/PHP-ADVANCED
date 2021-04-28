<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "text-align:center; padding-top: 150px; font-size: 50px" >
<?php
echo $_POST["voornaam"]." "." ";
echo $_POST["achternaam"];
echo "<br>";
echo "Klas:"." " .$_POST["klas"];
echo "<br>";
echo $_POST["leeftijd"]." ". "jaar";
echo "<br>";
echo $_POST["adres"];
echo "<br>";
echo $_POST["woonplaats"];
echo "<br>";
echo $_POST["muziekband"];
echo "<br>";
echo $_POST["gender"];
echo "<br>"; 
$change = $_POST["kleuren"];
echo "<style>body{background-color:" .$change.";}</style>";

?>
</body>
</html>