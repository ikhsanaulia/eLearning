<?php
include "koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>e-Learning BK</title>
</head>

<body>

 
	<tr>
    	<td><form action="simpan_soal.php" method="post" enctype="multipart/form-data" name="form1">
	
<table width="80%" border="0" align="center" cellpadding="10" cellspacing="10">
   
    <tr>
      <td width="35%">Nama</td>
      <td width="5%">:</td>
      <td width="70%" align="left" valign="top"><?php echo $row['soal_1'] ?>
        </td>
    </tr>
     <?php
	$sql="SELECT * FROM unggah_soal";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
      <td width="35%">Pertanyaan 1</td>
      <td width="5%">:</td>
      <td width="70%" align="left" valign="top"><?php echo $row['soal_1'] ?>
        </td>
    </tr>
    
    <tr>
      <td width="35%">Jawaban</td>
      <td width="5%">:</td>
      <td width="70%" align="left" valign="top"><textarea name="jawaban1" cols="50" rows="10" id="jawaban1"></textarea></td>
    </tr>
    
    <tr>
      <td width="35%">Pertanyaan 2</td>
      <td width="5%">:</td>
      <td width="70%" align="left" valign="top"><?php echo $row['soal_1'] ?>
        </td>
    </tr>
    
    <tr>
      <td width="35%">Jawaban</td>
      <td width="5%">:</td>
      <td width="70%" align="left" valign="top"><textarea name="jawaban2" cols="50" rows="10" id="jawaban2"></textarea></td>
    </tr>

    <tr>
        <td width="35%">&nbsp;</td>
        <td width="5%">:</td>
        <td align="left" valign="top">
        <label>
        <input type="submit" name="ok" id="ok" value="Kirim">
        <input type="reset" name="reset" id="reset" value="Reset">
        </label></td>
	</tr>
<?php
	}
	?>
</table>
</form>
<td>
</tr>

</body>
</html>
