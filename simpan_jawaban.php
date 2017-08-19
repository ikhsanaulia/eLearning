<title>e-Learning BK</title>
<?php
include "koneksi.php";

$tgl=date("Y-m-d H:i:s");
$kelas=$_POST['kelas'];
$topik=$_POST['topik'];
$sub_topik=$_POST['sub_topik'];
$nama=$_POST['nama'];
$soal1=$_POST['soal1'];
$soal2=$_POST['soal2'];
$jawaban1=$_POST['jawaban1'];
$jawaban2=$_POST['jawaban2'];

$query=mysql_query(" INSERT INTO `unggah_soal` 
(`kelas`, `tanggal`, `topik`, `sub_topik`,soal1,soal2,`nama`) VALUES 
('$kelas', '$tgl','$topik','$sub_topik','$soal1','$soal2','$nama')");


$query2=mysql_query("
INSERT INTO `jawaban_siswa` 
(`tanggal`, `kelas`, `topik`, `sub_topik`, `nama`, `soal1`, `soal2`, `jawaban1`, `jawaban2`) VALUES 
('$tgl', '$kelas', '$topik', '$sub_topik', '$nama', '$soal1', '$soal2', '$jawaban1', '$jawaban2')
");

if($query2) {
echo"<script>alert('Data Berhasil Disimpan');</script>";
}

?>

<script
language="javascript">document.location.href="home_soal_siswa.php";</script>