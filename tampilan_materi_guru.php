<?php
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><title>Untitled Document</title>
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
    <th>Kelas</th>
    <th>Tanggal</th>
    <th>Topik</th>
    <th>Sub Topik</th>
    <th>Nama File</th>
    <th>View File</th>
  </tr>
  <tr>
      <?php
	$sql="SELECT * FROM unggah_materi";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <td><?php echo $row['kelas'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
        <td><?php echo $row['topik'] ?></td>
        <td><?php echo $row['sub_topik'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
  </tr>
 <?php
	}
	?> 
</table>
 </div>
</body>
</html>