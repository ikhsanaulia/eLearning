
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<title>e-Learning BK</title>
<body class="w3-theme-l5">
 <?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysql_query("SELECT * FROM unggah_soal where id='$id'");
?>

<?php
$row=mysql_fetch_array($query)
?>

<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        
        <img src="img/4oFNkDeO.jpeg" alt="Avatar" class="w3-left w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity"><?php echo $row['tanggal'] ?></span>
  <h4>SMAN 105 JAKARTA</h4><br>
        <hr class="w3-clear">  
<tr>
    	<td><form action="simpan_jawaban.php" method="post" enctype="multipart/form-data" name="form1"> 
           
  <table width="100%" class="table">
   
  <tr>
    <td width="23%">Kelas</td>
    <td width="5%">:</td> 
    <td width="72%"><?php echo $row['kelas'] ?>
      <input type="hidden" name="kelas" id="kelas" value="<?php echo $row['kelas'] ?>" /></td>
  </tr>
  <tr>
    <td>Judul</td>
    <td>:</td> 
    <td><?php echo $row['topik'] ?>
      <input type="hidden" name="topik" id="topik" value="<?php echo $row['topik'] ?>" /></td>
  </tr>
  <tr>
    <td>Sub Topik</td>
    <td>:</td> 
    <td><?php echo $row['sub_topik'] ?>
      <input type="hidden" name="sub_topik" id="sub_topik" value="<?php echo $row['sub_topik'] ?>" /></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td> 
    <td><input name="nama" id="nama" type="text" /></td>
  </tr>
  <tr>
    <td>Soal 1</td>
    <td>:</td> 
    <td><?php echo $row['soal1'] ?><input name="soal1" type="hidden" value="soal1" /></td>
  </tr>
  <tr>
    <td>Jawaban 1</td>
    <td>:</td> 
    <td><textarea name="jawaban1" id="jawaban1" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Soal 2</td>
    <td>:</td> 
    <td><?php echo $row['soal2'] ?> <input name="soal2" type="hidden" value="soal2" /></td>
  </tr>
   <tr>
    <td>Jawaban 2</td>
    <td>:</td> 
    <td><textarea name="jawaban2" id="jawaban2" cols="45" rows="5"></textarea></td>
  </tr>
   <tr>
    	<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="left" valign="top">
        <label>
        <input type="submit" name="ok" id="ok" value="Simpan">
        <input type="reset" name="reset" id="reset" value="Reset">
        </label></td>
	</tr>
</table>
      <p></p>  
        
  </form>
  </td>
  </tr>
  </div>

</body>
</html>