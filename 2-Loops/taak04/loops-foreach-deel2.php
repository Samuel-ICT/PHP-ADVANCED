<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label for="klassen">Ik zit in klas:</label>
<select name = "klassen">
<ul>
    <li>
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

foreach ($klassen as $klasnaam) {
    echo "<ul> <li> <option> $klasnaam   </option> </li> </ul>"; 
}
?>
    </li>
</ul>
<option name = "klassen"> </option>
</select>
<br><br>
<div>
    <input type="submit" value="Verzend" name="submit">
</div>
</body>
</html>