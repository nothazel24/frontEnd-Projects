function setOverlayText(imageId, text) {
  var overlayText = document.querySelector(`#${imageId} .text p `);
  overlayText.textContent = text;
}

setOverlayText("img1", "Ryo Yamada");
setOverlayText("img2", "Nigga team leader");
setOverlayText("img3", "Ryo");
setOverlayText("img4", "Kesoku Band Member");
setOverlayText("img5", "Band Member");
setOverlayText("img6", "Cool Blue Entity");
setOverlayText("img7", "Lmao");

const scrollers = document.querySelectorAll('.sliding-wrapper')

// Optimization refferences: check if the window is not uses 'reduce motion' lifesave feaure
if (!window.matchMedia("(prefers-reduce-motion: reduce)").matches){
    addAnim()
}

function addAnim(){
    scrollers.forEach(scroller => {
        scroller.setAttribute('data-animated', true)
    })
}