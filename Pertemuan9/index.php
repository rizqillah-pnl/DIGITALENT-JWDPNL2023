<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location:admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="row justify-content-center">
        <?php if (isset($_SESSION['pesan'])) : ?>
            <div class="col-12">
                <div class="alert alert-primary">
                    <?= $_SESSION['pesan']; ?>
                </div>
            </div>
            <?php unset($_SESSION['pesan']) ?>
        <?php endif; ?>
        <div class="card col-4 bg-light mt-3 p-4">
            <?php if (isset($_GET['message']) && $_GET['message'] == 'salah') {
            ?>
                <div class="alert alert-danger mb-4" role="alert">
                    Email/Password salah!
                </div>
            <?php } ?>
            <?php if (isset($_GET['message']) && $_GET['message'] == 'belum') {
            ?>
                <div class="alert alert-danger mb-4" role="alert">
                    Login terlebih dahulu!
                </div>
            <?php } ?>
            <h1 class="text-center">Selamat Datang!</h1>
            <form action="proses.php" method="post">

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input name="username" value="<?php if (isset($_COOKIE['username'])) {
                                                        echo $_COOKIE['username'];
                                                    } ?>" type="text" class="form-control" id="username" placeholder="Masukkan Username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" value="<?php if (isset($_COOKIE['password'])) {
                                                        echo $_COOKIE['password'];
                                                    } ?>" type="password" class="form-control" id="password" placeholder="Masukkan Password">
                </div>
                <div class="mb-3 form-check">
                    <input name="remember_me" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>

                <button type="submit" class="btn btn-primary">Sign In</button>
                <a href="register.php" class="btn btn-link text-muted">Sign Up?</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>