document.getElementById("buttonMenu").addEventListener("click", function () {
  const boxSearch = document.getElementById("boxSearch");
  const boxList = document.getElementById("boxList");
  const iconMenu = document.getElementById("iconMenu");

  const styleBoxSearch = window.getComputedStyle(boxSearch);
  if (styleBoxSearch.display === "none") {
    boxSearch.style.display = "block";
    boxList.style.display = "none";
    boxList.classList.remove("box-list-open");
    boxList.classList.add("box-list");
    iconMenu.classList.remove("bi-x-lg");
    iconMenu.classList.add("bi-list");
  } else {
    //Aparece a lista e some a barra de pesquisa
    boxSearch.style.display = "none";
    boxList.style.display = "block";
    boxList.classList.remove("box-list");
    boxList.classList.add("box-list-open");
    iconMenu.classList.remove("bi-list");
    iconMenu.classList.add("bi-x-lg");
  }
});

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
  const boxList = document.getElementById("boxList");
  const iconMenu = document.getElementById("iconMenu");
  const boxSearch = document.getElementById("boxSearch");

  // Aqui você pode adicionar sua lógica específica
  if (largura > 991) {
    if (boxList.classList.contains("box-list-open")) {
      boxSearch.style.display = "block";
      boxList.classList.remove("box-list-open");
      boxList.classList.add("box-list");
      iconMenu.classList.remove("bi-x-lg");
      iconMenu.classList.add("bi-list");
    }
    boxList.style.display = "block";
  } else {
    if (!iconMenu.classList.contains("bi-x-lg")) {
      boxList.style.display = "none";
    }
  }
}

// Chame a função ao carregar a página
window.onload = verificarLarguraTela;
window.onresize = verificarLarguraTela;
