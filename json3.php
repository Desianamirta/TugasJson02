<?php
$json_data=file_get_contents("matakuliah2.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->Nim;
echo "<br>";
echo "Nama Mahasiswa : "; echo $obj->Nama_Mahasiswa;
echo "<br>";
echo "Email : "; echo $obj->Email;
echo "<br>";
echo "No HP : "; echo $obj->No_Hp;
echo "<br>";
echo "Matakuliah1 : ";echo $obj->Matakuliah[0];
echo "<br>";
echo "Matakuliah2 : ";echo $obj->Matakuliah[1];
echo "<br>";
echo "Matakuliah3 : ";echo $obj->Matakuliah[2];
?>