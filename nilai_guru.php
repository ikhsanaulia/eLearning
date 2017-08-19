<?php require_once('Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = "SELECT * FROM data_siswa WHERE id = id ORDER BY id DESC";
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
    <tr>
      <th width="4%">No</td>
      <th width="26%">NAMA SISWA</td>
      <th width="33%">NOMOR INDUK</td>
      <th width="23%">NILAI</td>
      <th width="14%">OPTION</td>
    </tr>
    <?php $i=0; do
	
	 { ?>
      <tr>
        <td><?php echo $i=$i+1; ?></td>
        <td><?php echo $row_Recordset1['nama']; ?></td>
        <td><?php echo $row_Recordset1['nomor_induk']; ?></td>
        <td><?php echo $row_Recordset1['nilai']; ?></td>
        <td><a href="home_input_nilai.php?id=<?php echo $row_Recordset1['id']; ?>">Input Nilai</a></td>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
