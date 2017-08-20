<?php
include "../koneksi.php";

$nama=$_POST['nama'];
$induk=$_POST['induk'];

$query=mysql_query(" INSERT into data_siswa( nama, nomor_induk)

value('$nama','$induk')");
if($query) {
echo"<script>alert('Data Berhasil Disimpan');</script>";
}

?>

<script
language="javascript">document.location.href="tampil_siswa.php";</script>