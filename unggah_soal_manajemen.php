<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>e-Learning BK</title>
</head>

<body>
<div class="container w3-padding">
<div class="w3-card-2 w3-white">
<tr>
    	<td><form action="simpan_soal.php" method="post" enctype="multipart/form-data" name="form1">
	<table width="80%" border="0" align="center" cellpadding="10" cellspacing="10">
   
    <tr>
    <td width="35%">Kelas</td>
        <td width="5%">:</td>
        <td width="70%" align="left" valign="top">
        <select name="kelasp" id="kelasp">
      <option value="10">10</option>
      <option value="11">11</option>
    </select>
    </td>
    </tr>
     
    <tr>
    <td width="35%">Topik</td>
        <td width="5%">:</td>
        <td width="70%" align="left" valign="top">
        <select name="topikp" id="topikp">
          <option value="Manajemen Diri Berorientasi Masa Depan">Manajemen Diri Berorientasi Masa Depan</option>
          <option value="Psikologi Remaja">Psikologi Remaja</option>
          <option value="Menumbuhkan Jiwa Kepemimpinan Sejak Dini">Menumbuhkan Jiwa Kepemimpinan Sejak Dini</option>
          <option value="Memecahkan Masalah Dan Keterampilan Membuat Keputusan">Memecahkan Masalah Dan Keterampilan Membuat Keputusan</option>
        </select>
    </td>
    </tr>
    <tr>
    <td width="35%">Sub Topik</td>
        <td width="5%">:</td>
        <td width="70%" align="left" valign="top"><input type="text" name="subtopikp" id="subtopikp" /></td>
    </tr>

    <tr>
    	<td width="35%">Soal </td>
        <td width="5%">:</td>
        <td width="70%" align="left" valign="top"><textarea name="soal1p" cols="50" rows="10" id="soal1p"></textarea></td>
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
</form><td>
</td>
</div>
    </div>
</body>
</html>
