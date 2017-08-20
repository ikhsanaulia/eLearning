<?php
include "koneksi.php";
	$sql="SELECT * FROM unggah_materi";
	$result_set=mysql_query($sql, $koneksi);
	if ($result_set) {
		while($row=mysql_fetch_array($result_set))
		{
			echo "oke";
		}
	} else {
		echo mysql_error($koneksi);
	} 
	?> 
