<?php
include "koneksi.php";
?>
<!DOCTYPE html>

<head>
<title>upload file perekonomian</title>
<link rel="stylesheet" href="styleupload.css" type="text/css" />
</head>
<body>
<div id="blokkotak">
<label>Data File Soal BK</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="8">your uploads...<label><a href="admin/indexupload.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>Kelas</td>
    <td>Tanggal</td>
    <td>Topik</td>
    <td>Sub Topik</td>
    <td>Soal 1</td>
    <td>Soal 2</td>
   
    
    </tr>
    <?php
	$sql="SELECT * FROM unggah_soal";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['kelas'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
        <td><?php echo $row['topik'] ?></td>
        <td><?php echo $row['sub_topik'] ?></td>
        <td><?php echo $row['soal_1'] ?></td>
        <td><?php echo $row['soal_2'] ?></td>
        
        
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>