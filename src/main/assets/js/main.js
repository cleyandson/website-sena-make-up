const cards = document.querySelectorAll(".box-product");

cards.forEach((card) => {
  const cardText = card.querySelector(".text-description-product"); // Seleciona o elemento de texto dentro do card
  const btnBuy = card.querySelector(".box-button-buy"); // Seleciona o botão dentro do card

  // Inicialmente, esconda o botão

  // Evento mouseover
  card.addEventListener("mouseover", function () {
    cardText.style.display = "none"; // Esconde o texto
    btnBuy.style.display = "block"; // Mostra o botão
    card.style.cursor = "default"; // Muda o cursor para pointer
  });

  // Evento mouseout
  card.addEventListener("mouseout", function () {
    btnBuy.style.display = "none"; // Esconde o botão
    cardText.style.display = "block"; // Mostra o texto novamente
  });
});
