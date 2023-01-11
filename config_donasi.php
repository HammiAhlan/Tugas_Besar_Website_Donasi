<?php
$server = "localhost";
$user = "root";
$password = "root";
$namadb = "logoutt";

include 'indeks.html';

$db = mysqli_connect($server, $user, $password,$namadb);

if(!$db){
    die("Gagal terhubung dengan database :" . mysqli_connect_error());

}

?>