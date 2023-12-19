document.addEventListener("DOMContentLoaded", function () {
  const arrowLeft = document.getElementById("arrow-left");
  const arrowRight = document.getElementById("arrow-right");
  const tagsContainer = document.getElementById("tags");
  const tagLinks = document.querySelectorAll(".tag");
  let isDown = false;
  let startX;
  let scrollLeft;

  // Scroll tags container left or right on mouse drag
  tagsContainer.addEventListener("mousedown", (e) => {
    isDown = true;
    startX = e.pageX - tagsContainer.offsetLeft;
    scrollLeft = tagsContainer.scrollLeft;
    tagsContainer.style.userSelect = "none"; // Disable text selection
  });

  tagsContainer.addEventListener("mouseleave", () => {
    isDown = false;
    tagsContainer.style.userSelect = ""; // Re-enable text selection
  });

  tagsContainer.addEventListener("mouseup", () => {
    isDown = false;
    tagsContainer.style.userSelect = ""; // Re-enable text selection
  });

  tagsContainer.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - tagsContainer.offsetLeft;
    const walk = (x - startX) * 3; //scroll-fast
    tagsContainer.scrollLeft = scrollLeft - walk;
  });

  // Scroll tags container left or right on arrow click
  if (arrowLeft && arrowRight && tagsContainer) {
    arrowLeft.addEventListener("click", function () {
      tagsContainer.scrollBy({ left: -200, behavior: "smooth" });
    });

    arrowRight.addEventListener("click", function () {
      tagsContainer.scrollBy({ left: 200, behavior: "smooth" });
    });
  }

  // Snap tag to left of tags container and invert colors on click
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
