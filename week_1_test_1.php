<html>
<head>
<title>Moj php kod</title>
</head>

<body>


<?php
echo"<br> Vjezba 1 <br>";
echo "<br>";

$a = 10;
$b = 5;
$c = 3;
$d = $a + $b -$c;
$e = $a * $c/$b;
$k = $a % $c;

echo "$d<br>";
echo "$e<br>";
echo "$k<br>";

$ime = "Jovana";
$prezime = "Satara";
$godiste = 1985;

//konkatenacija
$d = $ime . " " . $prezime;

echo "Moje ime je ", $d, ", $godiste <br>";

echo "<br>";


$dani = array("ponedjeljak", "utorak", "srijeda", "cetvrtak", "petak", "subota", "nedjelja");

$f = $dani[3];

echo "$f<br>";


echo"<br> Vjezba 2 <br>";
echo "<br>";

$g = 20;
$h = 35;

if ($g<$h) {
    echo "tacno";
}
else {
    echo "netacno";
}

echo "<br>";

$i = "Nikola";

if ($i== "Nikola") {
    echo "Pozdrav Nikola";
}
else {
    echo "Ti nisi Nikola";
}



?>


</body>
</html>