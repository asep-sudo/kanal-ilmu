<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Identitas guru ditetapkan sistem
    $role   = 'guru';
    $status = 'pending';

    // Cek email sudah terdaftar atau belum
    $cek = mysqli_query($koneksi, "SELECT id FROM users WHERE email='$email' LIMIT 1");
    if (mysqli_num_rows($cek) > 0) {
        header("Location: register-guru.php?error=email");
        exit;
    }

    // Simpan ke database
    mysqli_query(
        $koneksi,
        "INSERT INTO users (nama, email, password, role, status)
         VALUES ('$nama', '$email', '$password', '$role', '$status')"
    );

    // Arahkan ke halaman info
    header("Location: guru/login.php?error=pending");
    exit;
}
