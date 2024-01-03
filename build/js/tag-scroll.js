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

      // Remove the 'selected' class and the styles from the previously selected tag
      let selectedTag = document.querySelector(".tag.selected");
      if (selectedTag) {
        selectedTag.classList.remove("selected");
        selectedTag.style.backgroundColor = ""; // Reset background color
        selectedTag.style.color = ""; // Reset text color
      }

      // Add the 'selected' class and the styles to the clicked tag
      this.classList.add("selected");
      this.style.backgroundColor = "white"; // Set background color to white
      this.style.color = "black"; // Set text color to black

      // Get the tags container
      const tagsContainer = document.getElementById("tags");

      // Get the left position of the clicked tag relative to the tags container
      const tagLeft = this.offsetLeft;

      // Get the width of the tags container and the clicked tag
      const tagsContainerWidth = tagsContainer.offsetWidth;
      const tagWidth = this.offsetWidth;

      // Calculate the center position of the clicked tag
      const tagCenter = tagLeft - tagsContainerWidth / 2 + tagWidth / 2;

      // Scroll the tags container to the center position of the clicked tag
      tagsContainer.scrollTo({
        left: tagCenter,
        behavior: "smooth",
      });

      // Get the tag value from the data-tag attribute
      const tagValue = this.dataset.tag;

      // Redirect to the new URL with the tag as a query parameter
      window.location.href = "index.php?tag=" + encodeURIComponent(tagValue);
    });
  });

  // Add a click event listener to each tag
  for (let tag of tagLinks) {
    tag.addEventListener("click", function () {
      // Remove the 'selected' class from all tagLinks
      for (let otherTag of tagLinks) {
        otherTag.classList.remove("selected");
      }

      // Add the 'selected' class to the clicked tag
      this.classList.add("selected");
    });
  }

  // Get the all-videos tag
  let allVideosTag = document.querySelector('[data-tag="all-videos-tag"]');

  // Simulate a click on the 'All-videos tag
  // allVideosTag.click();
});
