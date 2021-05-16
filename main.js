const fadeInTarget = document.querySelector(".work-container");
const workTarget = document.querySelectorAll(".work");

window.addEventListener("scroll", () => {
  const work = fadeInTarget.getBoundingClientRect().top;
  const scroll = window.pageYOffset || document.documentElement.scrollTop;
  const offset = work + scroll;
  const windowHeight = window.innerHeight;
  // console.log(
  //   `work: ${work}, scroll: ${scroll}, offset: ${offset}, windowHeight: ${windowHeight}`
  // );

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
const captionForImg = [
  "I love coding",
  "I love dancing",
  "I love drawing",
  "I love traveling",
];
let index = -1;

const slideImg = () => {
  if (index === 3) {
    index = 0;
  } else {
    index++;
  }
  document.getElementById("slideImg").src = imgSrc[index];
  document.getElementById("caption-for-img").innerHTML = captionForImg[index];
};
setInterval(slideImg, 3500);

slideImg();
