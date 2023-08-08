<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page | RIZQILLAH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-5 mx-auto">
        <div class="card">
          <h3 class="text-center mt-3">Please <span class="text-primary" style="font-weight: 700;">LOGIN</span></h3>
          <hr>
          <div class="px-4 pb-5">
            <?php if (isset($_SESSION['status'])) : ?>
              <?php if ($_SESSION['status'] == 200) : ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                  <div>
                    LOGIN SUCCESS!
                  </div>
                </div>
              <?php else : ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <div>
                    LOGIN FAILED!
                  </div>
                </div>
              <?php endif; ?>
            <?php
              unset($_SESSION['status']);
            endif; ?>
            <form action="" method="post">
              <div class="mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" name="remember_me" type="checkbox" value="remember" id="remember_me">
                <label class="form-check-label" for="remember_me">
                  Remember me
                </label>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin') {
      $_SESSION['status'] = 200;
      header('Location: index.php');
    } else {
      $_SESSION['status'] = 404;
      header('Location: index.php');
    }
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>