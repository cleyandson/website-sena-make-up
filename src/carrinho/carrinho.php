<div class="main-address">
    <div>
        <div class="box-address">
            <div class="box-logo">
                <p>Sena</p>
                <p>MakeUP</p>
            </div>
            <div class="box-location">
                <div class="box-location-icon" id="box-first-icon">
                    <span><i class="bi bi-handbag" id="icon-first"></i></span>
                </div>

                <hr class="first-hr" style="background: #7FD8E7;">

                <div class="box-location-icon" id="box-second-icon">
                    <span><i class="bi bi-geo-alt" id="second-icon"></i></span>
                </div>

                <hr id="second-hr">

                <div class="box-location-icon" id="box-third-icon">
                    <span><i class="bi bi-credit-card-2-front" id="third-icon"></i></span>
                </div>

                <hr class="third-hr" id="third-hr">

                <div class="box-location-icon" id="box-fourth-icon">
                    <span><i class="bi bi-check-lg" id="fourth-icon"></i></span>
                </div>

            </div>
            <div class="box-img-security">
                <img src="../../../website-sena-make-up/src/carrinho/assets/img/Group.png" alt="">
            </div>
        </div>

        <section id="first-screen" style="display: flex;">
            <div class="box-form-address">
                <form onsubmit="handleFormSubmit(event)">
                    <fieldset>
                        <legend>
                            Adicione um endereço de envio
                        </legend>

                        <div class="address">
                            <div class="box-address-container">
                                <div>
                                    <label for="Cep">Cep:</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="endereço">Endereço:</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="bairro">Bairro:</label>
                                    <input type="text">
                                </div>
                            </div>

                            <div class="box-address-container">
                                <div>
                                    <label for="numero-residencia">Número de residência:</label>
                                    <input type="text">
                                </div>
                                <div>
                                    <label for="complemento">Complemento:</label>
                                    <input type="text">
                                </div>

                                <div>
                                    <label for="Cidade">Cidade/Estado:</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>

                        <div class="box-name-delivery">
                            <label for="">Nome de quem vai receber ou retirar:</label>

                            <input type="text">

                        </div>
                        <div class="button-choice">
                            <a href="home.php">Cancelar</a>
                            <button type="submit" id="buttonAdvance">Salvar e continuar a compra</button>
                        </div>
                    </fieldset>
                </form>
            </div>

        </section>


        <section class="second-section" id="second-screen" style="display: none;">
            <form class="div-main" onsubmit="handleFormSubmit(event)">
                <div class="box-choose-payment-delivery">
                    <div class="box-delivery-method">
                        <div class="delivery-method">
                            <p>Forma de entrega</p>

                            <div class="method-choose">
                                <div>
                                    <input type="radio" id="normal" name="choose-method-delivery" value="normal">
                                    <label for="normal">Normal (até 7 dias úteis)*</label>
                                </div>
                                <p>R$9,90</p>
                            </div>
                            <div class="method-choose">
                                <div>
                                    <input type="radio" id="retirada" name="choose-method-delivery" value="retirada">
                                    <label for="retirada">Retirada</label>
                                </div>
                            </div>

                        </div>
                        <p>* Prazo válido após aprovação do pagamento do pedido</p>
                    </div>

                    <div class="box-payment-method">
                        <p>Selecione a Forma de Pagamento</p>

                        <div class="method-choose">
                            <div>
                                <input type="radio" id="cartao" name="choose-method-payment" value="cartao de credito">
                                <label for="cartao">Pagar com Cartão de Crédito</label>
                            </div>
                            <img src="../../../website-sena-make-up/src/carrinho/assets/img/icon-payment/icons8-frente-do-cartão-de-banco-50 1.png"
                                alt="imagem de um cartão de credito na cor preta">
                        </div>
                        <div class="method-choose">
                            <div>
                                <input type="radio" id="pix" name="choose-method-payment" value="pix">
                                <label for="pix">Pagar com Pix</label>
                            </div>
                            <img src="../../../website-sena-make-up/src/carrinho/assets/img/icon-payment/icons8-foto-50 1.png"
                                alt="imagem do simbolo do pix na cor preta">
                        </div>

                        <div class="box-info-pix">
                            <ol>
                                <li>Clique em "Finalizar Pedido";</li>
                                <li>Na tela seguinte copie o código do pix;</li>
                                <li>No app do seu banco, selecione a opção "Pagar com o PIX" e clie o código que você
                                    copiou;</li>
                                <li>Confire os dados e confirme o pagamento;</li>
                                <li>Pronto! Agora envie o comprovante no nosso Whatsapp para agilizar o processo e o
                                    pagamento foi feito com sucesso!</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="box-order-summary">
                    <div class="summary-price">
                        <p>Resumo do pedido</p>
                        <div class="summary-price-product">
                            <div class="text-price">
                                <p>Produto:</p>
                                <p id="amountItem">(1 item)</p>
                            </div>
                            <div class="text-price">
                                <p class="value-price">R$29,15</p>
                                <p>R$ 16,63</p>
                            </div>
                        </div>
                        <div class="summary-price-product">
                            <div class="text-price">
                                <p>Frete:</p>
                            </div>
                            <div class="text-price">
                                <p>R$9,90</p>
                            </div>
                        </div>

                        <hr id="hr-summary-order">


                        <div class="value-total">
                            <div class="text-price">
                                <p>Total do pedido</p>
                            </div>
                            <div class="value-price">
                                <p>R$26,53</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-button-submit">
                        <button type="submit" class="button-finish-buy" id="buttonFinish">Finalizar Pedido</button>
                        <p>*Você será redirecionado para finalizar o pedido no WhatsApp</p>
                    </div>

                    <div class="box-item-summary">
                        <details open>
                            <summary>
                                <p>Item do pedido <span id="amountItemSpan">(1)</span></p>
                                <i class="bi bi-chevron-up"></i>
                            </summary>
                            <div class="box-summary-info-product">
                                <div class="box-image-name-product">
                                    <img src="../../../website-sena-make-up/src/carrinho/assets/img/produto/Produto.png"
                                        alt="foto da escolha do produto">
                                    <div>
                                        <p>Porán Cosméticos</p>
                                        <p>hidrataante melancia - corpo e rosto 145g</p>
                                    </div>
                                </div>
                                <div class="price-product-summary">
                                    <p>R$29,15</p>
                                    <p>R$16,63</p>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>
            </form>

        </section>

        <section id="third-screen" style="display: none;">
            <div class="tittle-information">
                <p>Falta pouco! Finalize seu pedido no Whatsapp!</p>
                <p>Seu pedido está quase finalizado. Agora, siga as instruções abaixo para concluir o pagamento via
                    WhatsApp</p>
            </div>
            <div class="information-whatsapp">
                <div class="box-qr-code">
                    <img src="../../../website-sena-make-up/src/carrinho/assets/img/Desktop/QRCode_Fácil (1) 1.png"
                        alt="Imagem do qr-code">
                    <a href="#">Copiar número do Whatsapp</a>
                </div>
                <div class="step-by-step-whatsapp">
                    <ol>
                        <li>Clique no botão para abrir o Whatsapp ou escaneie o QR Code</li>
                        <li>Envie a mensagem automática que aparecerá no chat para atendimento</li>
                        <li>Confirme os detalhes do seu pedido com nossa equipe no WhatsApp</li>
                        <li>Realize o pagamento e siga as instruções para realizar o pagamento
                            de forma segura.</li>
                        <li>Envie o comprovante diretamente no chat do Whatsapp para que
                            possamos agilizar a sua entrega!</li>
                        <li><a href="#">Preciso de ajuda para realizar o pagamento</a></li>
                    </ol>
                </div>
            </div>
            <div class="box-seconds">
                <a href="https://web.whatsapp.com/" id="textSeconds">10</a>
                <p>Você será redirecionado para Whatsapp</p>
            </div>
            <div class="box-number-order">
                <p>Nuúmero do pedido:</p>
                <p>7050278</p>
            </div>
        </section>
        <p id="buttonBack" style="display: none;">Voltar</p>

        <div class="box-secure-payment-info">
            <div class="box-payment">
                <p>Método de pagamento</p>
                <img src="../../../website-sena-make-up/src/carrinho/assets/img/Desktop/flag-pix 1.png" alt="">
            </div>
            <div class="box-secure-info">
                <p>Segurança</p>
                <div class="box-images">
                    <img src="../../../website-sena-make-up/src/carrinho/assets/img/Desktop/security-100 2.png" alt="">
                    <img src="../../../website-sena-make-up/src/carrinho/assets/img/Group.png" alt="">
                    <img src="../../../website-sena-make-up/src/carrinho/assets/img/Desktop/security-geotrust 2.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</div>