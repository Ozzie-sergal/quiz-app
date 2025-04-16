<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kurs</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    nav {
      background: rgba(0, 0, 0, 0.6);
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      box-shadow: 0 2px 10px rgba(0, 198, 255, 0.2);
    }

    nav h1 {
      margin: 0;
      font-size: 24px;
      color: #00c6ff;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      color: #00c6ff;
    }

    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px;
      max-width: 1000px;
      margin: auto;
      text-align: center;
    }

    h2 {
      font-size: 32px;
      color: #00c6ff;
      margin-bottom: 20px;
    }

    .button-group {
      display: flex;
      gap: 30px;
      margin-top: 30px;
    }

    .button-group a {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 20px 40px;
      border-radius: 12px;
      color: #00c6ff;
      text-decoration: none;
      font-weight: bold;
      font-size: 18px;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
      transition: all 0.3s ease;
    }

    .button-group a:hover {
      background: rgba(0, 198, 255, 0.2);
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.5);
      transform: scale(1.05);
    }

    footer {
      padding: 20px;
      color: #888;
    }
  </style>
</head>
<body>

<nav>
  <h1>Learning App</h1>
  <a href="index.php">🏠 Strona Główna</a>
  <a href="przedmioty.php">Powrót do przedmiotów</a>
</nav>

<main>
  <?php
    $subject = isset($_GET['subject']) ? $_GET['subject'] : 'nieznany przedmiot';
    $subjectTitle = strtoupper(str_replace('-', ' ', $subject));
  ?>
  <h2><?php echo htmlspecialchars($subjectTitle); ?></h2>
  <div class="button-group">
    <a href="fiszki.php?subject=<?php echo urlencode($subject); ?>">📚 Fiszki</a>
    <a href="test.php?subject=<?php echo urlencode($subject); ?>">📝 Test</a>
  </div>
</main>

<footer>
  &copy; 2025 Learning App. Ucz się i testuj swoją wiedzę 🚀
</footer>

</body>
</html>
