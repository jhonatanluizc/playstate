<div class="container">
    <div class="py-5 text-center">
       
        <h2>Formas de Pagamento</h2>
        <p class="lead"></p>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Seu carrinho</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (BRL)</span>
                    <strong>$20</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Dados de Envio</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Primeiro nome</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Sobrenome</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="address">Endereço</label>
                    <input type="text" class="form-control" id="address" placeholder="Rua, Número - Bairro" required>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Pais</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option>Brasil</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Estado</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option>SP</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">CEP</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                    </div>
                </div>

               
                <hr class="mb-4">

                <h4 class="mb-3">Dados de Pagamento</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Cartão de Crédito</label>
                </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Cartão de Débito</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Nome completo do títular</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Número do cartão de crédito</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-expiration">Validade</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar</button>
            </form>
        </div>
    </div>

</div>