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

    <title>Document</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="card col-4 bg-light mt-3 p-4">
            <?php if (isset($_GET['message']) && $_GET['message'] == 'salah') {
            ?>
                <div class="alert alert-danger mb-4" role="alert">
                    Password salah!
                </div>
            <?php } ?>
            <?php if (isset($_GET['message']) && $_GET['message'] == 'belum') {
            ?>
                <div class="alert alert-danger mb-4" role="alert">
                    Login terlebih dahulu!
                </div>
            <?php } ?>

            <form action="proses.php" method="post">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="tuser" value="<?php if (isset($_COOKIE['user1'])) {
                                                    echo $_COOKIE['user1'];
                                                } ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="tpass" value="<?php if (isset($_COOKIE['pass1'])) {
                                                    echo $_COOKIE['pass1'];
                                                } ?>" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input name="tingat" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>