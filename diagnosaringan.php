<html>
<head>
<title>Form Diagnosa</title>
</head>
<body>
<p>Jawablah keluhan yang sesuai, dengan memilih Ya atau Tidak</p>
<table>
<form action="prosesringan.php" method="post">
<?php
include("koneksi.php");
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='1'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "1";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih1">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='2'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "2";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih2">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='3'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "3";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih3">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='4'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "4";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih4">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='5'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "5";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih5">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='6'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "6";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih6">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='7'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "7";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih7">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='8'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "8";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih8">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='9'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "9";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih9">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='10'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "10";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih10">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='11'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "11";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih11">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='12'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "12";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih12">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='13'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "13";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih13">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='14'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "14";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih14">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='15'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "15";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih15">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='16'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "16";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih16">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='17'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "17";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih17">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='18'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "18";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih18">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='19'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "19";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih19">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaringan where idgejala='20'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "20";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih20">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
<tr>
<td><input type="submit" value="Hasil" /></td>
</tr>
</form>
</table>
</body>
</html>