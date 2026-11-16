
<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

$id = $_GET['id'] ?? $_POST['id'] ?? null;

// Mengambil data barang berdasarkan ID
if ($id === null) {
    die('ID barang tidak ditemukan.');
}

$sql = "SELECT * FROM data_barang WHERE id_barang = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_array($result);

if (!$data) {
    die('Error: Data tidak tersedia');
}

// Proses menyimpan perubahan
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    // Menggunakan gambar lama jika tidak upload gambar baru
    $gambar = $data['gambar'];

    if (isset($_FILES['file_gambar']) &&
        $_FILES['file_gambar']['error'] == 0) {

        $filename = str_replace(' ', '_', $_FILES['file_gambar']['name']);
        $destination = __DIR__ . '/gambar/' . $filename;

        if (move_uploaded_file($_FILES['file_gambar']['tmp_name'], $destination)) {
            $gambar = $filename;
        }
    }

    // Update data barang
    $sql = "UPDATE data_barang SET
            nama = ?,
            kategori = ?,
            harga_jual = ?,
            harga_beli = ?,
            stok = ?,
            gambar = ?
            WHERE id_barang = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ssiiisi",
        $nama,
        $kategori,
        $harga_jual,
        $harga_beli,
        $stok,
        $gambar,
        $id
    );

    mysqli_stmt_execute($stmt);

    header('location: index.php');
    exit;
}

// Fungsi memilih kategori
function is_select($var, $val) {
    if ($var == $val) {
        return 'selected="selected"';
    }
    return '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Ubah Barang</title>
</head>
<body>

<div class="container">
    <h1>Ubah Barang</h1>

    <div class="main">
        <form method="post" action="ubah.php"
              enctype="multipart/form-data">

            <div class="input">
                <label>Nama Barang</label>
                <input type="text" name="nama"
                       value="<?= htmlspecialchars($data['nama']); ?>" />
            </div>

            <div class="input">
                <label>Kategori</label>
                <select name="kategori">
                    <option value="Komputer"
                        <?= is_select('Komputer', $data['kategori']); ?>>
                        Komputer
                    </option>

                    <option value="Elektronik"
                        <?= is_select('Elektronik', $data['kategori']); ?>>
                        Elektronik
                    </option>

                    <option value="Hand Phone"
                        <?= is_select('Hand Phone', $data['kategori']); ?>>
                        Hand Phone
                    </option>
                </select>
            </div>

            <div class="input">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual"
                       value="<?= htmlspecialchars($data['harga_jual']); ?>" />
            </div>

            <div class="input">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli"
                       value="<?= htmlspecialchars($data['harga_beli']); ?>" />
            </div>

            <div class="input">
                <label>Stok</label>
                <input type="text" name="stok"
                       value="<?= htmlspecialchars($data['stok']); ?>" />
            </div>

            <div class="input">
                <label>File Gambar</label>
                <input type="file" name="file_gambar" />
            </div>

            <div class="submit">
                <input type="hidden" name="id"
                       value="<?= $data['id_barang']; ?>" />

                <input type="submit" name="submit" value="Simpan" />
            </div>

        </form>
    </div>
</div>

</body>
</html>
