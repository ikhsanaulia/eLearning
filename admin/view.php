<?php
include '../koneksi.php';
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
    <th colspan="6">your uploads...<label><a href="indexupload.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>Judul</td>
    <td>Tanggal</td>
    <td>Sub Topik</td>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM upload";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['judul'] ?></td>
        <td><?php echo $row['tanggal'] ?></td>
        <td><?php echo $row['subag'] ?></td>
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