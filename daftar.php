<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="node.js"></script>
		<script type="text/javascript" src="jam.js"></script>
</head>
<body>

	 <div class="header">
      <img src="logo.png" height="102px" width="100px" style="float: left; margin-top: -10px; margin-left:150px;">
    <img src="logo.png" height="102spx" width="100px" style="float: right; margin-top: -10px; margin-right:150px;">
			<h1><p>Tugas Akhir Pemrograman Web</h1></p>
</div>
<br>
 <div id="clock"></div>
<form name="formcari" onSubmit="cari()">
			<input name="keyword" size="20" type="text">
			<input type="submit" value="search">
			</form>
<div class="menu">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="biodata.html">My Profil</a></li>
    <li><a href="buku.html">Form</a></li>
    <li><a href="daftar.php">Data Form</a></li>
    <li><a href="sosmed.html">Sosmed</a></li>
   		<li><a href="kal.html">Kalkulator</a></li>
  </ul>
</div>

 <div class="conten">
<?php
echo "<head><title>Form</title></head>";
$fp = fopen("data.txt","r");//membuka data yang tersimpan di data.txt
echo "<table border=0>";//membuat/menampilkan table tanpa ada bordernya
while ($isi = fgets($fp,80))//untuk mengambil data dari file yang akan di tampilkan
{
$pisah = explode("|",$isi);//pemisah string dengan tanda "|"
echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";//menampilkan data pertama
echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";//menampilkan data kedua
echo "<tr><td>Jenis Kelamin </td><td>: $pisah[2]</td></tr>";//menampilkan data ketiga
echo "<tr><td>Prodi </td><td>: $pisah[3]</td></tr>";//menampilkan data keempat
echo "<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";//menampilkan garis bawah/untuk jarak
}
echo "</table>";
?>
</div>
	<div class="footer">
		<p>&copy; Rizky Bagus Pramudya</p>
	</div>
  </body>

</html>