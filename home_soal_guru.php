<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<title>e-Learning BK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!DOCTYPE html>
<html>
<head>
<style>

.button {
	border-radius: 0px;
	background-color: #FFFFFF;
	border: none;
	color: #000000;
	text-align: center;
	font-size: 15px;
	padding: 15px;
	width: 185px;
	transition: all 0.5s;
	cursor: pointer;
	margin: 15px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}


table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

</style>
</head>

<body>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><b>SMA<br>105 Jakarta</b></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  
   
<a href="index_guru.php" onclick="w3_close()" class="w3-bar-item w3-button">INDEX GURU</a> 
  <a href="home_materi_guru.php" onclick="w3_close()" class="w3-bar-item w3-button">MATERI BK</a> 
  <a href="home_soal_guru.php" onclick="w3_close()" class="w3-bar-item w3-button">SOAL ESAI BK</a>
  <a href="home_jawaban_esai.php" onclick="w3_close()" class="w3-bar-item w3-button">JAWABAN SOAL ESAI</a>
  <a href="home_jawaban_pg.php" onclick="w3_close()" class="w3-bar-item w3-button">JAWABAN PILIHAN GANDA</a>
  <a href="home_nilai.php" onclick="w3_close()" class="w3-bar-item w3-button">NILAI SISWA</a>
  <a href="home_unggah_materi.php" onclick="w3_close()" class="w3-bar-item w3-button">UNGGAH MATERI</a>
     <a href="home_unggah_soal.php" onclick="w3_close()" class="w3-bar-item w3-button">UNGGAH SOAL</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGOUT</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-10">
<span class="w3-left w3-padding">SOME NAME</span>
<a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>



<!-- Overlay effect when opening sidebar on small screens -->

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<div style="padding-top:10px;">
<?php include 'tampilan_soal_guru.php';?>
</div>
<!-- login -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    <div class="w3-center"><br>
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span><img src="img/4oFNkDeO.jpeg" alt="Avatar" style="width:30%"  w3-margin-top"></div>
    <form class="w3-container" action="/action_page.php">
      <div class="w3-section">
        <label><b>Username</b></label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
        <label><b>Password</b></label>
        <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="psw" required>
        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked">
        Remember me</div>
    </form>
    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      <span class="w3-right w3-padding w3-hide-small">Forgot<a href="#">password?</a></span></div>
  </div>
</div>
</div>
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>
</body>
</html>
</body>
</html>