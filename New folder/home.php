<?php
session_start();
$hak_akses=$_SESSION['nim'];/*--> hak akses yang dikirim dari file login.php*/
if($hak_akses=='')          /*--> jika hak akses = 0 / kosong maka halaman utama tidak akan tampil dan kembali ke halaman login*/
{
    echo "<script type=\"text/javascript\">alert('anda harus login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
else
{
    include"koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Info Belajar Web</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>
 
<body>
<div id="header"></div>
    <div id="main">
        <div id="menu-kiri">
        <ul>
            <li><a href="#">Data Mahasiswa</a></li>
            <li><a href="#">Nilai Mahasiswa</a></li>
       <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
        <div id="konten-kanan"></div>
        </div>
        <div id="footer">
        <p>&copy;2014 infobelajarweb.wordpress.com</p>
</div>
</body>
</html>
<?php }?>