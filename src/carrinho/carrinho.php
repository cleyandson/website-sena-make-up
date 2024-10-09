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

                <hr class="third-hr">

                <div class="box-location-icon">
                    <span><i class="bi bi-check-lg" id="fourth-icon"></i></span>
                </div>

            </div>
            <div class="box-img-security">
                <img src="../../../website-sena-make-up/src/carrinho/assets/img/Group.png" alt="">
            </div>
        </div>

        <section id="text1" style="display: none;">
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


        <section id="text2" style="display: flex;">
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
                            <input type="radio" id="cartao" name="choose-method-payment" value="cartao de credito">
                            <label for="cartao">Pagar com Cartão de Crédito</label>
                            <img src="..." alt="...">
                        </div>
                        <div class="method-choose">
                            <input type="radio" id="pix" name="choose-method-payment" value="pix">
                            <label for="pix">Pagar com Pix</label>
                            <img src="..." alt="...">
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
                                <p>(1 item)</p>
                            </div>
                            <div class="value-price">
                                <p>R$29,15</p>
                                <p>R$ 16,63</p>
                            </div>
                        </div>
                        <div class="summary-price-product">
                            <div class="text-price">
                                <p>Frete</p>
                            </div>
                            <div class="value-price">
                                <p>R$9,90</p>
                            </div>
                        </div>
                        <hr>
                        <div class="value-total">
                            <div class="text-price">
                                <p>Total do pedido</p>
                            </div>
                            <div class="value-price">
                                <p>R$26,53</p>
                            </div>
                        </div>
                    </div>

                    <button id="togsgleButton">Trocar Conteúdo</button>

                    <div class="box-item-summary">
                        <details>
                            <summary>
                                <p>Item do pedido <span>(1)</span></p>
                                <img src="..." alt="">
                            </summary>
                            <div>
                                <div class="box-image-name-product">
                                    <img src="..." alt="">
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