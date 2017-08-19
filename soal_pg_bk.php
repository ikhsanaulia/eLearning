<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
.container.w3-padding .w3-card-2.w3-white tr td form table {
	font-family: Georgia, "Times New Roman", Times, serif;
}
table {
    border-collapse: collapse;
    width: 100%;
}
td{
	background-color: #FFFFFF;
}

th, td {
    border: 0px solid #ddd;
    
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
.border{
	border:1px solid #000;}

</style>

<title>e-Learning BK</title>
</head>

<body>
<div class="container w3-padding">
<div class="w3-card-2 w3-white"><br />

<tr>
    	<td><form action="simpan_soal_pg.php" method="post" enctype="multipart/form-data" name="form1">
	<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    
    <td width="35%">Nama</td>
        <td width="5%">:</td>
        <td width="70%" align="left" valign="top"><input type="text" name="nama" id="nama" /></td>
    </tr>
    
    <td width="35%">Sub Topik</td>
        <td width="5%">:</td>
        <td width="70%" align="left" valign="top">Manajemen Pikiran</td>
    </tr>
    </table>
    <br />
    <table width="80%" align="center" cellpadding="0" cellspacing="0" class="border"> 
    <tr class="border">
    <th align="center" class="border">No.</th>
    <th align="center" class="border">Pernyataan</th>
    <th align="center" class="border">TS</th>
    <th align="center" class="border">KD</th>
    <th align="center" class="border">SR</th>
    <th align="center" class="border">HS</th>
    </tr>
     
    <tr>
    <td align="center" class="border">1.</td>
    <td class="border">Sulit berkonsentrasi</td>
    <td align="center" class="border"><input type="radio" name="jawaban1" id="jawaban1" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban1" id="jawaban1" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban1" id="jawaban1" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban1" id="jawaban1" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">2.</td>
    <td class="border">Susah mengambil keputusan</td>
    <td align="center" class="border"><input type="radio" name="jawaban2" id="jawaban2" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban2" id="jawaban2" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban2" id="jawaban2" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban2" id="jawaban2" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">3.</td>
    <td class="border">Merasa rendah diri</td>
    <td align="center" class="border"><input type="radio" name="jawaban3" id="jawaban3" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban3" id="jawaban3" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban3" id="jawaban3" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban3" id="jawaban3" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">4.</td>
    <td class="border">Minat dan semangat belajar turun</td>
    <td align="center" class="border"><input type="radio" name="jawaban4" id="jawaban4" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban4" id="jawaban4" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban4" id="jawaban4" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban4" id="jawaban4" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">5.</td>
    <td class="border">Orang lain jauh lebih baik dariku</td>
    <td align="center" class="border"><input type="radio" name="jawaban5" id="jawaban5" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban5" id="jawaban5" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban5" id="jawaban5" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban5" id="jawaban5" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">6.</td>
    <td class="border">Tak seorangpun dapat membantuku</td>
    <td align="center" class="border"><input type="radio" name="jawaban6" id="jawaban6" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban6" id="jawaba6" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban6" id="jawaban6" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban6" id="jawaban6" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">7.</td>
    <td class="border">Aku orang yang gagal</td>
    <td align="center" class="border"><input type="radio" name="jawaban7" id="jawaban7" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban7" id="jawaban7" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban7" id="jawaban7" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban7" id="jawaban7" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">8.</td>
    <td class="border">Segalanya tak akan pernah lebih baik</td>
    <td align="center" class="border"><input type="radio" name="jawaban8" id="jawaban8" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban8" id="jawaban8" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban8" id="jawaban8" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban8" id="jawaban8" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">9.</td>
    <td class="border">Saya sering kelelahan dan lemas</td>
    <td align="center" class="border"><input type="radio" name="jawaban9" id="jawaban9" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban9" id="jawaban9" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban9" id="jawaban9" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban9" id="jawaban9" value="HS" />
    </td>
    </tr>
    
    <tr>
    <td align="center" class="border">10.</td>
    <td class="border">Sulit tidur atau kurang tidur</td>
    <td align="center" class="border"><input type="radio" name="jawaban10" id="jawaban10" value="TS" />
     </td>
    <td align="center" class="border"><input type="radio" name="jawaban10" id="jawaban10" value="KD" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban10" id="jawaban10" value="SR" />
    </td>
    <td align="center" class="border"><input type="radio" name="jawaban10" id="jawaban10" value="HS" />
    </td>
    </tr>
    </table>
   
    <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
	<p></p>
    
     <tr>
    <td>Keterangan</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
   
   <tr>
    <td>TS = tidak sama sekali</td>
    <td></td>
    <td>KD = Kadang-kadang</td>
    <td></td>
    <td>SR = Sering</td>
    <td></td>
    <td>HS = Hampir Selalu</td>
    </tr>
   
    
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td align="right" valign="top"><label>
        <input type="submit" name="ok" id="ok" value="Simpan">
        <input type="reset" name="reset" id="reset" value="Reset">
        </label></td>
	</tr>
    
	</table>
</form><td>
</td>

</div>
    </div>
    
</body>
</html>
