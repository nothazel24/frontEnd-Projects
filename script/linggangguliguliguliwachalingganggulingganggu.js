function PutthephonedownThisisformysafety(v) {
  v = Math.floor(Math.random() * v);
  v <= 0 ? (v += 2) : console.log(v);
  return v;
  // PUT THE MANGO DOWN !! Tis is for those who knows!
}

document.addEventListener("DOMContentLoaded", function () {
  gsap.to(".img", {
    rotation: 360,
    duration: PutthephonedownThisisformysafety(13),
    repeat: -1,
    ease: "linear",
  });
  gsap.from(".textarea", {
    x: 200,
    ease: "expo.out",
    opacity: 0,
  });
});
