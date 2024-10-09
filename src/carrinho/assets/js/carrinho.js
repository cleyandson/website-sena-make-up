const toggleButton = document.getElementById("toggleButton");
const buttonAdvance = document.getElementById("buttonAdvance");
const text1 = document.getElementById("text1");
const text2 = document.getElementById("text2");

const borderBoxIcon = document.getElementById("box-second-icon");
const borderThirdIcon = document.getElementById("box-third-icon");

const secondIcon = document.getElementById("second-icon");
const thirdIcon = document.getElementById("third-icon");

const secondHr = document.getElementById("second-hr");
const thirdHr = document.getElementById("third-hr");

// Função para animar a saída de um conteúdo e entrada de outro
function toggleContent() {
  if (text1.style.display !== "none") {
    // Animação de saída para o primeiro conteúdo
    gsap.to(text1, {
      duration: 0.5,
      opacity: 0,
      x: -100,
      onComplete: () => {
        text1.style.display = "none";
        text2.style.display = "block";

        // Animação de entrada para o segundo conteúdo
        gsap.fromTo(
          text2,
          { opacity: 0, x: 100 },
          { opacity: 1, x: 0, duration: 0.5 }
        );

        gsap.fromTo(
          borderBoxIcon,
          { borderColor: "#ff69b4" },
          { borderColor: "#7fd8e7", duration: 0.3 }
        );

        gsap.fromTo(
          secondIcon,
          { color: "#ff69b4" },
          { color: "#7fd8e7", duration: 0.3 }
        );

        gsap.fromTo(
          secondHr,
          { backgroundColor: "#ccc" },
          { backgroundColor: "#7fd8e7", duration: 0.3 }
        );

        gsap.fromTo(
          borderBoxIcon,
          { borderColor: "#ff69b4" },
          { borderColor: "#7fd8e7", duration: 0.3 }
        );

        gsap.fromTo(
          borderThirdIcon,
          { borderColor: "#ccc" },
          { borderColor: "#ff69b4", duration: 0.3 }
        );

        gsap.fromTo(
          thirdIcon,
          { color: "#d7d7d7" },
          { color: "#ff69b4", duration: 0.3 }
        );
      },
    });
  } else {
    // Animação de saída para o segundo conteúdo
    gsap.to(text2, {
      duration: 0.5,
      opacity: 0,
      x: 100,
      onComplete: () => {
        text2.style.display = "none";
        text1.style.display = "flex";

        // Animação de entrada para o primeiro conteúdo
        gsap.fromTo(
          text1,
          { opacity: 0, x: -100 },
          { opacity: 1, x: 0, duration: 0.5 }
        );

        gsap.fromTo(
          borderBoxIcon,
          { borderColor: "#7fd8e7" },
          { borderColor: "#ff69b4", duration: 0.3 }
        );

        gsap.fromTo(
          secondIcon,
          { color: "#7fd8e7" },
          { color: "#ff69b4", duration: 0.3 }
        );

        gsap.fromTo(
          secondHr,
          { backgroundColor: "#7fd8e7" },
          { backgroundColor: "#ccc", duration: 0.3 }
        );

        gsap.fromTo(
          borderThirdIcon,
          { borderColor: "#ff69b4" },
          { borderColor: "#ccc", duration: 0.3 }
        );

        gsap.fromTo(
          thirdIcon,
          { color: "#ff69b4" },
          { color: "#d7d7d7", duration: 0.3 }
        );
      },
    });
  }
}

// Adiciona evento de clique ao botão
toggleButton.addEventListener("click", toggleContent);
buttonAdvance.addEventListener("click", toggleContent);
