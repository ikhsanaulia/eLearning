<?php require_once('Connections/koneksi.php'); ?>
<?php

mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = "SELECT * FROM data_siswa WHERE nama = ''".$_SESSION['MM_Username']." ORDER BY id DESC";
$Recordset1 = mysql_query($query_Recordset1, $koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
  <table border="1">
    <?php $i=0; do
	
	 { ?>
      <tr>
        <td>Nilai</td>
        <td>
			<?php 
				$nilai = $row_Recordset1['nilai'];
				if ($nilai < 30) {
					echo "F"; 
				} elseif ($nilai <= 20) {
					echo "E";	
				} elseif ($nilai <= 40) {
					echo "D";	
				} elseif ($nilai <= 60) {
					echo "C";	
				} elseif ($nilai <= 80) {
					echo "B";	
				} elseif ($nilai <= 100) {
					echo "A";	
				}
			?>
        </td>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
