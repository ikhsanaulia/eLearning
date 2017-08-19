<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>upload file bk</title>
<link rel="stylesheet" href="styleupload.css" type="text/css" />
</head>
<body>
<div id="blokkotak">
<label>Upload File Soal BK</label>
</div>
<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	  <p>Topik : 
	    <label>
	    <input type="text" name="judul" id="judul">
	    </label>
	  </p>
	  <p>&nbsp;</p>
	  <p>Tanggal : 
      <label>
	    <select name="tanggal" size="1" id="select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <select name="bulan" size="1" id="bulan">
          <option value="Januari">Januari</option>
          <option value="Februari">Februari</option>
          <option value="Maret">Maret</option>
          <option value="April">April</option>
          <option value="Mei">Mei</option>
          <option value="Juni">Juni</option>
          <option value="Juli">Juli</option>
          <option value="Agustus">Agustus</option>
          <option value="September">September</option>
          <option value="Oktober">Oktober</option>
          <option value="November">November</option>
          <option value="Desember">Desember</option>
        </select>
        <select name="tahun" size="1" id="tahun">
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
        </select>
        </label>
	  </p>
      <p>&nbsp;</p>
      <p> Sub Topik :
        <label>
      <select name="subag" size="1" id="subag">
        <option value="narkoba">narkoba</option>
        <option value="Prestasi">Prestasi</option>
        <option value="Pergaulan bebas">Pergaulan bebas</option>
      </select>
      </label>
      </p>
	  <p>&nbsp;</p>
	  <p>
	  <input type="file" name="file" />
	  </p>
	  <p>&nbsp;</p>
	  <button type="submit" name="btn-upload">upload</button>
  </form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
<div id="footer">
<label></a></label>
</div>
</body>
</html>