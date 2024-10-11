<main>
    <div class="box-carousel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="../../../website-sena-make-up/src/main/assets/img/banner-primary.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="../../../website-sena-make-up/src/main/assets/img/banner-secondary.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="../../../website-sena-make-up/src/main/assets/img/banner-tertiary.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <i class="bi bi-chevron-left button-change-img-banner"></i>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <i class="bi bi-chevron-right button-change-img-banner"></i>
            </button>

        </div>
    </div>

    <div class="box-main">
        <h2>Descubra as novidades</h2>
        <div class="box-content">


            <!-- ESSE BLOCO ABAIXO PHP É RESPONSAVEL POR CRIAR 4 DIVS IGUAIS, TROCAR O FOR POR FOREACH PARA PEGAR INFO DO BANCO DE DADOS    -->
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
            <div class="box-product">
                <div class="box-favorites">
                    <button><i class="bi bi-heart"></i></button>
                </div>
                <a href="produto.php">
                    <img src="../../../website-sena-make-up/src/main/assets/img/bruma-glow-melancia-lady-beauty-removebg-preview 1.jpg"
                        alt="imagem do produto">
                </a>
                <div class="box-description-product">
                    <h5>Porán - Hidratante Melância</h5>
                    <p class="">Corpo & Rosto - 145g</p>
                    <div class="box-price">
                        <p class="">R$29,15</p>
                        <p class=""><strong>R$16,63</strong></p>
                    </div>
                    <p class="text-description-product">Hidratante Porán Melancia Corpo & Rosto, rico em vitaminas
                        A, C
                        e licopeno, deixa a
                        pele
                        macia e aveludada, combatendo o envelhecimento precoce. Auxilia na fixação da maquiagem,
                        prolongando
                        sua duração. Enriquecido com extrato de camomila e colágeno.</p>
                </div>
                <div class="box-button-buy">
                    <button onclick="location.href='produto.php'" class="button-buy">Comprar Agora</button>

                    <i class="bi bi-handbag productBag"></i>
                </div>
            </div>
            <?php
            }
            ?>

            <!-- ESSE BLOCO ACIMA PHP É RESPONSAVEL POR CRIAR 4 DIVS IGUAIS, TROCAR O FOR POR FOREACH PARA PEGAR INFO DO BANCO DE DADOS    -->
        </div>
    </div>

    <div class="box-main">


        <h2>Mais Vendidos</h2>

        <div class="box-content">
            <!-- ESSE BLOCO ABAIXO PHP É RESPONSAVEL POR CRIAR 4 DIVS IGUAIS, TROCAR O FOR POR FOREACH PARA PEGAR INFO DO BANCO DE DADOS    -->
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
            <div class="box-product">
                <div class="box-favorites">
                    <button><i class="bi bi-heart"></i></button>
                </div>
                <a href="produto.php">
                    <img src="../../../website-sena-make-up/src/main/assets/img/bruma-glow-melancia-lady-beauty-removebg-preview 1.jpg"
                        alt="imagem do produto">
                </a>
                <div class="box-description-product">
                    <h5>Porán - Hidratante Melância</h5>
                    <p class="">Corpo & Rosto - 145g</p>
                    <div class="box-price">
                        <p class="">R$29,15</p>
                        <p class=""><strong>R$16,63</strong></p>
                    </div>
                    <p class="text-description-product">Hidratante Porán Melancia Corpo & Rosto, rico em vitaminas
                        A, C
                        e licopeno, deixa a
                        pele
                        macia e aveludada, combatendo o envelhecimento precoce. Auxilia na fixação da maquiagem,
                        prolongando
                        sua duração. Enriquecido com extrato de camomila e colágeno.</p>
                </div>
                <div class="box-button-buy">
                    <button onclick="location.href='produto.php'" class="button-buy">Comprar Agora</button>

                    <i class="bi bi-handbag productBag"></i>
                </div>
            </div>
            <?php
            }
            ?>

            <!-- ESSE BLOCO ACIMA PHP É RESPONSAVEL POR CRIAR 4 DIVS IGUAIS, TROCAR O FOR POR FOREACH PARA PEGAR INFO DO BANCO DE DADOS    -->
        </div>
    </div>

    <div class="box-banner">
        <div>
            <img src="../../../website-sena-make-up/src/main/assets/img/banner-primary.jpg" alt="">
        </div>
    </div>
</main>