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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['nama'])) {
  $loginUsername=$_POST['nama'];
  $password=$_POST['nomor_induk'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index_siswa.php";
  $MM_redirectLoginFailed = "home_loginsiswa.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_koneksi, $koneksi);
  
  $LoginRS__query=sprintf("SELECT nama, nomor_induk FROM data_siswa WHERE nama=%s AND nomor_induk=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $koneksi) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html>
<html>
<title>e-Learning BK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!DOCTYPE html>
<html>
<head>
<style>
.card {
    background-color:#fff;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
	width: 40%;
    border-radius: 5px;
	
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.padding{
	padding: 100px 0px 0px 200px;
	}

.padding-card{
	padding: 10px 10px 10px 10px;
	}
</style>
</head>

<body>
<div class="padding">
<div class="card padding-card">
<form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST">
  <table width="100%" border="0" cellspacing="0" cellpadding="8" >
    <tr>
    <td align="center"><img src="img/4oFNkDeO.jpeg" width="100px" height="100px">
   </td>
    </tr>
    <tr>
    <td align="center">Login Siswa</td>
    </tr>
    </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="8">
    <tr>
      <td width="15%">Username</td>
      <td width="2%">:</td>
      <td width="83%"><input type="text" name="nama" id="nama"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="password" name="nomor_induk" id="nomor_induk"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="button" id="button" value="Submit"></td>
    </tr>
  </table>
</form>
</div>
</div>
</body>
</html>
</body>
</html>