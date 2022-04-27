<?php
$nama=$_REQUEST['Nama'];
$gender=$_REQUEST['gender'];
$TempatLahir=$_REQUEST['TempatLahir'];
$hari=$_REQUEST['hari'];
$bulan=$_REQUEST['bulan'];
$tahun=$_REQUEST['tahun'];
$alamat=$_REQUEST['Alamat'];
$sma=$_REQUEST['sma'];

if($gender=='L'){
    echo "Selamat Datang Saudara, ".$nama;
}
else {
    echo "Selamat Datang Saudari, ".$nama;
}

echo "<br>Nama Lengkap : $nama<br>";
echo "Jenis Kelamin : $gender<br>";
echo "Tempat Lahir : $TempatLahir<br>";
echo "Tanggal Lahir : $hari . $bulan . $tahun<br>";
echo "Alamat : $alamat<br>";
echo "Asal SMA : $sma<br>";
?> 