<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <h1>Carrinho de Compras</h1>
    </header>

    <section class="cart-container">
        <div class="cart-item">
            <div class="product-image">
                <img src="produto1.jpg" alt="Produto 1">
            </div>
            <div class="product-details">
                <h2>Produto Elegante 1</h2>
                <p>Quantidade: <input type="number" value="1" min="1"></p>
                <p class="price">R$ 100,00</p>
            </div>
            <div class="remove-item">
                <button>✕</button>
            </div>
        </div>

        <!-- Exemplo de outro item -->
        <div class="cart-item">
            <div class="product-image">
                <img src="produto2.jpg" alt="Produto 2">
            </div>
            <div class="product-details">
                <h2>Produto Elegante 2</h2>
                <p>Quantidade: <input type="number" value="2" min="1"></p>
                <p class="price">R$ 200,00</p>
            </div>
            <div class="remove-item">
                <button>✕</button>
            </div>
        </div>

        <div class="cart-summary">
            <h3>Total: R$ 500,00</h3>
            <button class="checkout-btn">Finalizar Compra</button>
        </div>
    </section>

</body>

</html>