// Wait for GSAP to load

document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin, ExpoScaleEase);
  // gsap code here!
  // Vars
  var tl_nav = gsap.timeline();
  var tl = gsap.timeline();

  var linksDuration = 0.2;

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
    .from(".sliding-content", {
      y: 80,
      opacity: 0,
      ease: "back",
      rotation: 20,
      stagger: 0.1
    });
  // Navbar
  tl_nav
    .from(".navbar", {
      opacity: 0,
      y: -50,
      duration: 0.1,
      // ease: "expo.out",
    })
    .from(".logo", {
      x: -110,
      duration: 0.5,
      ease: "expo.out",
    })
    .from(".home", {
      y: -10,
      opacity: 0,
      duration: linksDuration,
      ease: "expo.out",
    })
    .from(".social", {
      y: -10,
      opacity: 0,
      duration: linksDuration,
      ease: "expo.out",
    })
    .from(".projects", {
      y: -10,
      opacity: 0,
      duration: linksDuration,
      ease: "expo.out",
    });
  // Image Slides
});
