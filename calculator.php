<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Jednostavni kalkulator</h1>

<form action="calculator.php" method="POST">
Broj 1: <input type="number" name="num1"> 
Broj 2: <input type="number" name="num2">
<br>
<br>



Operacija:

<select name="operacija">
  <option value="sabiranje">+</option>
  <option value="oduzimanje">-</option>
  <option value="mnozenje">*</option>
  <option value="dijeljenje">/</option>
</select>
<br>
<br>

<input type="submit" value="Izracunaj"> <br>
<form>
<br>
<br>




<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$p = $_POST['operacija'];

if ($p == 'sabiranje') {
    echo "Rezultat = ", $num1 + $num2;
}

elseif ($p == 'oduzimanje') {
    echo "Rezultat = ", $num1 - $num2;
}

elseif ($p == 'mnozenje') {
    echo "Rezultat = ", $num1 * $num2;
}

else  {
    echo "Rezultat = ", $num1 / $num2;
}

?>
</body>
</html>