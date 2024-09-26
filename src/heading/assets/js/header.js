document.getElementById("inputSearch").addEventListener("input", function () {
  const letra = document.getElementById("inputSearch").value;

  const icon = document.getElementById("iconSearch");
  if (letra.trim() !== "") {
    icon.classList.remove("bi");
    icon.classList.remove("bi-search");
  }
  if (
    letra.trim() === "" &&
    !icon.classList.contains("bi") &&
    !icon.classList.contains("bi-search")
  ) {
    icon.classList.add("bi");
    icon.classList.add("bi-search");
  }
});

function verificarLarguraTela() {
  var largura = window.innerWidth;
  const ul = document.getElementById("ul-navbar");
  // Aqui você pode adicionar sua lógica específica
  if (largura < 1200) {
    console.log("Tela pequena (mobile)");
    ul.classList.remove("ms-auto");
  } else {
    if (!ul.classList.contains("ms-auto")) {
      ul.classList.add("ms-auto");
    }
  }
}

// Chame a função ao carregar a página
window.onload = verificarLarguraTela;

// Chame a função ao redimensionar a janela
window.onresize = verificarLarguraTela;
