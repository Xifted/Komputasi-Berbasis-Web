<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard - Berita Terkini</title>
</head>

<body>
    <!-- Navbar (Responsive) -->
    <header class="bg-light position-sticky w-100 shadow py-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Muhammad Rafi Irfan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav d-flex gap-3">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">News</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- News Section (Responsive) -->
    <section class="news-section container mt-5">
        <h1 class="border-bottom border-2">Berita Terkini</h1>

        <div class="news-item row mt-4 py-4 px-3 rounded">
            <div class="col-lg-4 col-md-12">
                <img src="https://asset.kompas.com/crops/wjLaQi4tzynTHsFCLD_c3PZftYg=/7x0:597x393/750x500/data/photo/2024/09/16/66e778ae626b7.jpg"
                    alt="news-img" class="img-fluid rounded">
            </div>
            <div class="col-lg-8 col-md-12">
                <h2>Penyebab Macet Horor Puncak Bogor Terungkap: Motor Melambung, Volume Kendaraan 391.142</h2>
                <p>Kemacetan horor di Jalur Puncak Bogor, Jawa Barat, saat libur panjang 14-16 September 2024 disebabkan
                    volume kendaraan motor meningkat serta banyak yang melambung saat diberlakukan rekayasa lalulintas
                    one way (satu arah)... <a href="halaman-berita/berita-detail-1.php">Lihat Selengkapnya</a></p>
            </div>
        </div>

        <div class="news-item row mt-4 py-4 px-3 rounded">
            <div class="col-lg-4 col-md-12">
                <img src="https://asset.kompas.com/crops/f9TqgjD7wsukAOJm5mWqsNgKS2Q=/26x0:615x393/750x500/data/photo/2024/09/17/66e96a1873c0a.jpg"
                    alt="news-img" class="img-fluid rounded">
            </div>
            <div class="col-lg-8 col-md-12">
                <h2>Tak Diberi Kompensasi Rp 1,36 M, Ojek Pangkalan di Bandung Ancam Kembali Tolak Ojol</h2>
                <p>Perkumpulan ojek pangkalan (opang) Pasir Impun, Kota Bandung, Jawa Barat, mengancam akan kembali
                    mengambil tindakan jika pemerintah dan operator ojek online (ojol) menolak membayar biaya kompensasi
                    sebesar Rp 10 juta... <a href="halaman-berita/berita-detail-2.php">Lihat Selengkapnya</a></p>
            </div>
        </div>

        <div class="news-item row mt-4 py-4 px-3 rounded">
            <div class="col-lg-4 col-md-12">
                <img src="https://asset.kompas.com/crops/_gTAQVHyDZhGcV9yzS-swthidcE=/0x0:0x0/750x500/data/photo/2024/09/17/66e9902b99029.jpg"
                    alt="news-img" class="img-fluid rounded">
            </div>
            <div class="col-lg-8 col-md-12">
                <h2>Tim Labfor Selidiki Sumber Kebakaran Pasar Comboran Malang</h2>
                <p>Tim Bidang Laboratorium Forensik Polda Jatim melakukan olah Tempat Kejadian Perkara (TKP) kebakaran
                    di lantai 3 Pasar Baru Barat, kawasan Comboran, Kota Malang, Jawa Timur, pada Selasa (17/9/2024)...
                    <a href="halaman-berita/berita-detail-3.php">Lihat Selengkapnya</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Footer (Responsive) -->
    <footer class="bg-light text-center py-4 mt-5 border">
        <h2>Web Rekomendasi</h2>
        <div class="d-flex justify-content-center gap-5">
            <a href="https://google.com">Google</a>
            <a href="https://bing.com">Microsoft</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>