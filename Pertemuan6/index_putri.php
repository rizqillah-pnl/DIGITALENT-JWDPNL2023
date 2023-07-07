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

$dbname = "jwda_pnl23";
$sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;
$conn->query($sql);
$conn->close();


$conn = new mysqli($servername, $usrname, $pwd, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal : " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
nama VARCHAR(50) NOT NULL,
umur INTEGER(11) NOT NULL,
kelas VARCHAR(20) NOT NULL,
email VARCHAR(50)
)";

$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP dan MySQL - Digitalent JWD A PNL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <div class="mt-5">
                <?php if (isset($_SESSION['pesan'])) : ?>
                    <script>
                        alert('<?= $_SESSION['pesan']; ?>');
                    </script>
                <?php
                    unset($_SESSION['pesan']);
                endif; ?>
                <h1 class="text-center mb-3 mt-5">INPUTKAN DATA!</h1>
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
            </div>

            <h1 class="text-center mb-3 mt-5">Data Dari Tabel User!</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-primary text-center">
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
                    $data = $conn->query("SELECT * FROM users");
                    $i = 1;
                    if (mysqli_num_rows($data) > 0) :
                        while ($row = $data->fetch_assoc()) : ?>
                            <tr>
                                <th><?= $i++; ?></th>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['password']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['kelas']; ?></td>
                                <td><?= $row['umur']; ?></td>
                                <td><?= $row['email']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <td colspan="7" class="text-center fw-bold">DATA KOSONG!</td>
                    <?php endif; ?>
                </tbody>
            </table>
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

        $cek = $conn->query("SELECT * FROM users WHERE username='$username'");
        if (mysqli_num_rows($cek) > 0) {
            $_SESSION['pesan'] = "Data Telah Ada!";
        } else {

            $sql = "INSERT INTO users(username, password, nama, kelas, umur, email) VALUES ('$username', '$password', '$nama', '$kelas', '$umur', '$email')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['pesan'] = "Data Berhasil Disimpan!";
            } else {
                $_SESSION['pesan'] = "Data Gagal Disimpan!";
            }
        }

        $conn->close();
        header('Location: index.php');
    }
    ?>

</body>

</html>