let valueItemCard = parseInt(localStorage.getItem("cartItems"))
  ? parseInt(localStorage.getItem("cartItems"))
  : 0;

const buttonBuy = document.getElementById("buttonBuy");

buttonBuy.addEventListener("click", function () {
  valueItemCard++;
  document.getElementById("item-bag").innerText = valueItemCard; // Atualiza o valor no HTML
  localStorage.setItem("cartItems", valueItemCard); // Salva o novo valor no localStorage
});
