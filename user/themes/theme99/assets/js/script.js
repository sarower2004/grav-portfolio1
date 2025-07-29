const professions = ["Developer ", "Designer ", "Photographer"];
let index = 0;
let charIndex = 0;
let isDeleting = false;
const speed = 100;
const pause = 1500;

const rotatingText = document.getElementById("rotating-text");

function typeEffect() {
  const currentText = professions[index];

  if (isDeleting) {
    rotatingText.textContent = currentText.substring(0, charIndex--);
  } else {
    rotatingText.textContent = currentText.substring(0, charIndex++);
  }

  if (!isDeleting && charIndex === currentText.length) {
    setTimeout(() => {
      isDeleting = true;
      typeEffect();
    }, pause);
    return;
  }

  if (isDeleting && charIndex === 0) {
    isDeleting = false;
    index = (index + 1) % professions.length;
  }

  setTimeout(typeEffect, isDeleting ? speed / 2 : speed);
}

typeEffect();
