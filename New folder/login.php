<?php
session_start();           /*--> penggunaan session untuk akses*/
include"koneksi.php";
$nim=$_POST['nim'];
$pass=$_POST['password'];
if($nim=='' or $pass=='')   /*--> membuat pesan jika salah satu textbox masih kosong*/
{
    echo "<script type=\"text/javascript\">alert('Lengkapi data')</script>";
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
else
{
    $cek=mysql_query("select*from user where nim='$nim' and password='$pass'");
    $akses=mysql_fetch_array($cek);
    if($akses) /*--> jika nim dan password sesuai dengan database*/
    {
        $_SESSION['nim']=$nim;    /*--> pembuatan akses masuk halaman utama mengambil data 'nim' yang ada di database*/
        echo "<meta http-equiv='refresh' content='0;url=home.php'>";
    }
    else/*--> jika username atau password tidak sesuai dengan database*/
    {
        echo "<script type=\"text/javascript\">alert('nim atau password yang anda masukkan salah')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }
}
?>