// https://stackoverflow.com/questions/4528085/toggle-show-hide-div-with-button#4528100

const toggle  = document.getElementById("info");
const content = document.getElementById("intro");

toggle.addEventListener("click", function() {
  content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
});

const torfit_btn = document.getElementById("torfit");
torfit_btn.disabled = true;