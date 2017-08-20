<?php
include "koneksi.php";

$kelasp=$_POST['kelasp'];
$tgl=date("Y-m-d H:i:s");
$topikp=$_POST['topikp'];
$subtopikp=$_POST['subtopikp'];
$soal1p=$_POST['soal1p'];
$soal2p=$_POST['soal2p'];

$query=mysql_query(" INSERT into unggah_soal( kelas,tanggal,topik,sub_topik,soal1,soal2)

value('$kelasp','$tgl','$topikp','$subtopikp','$soal1p','$soal2p')");
if($query) {
echo"<script>alert('Data Berhasil Disimpan');</script>";
}

?>

<script
language="javascript">document.location.href="home_soal_guru.php";</script>