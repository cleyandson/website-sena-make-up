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

document.getElementById("button-menu").addEventListener("click", function () {
  const searchNavbar = document.getElementById("search-navbar");
  const button = document.getElementById("button-menu");
  const buttonExpanded = button.getAttribute("aria-expanded");

  if (buttonExpanded === "true") {
    searchNavbar.style.display = "none";
    searchNavbar.classList.remove("d-flex");
    return;
  } else {
    var largura = window.innerWidth;
    if (largura > 768) {
      searchNavbar.style.display = "block";
      searchNavbar.classList.add("d-flex");
    }
  }
});

function verificarLarguraTela() {
  var largura = window.innerWidth;
  const searchNavbar = document.getElementById("search-navbar");
  const button = document.getElementById("button-menu");
  const buttonExpanded = button.getAttribute("aria-expanded");

  // Aqui você pode adicionar sua lógica específica
  if (largura < 768) {
    console.log("Tela pequena (mobile)");
    searchNavbar.style.display = "none";
    searchNavbar.classList.remove("d-flex");
  }
}

// Chame a função ao carregar a página
window.onload = verificarLarguraTela;

// Chame a função ao redimensionar a janela
window.onresize = verificarLarguraTela;
