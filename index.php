<?php
include("koneksi.php");

echo"<center><h1> SISTEM DIAGNOSA KELUHAN IBU HAMIL </h1></center>";
echo"<br>";
echo"Pilih Kategori Keluhan:";
echo"<br>";
echo"<a href='diagnosaringan.php'> Kategori Keluhan Ringan </a>";
echo"<br>";
echo"<a href='diagnosasedang.php'> Kategori Keluhan Sedang </a>";
echo"<br>";
echo"<a href='diagnosaberat.php'> Kategori Keluhan Berat </a>";
echo "<br>";
echo "<br>";
echo "Daftar Penyakit dengan Kategori:";
echo"<br>";
echo"<a href='penyakitringan.php'> Kategori Penyakit Ringan </a>";
echo"<br>";
echo"<a href='penyakitsedang.php'> Kategori Penyakit Sedang </a>";
echo"<br>";
echo"<a href='penyakitberat.php'> Kategori Penyakit Berat </a>";
?>