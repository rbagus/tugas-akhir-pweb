<html>
<head>
	<title>form</title>
</head>
<body>
<div class="proses">

<?php
$fp = fopen("data.txt","a+");//menyimpan data
$nama = $_POST['nama'];//menginputkan/mengisi nama
$jk = $_POST['jk'];//menginputkan/mengisi jenis kelamin
$alamat = $_POST['alamat'];//menginputkan/mengisi alamat
$prodi = $_POST['prodi'];//menginputkan/mengisi prodi

fputs($fp,"$nama|$alamat|$jk|$prodi\n");//untuk menulis kedalam file
fclose($fp);//menutup data
echo "Anda baru saja mengisi data form <br>";
echo "<a class=btn href=buku.html> Isi form lagi</a><br>";//untuk mengisi form lagi /beralih ke file 
?>
  <a aling="center" href="index.html"> Home </a>
</div>
</body>
</html>