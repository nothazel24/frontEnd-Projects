// function setOverlayText(imageId, text) {
//   var overlayText = document.querySelector(`#${imageId} .text p `);
//   overlayText.textContent = text;
// }

// setOverlayText("img1", "Ryo Yamada");
// setOverlayText("img2", "Nigga team leader");
// setOverlayText("img3", "Ryo");
// setOverlayText("img4", "Kesoku Band Member");
// setOverlayText("img5", "Band Member");
// setOverlayText("img6", "Cool Blue Entity");
// setOverlayText("img7", "Lmao");

const scrollers = document.querySelector(".sliding-wrapper");

/* 
Optimization refferences: check if the window is not uses 'reduce motion' power saving feature
(Sometimes occur at: Edge, Chrome, Firefox)
*/
if (!window.matchMedia("(prefers-reduce-motion: reduce)").matches) {
  addAnim();
} else {
  console.error("In order to experience animations, please turn off your browser power saving feature!")
}

function addAnim() {
    scrollers.setAttribute("data-animated", true);
    const scrContent = scrollers.querySelectorAll(".sliding-content");

    console.log(scrContent);
}
