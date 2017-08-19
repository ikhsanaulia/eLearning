<?php
$host="localhost";
$user="root";
$password="";
$database="perekonomian";
$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi

?>