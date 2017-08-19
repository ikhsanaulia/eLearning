<?php
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><title>e-Learning BK</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
td{
	background-color: #FFFFFF;
}

th, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>

<body>
<div class="w3-container">
<table>
 
        <tr>
    <th>Tanggal</th>
    <th>Kelas</th>
    <th>Topik</th>
    <th>Sub Topik</th>
    <th>Soal 1</th>
    <th>Soal 2</th>
  </tr>
  <tr>
      <?php
	$sql="SELECT * FROM unggah_soal order by id desc";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <td><?php echo $row['tanggal'] ?></td>
        <td><?php echo $row['kelas'] ?></td>
        
        <td><?php echo $row['topik'] ?></td>
        <td><?php echo $row['sub_topik'] ?></td>
        <td><?php echo $row['soal1'] ?></td>
        <td><?php echo $row['soal2'] ?></td>
  </tr>
 <?php
	}
	?> 
</table>
 </div>
</body>
</html>