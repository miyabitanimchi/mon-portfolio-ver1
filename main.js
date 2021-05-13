const fadeInTarget = document.querySelector(".work-container");
const workTarget = document.querySelectorAll(".work");

window.addEventListener("scroll", () => {
  const work = fadeInTarget.getBoundingClientRect().top;
  const scroll = window.pageYOffset || document.documentElement.scrollTop;
  const offset = work + scroll;
  const windowHeight = window.innerHeight;
  console.log(
    `work: ${work}, scroll: ${scroll}, offset: ${offset}, windowHeight: ${windowHeight}`
  );

  if (scroll > offset - 200) {
    workTarget.forEach((work) => {
      work.classList.add("scroll-in");
    });
  }
});
