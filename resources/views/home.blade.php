<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Taman Wisata Alam Gunung Pancar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    .hero {
      background: url('https://i.pinimg.com/736x/aa/eb/3c/aaeb3c2d7eaf40376303687794740d26.jpg') no-repeat center center;
      background-size: cover;
      height: 100vh;
      color: white;
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.4);
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      margin: auto;
      padding: 20px;
      max-width: 800px;
    }

    .hero-content h1 {
      font-weight: bold;
    }

    .hero-content p {
      font-size: 1.1rem;
      margin-top: 20px;
    }

    .hero-content .btn-success {
      margin-top: 30px;
      padding: 12px 25px;
      font-size: 1rem;
      border-radius: 50px;
    }

    .navbar {
      background-color: transparent !important;
    }

    .nav-link {
      color: white !important;
      font-weight: 500;
    }

    .navbar-brand {
      color: white;
      font-weight: bold;
    }

    .navbar-nav .nav-link:hover {
      text-decoration: underline;
    }

    @media(max-width: 768px) {
      .hero-content h1 {
        font-size: 1.7rem;
      }
      .hero-content p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  <div class="hero">
    <div class="overlay"></div>

    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100">
      <div class="container">
        <a class="navbar-brand" href="#">🌿 ASEP WISATA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navmenu">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/paket">Paket</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Camping Ground</a></li>
            <li class="nav-item"><a class="nav-link" href="/tentang">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Hubungi Kami</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="hero-content text-white">
      <p class="fs-5">Selamat Datang di Website Resmi</p>
      <h1 class="display-4">Taman Wisata Alam <br> Gunung Pancar</h1>
      <p>
        Taman Wisata Alam Gunung Pancar menyediakan keindahan alam pegunungan dengan hutan pinus yang rindang. Terletak hanya beberapa jam dari Jakarta, kami menawarkan destinasi sempurna bagi Anda yang ingin melepas penat dan kembali menyatu dengan alam.
      </p>
      <a href="#" class="btn btn-success">
        <i class="bi bi-whatsapp"></i> PESAN SEKARANG
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
