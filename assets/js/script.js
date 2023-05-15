const header = document.querySelector('.header');
const hero = document.querySelector('.hero');

window.addEventListener('scroll', () => {
  const scrollHeight = window.pageYOffset;
  if (scrollHeight >= window.innerHeight + 100) {
    header.classList.add("header-border")
  } else {
    header.classList.remove("header-border");
  }
});

window.addEventListener('scroll', () => {
  const scrollHeight = window.pageYOffset;
  if (scrollHeight >= window.innerHeight + 50) {
    header.classList.add("header-bg")
  } else {
    header.classList.remove("header-bg");
  }
});

const toggler = document.getElementById("toggler");
const nav = document.getElementById("nav")
const icon = document.getElementById("icon");


toggler.addEventListener("click", toggle);
nav.addEventListener("click", hide);



function toggle(){
  nav.classList.toggle("hide");
  icon.classList.toggle("fa-bars");
  icon.classList.toggle("fa-xmark");
}

function hide(){
  nav.classList.add("hide");
  icon.classList.remove("fa-xmark");
  icon.classList.add("fa-bars");
}

