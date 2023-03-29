const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  
  // Check if all fields are filled
  const inputs = document.querySelectorAll('.slide-page input');
  let isFilled = true;
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].value === '') {
      isFilled = false;
      break;
    }
  }
  
  // If all fields are filled, slide to next page
  if (isFilled) {
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  } else {
    // If not all fields are filled, show alert
    alert('Please fill in all fields before proceeding.');
  }
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  // Check if all fields are filled
  const inputs = document.querySelectorAll('.slide-page1 input');
  let isFilled = true;
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].value === '') {
      isFilled = false;
      break;
    }
  }
  
  // If all fields are filled, slide to next page
  if (isFilled) {
    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  } else {
    // If not all fields are filled, show alert
    alert('Please fill in all fields before proceeding.');
  }
});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  // Check if all fields are filled
  const inputs = document.querySelectorAll('.slide-page2 input');
  let isFilled = true;
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].value === '') {
      isFilled = false;
      break;
    }
  }
  
  // If all fields are filled, slide to next page
  if (isFilled) {
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  } else {
    // If not all fields are filled, show alert
    alert('Please fill in all fields before proceeding.');
  }
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  // setTimeout(function(){
    // alert("Your Form Successfully Signed up");
  //   location.reload();
  // },800);
});

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
