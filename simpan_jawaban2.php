<title>e-Learning BK</title>
<?php
include "koneksi.php";

$tgl=date("Y-m-d H:i:s");
$kelas=$_POST['kelas'];
$topik=$_POST['topik'];
$sub_topik=$_POST['sub_topik'];
$soal1=$_POST['soal1'];
$soal2=$_POST['soal2'];
$nama=$_POST['nama'];
$jawaban1=$_POST['jawaban1'];
$jawaban2=$_POST['jawaban2'];

$query=mysql_query(" INSERT into unggah_soal(tanggal,kelas,topik,sub_topik,soal1,soal2,nama,jawaban1,jawaban2)

value('$tgl','$kelas','$topik','$sub_topik','$soal1','$soal2','$nama','$jawaban1,'$jawaban2')");
if($query) {
echo"<script>alert('Data Berhasil Disimpan');</script>";
}

?>

<script
language="javascript">document.location.href="home_soal_siswa.php";</script>