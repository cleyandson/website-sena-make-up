<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sena MakeUP | Sacola</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./src/heading/assets/css/header.css">
    <link rel="stylesheet" href="./src/sacola/assets/css/sacola.css">
    <link rel="stylesheet" href="./src/footer/assets/css/footer.css">
</head>

<body>
    <?php include './src/heading/header.php'; ?>
    <main>

        <!-- Se tiver produto na sacola mostra a 2 section, SE NÃO mostra a primeira section <!-->
        <section id="section-bag-empty">
            <div class=" box-empty-bag">
                <div class="box-img-empty-bag">
                    <img src="../website-sena-make-up/src/sacola/assets/img/icons8-vilta-frontal-da-bolsa-100 1.png"
                        alt="">
                </div>
                <h2>Sua sacola está vazia.</h2>
                <p>Você ainda não adicionou nenhum produto à sacola :(</p>
                <div class="box-back-home">
                    <a href="home.php">Continuar Comprando
                        <span>
                            <img src="../website-sena-make-up/src/sacola/assets/img/icons8-avancar-50.png" alt="">
                        </span>
                    </a>
                </div>
            </div>
        </section>

        <section id="section-bag-full" style="display: none;">
            <div class="box-full-bag">
                <p id="productsBag">Sacola (1 produto)</p>
                <div class="box-term">
                    <p>Estime frete e prazo</p>
                    <form action="" method="get" class="box-form-term">
                        <input type="text">
                        <button>OK</button>
                        <a href="">Não sei meu CEP</a>
                    </form>
                </div>
                <div class="box-description-term">
                    <p>Normal (até 7 dias úteis)</p>
                    <p>R$9,00</p>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>
                                Produto
                            </th>
                            <th>
                                Quantidade
                            </th>
                            <th>
                                Entrega
                            </th>
                            <th>
                                Preço
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="primary-column">
                                <div class="info-product">
                                    <img src="../website-sena-make-up/src/sacola/assets/img/produto.png" alt="">
                                    <div>
                                        <p>Porán Cosméticos</p>
                                        <p>Hidratante Melância - corpo e rosto 145G</p>
                                    </div>
                                </div>
                            </td>
                            <td class="box-column-table">
                                <div class="column-quantidade">
                                    <input type="number" id="quantidade" name="quantidade" min="1" max="20" step="1"
                                        value="1">
                                    <p class="remove-item">Remover</p>
                                </div>
                            </td>
                            <td>
                                Até 7 dias úteis
                            </td>
                            <td>
                                R$16,63
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="box-finish-buy">
                <a href="carrinho.php" class="button-finish-buy">Finalizar compra</a>
                <div class="box-info-price">
                    <div class="price-product">
                        <p>Produto: <span id="productsBagSpan">(1 item)</span></p>
                        <p><span>R$29,15</span>R$16,63</p>
                    </div>
                    <div class="box-term">
                        <p>Frete</p>
                        <p>R$9,90</p>
                    </div>
                </div>
                <div class="box-price-total">
                    <p>Total:</p>
                    <p>R$26,53</p>
                </div>
                <a href="carrinho.php" class="button-finish-buy">Finalizar compra</a>
                <a href="home.php">Continuar Comprando <span style="color: black;">></span></a>
            </div>
        </section>
    </main>

    <?php include './src/footer/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>
    <script src="./src/heading/assets/js/header.js"></script>
    <script src="./src/sacola/assets/js/sacola.js"></script>

</body>

</html>