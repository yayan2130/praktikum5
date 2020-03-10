<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman PHP dengan Arrays</title>
</head>
<body>
<?php

$nama[] = "Agung Teguh";
$nama[] = "wibowo";
$nama[] = "Almais";
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";

$jum_array = count($nama);
echo "jumlah elemen array = ". $jum_array;

?>
</body>
</html>