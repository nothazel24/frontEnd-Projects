function fireAnim() {
  gsap.registerPlugin(ScrollTrigger, EaselPlugin, TextPlugin, ExpoScaleEase);

  var tl_nav = gsap.timeline();
  var linksDuration = 0.3;

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
      ease: "back.out",
    })

    .from(".nav-link", {
      x: -10,
      y: -10,
      opacity: 0,
      duration: linksDuration,
      ease: "expo.out",
      rotation: -20,
      stagger: 0.1,
    });
}

document.addEventListener("DOMContentLoaded", () => {
  fireAnim();
});
