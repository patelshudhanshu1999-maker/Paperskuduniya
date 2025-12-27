document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".wp_basic_quiz_showans_btn");

  buttons.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const targetSelector = btn.getAttribute("data-target");
      const answerBox = document.querySelector(targetSelector);

      if (!answerBox) return;

      const isShowing = btn.classList.contains("showanswer");

      if (isShowing) {
        btn.textContent = "Show Answer";
        btn.classList.remove("showanswer");
        slideUp(answerBox);
      } else {
        btn.textContent = "Hide Answer";
        btn.classList.add("showanswer");
        slideDown(answerBox);
      }
    });
  });

  // Slide up animation
  function slideUp(element, duration = 300) {
  element.style.height = element.offsetHeight + 'px';
  element.style.transition = `height ${duration}ms ease`;
  element.offsetHeight; // Force reflow
  element.style.height = '0';
  element.style.overflow = 'hidden';

  setTimeout(() => {
    element.style.display = 'none';
    element.style.removeProperty('height');
    element.style.removeProperty('overflow');
    element.style.removeProperty('transition');
  }, duration);
}


  // Slide down animation
function slideDown(element, duration = 300) {
  element.style.removeProperty("display");

  let display = window.getComputedStyle(element).display;
  if (display === "none") display = "block";
  element.style.display = display;

  // Set to auto to get full height
  element.style.position = 'absolute';
  element.style.visibility = 'hidden';
  element.style.height = 'auto';
  let height = element.offsetHeight;
  element.style.removeProperty('position');
  element.style.removeProperty('visibility');

  // Now prepare for animation
  element.style.height = '0px';
  element.style.overflow = 'hidden';
  element.style.transition = `height ${duration}ms ease`;

  // Force reflow
  element.offsetHeight;

  // Animate to full height
  element.style.height = height + 'px';

  setTimeout(() => {
    element.style.removeProperty('height');
    element.style.removeProperty('overflow');
    element.style.removeProperty('transition');
  }, duration);
}

});


document.addEventListener("DOMContentLoaded", function () {
    const itemsPerPage = 5;
    const questions = document.querySelectorAll("#quiz-container .sques_quiz");
    const totalItems = questions.length;
    const totalPages = Math.ceil(totalItems / itemsPerPage);
    const paginationContainer = document.getElementById("pagination");

    let currentPage = 1;

    function showPage(page) {
        questions.forEach((item, index) => {
            item.style.display = (index >= (page - 1) * itemsPerPage && index < page * itemsPerPage)
                ? "block"
                : "none";
        });
    }

    function renderPagination() {
        paginationContainer.innerHTML = "";
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement("button");
            btn.innerText = i;
            btn.className = (i === currentPage) ? "active" : "";
            btn.addEventListener("click", function () {
                currentPage = i;
                showPage(currentPage);
                renderPagination();
            });
            paginationContainer.appendChild(btn);
        }
    }

    // Initialize
    showPage(currentPage);
    renderPagination();
});




