<?php
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<title>e-Learning BK</title>
<body class="w3-theme-l5">
<?php
	$sql="SELECT * FROM unggah_materi";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        
<div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        
        <img src="img/4oFNkDeO.jpeg" alt="Avatar" class="w3-left w3-margin-right" style="width:60px">
        
        <span class="w3-right w3-opacity"><?php echo $row['tanggal'] ?></span>
  <h4>SMAN 105 JAKARTA</h4><br>
        <hr class="w3-clear">
       <table width="100%" class="table">  
          <tr>
            <td>Judul</td>
            <td>:</td> 
            <td><?php echo $row['topik'] ?></td>
          </tr>
          <tr>
            <td>Sub Topik</td>
            <td>:</td> 
            <td><?php echo $row['sub_topik'] ?></td>
          </tr>
          <tr>
            <td>File</td>
            <td>:</td> 
            <td><?php echo $row['file'] ?></td>
          </tr>
          <tr>
            <td></td>
            <td></td> 
            <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">Download File</a></td>
          </tr>
          
        </table>
<p></p>
      </div>  
<?php
	}
	?>
</body>
</html>