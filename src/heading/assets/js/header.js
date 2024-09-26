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
