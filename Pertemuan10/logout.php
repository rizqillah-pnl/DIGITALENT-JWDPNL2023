<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  session_start();
  session_destroy();

  if (isset($_COOKIE)) {
    setcookie("username", null, 1);
    setcookie("password", null, 1);
  }
  header("location:index.php");
} else {
  header("location:javascript://history.go(-1)");
}
