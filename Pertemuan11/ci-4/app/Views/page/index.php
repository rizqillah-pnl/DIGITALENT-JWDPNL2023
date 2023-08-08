<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
  <a class="navbar-brand" href="#!">
    <img src="logo.jpg" alt="RIZQILLAH Logo" width="50">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="#body">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#visi-misi">Visi Misi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#profil-kelebihan">Profil & Kelebihan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#produk-jasa">Produk & Jasa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gallery">Gallery Foto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#daftar-klien">Daftar Klien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#kontak">Kontak Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>



<div id="carouselExample" class="carousel slide" style="margin-top: 110px;" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" style="height: 500px;" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block w-100" style="height: 500px;" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" style="height: 500px;" alt="Image 3">
    </div>
    <div class="carousel-item">
      <img src="img/4.jpg" class="d-block w-100" style="height: 500px;" alt="Image 4">
    </div>
    <div class="carousel-item">
      <img src="img/5.jpg" class="d-block w-100" style="height: 500px;" alt="Image 5">
    </div>
    <div class="carousel-item">
      <img src="img/6.jpg" class="d-block w-100" style="height: 500px;" alt="Image 6">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container">
  <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <!-- Cover Depan -->
    <div class="jumbotron text-center mt-2 mb-4">
      <h1>Selamat Datang di Aplikasi RIZQILLAH | PNL</h1>
    </div>

    <!-- Tentang Kami -->
    <div class="container" id="tentang-kami">
      <h2>Tentang Kami</h2>
      <p>Selamat datang di Aplikasi RIZQILLAH | PNL, seorang mahasiswa yang berdedikasi dalam bidang ilmu komputer.
        Belajar coding sejak tahun 2019 lalu, saya telah membangun jejak yang kuat dalam memberikan kebutuhan perangkat lunak yang mudah digunakan serta diakses oleh pihak lain. Dengan komitmen yang tinggi terhadap inovasi dan kualitas, saya telah menjadi programmer yang cukup handal dalam menangani berbagai error dan terus berusaha untuk memberikan yang terbaik kepada semua masyarakat.</p>
    </div>

    <!-- Visi Misi -->
    <div class="container" id="visi-misi">
      <h2>Visi Misi</h2>
      <h4>Visi:</h4>
      <p>Menjadi penyedia solusi perangkat lunak terkemuka yang mengubah kehidupan dan bisnis melalui inovasi.</p>
      <h4>Misi:</h4>
      <p>Saya berkomitmen untuk memberikan produk yang sesuai dengan harapan pelanggan untuk mencapai kepuasan pelanggan yang luar biasa.</p>
    </div>

    <!-- Profil, Pengalaman, dan Kelebihan Perusahaan -->
    <div class="container" id="profil-kelebihan">
      <h2>Profil, Pengalaman, dan Kelebihan Perusahaan</h2>
      <p>Dengan pengalaman lebih dari 5 tahun belajar dan 1 tahun bekerja, saya telah membangun fondasi yang kokoh dalam industri pengembangan perangkat lunak.</p>
    </div>

    <!-- Produk / Jasa Perusahaan -->
    <div class="container" id="produk-jasa">
      <h2>Produk / Jasa Perusahaan</h2>
      <section id="products" class="py-5">
        <div class="container">
          <h2 class="text-center mb-4">Produk Saya</h2>
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="img/4.jpg" class="card-img-top" alt="Product 1">
                <div class="card-body">
                  <h5 class="card-title">Product 1</h5>
                  <p class="card-text">Description of Product 1.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="img/3.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body">
                  <h5 class="card-title">Product 2</h5>
                  <p class="card-text">Description of Product 2.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="img/5.jpg" class="card-img-top" alt="Product 3">
                <div class="card-body">
                  <h5 class="card-title">Product 3</h5>
                  <p class="card-text">Description of Product 3.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="services" class="py-5 bg-light">
        <div class="container">
          <h2 class="text-center mb-4">Jasa Saya</h2>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Service 1</h5>
                  <p class="card-text">Description of Service 1.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Service 2</h5>
                  <p class="card-text">Description of Service 2.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Gallery Foto -->
    <div class="container" id="gallery">
      <h2>Gallery Foto</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="img/1.jpg" class="card-img-top" alt="Image 1">
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="img/2.jpg" class="card-img-top" alt="Image 2">
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="img/3.jpg" class="card-img-top" alt="Image 3">
          </div>
        </div>
      </div>
    </div>

    <!-- Daftar Klien -->
    <div class="container" id="daftar-klien">
      <h2>Daftar Klien</h2>
      <div class="row">
        <div class="col-md-3 mb-4 mx-auto">
          <div class="card">
            <img src="img/client/1.png" class="card-img-top" height="220" width="30" alt="Client 1">
            <div class="card-body">
              <h5 class="card-title">Facebook</h5>
              <p class="card-text">Description of Facebook.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4 mx-auto">
          <div class="card">
            <img src="img/client/2.webp" class="card-img-top" height="220" width="30" alt="Instagram">
            <div class="card-body">
              <h5 class="card-title">Instagram</h5>
              <p class="card-text">Description of Instagram.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4 mx-auto">
          <div class="card">
            <img src="img/client/3.png" class="card-img-top" height="220" width="30" alt="Gojek">
            <div class="card-body">
              <h5 class="card-title">Gojek</h5>
              <p class="card-text">Description of Gojek.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4 mx-auto">
          <div class="card">
            <img src="img/client/4.png" class="card-img-top" height="220" width="30" alt="Tokopedia">
            <div class="card-body">
              <h5 class="card-title">Tokopedia</h5>
              <p class="card-text">Description of Tokopedia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4 mx-auto">
          <div class="card">
            <img src="img/client/5.png" class="card-img-top" height="220" width="30" alt="Shopee">
            <div class="card-body">
              <h5 class="card-title">Shopee</h5>
              <p class="card-text">Description of Shopee.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4 mx-auto">
          <div class="card">
            <img src="img/client/6.png" class="card-img-top" height="220" width="30" alt="Xiaomi">
            <div class="card-body">
              <h5 class="card-title">Xiaomi</h5>
              <p class="card-text">Description of Xiaomi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kontak Kami -->
    <div class="container" id="kontak">
      <h2>Kontak Kami</h2>
      <address>
        <strong>Alamat:</strong> Politeknik Negeri Lhokseumawe<br>
        <strong>Telepon:</strong> 082165517433<br>
        <strong>Email:</strong> <a href="mailto:rizqillah531@gmail.com">rizqillah531@gmail.com</a>
      </address>
    </div>

    <!-- Artikel -->
    <div class="container">
      <h2>Artikel</h2>
      <p>Disini Letak Artikel Website</p>
    </div>

    <!-- Event -->
    <div class="container">
      <h2>Event</h2>
      <p>Disini Letak Foto-foto Event Website</p>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>