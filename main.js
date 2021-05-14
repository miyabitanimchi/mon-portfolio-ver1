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

// Slider for About page
const imgSrc = [
  "https://2.bp.blogspot.com/-VA8DS8XXYKw/WLEurNb7xVI/AAAAAAABCF4/8oFo3A3VlYkQWi6YV3AhaYh8ndqn_bPtgCLcB/s800/computer07_woman.png",
  "./img/dance.JPG",
  "./img/drawing.JPG",
  "./img/traveling.JPG",
];
let imgIndex = -1;

const slideImg = () => {
  if (imgIndex === 3) {
    imgIndex = 0;
  } else {
    imgIndex++;
  }
  document.getElementById("slideImg").src = imgSrc[imgIndex];
};
setInterval(slideImg, 3500);

slideImg();
