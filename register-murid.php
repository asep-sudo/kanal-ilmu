<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Murid</title>
</head>
<body>

<h1>Daftar Murid</h1>

<form method="post" action="proses-register-murid.php">
    <label>Nama</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Daftar</button>
</form>

<p>Sudah punya akun? <a href="login-murid.php">Login di sini</a></p>

</body>
</html>
