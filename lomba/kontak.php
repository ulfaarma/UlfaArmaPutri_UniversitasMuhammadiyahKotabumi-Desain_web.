<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="foto/logo.jpg" type="image/x-icon">
    <title>Bem ITBA Dcc Kampus Kabupaten Lampung Utara - Kontak</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="foto/logo.jpg" alt="Logo">
            <p>Bem ITBA Dcc Kampus Kabupaten Lampung Utara</p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang Kami</a></li>
                <li><a href="layanan.php">Layanan</a></li>
                <li><a href="proyek.php">Proyek</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" onclick="toggleMenu();">&#9776;</div>
    </header>

    <!-- Kontak Section -->
    <section id="kontak">
        <div class="kontak-info">
            <h1>Kontak Kami</h1>
            <p>Hubungi kami melalui formulir di bawah ini atau melalui informasi kontak yang tersedia.</p>
        </div>
        <div class="kontak-form">
            <form>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan"></textarea>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </section>

    <section id="google-maps">
        <h1>Lokasi Kami</h1>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.944637827021!2d106.82987441511709!3d-6.17539299550495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f65eceda1dbb%3A0x2e033784c7f12cc6!2sMonas!5e0!3m2!1sen!2sid!4v1568032531385!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="kontak">
				<a href="index.php"><i class="fas fa-home" title="HOME"></i></a>
				<a href="kontak.php"><i class="fas fa-envelope" title="KONTAK"></i></a>
				<a style="margin-bottom: 15px;" href="https://api.whatsapp.com/send?phone=08974746874647&text=Saya%20membutuhkan%20bantuan%20🙏" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp" title="WHATSAPP"></i></a>
				<a style="margin-bottom: 15px;" href="http://instagram.com/_u/USERNAME/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram" title="INSTAGRAM"></i></a>
        </div>
        <div class="alamat">
            <p>Alamat: Jl. Raya Lintas Utama Sumatera No.03, Candi MAS, Kec. Abung Sel., Kabupaten Lampung Utara, Lampung 34511</p>
        </div>
        <p>&copy; 2024 Bem ITBA Dcc Kampus Kabupaten Lampung Utara. All rights reserved.</p>
    </footer>

    <!-- Link to CSS and JavaScript -->
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
</body>
</html>
