// Select all menu icons, the pop-up menu, and the close button
const menuIcons = document.querySelectorAll(".menu-icon");
const popupMenu = document.querySelector("#popup-menu");

// Add a click event listener to each menu icon
menuIcons.forEach((menuIcon) => {
  menuIcon.addEventListener("click", (event) => {
    // Prevent the event from bubbling up to the document
    event.stopPropagation();

    // Toggle the 'hidden' class of the pop-up menu
    popupMenu.classList.toggle("hidden");
  });
});

// Add a click event listener to the document
document.addEventListener("click", () => {
  // Add the 'hidden' class to the pop-up menu
  popupMenu.classList.add("hidden");
});

// Add a keydown event listener to the document
document.addEventListener("keydown", (event) => {
  // If the escape key is pressed, add the 'hidden' class to the pop-up menu
  if (event.key === "Escape") {
    popupMenu.classList.add("hidden");
  }
});
