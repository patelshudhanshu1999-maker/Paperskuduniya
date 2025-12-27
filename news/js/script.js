const quizData = [
  {
    question: "Tungabhadra Dam, recently seen in the news, is located in which state?",
    options: ["Madhya Pradesh", "Maharashtra", "Odisha", "Karnataka"],
    correct: 3
  },
  {
    question: "Which is the capital of France?",
    options: ["Paris", "London", "Berlin", "Madrid"],
    correct: 0
  },
  {
    question: "Prerana Programme, recently seen in the news, is launched by which ministry?",
    options: ["Ministry of Education", "Ministry of Culture", "Ministry of Urban Development", "Ministry of Defence"],
    correct: 0
  },
  {
    question: "Recently, which ministry launched pilot project to transform Fair Price Shops into ‘Jan Poshan Kendras’ to boost nutrition access?",
    options: ["Ministry of Consumer Affairs, Food and Public Distribution", "Ministry of Agriculture", "Ministry of Rural Development", "Ministry of Defence"],
    correct: 0
  },
   {
    question: "Recently, where was the “India Bio-Energy & Tech Expo 2024” inaugurated?",
    options: ["New Delhi", "Gandhinagar", "Bhopal", "Chennai"],
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
