<?php
//ambil nilai variabel eror
if (isset($_GET['error'])) {
    $error = $_GET['error'];
} else {
    $error = "";
}

//siapkan pesan kesalahan, saat kita menginput isian yang tidak seusai maka akan ada peringatan
$pesan = "";
if ($error == "variabel belum diset") {
    $pesan = "<h3>Maaf, anda harus mengakses halaman ini dari formlogin.php</h3>";
}
if ($error == "nama kosong") {
    $pesan = "<h3>Maaf, anda harus mengisi nama</h3>";
}
if ($error == "email kosong") {
    $pesan = "<h3>Maaf, anda harus mengisi email</h3>";
}
?>

<!-- Untuk tampilan yang ada di web nya -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    
</head>

<body>
    <!-- form login -->
    <h2>Form Login</h2>
    <?php
    echo $pesan;
    ?>
    <form action="pesan.php" method="get"> <!-- untuk mengakses file pesan.php -->
        Nama : <input type="text" name="nama">
        <br>
        E-Mail : <input type="text" name="email">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>