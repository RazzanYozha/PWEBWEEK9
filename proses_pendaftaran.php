<?php

// Pastikan file koneksi.php sudah ada dan berisi koneksi ke database
include("koneksi.php");

// Cek apakah tombol daftar sudah diklik atau belum
if(isset($_POST['Daftar'])){ // 'Daftar' adalah name dari tombol submit

    // Ambil data dari formulir
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Buat query untuk memasukkan data ke database
    // Pastikan nama tabel (contoh: calon_siswa) dan kolomnya sudah sesuai
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    
    $query = mysqli_query($db, $sql);

   // Cek apakah query berhasil disimpan?
if( $query ) {
    // Jika berhasil, alihkan ke halaman terima kasih yang baru kita buat
    header('Location: halaman-terima-kasih.php');
} else {
    // ...
} else {
    die("Akses dilarang...");
}

?>