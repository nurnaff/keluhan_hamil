<html>
<head>
<title>Form penyakit</title>
</head>
<body>
<p>Daftar Gangguan Kategori Berat</p>
<table>
<?php
include("koneksi.php");
$no=1;
  $brs=mysql_query("select kategori.namakategori,penyakit.namapenyakit from kategori,penyakit where kategori.idkategori=penyakit.idkategori and kategori.idkategori='3'",$conn);
  while($hsl=mysql_fetch_array($brs)) {
  echo "<tr>";
  echo "<td>";
  echo $no;
  echo "</td>";
  echo "<td>";
  echo $hsl["namakategori"];
  echo "</td>";
  echo "<td>";
  echo $hsl["namapenyakit"];
  echo "</td>";
  echo "</tr>";
  $no++;
 }
?>
</table>
<br>
<a href='index.php'> Pilih Menu Utama </a>
</body>
</html>