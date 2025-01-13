window.addEventListener("load", function() {
  let open = false;
  let menu = document.getElementById("hamburgercontent");
  let hamburger = document.getElementById("hamburger");
  hamburger.addEventListener("click", function() {
    if (open) {
      menu.style.display = "none";
      this.src = "images/hamburger.png";
      this.style.padding = "0px";
      open = false;
    } else {
      menu.style.display = "flex";
      this.src = "images/hamburgerclose.png";
      this.style.padding = "2px";
      open = true;
    }
  })
});