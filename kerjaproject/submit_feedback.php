<?php
include("db_conect.php");
if(isset($_POST['Send'])) {
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

// buat query
$sql = "INSERT INTO `feedback`(`Nama`, `Email`, `Massage`) VALUES ('$Name','$Email','$Message')";
$query = mysqli_query($db, $sql);
// apakah query simpan berhasil?
if( $query ) {
// kalau berhasil alihkan ke halaman index.php dengan status=sukses
header('Location: home.html?status=berhasil');
} else {
// kalau gagal alihkan ke halaman index.php dengan status=gagal
header('Location: feedback1.php?status=gagal');
}
} else {
die("Akses dilarang...");
}
?>