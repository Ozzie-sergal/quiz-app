<?php
$conn = new mysqli("localhost", "root", "", "quizapp");
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$sql = "SELECT * FROM pytania_odpowiedzi";
$result = $conn->query($sql);

$pytania = [];
while ($row = $result->fetch_assoc()) {
    $pytania[] = $row;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Fiszki - Sieci</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🔌 Sieciowe Fiszki</h1>

        <div id="progress-bar-container">
            <div id="progress-bar"></div>
        </div>

        <div class="flashcard" id="flashcard" onclick="flipCard()">
            <div class="front" id="question"></div>
            <div class="back" id="answer"></div>
        </div>

        <button onclick="nextCard()">➡️ Dalej</button>
    </div>

    <script>
        const data = <?php echo json_encode($pytania); ?>;
    </script>
    <script src="script.js"></script>
</body>
</html>
