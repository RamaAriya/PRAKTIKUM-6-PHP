<?php
if (isset($_GET['nama']) and isset($_GET['email'])) {
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $nama = htmlspecialchars($nama);
    $email = strip_tags($email);
} else {
    header("Location:formlogin.php?error=variabel belum diset");
}

if (empty($nama)) {
    header("Location:formlogin.php?error=nama kosong");
} else {
    if (empty($email)) {
        header("Location:formlogin.php?error=email kosong");
    } else {
        echo "Welcome $nama <br>
        Your email address is $email <br>";
    }
}
?>
<?php
date_default_timezone_set('Asia/Jakarta');

$date = new DateTime('now');
echo $date->format('d-m-Y & H:i:s');
?>