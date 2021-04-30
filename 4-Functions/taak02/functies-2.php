<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function rekenUit($cijfer1,$cijfer2,$cijfer3){
$totaal = $cijfer1 + $cijfer2 + $cijfer3;
return "<h2>Als ik de getallen $cijfer1, $cijfer2 en $cijfer3 bij elkaar optel, is de uitkomst $totaal <br> </h2>";
}
echo rekenUit(4,2,9);
echo rekenUit(1,2,3);
echo rekenUit(40,28,91);
?>   
</body>
</html>
