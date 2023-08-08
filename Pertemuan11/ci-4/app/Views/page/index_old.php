<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top px-5 shadow-lg p-3 mb-5">
  <a class="navbar-brand" href="#!">
    <img src="img/1.jpg" alt="PUTRI" width="50">
    <h6>Club Motor</h6>
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
        <a class="nav-link" href="#Profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#visi-misi">Visi Misi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#produk-kami">Produk Kami</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#gallery">Gallery Foto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#daftar-klien">Daftar Klien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
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
<!-- end nav -->

<div id="carouselExample" class="carousel slide" style="margin-top: 110px;" data-ride="carousel">
  <div class="carousel-inner">
    <div>
      <center>
        <h1>Welcome To Aplikasi Club Motor</h1>
      </center>
      <br>
    </div>
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
<br>

<!-- Profile -->
<div class="container">
  <section id="Profile">
    <br>
    <h2>Profile</h2>
    <p>Komunitas dan klub motor merupakan suatu kelompok sosial masyarakat yang tergabung karena
      adanya kesamaan minat terhadap sesuatu, khususnya motor. Komunitas dan klub motor menjadi
      salah satu sarana bagi sesama pengguna motor dengan merek yang sama untuk berkumpul,
      bermain, berkomunikasi, dan berinteraksi.</p>
    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </section>
  <br>

  <!-- Visi Misi -->
  <section id="visi-misi">
    <h2>Visi:</h2>
    <p>Memperat silahturahmi, Memperat kekompakan, Menjalin kebersamaan, Menjalin organisasi yang kuat</p>
    <h2>Misi:</h2>
    <p>Dengan adanya komunitas club motor ini diharapkan bisa untuk ajang silahturahmi untuk para anggota.
      Dan selain itu semoga komunitas ini bisa membuat kebersamaan yang kuat untuk semua anggota.
      Club motor ini ingin menyatukan semua pikiran-pikiran yang berbeda untuk menuju satu tujuan yang sama</p>
  </section>
  <br>
  <!-- Produk Kami -->
  <div id="produk-kami">
    <h2>Produk Kami</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/4.jpg" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <center>
              <h5 class="card-title">Product 1</h5>
              <p class="card-text">Description of Product 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/3.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <center>
              <h5 class="card-title">Product 2</h5>
              <p class="card-text">Description of Product 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/5.jpg" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <center>
              <h5 class="card-title">Product 3</h5>
              <p class="card-text">Description of Product 3.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <br>

  <!-- Gallery Foto -->
  <section id="gallery">
    <h2>Gallery Foto</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/5.jpg" class="card-img-top" alt="Image 1">
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/1.jpg" class="card-img-top" alt="Image 2">
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="img/3.jpg" class="card-img-top" alt="Image 3">
        </div>
      </div>
    </div>
  </section>
  <br>

  <!-- Daftar Klien -->
  <section id="daftar-klien">
    <h2>Daftar Klien</h2>
    <div class="row">
      <div class="col-md-3 mb-4 mx-auto">
        <div class="card">
          <img src="img/client/1.png" class="card-img-top" height="150" width="40" alt="Client 1">
          <div class="card-body">
            <h5 class="card-title">Facebook</h5>
            <p class="card-text">Description of Facebook.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 mx-auto">
        <div class="card">
          <img src="img/client/2.webp" class="card-img-top" height="150" width="40" alt="Instagram">
          <div class="card-body">
            <h5 class="card-title">Instagram</h5>
            <p class="card-text">Description of Instagram.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 mx-auto">
        <div class="card">
          <img src="img/client/3.png" class="card-img-top" height="150" width="40" alt="Whatsapp">
          <div class="card-body">
            <h5 class="card-title">Whatsapp</h5>
            <p class="card-text">Description of Whatsapp.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4 mx-auto">
        <div class="card">
          <img src="img/client/4.png" class="card-img-top" height="150" width="40" alt="Twitter">
          <div class="card-body">
            <h5 class="card-title">Twitter</h5>
            <p class="card-text">Description of Twitter.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <section id="about">
    <br>
    <h2>About Us</h2>
    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="img/6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Sejarah</h5>
          <p class="card-text">Keberadaan klub motor di Indonesia sudah sejak zaman kolonial Belanda. Motor
            hadir sebelum mobil masuk ke Hindia Belanda (baca: Sejarah Mobil, Kereta Tanpa
            Kuda). Orang pertama yang memiliki motor adalah seorang Inggris, John C. Potter,
            yang bekerja sebagai masinis pabrik gula di Umbul, dekat Probolinggo. Potter
            membeli motor langsung ke Hildebrand Und Wolfmuller, perusahaan penemu
            sepeda motor pertama pada 1883. Jadi, motor masuk Hindia Belanda tak lama
            setelah ditemukan.

            Setelah motor masuk ke Hindia Belanda, orang-orang terlihat kagum dan heran.
            “Karena tidak ditarik oleh kuda atau hewan lainnya maka kedatangan sepeda
            motor pertama di Jawa membuat siapa pun yang melihatnya menjadi tercengang
            dan terbengong. Orang lantas menamankannya Kereta Setan,” tulis Abdul Hakim
            dalam Jakarta Tempo Doeloe.

            Keberadaan motor mulai berkembang di Hindia Belanda pada tahun 1900-an. Para
            pemilik motor orang Belanda dan Eropa di Batavia membentk klub motor atau
            persatuan pengendara sepeda motor (motor-wielrijders bond), Magneet pada 1915.
            Sebagai corong, mereka mengeluarkan majalah sesuai nama klub, Magneet.
            “Sebagaian besar terbitaan Magneet berisi pengumuman dan laporan dari
            clubtochten atau perjalanan klub.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <br>
    <!-- Kontak Kami -->
    <section id="kontak">
      <h2>Kontak Kami</h2>
      <address>
        <strong>Alamat:</strong> Lhokseumawe<br>
        <strong>Telepon:</strong> 082321088900<br>
        <strong>Email:</strong> <a href="mailto:putrijlias21@gmail.com">putrijlias21@gmail.com</a>
      </address>
    </section>
  </section>
</div>

<?= $this->endSection(); ?>