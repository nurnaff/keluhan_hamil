<html>
<head><title>Hasil Diagnosa</title>
</head>
<body>
<p>Hasil Diagnosa Keluhan Kategori Berat adalah</p>
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
$g21=$_POST['pilih21']; 
$g22=$_POST['pilih22']; 
$g23=$_POST['pilih23']; 
$g24=$_POST['pilih24']; 
$g25=$_POST['pilih25']; 
$g26=$_POST['pilih26']; 
$g27=$_POST['pilih27']; 
$g28=$_POST['pilih28']; 
$g29=$_POST['pilih29']; 
$g30=$_POST['pilih30']; 
$g31=$_POST['pilih31']; 
$g32=$_POST['pilih32']; 
$g33=$_POST['pilih33']; 
$g34=$_POST['pilih34']; 
$g35=$_POST['pilih35']; 
$g36=$_POST['pilih36']; 

$rl[0]=$g1+$g2+$g3+$g4+$g5+$g6;
$rl[1]=$g7+$g8+$g9+$g10+$g11;
$rl[2]=$g12+$g13+$g14+$g15+$g16+$g17+$g18+$g19;
$rl[3]=$g20+$g21+$g22+$g23;
$rl[4]=$g24+$g25+$g26+$g27+$g28+$g29+$g30+$g31;
$rl[5]=$g32+$g33;
$rl[6]=$g34+$g35+$g36;
$total=0;
//menghitung total
for ($i=0;$i<7;$i++) {
 $total+=$rl[$i];   }
//menghitung probabilitas
for($i=0;$i<7;$i++) {
  $prob[$i]=$rl[$i]/$total;
}
//Menentukan nilai maksimum dari probabilitas
$maks=0;
for($i=0;$i<7;$i++) {
  if($prob[$i]>$maks) {$maks=$prob[$i];
  $ind=$i;  }
}
switch($ind) {
 case 0:
 echo "Anda Mengalami Gangguan Fungsi Ginjal terganggu"; 
 break;
case 1:
 echo "Anda Mengalami Gangguan Abortus";
 break;
case 2:
 echo "Anda Mengalami Gangguan Mola Hidatidosa";
 break;
case 3:
 echo "Anda Mengalami Gangguan Hipertensi"; 
 break;
case 4:
 echo "Anda Mengalami Gangguan Preeklampsia"; 
 break;
case 5:
 echo "Anda Mengalami Gangguan Eklampsia";
 break;
case 6:
 echo "Anda Mengalami Gangguan Edema Paru";
 break;
default:
 echo "Sistem Tidak Dapat Mengenali Keluhan Anda";
 break;
}
?>
<br>
<br>
<a href='diagnosaberat.php'> Mengulang Diagnosa Keluhan Berat </a>
<br>
<a href='index.php'> Pilih Menu Utama </a>
</body>
</html>