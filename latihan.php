<?php
function segitiga ($alas, $tinggi, $luas)
{
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luas : $luas<br>";
}
$a=20;
$t=5;
$l=($a*$t) /2;
echo "<br>";
echo "<h1>Segitiga</h1>";
segitiga($a,$t,$l);
echo"<hr>";

function lingkaran($jarijari, $luas, $keliling)
{
    echo "Jari-Jari : $jarijari<br>";
    echo "Luas : $luas<br>";
    echo "Keliling : $keliling<br>";
}

$j =10;
$l =3.14 * 10 *10;
$k =2 * 3.14 *10;
echo"<br>";
echo"<h1>Lingkaran</h1>";
lingkaran($j,$l,$k);


?>