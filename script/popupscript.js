function sleep(s) {
  return new Promise((resolve) => setTimeout(resolve, s * 1000));
}

function hidePopup() {
  // 1st
  gsap.to(".popup-content", {
    y: -30,
    opacity: 0,
    ease: "expo.inOut",
    duration: 0.6,
  });
  gsap.to("#bgPopup", {
    opacity: 0,
    duration: 0.9,
  });

  setTimeout(function () {
    document.getElementById("bgPopup").style.display = "none";
  }, 3000);
}

function adjustSpeed(v) {
  v = Math.floor(Math.random() * v);
  v <= 0 ? (v = +1) : console.log(v);
  return v;
}

document.addEventListener("DOMContentLoaded", function () {
  const pop_up = document.getElementById("bgPopup");
  // check for 'dontRemind' flag

  if (localStorage.getItem("dontRemind") === "true") {
    console.log("dontRemind key has been set to true and has been found");
    pop_up.style.display = "none";
    return;
  }

  gsap.from(".popup-content", {
    y: -70,
    scale: 0.96,
    opacity: 0,
    ease: "expo.out",
    duration: adjustSpeed(2),
  });

  const popup = document.getElementById("bgPopup");
  const gotItButton = document.getElementById("gotIt");
  const dontRemindCheckbox = document.getElementById("dontRemind");

  // Check if the "dontRemind" flag is set in localStorage
  if (!localStorage.getItem("dontRemind")) {
    popup.style.display = "flex";
    console.log("getItem('dontRemind') is not found!");
  } else {
    console.log("getItem('dontRemind') is found!");
  }

  gotItButton.addEventListener("click", function () {
    // If the checkbox is checked, set the "dontRemind" flag in localStorage
    if (dontRemindCheckbox.checked) {
      localStorage.setItem("dontRemind", "true");
      console.log("setItem('dontRemind) has been set to 'true'");
    }
    hidePopup();
  });
});
