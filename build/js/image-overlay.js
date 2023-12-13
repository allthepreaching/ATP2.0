// Select all videos and thumbnail images within the video cards
const videos = document.querySelectorAll(".video-card video");
const thumbnails = document.querySelectorAll(".video-card img");

// Add a mouseover event listener to each video card
videos.forEach((video, index) => {
  video.addEventListener("mouseover", () => {
    // Check if the video exists
    if (videos[index]) {
      // Check if the video URL is valid
      const videoUrl = videos[index].dataset.src;
      if (videoUrl) {
        // Load the video
        videos[index].src = videos[index].dataset.src;
        videos[index].load();
        videos[index].muted = true;
        videos[index].play();
        videos[index].loop = true;

        // Add the 'opacity-100' class to the video
        videos[index].classList.add("opacity-100");
      }
    }
  });
});

// Add a mouseout event listener to each video card
videos.forEach((video, index) => {
  video.addEventListener("mouseout", () => {
    // Check if the video exists
    if (videos[index]) {
      // Pause the video
      videos[index].pause();

      // Remove the 'opacity-100' class from the video
      videos[index].classList.remove("opacity-100");
    }
  });
});
