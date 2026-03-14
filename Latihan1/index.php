<?php

require_once "Persegi.php";
require_once "Lingkaran.php";
require_once "Segitiga.php";

$persegi = new Persegi(4);
$lingkaran = new Lingkaran(7);
$segitiga = new Segitiga(6,8);

echo "Luas Persegi = ".$persegi->hitungLuas()."<br>";
echo "Luas Lingkaran = ".$lingkaran->hitungLuas()."<br>";
echo "Luas Segitiga = ".$segitiga->hitungLuas();

?>