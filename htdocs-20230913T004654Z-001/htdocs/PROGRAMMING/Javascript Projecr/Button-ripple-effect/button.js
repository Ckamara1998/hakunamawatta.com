const btnEl = document.querySelector(".btn");

btnEl.addEventListener("mouseover", (event) => {
const X = event.pageX - btnEl.offsetLeft;
const Y = event.pageY - btnEl.offsetTop;

btnEl.stlye.setProperty("--xpos", X + "PX");
btnEl.stlye.setProperty("--ypos", Y + "PX");
});