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
    <th>Nama</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
  </tr>
  <tr>
      <?php
	$sql="SELECT * FROM jawaban_soal_pg";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['jawaban1'] ?></td>
        <td><?php echo $row['jawaban2'] ?></td>
        <td><?php echo $row['jawaban3'] ?></td>
        <td><?php echo $row['jawaban4'] ?></td>
        <td><?php echo $row['jawaban5'] ?></td>
        <td><?php echo $row['jawaban6'] ?></td>
        <td><?php echo $row['jawaban7'] ?></td>
        <td><?php echo $row['jawaban8'] ?></td>
        <td><?php echo $row['jawaban9'] ?></td>
        <td><?php echo $row['jawaban10'] ?></td>
        
  </tr>
 <?php
	}
	?> 
</table>
 </div>
</body>
</html>