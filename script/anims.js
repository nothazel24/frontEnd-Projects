// Wait for GSAP to load

gsap.registerPlugin(ScrollTrigger)
document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin, ExpoScaleEase);
  // gsap code here!

  // Vars
  var tl = gsap.timeline();

  gsap.from(".ryo", { // teteh ryo cantik banget aduhai
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
    duration: 1
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
      ease: "expo.out"
    })
});