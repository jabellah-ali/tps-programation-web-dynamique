<?php
$conn = new mysqli('localhost', 'root', '', 'TP10');
$id = $_GET['id'];
$conn->query("DELETE FROM exercice WHERE id=$id");
header("Location: index.php");
