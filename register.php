<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($users as $user) {
        list($existing_user, ) = explode(':', $user);
        if ($existing_user === $username) {
            $error = "Użytkownik już istnieje.";
            break;
        }
    }

    if (!isset($error)) {
        file_put_contents('users.txt', "$username:$password\n", FILE_APPEND);
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Rejestracja</title>
  <link rel="stylesheet" href="style.css"> <!-- 👈 styl -->
</head>
<body>

  <h2>Rejestracja</h2>
  <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

  <form method="POST">
    Podaj E-mail: <input type="text" name="email" required><br>
    Nazwa użytkownika: <input type="text" name="username" required><br>
    Hasło: <input type="password" name="password" required><br>
    <button type="submit">Zarejestruj się</button>
  </form>

  <p>Masz już konto? <a href="login.php">Zaloguj się</a></p>

  <script src="script.js"></script> <!-- 👈 skrypt -->
</body>
</html>
