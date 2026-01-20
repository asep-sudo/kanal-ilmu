<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrivatMaster - Belajar Nyaman, Prestasi Gemilang</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS Reset & General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 10%;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2563eb;
        }
        .nav-links {
            list-style: none;
            display: flex;
        }
        .nav-links li {
            margin-left: 25px;
        }
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: 0.3s;
        }
        .nav-links a:hover {
            color: #2563eb;
        }
        .btn-cta {
            background: #2563eb;
            color: #fff !important;
            padding: 10px 20px;
            border-radius: 5px;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 10%;
            background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 100%);
        }
        .hero-content {
            flex: 1;
        }
        .hero-content h1 {
            font-size: 3rem;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #1e3a8a;
        }
        .hero-content p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #555;
        }
        .hero-image {
            flex: 1;
            text-align: right;
        }
        .hero-image img {
            max-width: 100%;
            border-radius: 20px;
        }

        /* Services Section */
        .section {
            padding: 80px 10%;
            text-align: center;
        }
        .section-title {
            margin-bottom: 50px;
        }
        .section-title h2 {
            font-size: 2rem;
            color: #1e3a8a;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        .card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card h3 {
            margin-bottom: 15px;
            color: #2563eb;
        }

        /* Footer */
        footer {
            background: #1e3a8a;
            color: #fff;
            padding: 50px 10% 20px;
            text-align: center;
        }
        .footer-content {
            margin-bottom: 30px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .hero-image {
                margin-top: 50px;
            }
            .nav-links {
                display: none; /* Sederhana: sembunyikan menu di mobile */
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">PrivatMaster</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#program">Program</a></li>
            <li><a href="#biaya">Biaya</a></li>
            <li><a href="#" class="btn-cta">Daftar Sekarang</a></li>
        </ul>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>Tingkatkan Prestasi Belajar Bersama Tutor Terbaik</h1>
            <p>Layanan les privat ke rumah atau online dengan kurikulum personal sesuai kebutuhan siswa. Fokus, intensif, dan menyenangkan.</p>
            <a href="https://wa.me/628123456789" class="btn-cta" style="padding: 15px 30px; font-size: 1.1rem; text-decoration: none;">Hubungi Kami via WA</a>
        </div>
        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Belajar Privat">
        </div>
    </section>

    <section class="section" id="program">
        <div class="section-title">
            <h2>Program Unggulan Kami</h2>
            <p>Pilih jenjang pendidikan yang sesuai</p>
        </div>
        <div class="grid">
            <div class="card">
                <h3>Sekolah Dasar (SD)</h3>
                <p>Bimbingan semua mata pelajaran dan bantuan tugas sekolah dengan metode belajar yang seru.</p>
            </div>
            <div class="card">
                <h3>SMP & SMA</h3>
                <p>Fokus pada mata pelajaran sulit seperti Matematika, Fisika, Kimia, dan Bahasa Inggris.</p>
            </div>
            <div class="card">
                <h3>Persiapan Ujian</h3>
                <p>Program intensif persiapan SNBT, Ujian Sekolah, hingga olimpiade sains.</p>
            </div>
        </div>
    </section>

    <section class="section" style="background: #fff;">
        <div class="section-title">
            <h2>Kenapa Memilih PrivatMaster?</h2>
        </div>
        <div class="grid">
            <div class="card" style="box-shadow: none; border: 1px solid #eee;">
                <h4>Tutor Terseleksi</h4>
                <p>Pengajar berasal dari PTN ternama dan telah melewati seleksi ketat.</p>
            </div>
            <div class="card" style="box-shadow: none; border: 1px solid #eee;">
                <h4>Jadwal Fleksibel</h4>
                <p>Tentukan sendiri waktu belajar yang paling nyaman bagi putra-putri Anda.</p>
            </div>
            <div class="card" style="box-shadow: none; border: 1px solid #eee;">
                <h4>Laporan Berkala</h4>
                <p>Orang tua mendapatkan laporan perkembangan belajar anak setiap bulannya.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <h3>PrivatMaster</h3>
            <p>Membantu siswa meraih mimpi melalui pendidikan berkualitas.</p>
            <p style="margin-top: 10px;">Jl. Pendidikan No. 123, Jakarta Selatan</p>
        </div>
        <p>&copy; 2026 PrivatMaster. All rights reserved.</p>
    </footer>

</body>
</html>