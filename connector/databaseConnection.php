<?php

$host = "localhost";
$user = "root";
$pass = "";
$DBname = "tech";

$connect = mysqli_connect($host, $user, $pass, $DBname);

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>