document.addEventListener('DOMContentLoaded', function() {
    // Fetch lessons from the backend (e.g., using Fetch API)
    fetchLessons();

    // Quiz button functionality
    document.getElementById("start-quiz-button").addEventListener("click", function() {
        startQuiz();
    });
});

// Fetch lessons from the backend (this could be an endpoint that returns lessons data)
function fetchLessons() {
    fetch('/api/lessons')  // Assuming an API endpoint that returns lessons data
        .then(response => response.json())
        .then(data => {
            const lessonList = document.getElementById('lesson-list');
            data.forEach(lesson => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `<a href="lesson.html?id=${lesson.id}">${lesson.title}</a>`;
                lessonList.appendChild(listItem);
            });
        })
        .catch(error => {
            console.error('Error fetching lessons:', error);
        });
}

// Start the quiz functionality (redirect to quiz page or show a quiz modal)
function startQuiz() {
    window.location.href = 'quiz.html';  // Redirect to the quiz page
}