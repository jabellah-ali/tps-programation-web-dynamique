<?php
session_start();
require('config.php');

if (isset($_GET['afaire']) && $_GET['afaire'] == 'deconnexion') {
  session_destroy();
  header("Location: login.php?err=3");
  exit;
}

$login = $_POST['login'] ?? '';
$pass = $_POST['pass'] ?? '';

if (empty($login) || empty($pass)) {
  header("Location: login.php?err=1");
} elseif ($login !== USERLOGIN || $pass !== USERPASS) {
  header("Location: login.php?err=2");
} else {
  $_SESSION['CONNECT'] = 'OK';
  $_SESSION['user'] = $login;
  header("Location: accueil.php");
}
