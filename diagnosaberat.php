<html>
<head>
<title>Form Diagnosa</title>
</head>
<body>
<p>Jawablah keluhan yang sesuai, dengan memilih Ya atau Tidak</p>
<table>
<form action="prosesberat.php" method="post">
<?php
include("koneksi.php");
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='1'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='2'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='3'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='4'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='5'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='6'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='7'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='8'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='9'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='10'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='11'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='12'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='13'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='14'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='15'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='16'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='17'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='18'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='19'",$conn);
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
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='20'",$conn);
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
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='21'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "21";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih21">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='22'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "22";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih22">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='23'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "23";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih23">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='24'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "24";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih24">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='25'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "25";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih25">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='26'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "26";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih26">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='27'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "27";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih27">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='28'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "28";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih28">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='29'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "29";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih29">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='30'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "30";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih30">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='31'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "31";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih31">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='32'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "32";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih32">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='33'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "33";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih33">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='34'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "34";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih34">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='35'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "35";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih35">
  <option value="0">-pilih-</option>
  <option value="0">Tidak</option>
  <option value="2">Ya</option>
  </select>
  </td>
  </tr>
 <?php
  $brs=mysql_query("select namagejala from gejalaberat where idgejala='36'",$conn);
  $hsl=mysql_fetch_array($brs);
  echo "<tr>";
  echo "<td>";
  echo "36";
  echo "</td>";
  echo "<td>";
  echo $hsl["namagejala"];
  echo "</td>";
?>
  <td>
  <select name="pilih36">
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