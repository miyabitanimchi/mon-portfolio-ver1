const fadeInTarget = document.querySelector(".work-container");
const fadeInTargetForAboutme = document.querySelector(".aboutme-container");
const workTarget = document.querySelectorAll(".work");
let selectedWork;

// fade-in function
window.addEventListener("scroll", () => {
  const scroll = window.pageYOffset || document.documentElement.scrollTop;
  const work = fadeInTarget.getBoundingClientRect().top;

  const offset = work + scroll;
  // const windowHeight = window.innerHeight;
  const aboutMe = fadeInTargetForAboutme.getBoundingClientRect().top;
  const offsetForAboutMe = aboutMe + scroll;

  if (scroll > offset - 200) {
    workTarget.forEach((work) => {
      work.classList.add("scroll-in");
    });

    if (scroll > offsetForAboutMe - 200) {
      fadeInTargetForAboutme.classList.add("scroll-in");
      document.getElementById("resume").classList.add("scroll-in");
    }
  }
});

// Slider for About page
let index = -1;
const slideImg = () => {
  document.getElementById("slideImg").src = "";
  document.getElementById("caption-for-img").innerText = "";
  const imgSrc = [
    "./img/meCoding.JPG",
    "./img/dance.JPG",
    "./img/drawing.JPG",
    "./img/traveling.JPG",
  ];
  const captionForImg = [
    "I love coding",
    "I love dancing",
    "I love drawing",
    "I love traveling",
  ];

  if (index === 3) {
    index = 0;
  } else {
    index++;
  }
  document.getElementById("slideImg").src = imgSrc[index];
  document.getElementById("caption-for-img").innerText = captionForImg[index];
  const fadedInEl = document.querySelectorAll(".faded-in");
  fadedInEl.forEach((val) => {
    val.classList.add("fade-in-animation");
  });
};
setInterval(slideImg, 3500);

slideImg();

// show / close modal
const open = document.querySelectorAll(".open");
const close = document.getElementById("close");
const modal = document.getElementById("modal");
const mask = document.getElementById("modalMask");
const modalActivated = document.getElementById("modalActivated");
const viewApplicationBtn = document.getElementById("viewApplicationBtn");

open.forEach((workEl) => {
  workEl.addEventListener("click", () => {
    modal.classList.remove("hidden-modal");
    modal.classList.add("modal-animation");
    mask.classList.remove("hidden-mask");
    modalActivated.classList.add("modal-activated");
    modal.style.opacity = 1;
    // get center position for modal
    modal.style.left = `${window.innerWidth / 2 - 400}px`;
    modal.style.top = `${window.pageYOffset + window.innerHeight / 2 - 200}px`;
    selectedWork = workEl.getAttribute("data-value");
    switch (selectedWork) {
      case "1":
        viewApplicationBtn.href =
          "https://miyabitanimchi.github.io/weatherApp_wd2_midterm_project/";
        break;
      case "2":
        viewApplicationBtn.href =
          "https://miyabitanimchi.github.io/cinema-booking-app/";
        break;
      case "3":
        viewApplicationBtn.href =
          "https://miyabitanimchi.github.io/flappy_buddy/";
        break;
      case "4":
        viewApplicationBtn.href = "#";
        break;
      default:
        viewApplicationBtn.href = "#";
    }
  });
});

close.addEventListener("click", function () {
  modal.classList.add("hidden-modal");
  mask.classList.add("hidden-mask");
  modalActivated.classList.remove("modal-activated");
  console.log(selectedWork);
});

mask.addEventListener("click", function () {
  modal.classList.add("hidden-modal");
  mask.classList.add("hidden-mask");
  modalActivated.classList.remove("modal-activated");
});
