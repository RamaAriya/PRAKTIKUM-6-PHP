<form name="form" action="biodataout.php" method="post">
<table border="1">
<tr><td bgcolor="#33CCFF" colspan="4"><center>DATA DIRI</center></td></tr>
<tr>
<td rowspan="7"><?php echo '<img src="foto berwarna.jpeg" height="190" width="110">' ?></td>
<td><?php echo "Nama Lengkap"; ?></td>
<td><?php echo ":"; ?></td>
<td> <input name="Nama" type="text" size="50" maxlength="50" /></td>
</tr>
<tr>
<td><?php echo "Jenis Kelamin";?></td>
<td><?php echo ":"; ?></td>
<td><input type="radio" name="gender" value="L"  />Laki-Laki
 <input type="radio" name="gender" value="P"  />Perempuan
</td>
</tr>
<tr>
<td><?php echo "Tempat Lahir"; ?></td>
<td><?php echo ":"; ?></td>
<td> <input name="TempatLahir" type="text"  size="50" maxlength="50" /></td>
</tr>
<tr>
<td><?php echo "Tanggal Lahir"; ?></td>
<td><?php echo ":"; ?></td>
<td><?php
$bulan=array("Januari" ,"Februari", " Maret" ,"April", "Mei", "Juni", 
"Juli", "Agustus", "September", "Oktober", "November", "Desember");
echo '<select name="hari">';
$hari=1;
while($hari<=31) {
echo "<option value=\"$hari\">$hari</option>";
$hari++;
}
echo '</select>';
echo '<select name="bulan">';
$jumlah=count($bulan);
for($i=0; $i<$jumlah ; $i++){
echo '<option value="'.$bulan[$i].'">'.$bulan[$i].'</option>';
}
echo '</select>';
echo '<select name="tahun">';
for($tahun=1990; $tahun<2010; $tahun++){
echo "<option value=\"$tahun\">$tahun</option>";
}
echo '</option>';
?>
</td>
</tr>

<tr>
<td><?php echo "Alamat"; ?></td>
<td><?php echo ":"; ?></td>
<td> <input name="Alamat" type="text"  size="50" maxlength="50" /></td>
</tr>
<tr>
<td><?php echo "Asal SMA"; ?></td>
<td><?php echo ":"; ?></td>
<td> <input name="sma" type="text"  size="50" maxlength="50" /></td>
</tr>
<tr>
<td colspan="3"><center><input type="submit" name="submit" /></center></td></tr>
</table>
</form>