<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = $_POST['password'];

    // Ambil user guru saja
    $query = mysqli_query(
        $koneksi,
        "SELECT * FROM users 
         WHERE email='$email' AND role='guru' AND status='active'
         LIMIT 1"
    );

    if (mysqli_num_rows($query) === 1) {
        $data = mysqli_fetch_assoc($query);

        // Cek password
        if (password_verify($password, $data['password'])) {

            // Cek status
            if ($data['status'] !== 'active') {
                header("Location: login-guru.php?error=pending");
                exit;
            }

            // Login berhasil
            $_SESSION['login_guru'] = true;
            $_SESSION['guru'] = $data;

            header("Location: guru/dashboard.php");
            exit;
        }
    }

    header("Location: login-guru.php?error=invalid");
    exit;
}
