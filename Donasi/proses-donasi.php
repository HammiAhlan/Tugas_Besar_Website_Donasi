<?php
include("config.php");

//cek apakah tombol donasi sudah diklik atau belum?
if($_POST['donasi']){

    //ambil data dari form-donasi 
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['Email'];
    $jenis_donasi = $_POST['jenis_donasi'];
    $pengkhususan_donasi = $_POST['pengkhususan_donasi'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $jumlah = $_POST['jumlah'];

// buat query 
$sql = "INSERT INTO donasi (nama,telepon,Email,jenis_donasi,
pengkhususan_donasi,metode_donasi,juumlah)
VALUE ('$nama','$telepon','$email,$jenis_donasi,'$pengkhususan_donasi','$metode_pembayaran','$jumlah')"; 
$query = mysqli_query($db,$sql);

//apakah query simpan berhasil?
if($query) {
    //kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: index.php?status=sukses');
}else {
    //kalau gagal alihkan ke halaman index.php dengan status=gagal
    header('Location: index.php?status=gagal');
}

}else {
    die("Akses dilarang...");
}
?>