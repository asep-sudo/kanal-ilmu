<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Guru</title>
</head>
<body>

<h1>Pendaftaran Guru</h1>

<p>Setelah mendaftar, akun guru akan diverifikasi terlebih dahulu.</p>

<form method="post" action="proses-register-guru.php">
    <label>Nama Lengkap</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Daftar sebagai Guru</button>
</form>

<p>Sudah punya akun? <a href="login-guru.php">Login Guru</a></p>

</body>
</html>
