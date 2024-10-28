// Delay to execute next command
function sleep(s){
  return new Promise(resolve => setTimeout(resolve, s * 1000))
}

async function demo() {
  // Goes 1st
  gsap.to(".loadingAssetsScreen", {
    opacity: 0,
    duration: 0.4,
  })
  await sleep(2)
  // After 2000ms / 1s delay
  document.getElementById("assetOverlay").style.display = "none"
}

// Wait for GSAP to load
function doAnim() {
  gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin, ExpoScaleEase);
  // gsap code here!

  // Vars
  var tl = gsap.timeline();

  gsap.from(".ryo", {
    // teteh ryo cantik banget aduhai
    y: 50,
    opacity: 0,
    duration: 1,
    rotation: 10,
    ease: "expo.out",
  });

  tl.from(".intro", {
    x: 40,
    opacity: 0,
    ease: "expo.out",
    rotation: 10,
    duration: 1,
  })

    .from(".introDesc", {
      x: 20,
      opacity: 0,
      ease: "expo",
    })

    // Sliding images
    .from(".sliding-content", {
      // y: 20,
      opacity: 0,
      ease: "expo",
      //rotation: 90,
      // stagger: 0.1
    })

    .from(".sliding-wrapper", {
      y: 20,
      opacity: 0,
      ease: "expo.out",
    });
}
// Cant explain. no idea tho
document.addEventListener("DOMContentLoaded", () => {
  doAnim();
  demo()
});