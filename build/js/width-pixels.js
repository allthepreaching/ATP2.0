function logWidths() {
  const leftSideParent = document.getElementById("video-content-left");
  const leftSideParentWidth = leftSideParent.offsetWidth;

  const rightSideParent = document.getElementById("video-content-right");

  if (rightSideParent) {
    const rightSideParentWidth = rightSideParent.offsetWidth;
    console.log("Right side parent width: " + rightSideParentWidth + "px");
  } else {
    console.log("Right side parent not found");
  }

  console.log("Left side parent width: " + leftSideParentWidth + "px");
}

window.onload = logWidths;
window.onresize = logWidths;
