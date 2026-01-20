<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Tetapkan identitas oleh sistem
    $role   = 'murid';
    $status = 'active';

    // Cek email sudah terdaftar atau belum
    $cek = mysqli_query($koneksi, "SELECT id FROM users WHERE email='$email' LIMIT 1");
    if (mysqli_num_rows($cek) > 0) {
        header("Location: register-murid.php?error=email");
        exit;
    }

    // Simpan ke database
    mysqli_query(
        $koneksi,
        "INSERT INTO users (nama, email, password, role, status)
         VALUES ('$nama', '$email', '$password', '$role', '$status')"
    );

    // Setelah daftar, arahkan ke login
    header("Location: login-murid.php?register=success");
    exit;
}
