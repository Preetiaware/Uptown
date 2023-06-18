
let modalBox = document.getElementById("modalBox");


setTimeout( function() {
  modalBox.style.display = "block";
}, 3000);

function closeModal() {
  modalBox.style.display = "none";
}

//-------------------menubtn--------------------------------

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-mark');
    menu.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-mark');
    menu.classList.remove('active');
};

//--------------------------------gallery-------------------------------

const carousel = document.querySelector('.carousel');
const slideContainer = carousel.querySelector('.slide-container');
const slides = Array.from(carousel.querySelectorAll('.slide'));

let slideWidth = slides[0].getBoundingClientRect().width;
let currentIndex = 0;

function setSlidePosition() {
  slideContainer.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
}

function changeSlide(n) {
  currentIndex += n;

  if (currentIndex < 0) {
    currentIndex = slides.length - 1;
  } else if (currentIndex >= slides.length) {
    currentIndex = 0;
  }

  setSlidePosition();
}

setSlidePosition();

window.addEventListener('resize', () => {
  slideWidth = slides[0].getBoundingClientRect().width;
  setSlidePosition();
});

// var slides = document.getElementsByClassName("slides")[0];

// function toggleAnimation() {
//   slides.style.animationPlayState = "running";
// }

// function pauseAnimation() {
//   slides.style.animationPlayState = "paused";
// }

// slides.addEventListener("mouseover", pauseAnimation);
// slides.addEventListener("mouseout", toggleAnimation);

// toggleAnimation();

//----------------------all login forms js code starts from here--------------------------

//--------------------offerbox popup form code------------------------
 
function openForm() {
  document.getElementById("popupForm").style.display = "block";
}

function closeForm() {
  document.getElementById("popupForm").style.display = "none";
}

//-------------------------floorplan1 form code-----------------------------
 
function openForm1() {
  document.getElementById("popupForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("popupForm1").style.display = "none";
}

//-------------------------floorplan2 form code-----------------------------
 
function openForm2() {
  document.getElementById("popupForm2").style.display = "block";
}

function closeForm2() {
  document.getElementById("popupForm2").style.display = "none";
}

//----------------------pricing 1 popup form code-----------------------

function openForm3() {
  document.getElementById("popupForm3").style.display = "inline-block";
}

function closeForm3() {
  document.getElementById("popupForm3").style.display = "none";
}


//----------------------pricing 2 popup form code-----------------------

function openForm4() {
  document.getElementById("popupForm4").style.display = "inline-block";
}

function closeForm4() {
  document.getElementById("popupForm4").style.display = "none";
}


//--------------------------brochure form---------------------------------

function openForm5() {
  document.getElementById("popupForm5").style.display = "block";
}

function closeForm5() {
  document.getElementById("popupForm5").style.display = "none";
}

//-----------------------olauber form code----------------------------------


function openForm6() {
  document.getElementById("popupForm6").style.display = "block";
}

function closeForm6() {
  document.getElementById("popupForm6").style.display = "none";
}
