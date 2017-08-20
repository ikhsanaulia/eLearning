<title>e-Learning BK</title>
<?php
include "koneksi.php";
if(isset($_POST['ok']))
{    
    $kelas=$_POST['kelas'];
	$tanggal=date("Y-m-d H:i:s");
	$topik=$_POST['topik'];
	$subtopik=$_POST['subtopik'];
	$file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace('-','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$file))
	{
		($sql="INSERT INTO unggah_materi(kelas,tanggal,topik,sub_topik,file,type,size) VALUES('$kelas','$tanggal','$topik','$subtopik','$final_file','$file_type','$new_size')");
		mysql_query($sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='home_materi_guru.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='home_unggah_materi.php?fail';
        </script>
		<?php
	}
}
?>
