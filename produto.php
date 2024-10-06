<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./src/heading/assets/css/header.css">
    <link rel="stylesheet" href="./src/produto/assets/css/produto.css">
    <link rel="stylesheet" href="./src/footer/assets/css/footer.css">
</head>

<body>
    <?php include './src/heading/header.php'; ?>
    <main>
        <div class="box-info-location">
            <p><span>Você está em: </span><a href="home.php">Sena MakeUp </a><span>></span> Porán
                <span>></span> Hidratante de
                Melancia - Porán
            </p>
        </div>
        <section>
            <div class="box-info-product">
                <div class="box-image-product">
                    <img src="../website-sena-make-up/src/produto/assets/img/Produto.png" alt="">
                </div>
                <div class="box-description-product-buy">
                    <h1>Hidratante de Melância - Porán</h1>
                    <div class="box-price">
                        <div class="price-discount">
                            <p>R$29,15</p>
                            <p>-42%</p>
                        </div>
                        <p>R$16,63</p>
                        <p>3x R$5,54</p>
                    </div>
                    <a href="" class="button-buy">Comprar</a>
                    <div class="box-share-product">
                        <p>Compartilhe</p>
                        <div class="box-icons-share">

                            <span>
                                <a href="#">
                                    <img src="../website-sena-make-up/src/produto/assets/img/icons/icons8-facebook-32 1.png"
                                        alt=""></a></span>
                            <span>
                                <a href="#">
                                    <img src="../website-sena-make-up/src/produto/assets/img/icons/icons8-twitter-32 1.png"
                                        alt=""></a></span>
                            <span><a href="#">
                                    <img src="../website-sena-make-up/src/produto/assets/img/icons/icons8-link-32 1.png"
                                        alt=""></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-description">
            <div class="box-content">
                <div class="content">
                    <details>
                        <summary>
                            <p>Detalhes</p>
                            <img src="../website-sena-make-up/src/produto/assets/img/icons/icon-arrow.png" alt="">
                        </summary>
                        <p class="text-information-product">O Hidratante Porán Melancia Corpo e Rosto Rico em Vitamina
                            A, C e Licopeno deixa a pele com
                            um toque macio e aveludado, nutrindo a pele e combatendo o envelhecimento precoce.</p>
                    </details>
                </div>

                <div class="content">
                    <details>
                        <summary>
                            <p>Como Usar</p>
                            <img src="../website-sena-make-up/src/produto/assets/img/icons/icon-arrow.png" alt="">
                        </summary>
                        <p class="text-information-product">Aplique diretamente sobre a pele com movimentos circulares
                            até a completa absorção.</p>
                    </details>
                </div>

                <div class="content">
                    <details>
                        <summary>
                            <p>Ação / Resultado</p>
                            <img src="../website-sena-make-up/src/produto/assets/img/icons/icon-arrow.png" alt="">
                        </summary>
                        <p class="text-information-product">Hidratação Intensa e Duradoura: Mantém a pele macia e suave
                            por mais tempo.</p>
                        <p class="text-information-product">Revitalização: Ajuda a revitalizar a pele, conferindo um
                            brilho saudável.</p>
                        <p class="text-information-product">Textura Leve e Rápida Absorção: Absorve rapidamente sem
                            deixar sensação oleosa.</p>
                    </details>
                </div>
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