<link rel="stylesheet" href="/les-private/assets/css/style.css">

<div class="header">
    <strong>Les Private</strong>
</div>

<div class="container">
    <div class="sidebar">

        <?php if (isset($_SESSION['login_murid'])) : ?>
            <a href="/les-private/murid/dashboard.php">Dashboard</a>
            <a href="/les-private/murid/profil.php">Profil</a>
            <a href="/les-private/murid/logout.php">Logout</a>
			<a href="/les-private/murid/daftar-guru.php">Daftar Guru</a>

        <?php elseif (isset($_SESSION['login_guru'])) : ?>
            <a href="/les-private/guru/dashboard.php">Dashboard</a>
            <a href="/les-private/guru/profil.php">Profil</a>
            <a href="/les-private/guru/logout.php">Logout</a>
        <?php endif; ?>

    </div>

    <div class="content">
