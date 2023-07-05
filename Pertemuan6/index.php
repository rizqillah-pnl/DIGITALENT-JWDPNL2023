<?php
session_start();
ob_start();
$servername = "localhost";
$usrname = "root";
$pwd = "";

$conn = new mysqli($servername, $usrname, $pwd);
if ($conn->connect_error) {
  die("Koneksi gagal : " . $conn->connect_error);
}

$dbname = "jwd23";
$sql = "CREATE DATABASE " . $dbname;
if (!mysqli_select_db($conn, $dbname)) {
  if ($conn->query($sql) === TRUE) {
    echo "Database JWD23 berhasil dibuat!";
  } else {
    echo "Error membuat database : " . $conn->error;
  }
}
$conn->close();


$conn = new mysqli($servername, $usrname, $pwd, $dbname);
if ($conn->connect_error) {
  die("Koneksi gagal : " . $conn->connect_error);
}

$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
nama VARCHAR(50) NOT NULL,
umur INTEGER(11) NOT NULL,
kelas VARCHAR(20) NOT NULL,
email VARCHAR(50),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (!mysqli_query($conn, "DESCRIBE `user`")) {
  if ($conn->query($sql) === TRUE) {
    echo "Tabel User berhasil dibuat!";
  } else {
    echo "Error membuat tabel: " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP - Digitalent JWD A</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <main>
    <div class="container">
      <section class="mt-5">
        <?php if (isset($_SESSION['status'])) : ?>
          <?php if ($_SESSION['status'] == 200) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= $_SESSION['pesan']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php elseif ($_SESSION['status'] == 300) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?= $_SESSION['pesan']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php else : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?= $_SESSION['pesan']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>
        <?php
          unset($_SESSION['status']);
          unset($_SESSION['pesan']);
        endif; ?>
        <h1 class="text-center mb-3 mt-5">INPUTKAN DATA ANDA!</h1>
        <form action="" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username anda!" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password anda!" required>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama anda!" required>
          </div>
          <div class="mb-3">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Masukkan kelas pelatihan anda!" required>
          </div>
          <div class="mb-3">
            <label for="umur">Umur</label>
            <input type="number" name="umur" id="umur" class="form-control" placeholder="Masukkan umur anda!" required>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anda!" required>
          </div>
          <div class="mb-3 text-center">
            <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
          </div>
        </form>
      </section>

      <section>
        <h1 class="text-center mb-3 mt-5">Data Hasil Inputan!</h1>
        <table class="table table-striped table-hover table-bordered">
          <thead>
            <tr class="table-dark">
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Umur</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $data = $conn->query("SELECT * FROM user");
            foreach ($data as $index => $row) : ?>
              <tr>
                <th scope="row"><?= $index + 1; ?></th>
                <td><?= $row['username']; ?></td>
                <td><?= $row['password']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['kelas']; ?></td>
                <td><?= $row['umur']; ?></td>
                <td><?= $row['email']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </section>
    </div>
  </main>
  <?php
  if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $umur = $_POST['umur'];
    $email = $_POST['email'];

    $cek = $conn->query("SELECT * FROM user WHERE username='$username'");
    if (mysqli_num_rows($cek) > 0) {
      $_SESSION['pesan'] = "Data Telah Ada!";
      $_SESSION['status'] = 300;
    } else {

      $sql = "INSERT INTO user(username, password, nama, kelas, umur, email)
VALUES ('$username', '$password', '$nama', '$kelas', '$umur', '$email')";

      if ($conn->query($sql) === TRUE) {
        $_SESSION['pesan'] = "Data Berhasil Disimpan!";
        $_SESSION['status'] = 200;
      } else {
        $_SESSION['pesan'] = "Data Gagal Disimpan!";
        $_SESSION['status'] = 500;
      }
    }

    $conn->close();
    header('Location: index.php');
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>