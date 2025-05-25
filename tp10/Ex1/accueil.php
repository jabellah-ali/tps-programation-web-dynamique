<?php
session_start();
if (!isset($_SESSION['CONNECT']) || $_SESSION['CONNECT'] != 'OK') {
  header("Location: login.php");
  exit;
}
echo "<h1>Hello " . $_SESSION['user'] . "</h1>";
echo '<a href="validation.php?afaire=deconnexion">Déconnexion</a>';
?>
