document.addEventListener("DOMContentLoaded", function () {
  const arrowLeft = document.getElementById("arrow-left");
  const arrowRight = document.getElementById("arrow-right");
  const tags = document.getElementById("tags");

  if (arrowLeft && arrowRight && tags) {
    arrowLeft.addEventListener("click", function () {
      tags.scrollBy({ left: -200, behavior: "smooth" });
    });

    arrowRight.addEventListener("click", function () {
      tags.scrollBy({ left: 200, behavior: "smooth" });
    });
  }
});
