var currentPage = window.location.pathname;
if (currentPage.startsWith('/como-funciona')) {
  console.log("Script questions loaded!");
  let btnQuizzes = document.querySelectorAll(".quiz");
  let containers = document.querySelectorAll(".funciona__contenedora--padP");
  btnQuizzes.forEach((btnQuiz, index) => {
    btnQuiz.addEventListener("click", function() {
      const containerIsActive = containers[index].classList.contains("funciona__contenedora--padP--active");
      containers.forEach(container => {
        container.classList.remove("funciona__contenedora--padP--active");
      });
      if (!containerIsActive) {
        containers[index].classList.add("funciona__contenedora--padP--active");
      }
      btnQuiz.classList.toggle("funciona__contenedora--pad--btn--active", !containerIsActive);
    });
  });
}
