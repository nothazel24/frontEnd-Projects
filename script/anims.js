// Wait for GSAP to load
document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin, ExpoScaleEase);
  // gsap code here!
  // Vars
  var tl_nav = gsap.timeline();
  var tl = gsap.timeline();

  var linksDuration = 0.3;

  gsap.from(".ryo", { // teteh ryo cantik banget aduhai
    y: 50,
    opacity: 0,
    duration: 1,
    // rotation: 9,
    ease: "expo.out",
  });

  tl.from(".intro", {
    x: 40,
    opacity: 0,
    ease: "expo",
    // duration: 1
  })

    .from(".introDesc", {
      x: 20,
      opacity: 0,
      ease: "expo",
    })

    // Sliding images
    .from(".sliding-wrapper", {
      y: 20,
      opacity: 0,
      ease: "expo",
    //   rotation: 90,
      stagger: 0.1
    });

  // Navbar
  tl_nav
    .from(".navbar", {
      opacity: 0,
      y: -50,
      duration: 0.9,
      ease: "expo.out",
    })

    .from(".logo", {
      x: -110,
      duration: 0.5,
      ease: "expo.out",
    })

    .from(".nav-link", {
      y: -10,
      opacity: 0,
      duration: linksDuration,
      ease: "expo.out",
      stagger: 0.1
    });
});