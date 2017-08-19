<title>e-Learning BK</title>
<?php
include "koneksi.php";

$nama=$_POST['nama'];
$jawaban1=$_POST['jawaban1'];
$jawaban2=$_POST['jawaban2'];
$jawaban3=$_POST['jawaban3'];
$jawaban4=$_POST['jawaban4'];
$jawaban5=$_POST['jawaban5'];
$jawaban6=$_POST['jawaban6'];
$jawaban7=$_POST['jawaban7'];
$jawaban8=$_POST['jawaban8'];
$jawaban9=$_POST['jawaban9'];
$jawaban10=$_POST['jawaban10'];

$query=mysql_query(" INSERT into jawaban_soal_pg( nama,jawaban1,jawaban2,jawaban3,jawaban4,jawaban5,jawaban6,jawaban7,jawaban8,jawaban9,jawaban10)

value('$nama','$jawaban1','$jawaban2','$jawaban3','$jawaban4','$jawaban5','$jawaban6','$jawaban7','$jawaban8','$jawaban9','$jawaban10')");
if($query) {
echo"<script>alert('Data Berhasil Disimpan');</script>";
}

?>

<script
language="javascript">document.location.href="index_siswa.php";</script>