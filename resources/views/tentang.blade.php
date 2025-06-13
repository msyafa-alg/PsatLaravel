<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('https://i.pinimg.com/736x/d4/e2/4d/d4e24d51ea8784c793661719c1425839.jpg') no-repeat center center;
            background-size: cover;
        }

        .section-title {
            text-align: center;
            padding-top: 80px;
            padding-bottom: 40px;
        }
        .underline {
            width: 40px;
            height: 4px;
            background-color: #198754;
            margin: 8px auto;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">ASEP WISATA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/paket">Paket</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Camping Ground</a></li>
                <li class="nav-item"><a class="nav-link active" href="/tentang">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Hubungi Kami</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Tentang Kami -->
<div class="hero">
<section>
    <div class="container">
        <div class="section-title">
            <h2>Tentang Kami</h2>
            <p>
                PT Wana Wisata Indah adalah perusahaan yang bergerak di bidang pengelolaan wisata alam
                yang berkomitmen untuk menciptakan pengalaman wisata yang berkelanjutan dan
                bertanggung jawab terhadap kelestarian alam. Berdiri sejak tahun 1986, kami dipercaya oleh
                pemerintah untuk mengelola Taman Wisata Alam (TWA) Gunung Pancar yang terletak di
                kawasan Sentul, Bogor, dengan luas area mencapai 447,5 hektare.
            </p>
        </div>
    </div>
</section>

<!-- Visi & Misi -->
<section class="py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center">Visi</h4>
                        <div class="underline"></div>
                        <p class="mt-3">
                            Visi kami adalah menjadikan Gunung Pancar sebagai kawasan rekreasi dan konservasi
                            yang profesional dan berkelanjutan, sambil mendukung pendidikan lingkungan dan
                            meningkatkan kesejahteraan masyarakat sekitar. Kami percaya bahwa kelestarian alam
                            dan kegiatan wisata yang ramah lingkungan dapat berjalan berdampingan untuk
                            memberikan manfaat bagi semua pihak.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center">Misi</h4>
                        <div class="underline"></div>
                        <p class="mt-3">
                            Misi kami adalah memberikan pengalaman wisata alam yang menyenangkan dan mendidik,
                            dengan tetap memperhatikan aspek konservasi dan keberlanjutan. Kami juga berupaya
                            untuk melibatkan masyarakat sekitar dalam kegiatan pengusahaan pariwisata, menciptakan
                            lapangan pekerjaan, dan memberikan peluang usaha untuk meningkatkan kesejahteraan lokal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Komitmen -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h4 class="text-success text-center fw-bold">Komitmen</h4>
                <p class="mt-3 text-center">
                    Sebagai bagian dari komitmen kami terhadap kelestarian lingkungan, PT Wana Wisata Indah terus
                    berupaya meningkatkan keanekaragaman hayati di Gunung Pancar. Dalam dua tahun terakhir, kami telah
                    menanam lebih dari 68.000 pohon dari 35 jenis tanaman buah-buahan lokal sebagai bagian dari program
                    penghijauan dan pengayaan vegetasi.
                    <br><br>
                    Selain itu, kami juga menjalankan berbagai program konservasi dan mendukung edukasi lingkungan,
                    khususnya bagi generasi muda, agar mereka lebih menghargai dan menjaga alam.
                </p>
            </div>
        </div>
    </div>
</section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
