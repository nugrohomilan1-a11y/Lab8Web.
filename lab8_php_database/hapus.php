
<?php
include_once 'koneksi.php';

// Mengambil ID barang dari URL
$id = $_GET['id'];

// Query untuk menghapus data
$sql = "DELETE FROM data_barang WHERE id_barang = ?";
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

// Kembali ke halaman utama
header('location: index.php');
exit;
?>
