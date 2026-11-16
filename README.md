# LAB 8 WEB - PHP DAN DATABASE MYSQL

## Identitas
- Nama: Milan Nugroho
- NIM: (312510164)
- Kelas: I251B
- Mata Kuliah: Pemrograman Web

## 1. Persiapan Praktikum

Pada praktikum ini, dilakukan pembuatan aplikasi CRUD sederhana menggunakan PHP dan database MySQL. Aplikasi dibuat menggunakan Visual Studio Code sebagai text editor dan XAMPP sebagai web server.

Sebelum memulai praktikum, Apache dan MySQL dijalankan melalui XAMPP Control Panel.


## 2. Membuat Database

Database dibuat melalui phpMyAdmin dengan nama `latihan1`.

Selanjutnya, dibuat tabel bernama `data_barang` yang digunakan untuk menyimpan informasi barang.

Tabel tersebut memiliki beberapa kolom, yaitu:
- id_barang
- kategori
- nama
- gambar
- harga_beli
- harga_jual
- stok

## 3. Menambahkan Data Barang

Setelah tabel dibuat, dilakukan penambahan beberapa data barang menggunakan perintah SQL INSERT.

Data yang dimasukkan terdiri dari tiga barang elektronik, yaitu:
- HP Samsung Android
- HP Xiaomi Android
- HP OPPO Android

## 4. Membuat Folder Praktikum

Folder praktikum dibuat di dalam direktori `htdocs` dengan nama `lab8_php_database`.

Folder ini digunakan untuk menyimpan seluruh file aplikasi PHP yang dibuat selama praktikum.

## 5. Membuat Koneksi Database

File `koneksi.php` dibuat untuk menghubungkan aplikasi PHP dengan database MySQL.

Pada file ini digunakan fungsi `mysqli_connect()` dengan beberapa informasi, yaitu host, username, password, dan nama database.

Koneksi diuji melalui browser untuk memastikan PHP berhasil terhubung dengan database.

## 6. Menampilkan Data Barang (Read)

File `index.php` dibuat untuk menampilkan seluruh data barang dari database.

Proses pengambilan data menggunakan perintah SQL SELECT dan fungsi `mysqli_query()`.

Data yang berhasil diambil kemudian ditampilkan dalam bentuk tabel HTML yang berisi gambar, nama barang, kategori, harga jual, harga beli, stok, dan aksi.

Pada halaman ini juga terdapat link untuk menambahkan, mengubah, dan menghapus data barang.


## 7. Menambahkan Data (Create)

File `tambah.php` dibuat untuk menambahkan data barang baru ke dalam database.

Halaman ini memiliki form yang berisi:
- Nama Barang
- Kategori
- Harga Jual
- Harga Beli
- Stok
- File Gambar

Data yang dimasukkan melalui form akan diproses menggunakan metode POST dan disimpan ke database menggunakan perintah SQL INSERT.

## 8. Mengubah Data (Update)

File `ubah.php` dibuat untuk mengubah informasi barang yang sudah tersimpan di database.

Data barang diambil berdasarkan ID barang menggunakan perintah SQL SELECT.

Form akan menampilkan data sebelumnya sehingga pengguna dapat mengubah informasi seperti nama barang, kategori, harga, stok, dan gambar.

Setelah tombol Simpan ditekan, perubahan data akan diproses menggunakan perintah SQL UPDATE.



## 9. Menghapus Data (Delete)

File `hapus.php` dibuat untuk menghapus data barang dari database.

Proses penghapusan dilakukan berdasarkan ID barang menggunakan perintah SQL DELETE.

Setelah data berhasil dihapus, halaman akan kembali ke `index.php` dan menampilkan data barang yang tersisa.


## 10. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, dapat dipahami cara menghubungkan PHP dengan database MySQL serta menerapkan konsep CRUD (Create, Read, Update, Delete).

Melalui praktikum ini, berhasil dibuat aplikasi sederhana untuk mengelola data barang, mulai dari menambahkan, menampilkan, mengubah, hingga menghapus data menggunakan PHP dan MySQL.


##SCREENSHOT
<img width="730" height="252" alt="1" src="https://github.com/user-attachments/assets/d84b23c4-5bb8-4bff-89f9-b1c7039c8377" />

<img width="667" height="249" alt="1 1" src="https://github.com/user-attachments/assets/26873196-4360-4029-aa14-a8e6f55c80bb" />

<img width="329" height="260" alt="1 2" src="https://github.com/user-attachments/assets/60a6f02a-9852-41f0-a82f-dda5a982aa16" />

<img width="548" height="210" alt="1 3" src="https://github.com/user-attachments/assets/494aa343-c552-4d14-a6d6-a433937d4833" />

<img width="640" height="433" alt="2" src="https://github.com/user-attachments/assets/9882880f-e220-477d-bf13-fd0dcabb3334" />

<img width="643" height="410" alt="2 1" src="https://github.com/user-attachments/assets/16f5c747-c79a-4efd-8f2b-bbff332a40ec" />

<img width="920" height="311" alt="2 2" src="https://github.com/user-attachments/assets/8e5f2b17-b401-4219-952c-34408e1be528" />

<img width="637" height="421" alt="3" src="https://github.com/user-attachments/assets/a1187038-a066-4d94-989b-8bc16a189865" />

<img width="890" height="204" alt="3 1" src="https://github.com/user-attachments/assets/b95df114-e6db-4143-9852-5b84a0bd437a" />

<img width="859" height="422" alt="3 2" src="https://github.com/user-attachments/assets/6d223143-a79c-4685-aaee-6a1d55c25e01" />

<img width="646" height="428" alt="4" src="https://github.com/user-attachments/assets/1c3e9473-b2f0-423f-9c4b-372d88247709" />

<img width="916" height="433" alt="4 1" src="https://github.com/user-attachments/assets/6a5233cd-124b-42a2-954c-fc176b979fcc" />

<img width="443" height="282" alt="Screenshot 2026-11-16 155825" src="https://github.com/user-attachments/assets/08a41216-cfae-4efb-be62-f0f7f4a5bba9" />

<img width="889" height="425" alt="Screenshot 2026-11-16 155841" src="https://github.com/user-attachments/assets/ffea8573-c9e7-4b54-88a4-bd708cd0b77c" />

<img width="874" height="350" alt="Screenshot 2026-11-16 160450" src="https://github.com/user-attachments/assets/4e802a2e-b8a0-44ad-a095-30f3c941e246" />
