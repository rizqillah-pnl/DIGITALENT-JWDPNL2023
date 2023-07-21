<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <title><?= $title; ?> | RIZQILLAH</title>

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body id="body">

  <div class="container">

    <?= $this->renderSection('container'); ?>
    <footer class="text-center text-lg-start bg-light text-muted mt-5">
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        &copy; 2023 Copyright
        <a class="text-reset fw-bold" href="https://github.com/rizqillah-pnl" style="text-decoration: none;">RIZQILLAH</a>
        <section class="d-flex justify-content-center  p-4">
          <a href="https://facebook.com/kazuryo.group" class="me-4 text-reset" target="_blank">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://twitter.com/RIZQILLAH05" class="me-4 text-reset" target="_blank">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="https://instagram.com/rizqillah05" class="me-4 text-reset" target="_blank">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/in/rizqillah-pnl-539a661b7/" class="me-4 text-reset" target="_blank">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://github.com/rizqillah-pnl" class="me-4 text-reset" target="_blank">
            <i class="bi bi-github"></i>
          </a>
        </section>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>