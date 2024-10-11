function setOverlayText(imageId, text) {
    var overlayText = document.querySelector(`#${imageId} .text p `);
    overlayText.textContent = text;
}

setOverlayText('img1', 'Ryo Yamada')
setOverlayText('img2', 'Yamada Ryo')
setOverlayText('img3', 'Ryo')
setOverlayText('img4', 'Kesoku Band Member')
setOverlayText('img5', 'Band Member')
setOverlayText('img6', 'Cool Blue Entity')
setOverlayText('img7', 'Lmao')