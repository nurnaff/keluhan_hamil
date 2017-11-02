<html>
<head><title>Hasil Diagnosa</title>
</head>
<body>
<p>Hasil Diagnosa Keluhan Kategori Sedang adalah</p>
<br>
<?php
include("koneksi.php");
$g1=$_POST['pilih1']; 
$g2=$_POST['pilih2']; 
$g3=$_POST['pilih3']; 
$g4=$_POST['pilih4']; 
$g5=$_POST['pilih5']; 
$g6=$_POST['pilih6']; 
$g7=$_POST['pilih7']; 
$g8=$_POST['pilih8']; 
$g9=$_POST['pilih9']; 

$rl[0]=$g1+$g2;
$rl[1]=$g3+$g4;
$rl[2]=$g5+$g6;
$rl[3]=$g7+$g8;
$rl[4]=$g9;
$total=0;
//menghitung total
for ($i=0;$i<5;$i++) {
 $total+=$rl[$i];   }
//menghitung probabilitas
for($i=0;$i<5;$i++) {
  $prob[$i]=$rl[$i]/$total;
}
//Menentukan nilai maksimum dari probabilitas
$maks=0;
for($i=0;$i<5;$i++) {
  if($prob[$i]>$maks) {$maks=$prob[$i];
  $ind=$i;  }
}
switch($ind) {
 case 0:
 echo "Anda Mengalami Gangguan Janin tidak bergerak di usia > 5 bulan"; 
 break;
case 1:
 echo "Anda Mengalami Gangguan Diabetes";
 break;
case 2:
 echo "Anda Mengalami Gangguan Kejang-kejang";
 break;
case 3:
 echo "Anda Mengalami Gangguan Keluar darah dan lendir"; 
 break;
case 4:
 echo "Anda Mengalami Gangguan Kehamilan Ektopik"; 
 break;
default:
 echo "Sistem Tidak Dapat Mengenali Keluhan Anda";
 break;
}
?>
<br>
<br>
<a href='diagnosasedang.php'> Mengulang Diagnosa Keluhan Sedang </a>
<br>
<a href='index.php'> Pilih Menu Utama </a>
</body>
</html>