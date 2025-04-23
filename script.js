let current = 0;
const total = data.length;
const flashcard = document.getElementById("flashcard");
const questionEl = document.getElementById("question");
const answerEl = document.getElementById("answer");
const progressBar = document.getElementById("progress-bar");

function loadCard(index) {
    const item = data[index];
    questionEl.innerText = item.pytanie;
    answerEl.innerText = item.odpowiedz;
    flashcard.classList.remove("flipped");
    updateProgress();
}

function flipCard() {
    flashcard.classList.toggle("flipped");
}

function nextCard() {
    if (current < total - 1) {
        current++;
        loadCard(current);
    } else {
        alert("To już wszystkie pytania! 🔚");
    }
}

function updateProgress() {
    const percent = ((current + 1) / total) * 100;
    progressBar.style.width = percent + "%";
}

// Start
loadCard(current);
