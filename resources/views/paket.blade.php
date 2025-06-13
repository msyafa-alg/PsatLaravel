<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Paket Wisata Gunung Pancar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background-image: url('https://i.pinimg.com/736x/37/b3/41/37b341692544b4be6e1936eb0cb58abc.jpg'); /* Ganti dengan foto lu kalau perlu */
      background-size: cover;
      background-position: center;
      color: white;
      padding: 120px 0;
      text-align: center;
    }
    .card img {
      height: 240px;
      object-fit: cover;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">ASEP WISATA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="/paket">Paket</a></li>
        <li class="nav-item"><a class="nav-link" href="/camping">Camping Ground</a></li>
        <li class="nav-item"><a class="nav-link" href="/tentang">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="/kontak">Hubungi Kami</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<div class="hero">
  <div class="container">
    <h1 class="fw-bold">Paket Wisata Gunung Pancar</h1>
    <p>TWA Gunung Pancar menyediakan berbagai paket sesuai kebutuhan anda. Jika ingin info lebih jelas bisa menghubungi kontak kami.</p>
  </div>
</div>

<!-- Paket Cards -->
<div class="container my-5">
  <div class="row g-4">
    <!-- 1 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://gunungpancar.co.id/assets/img/paket/pancar-camp/Home.jpg" class="card-img-top" alt="Pancar Camp">
        <div class="card-body">
          <h5 class="card-title">Pancar Camp</h5>
          <p class="card-text">Rasakan pengalaman camping seru di tengah hutan pinus yang menenangkan!</p>
          <a href="#" class="btn btn-success">Read more →</a>
        </div>
      </div>
    </div>
    <!-- 2 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://gunungpancar.co.id/assets/img/paket/paintball/Home.jpg" class="card-img-top" alt="Paintball">
        <div class="card-body">
          <h5 class="card-title">Paintball</h5>
          <p class="card-text">Uji strategi dan kekompakan tim dengan paintball seru di alam terbuka!</p>
          <a href="#" class="btn btn-success">Read more →</a>
        </div>
      </div>
    </div>
    <!-- 3 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://gunungpancar.co.id/assets/img/paket/pancar-camp-fun-outbond/Home.jpg" class="card-img-top" alt="Outbound">
        <div class="card-body">
          <h5 class="card-title">Pancar Camp Fun Outbond</h5>
          <p class="card-text">Kembangkan teamwork dan leadership melalui aktivitas outbound seru!</p>
          <a href="#" class="btn btn-success">Read more →</a>
        </div>
      </div>
    </div>

    <!-- Baris kedua -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://gunungpancar.co.id/assets/img/paket/pancar-oneday/Home.jpg" class="card-img-top" alt="Pancar Oneday">
        <div class="card-body">
          <h5 class="card-title">Pancar Oneday</h5>
          <p class="card-text">Nikmati keindahan Gunung Pancar dalam satu hari penuh dengan aktivitas seru!</p>
          <a href="#" class="btn btn-success">Read more →</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://gunungpancar.co.id/assets/img/paket/pancar-oneday-fun-outbond/Home.jpg" class="card-img-top" alt="Oneday Outbond">
        <div class="card-body">
          <h5 class="card-title">Pancar Oneday Fun Outbond</h5>
          <p class="card-text">Sehari penuh dengan keseruan outbound dan petualangan alam di Gunung Pancar!</p>
          <a href="#" class="btn btn-success">Read more →</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://gunungpancar.co.id/assets/img/paket/shooting/Home.jpg" class="card-img-top" alt="Shooting">
        <div class="card-body">
          <h5 class="card-title">Shooting</h5>
          <p class="card-text">Abadikan momen spesial dengan latar belakang alam yang menakjubkan!</p>
          <a href="#" class="btn btn-success">Read more →</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
