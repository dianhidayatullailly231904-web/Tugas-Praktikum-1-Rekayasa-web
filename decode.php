<?php
// Baca JSON dari file (atau bisa langsung pakai string JSON)
$json_string = file_get_contents("data.json");

// Decode ke Object
$obj = json_decode($json_string);
echo "Hasil Decode ke Object:<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "NIM: " . $obj->nim . "<br>";
echo "Jurusan: " . $obj->jurusan . "<br><br>";

// Decode ke Array
$arr = json_decode($json_string, true);
echo "Hasil Decode ke Array:<br>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "NIM: " . $arr["nim"] . "<br>";
echo "Jurusan: " . $arr["jurusan"] . "<br>";
?>
