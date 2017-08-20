<?php
include '../koneksi.php';
if(isset($_POST['btn-upload']))
{    
    $judul=$_POST['judul'];
	$tgl =$_POST['tanggal'].'-'.$_POST['bulan'].'-'.$_POST['tahun'];
	$subag=$_POST['subag'];
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
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$file))
	{
		$sql="INSERT INTO upload(judul,tanggal,subag,file,type,size) VALUES('$judul','$tgl','$subag','$final_file','$file_type','$new_size')";
		mysql_query($sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='indexupload.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='indexupload.php?fail';
        </script>
		<?php
	}
}
?>