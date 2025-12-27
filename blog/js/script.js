const quizData = [
  {
    question: "What is 2 + 2?",
    options: ["3", "4", "5", "6"],
    correct: 1
  },
  {
    question: "Which is the capital of France?",
    options: ["Paris", "London", "Berlin", "Madrid"],
    correct: 0
  },
  {
    question: "What color is the sky on a clear day?",
    options: ["Blue", "Green", "Red", "Yellow"],
    correct: 0
  }
];

function renderQuiz() {
  const quizBox = document.getElementById("quiz-box");
  quizBox.innerHTML = "";

  quizData.forEach((q, index) => {
    const questionDiv = document.createElement("div");
    questionDiv.classList.add("question-block");

    let optionsHTML = "";
    q.options.forEach((option, i) => {
      optionsHTML += `
        <label>
          <input type="radio" name="question${index}" value="${i}" />
          ${option}
        </label>`;
    });

    questionDiv.innerHTML = `
      <div class="question-title">${index + 1}. ${q.question}</div>
      <div class="options">${optionsHTML}</div>
    `;

    quizBox.appendChild(questionDiv);
  });
}

function checkAnswers(event) {
  event.preventDefault();

  let score = 0;

  quizData.forEach((q, index) => {
    const selected = document.querySelector(`input[name="question${index}"]:checked`);
    if (selected && parseInt(selected.value) === q.correct) {
      score++;
    }
  });

  const resultDiv = document.getElementById("quiz-form");
  resultDiv.textContent = `You got ${score} out of ${quizData.length} correct.`;
}

document.getElementById("quiz-form").addEventListener("submit", checkAnswers);

window.onload = renderQuiz;
