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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE unggah_soal SET nama=%s, jawaban1=%s, jawaban2=%s WHERE id=%s",
                    
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['jawaban1'], "text"),
                       GetSQLValueString($_POST['jawaban2'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL, $koneksi) or die(mysql_error());

  $updateGoTo = "home_soal_siswa.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['id'])) {
  $colname_Recordset1 = $_GET['id'];
}
mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = sprintf("SELECT * FROM unggah_soal WHERE id = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
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


<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        
        <img src="img/4oFNkDeO.jpeg" alt="Avatar" class="w3-left w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity"><?php echo htmlentities($row_Recordset1['tanggal'], ENT_COMPAT, 'UTF-8'); ?></span>
  <h4>SMAN 105 JAKARTA</h4><br>
        <hr class="w3-clear">  
<tr>
   	<td><form method="post" enctype="multipart/form-data" name="form1">
    	  <p></p>  
        
  </form>
      <form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2">
        <table width="100%" class="table">
          <tr valign="baseline">
            <td nowrap="nowrap">Kelas</td>
            <td>:</td>
            <td><?php echo htmlentities($row_Recordset1['kelas'], ENT_COMPAT, 'UTF-8'); ?></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap">Tanggal</td>
            <td>:</td>
            <td><?php echo htmlentities($row_Recordset1['tanggal'], ENT_COMPAT, 'UTF-8'); ?></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap">Topik</td>
            <td>:</td>
            <td><?php echo htmlentities($row_Recordset1['topik'], ENT_COMPAT, 'UTF-8'); ?></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap">Sub_topik</td>
            <td>:</td>
            <td><?php echo htmlentities($row_Recordset1['sub_topik'], ENT_COMPAT, 'UTF-8'); ?></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap">Soal1</td>
            <td>:</td>
            <td><?php echo htmlentities($row_Recordset1['soal1'], ENT_COMPAT, 'UTF-8'); ?></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap">Soal2</td>
            <td>:</td>
            <td><?php echo htmlentities($row_Recordset1['soal2'], ENT_COMPAT, 'UTF-8'); ?></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap">Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo htmlentities($row_Recordset1['nama'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap">Jawaban1</td>
            <td>:</td>
            <td><input type="text" name="jawaban1" value="<?php echo htmlentities($row_Recordset1['jawaban1'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap">Jawaban2</td>
            <td>:</td>
            <td><input type="text" name="jawaban2" value="<?php echo htmlentities($row_Recordset1['jawaban2'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td></td>
            <td><input type="submit" value="Update record" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_update" value="form2" />
        <input type="hidden" name="id" value="<?php echo $row_Recordset1['id']; ?>" />
      </form>
    <p>&nbsp;</p></td>
  </tr>
</div>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
