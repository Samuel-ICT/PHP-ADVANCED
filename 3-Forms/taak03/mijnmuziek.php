<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Favoriete muziek</title>
</head>
<body>
    <form name = "form" action = mijnmuziek.php method = "GET">
        Artiest: <input type = "text" name = "artiest">
        Title: <input type = "text" name = "titel">
        Jaar van uitkomst: <input type = "text" name = "jaar">
        Muzieksoort: <input type = "text" name = "muzieksoort">
        <input type = "submit" value = "Verzend">
    </form>
</body>
</html>
<?php
//http://localhost/php-advanced/3-Forms/taak03/mijnmuziek.php?artiest=21+Savage&titel=Mr+Right&jaar=2020&muzieksoort=Rap
?>