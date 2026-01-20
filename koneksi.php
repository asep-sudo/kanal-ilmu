<?php
$koneksi = mysqli_connect("localhost", "root", "", "les_private");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
