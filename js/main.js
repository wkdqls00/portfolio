let horizontalUnderLine = document.getElementById("horizontal-underline");
let horizontalMenus = document.querySelectorAll("nav ul a");
const navActive = document.querySelectorAll(".non-active");

horizontalMenus.forEach((menu) =>
  menu.addEventListener("click", (e) => horizantalIndicator(e))
);

function horizantalIndicator(e) {
  horizontalUnderLine.style.left = e.currentTarget.offsetLeft + "px";
  horizontalUnderLine.style.width = e.currentTarget.offsetWidth + "px";
  horizontalUnderLine.style.top = 
  e.currentTarget.offsetTop + e.currentTarget.offsetHeight + 5 + "px";
  $('#horizontal-underline').css("display", "inherit");
}

function handleClick(event) {
  navActive.forEach((e) => {
    e.classList.remove("active");
  });
  event.target.classList.add("active");
};

navActive.forEach((e) => {
  e.addEventListener("click", handleClick);
});

$('a').click(function(){
  $('html, body').animate({
  scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);
  return false;
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    document.getElementById("navbar").style.top = "0";
  }
  else {
    document.getElementById("navbar").style.top = "-100px";
  }
}