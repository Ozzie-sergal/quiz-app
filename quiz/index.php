<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Learning App - Start</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    nav {
      background: rgba(0, 0, 0, 0.6);
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
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
      transition: color 0.3s;
    }

    nav a:hover {
      color: #00c6ff;
    }

    main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 40px 20px;
    }

    .info-box {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 198, 255, 0.1);
      max-width: 600px;
    }

    .info-box h2 {
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 32px;
      margin-bottom: 20px;
    }

    .info-box p {
      font-size: 18px;
      margin-bottom: 25px;
    }

    .info-box a {
      display: inline-block;
      padding: 12px 28px;
      border-radius: 25px;
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      transition: background 0.3s;
      box-shadow: 0 0 10px rgba(0, 198, 255, 0.4);
    }

    .info-box a:hover {
      background: linear-gradient(90deg, #0072ff, #00c6ff);
    }

    footer {
      background: rgba(0, 0, 0, 0.5);
      color: #ccc;
      text-align: center;
      padding: 15px;
      font-size: 14px;
      box-shadow: 0 -2px 10px rgba(0, 198, 255, 0.2);
    }
  </style>
</head>
<body>

<!-- 🌐 Navbar -->
<nav>
  <h1>Egzamin Dyplomowy 2026</h1>
 

</nav>

<!-- 📖 Main -->
<main>
  <div class="info-box">
    <h2>Witaj w Egzamin Dyplomowy 2026</h2>
    <p>Twoja osobista platforma do nauki do egzaminu dyplomowego</p>
    
    <a href="przedmioty.php">➡️ Rozpocznij naukę</a>

  </div>
</main>

<!-- 🔻 Footer -->
<footer>
  &copy; 2025 Learning App. Made with 💡 and ☕.
</footer>

</body>
</html>
