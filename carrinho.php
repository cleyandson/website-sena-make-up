<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./src/heading/assets/css/header.css">
    <link rel="stylesheet" href="./src/carrinho/assets/css/carrinho.css">
    <link rel="stylesheet" href="./src/footer/assets/css/footer.css">
</head>

<body>
    <?php include './src/heading/header.php'; ?>
    <main>
        <section>
            <table>
                <caption>Lista de Produtos</caption>
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="box-image-product">
                                <img src="../website-sena-make-up/src/carrinho/assets/img/Produto.png" alt="">
                            </div>
                            <div class="box-description-product">
                                <p>Produto</p>
                                <P>SKU: 1</P>
                                <p>Em estoque</p>
                            </div>
                        </td>
                        <td>2</td>
                        <td>R$ 100,00</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Calça</td>
                        <td>1</td>
                        <td>R$ 70,00</td>
                        <td>x</td>
                    </tr>
                </tbody>

            </table>

        </section>
        <section>
            <div>
                <div>
                    <p>Subtotal</p>
                    <p>R$ 102,45</p>
                </div>
                <div>
                    <p>Frete</p>
                    <p>R$ R$10,00</p>
                </div>
                <div>
                    <p>Total</p>
                    <p>R$ 112,45</p>
                </div>

            </div>
            <div>
                <a href="#">Finalizar Compra</a>
            </div>
        </section>
    </main>

    <?php include './src/footer/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>
    <script src="./src/heading/assets/js/header.js"></script>

</body>

</html>