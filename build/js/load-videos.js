// Number of videos to load at a time
const limit = 12;

// Offset to start loading videos from
let offset = limit;

// Load More Button
const loadMoreButton = document.getElementById("load-more");

// Add click event listener to Load More Button
loadMoreButton.addEventListener("click", function () {
  // Fetch more videos
  fetch("inc/inc.load-more.php?offset=" + offset + "&limit=" + limit)
    .then((response) => response.text())
    .then((data) => {
      // Append the new videos to the video cards container
      document.getElementById("video-cards").innerHTML += data;

      // Update the offset
      offset += limit;
      runVideoMenuScript();
    })
    .catch((error) => console.error(error));
});
