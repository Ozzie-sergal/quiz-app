<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($stored_user, $stored_hash) = explode(':', $user);
        if ($stored_user === $username && password_verify($password, $stored_hash)) {
            $_SESSION['user'] = $username;
            header('Location: dashboard.php');
            exit;
        }
    }

    $error = "Nieprawidłowy login lub hasło.";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Logowanie</title>
  <link rel="stylesheet" href="style.css"> <!-- styl -->
</head>
<body>

  <h2>Logowanie</h2>
  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

  <form method="POST">
    Nazwa użytkownika/E-mail: <input type="text" name="username" required><br>
    Hasło: <input type="password" name="password" required><br>
    <button type="submit">Zaloguj się</button>
  </form>

  <p>Nie masz konta? <a href="register.php">Zarejestruj się</a></p>

  <script src="script.js"></script> <!-- skrypt -->
</body>
</html>
