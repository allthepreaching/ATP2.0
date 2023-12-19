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
  // Select all tag links
  const tagLinks = document.querySelectorAll(".tag");

  // Add a click event listener to each tag link
  tagLinks.forEach((tagLink) => {
    tagLink.addEventListener("click", function (e) {
      e.preventDefault();

      // Remove the 'selected' class from all tags
      tagLinks.forEach((tag) => {
        tag.classList.remove("selected");
        tag.style.backgroundColor = ""; // Reset background color
        tag.style.color = ""; // Reset text color
      });

      // Add the 'selected' class to the clicked tag
      this.classList.add("selected");
      this.style.backgroundColor = "white"; // Set background color to white
      this.style.color = "black"; // Set text color to black

      // Get the tags container
      const tagsContainer = document.getElementById("tags");

      // Get the left position of the clicked tag relative to the tags container
      const tagLeft = this.offsetLeft;

      // Scroll the tags container to the left position of the clicked tag
      tagsContainer.scrollTo({
        left: tagLeft,
        behavior: "smooth",
      });
    });
  });

  // Select the "All Videos" tag and trigger a click event
  const allVideosTag = document.querySelector(".tag[data-tag='all-videos']");
  if (allVideosTag) {
    allVideosTag.click();
  }
});
