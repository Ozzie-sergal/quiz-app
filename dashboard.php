<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Panel użytkownika</title>
  <link rel="stylesheet" href="style.css"> <!-- styl -->
</head>
<body>

  <h1>Witaj, <?= htmlspecialchars($_SESSION['user']) ?>!</h1>
  <p>To jest Twoja prywatna strefa.</p>
  <a href="logout.php">🚪 Wyloguj się</a>

  <script src="script.js"></script> <!-- skrypt -->
</body>
</html>
