<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query(
        $koneksi,
        "SELECT * FROM users 
         WHERE email='$email' 
         AND role='murid' 
         AND status='active'
         LIMIT 1"
    );

    if ($query && mysqli_num_rows($query) === 1) {

        $data = mysqli_fetch_assoc($query);

        if (password_verify($password, $data['password'])) {

            $_SESSION['login_murid'] = true;
            $_SESSION['murid'] = $data;

            header("Location: murid/dashboard.php");
            exit;
        }
    }

    header("Location: murid/login.php?error=invalid");
    exit;
}
