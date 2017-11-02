<html>
<head><title>Hasil Diagnosa</title>
</head>
<body>
<p>Hasil Diagnosa Keluhan Kategori Ringan adalah</p>
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
$g10=$_POST['pilih10']; 
$g11=$_POST['pilih11']; 
$g12=$_POST['pilih12']; 
$g13=$_POST['pilih13']; 
$g14=$_POST['pilih14']; 
$g15=$_POST['pilih15']; 
$g16=$_POST['pilih16']; 
$g17=$_POST['pilih17']; 
$g18=$_POST['pilih18']; 
$g19=$_POST['pilih19']; 
$g20=$_POST['pilih20'];

$rl[0]=$g1+$g2+$g3+$g4+$g5;
$rl[1]=$g6+$g7+$g8+$g9+$g10;
$rl[2]=$g11+$g12;
$rl[3]=$g13+$g14+$g15;
$rl[4]=$g16+$g17+$g18+$g19;
$rl[5]=$g20;
$total=0;
//menghitung total
for ($i=0;$i<6;$i++) {
 $total+=$rl[$i];   }
//menghitung probabilitas
for($i=0;$i<6;$i++) {
  $prob[$i]=$rl[$i]/$total;
}
//Menentukan nilai maksimum dari probabilitas
$maks=0;
for($i=0;$i<6;$i++) {
  if($prob[$i]>$maks) {$maks=$prob[$i];
  $ind=$i;  }
}
switch($ind) {
 case 0:
 echo "Anda Mengalami Gangguan Muntah-muntah"; 
 break;
case 1:
 echo "Anda Mengalami Gangguan Naiknya berat badan berlebihan";
 break;
case 2:
 echo "Anda Mengalami Gangguan Detak Jantung kencang dan mudah lelah";
 break;
case 3:
 echo "Anda Mengalami Gangguan Anemia"; 
 break;
case 4:
 echo "Anda Mengalami Gangguan Kelenjar Gondok terganggu"; 
 break;
case 5:
 echo "Anda Mengalami Gangguan Infeksi";
 break;
default:
 echo "Sistem Tidak Dapat Mengenali Keluhan Anda";
 break;
}
?>
<br>
<br>
<a href='diagnosaringan.php'> Mengulang Diagnosa Keluhan Ringan </a>
<br>
<a href='index.php'> Pilih Menu Utama </a>
</body>
</html>