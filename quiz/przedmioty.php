<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Wybór Przedmiotu</title>
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
      justify-content: center;
      align-items: center;
      padding: 40px;
      max-width: 1200px;
      margin: auto;
      height: 80vh;
    }

    .circle-menu {
      position: relative;
      width: 800px;
      height: 800px;
      border-radius: 50%;
    }

    .carousel-item {
      position: absolute;
      width: 160px;
      height: 160px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 50%;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      transition: all 0.3s ease;
    }

    .carousel-item:hover {
      background: rgba(0, 198, 255, 0.2);
      transform: scale(1.1);
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.5);
    }

    .carousel-content {
      transform: rotate(0deg);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 10px;
    }

    .carousel-item-icon {
      font-size: 36px;
      transition: transform 0.3s ease;
    }

    .carousel-item:hover .carousel-item-icon {
      transform: scale(1.3);
    }

    .carousel-item-title {
      font-weight: bold;
      font-size: 14px;
      color: #00c6ff;
      margin-top: 10px;
    }

    footer {
      padding: 20px;
      color: #888;
    }

    @media (max-width: 768px) {
      .carousel-item {
        width: 120px;
        height: 120px;
      }

      .carousel-item-icon {
        font-size: 28px;
      }

      .carousel-item-title {
        font-size: 12px;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav>
  <h1>Learning App</h1>
  <a href="index.php">🏠 Strona Główna</a>
</nav>

<!-- Main Content -->
<main>
  <div class="circle-menu">
    <?php
    $subjects = [
        ['title' => 'INŻYNIERIA OPROGRAMOWANIA', 'link' => 'kurs.php?subject=inżynieria-oprogramowania', 'icon' => '🛠️'],
        ['title' => 'SIECI KOMPUTEROWE', 'link' => 'kurs.php?subject=sieci-komputerowe', 'icon' => '🌐'],
        ['title' => 'ELEMENTY LOGIKI I ARYTMETYKI KOMPUTERÓW', 'link' => 'kurs.php?subject=elementy-logiki-arytmetyki-komputerow', 'icon' => '🔣'],
        ['title' => 'ALGORYTMY I STRUKTURY DANYCH', 'link' => 'kurs.php?subject=algorytmy-i-struktury-danych', 'icon' => '📊'],
        ['title' => 'GRAFIKA KOMPUTEROWA', 'link' => 'kurs.php?subject=grafika-komputerowa', 'icon' => '🎨'],
        ['title' => 'SYSTEMY WBUDOWANE', 'link' => 'kurs.php?subject=systemy-wbudowane', 'icon' => '🔌'],
        ['title' => 'ARCHITEKTURA SYSTEMÓW KOMPUTEROWYCH', 'link' => 'kurs.php?subject=architektura-systemow-komputerowych', 'icon' => '🏗️'],
        ['title' => 'PROGRAMOWANIE OBIEKTOWE', 'link' => 'kurs.php?subject=programowanie-obiektowe', 'icon' => '👨‍💻'],
        ['title' => 'WSPÓŁCZESNE JĘZYKI PROGRAMOWANIA', 'link' => 'kurs.php?subject=wspolczesne-jezyki-programowania', 'icon' => '💻'],
        ['title' => 'BAZY DANYCH', 'link' => 'kurs.php?subject=bazy-danych', 'icon' => '🗄️'],
        ['title' => 'METODY NUMERYCZNE', 'link' => 'kurs.php?subject=metody-numeryczne', 'icon' => '📐'],
        ['title' => 'SZTUCZNA INTELIGENCJA', 'link' => 'kurs.php?subject=sztuczna-inteligencja', 'icon' => '🧠'],
        ['title' => 'SYSTEMY OPERACYJNE', 'link' => 'kurs.php?subject=systemy-operacyjne', 'icon' => '🖥️'],
        ['title' => 'PODSTAWY PROGRAMOWANIA', 'link' => 'kurs.php?subject=podstawy-programowania', 'icon' => '📘'],
        ['title' => 'INTERAKCJA CZŁOWIEK-KOMPUTER', 'link' => 'kurs.php?subject=interakcja-czlowiek-komputer', 'icon' => '🧍‍♂️💻'],
        ['title' => 'APLIKACJE WWW', 'link' => 'kurs.php?subject=aplikacje-www', 'icon' => '🌐📱'],
      ];

    $radius = 350;
    $count = count($subjects);
    $angleStep = 360 / $count;
    $i = 0;

    foreach ($subjects as $subject) {
      $angle = $i * $angleStep;
      $x = cos(deg2rad($angle)) * $radius;
      $y = sin(deg2rad($angle)) * $radius;
      echo '<div class="carousel-item" style="left: calc(50% + ' . $x . 'px - 85px); top: calc(50% + ' . $y . 'px - 85px);">
              <a href="' . $subject['link'] . '" style="text-decoration:none; color:inherit;">
                <div class="carousel-content">
                  <div class="carousel-item-icon">' . $subject['icon'] . '</div>
                  <div class="carousel-item-title">' . $subject['title'] . '</div>
                </div>
              </a>
            </div>';
      $i++;
    }
    ?>
  </div>
</main>

<!-- Footer -->
<footer>
  &copy; 2025 Learning App. Wybierz przedmiot i ucz się z fiszek 🚀
</footer>

</body>
</html>
