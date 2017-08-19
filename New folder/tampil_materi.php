<?php
include 'koneksi.php';
?>
<!DOCTYPE html>

<head>
<title>upload file perekonomian</title>
<link rel="stylesheet" href="styleupload.css" type="text/css" />
</head>
<body>
<div id="blokkotak">
<label>Data File Materi BK</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="8"><label><a href="unggah_materi.php">upload file...</a></label></th>
    </tr>
    <tr>
    <td>Kelas</td>
    <td>Tanggal</td>
    <td> Topik</td>
    <td>Sub Topik</td>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM unggah_materi";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['kelas'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
        <td><?php echo $row['topik'] ?></td>
        <td><?php echo $row['sub_topik'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>