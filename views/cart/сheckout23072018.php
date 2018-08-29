
<?php include ROOT . '/views/layouts/header.php'; ?>

<style>

    .container-order {
        padding: 20px 25px;
        text-align: center;
        position: relative;
        min-height: calc(100vh - 470px);
    }

</style>

<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container wow fadeIn">

        <!-- Heading -->
        <h2 class="my-5 h2 text-center">Оформление заказа</h2>
        <?php if ($result): ?>
            <div class="container-order">
                <p>Заказ оформлен. Мы Вам перезвоним.</p>
                <a href="/" class="btn btn-primary btn-lg"><span
                        class="glyphicon glyphicon-home"></span>
                    Вернуться на главную</a>
            </div>


        <?php else: ?>

        <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        <div class="login-form">
            <form action="#" method="post">
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-8 mb-4">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <form class="card-body">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--firstName-->
                                <div class="md-form ">
                                    <input type="text" name="userName" placeholder="Имя" value="<?php echo $userName; ?>"/>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--lastName-->
                                <div class="md-form">
                                    <input type="text" name="userSurname" placeholder="Фамилия" value="<?php echo $userSurname; ?>"/>
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Username-->
                        <div class="md-form input-group pl-0 mb-5">
                            <input type="text" name="userPhone" placeholder="Телефон" value="<?php echo $userPhone; ?>"/>
                        </div>

                        <!--email-->
                        <div class="md-form mb-5">
                            <input type="text" name="userEmail" id="email" class="form-control" placeholder="petrov@mail.ru" value="<?php echo $userEmail; ?>"/>
                            <label for="email" class="">Email </label>
                        </div>

                        <!--address-->
                        <div class="md-form mb-5">
                            <input type="text" name="userAdress" id="userAdress" class="form-control" placeholder="город, улица, дом, № квартиры" value="<?php echo $userAdress; ?>">
                            <label for="userAdress" class="">адрес</label>
                        </div>

                        <!--address-2-->
                        <div class="md-form mb-5">
                            <input type="text" class="form-control" name="userComment" placeholder="cообщение" value="<?php echo $userComment; ?>"/>
                        </div>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <label for="state">Выберите субъект</label>
                                <select class="custom-select d-block w-100" id="state" >
                                    <option value="">Выбрать...</option>
                                    <option>Республика Адыгея (Адыгея)</option>
                                    <option>Республика Башкортостан</option>
                                    <option>Республика Бурятия</option>
                                    <option>Республика Алтай</option>
                                    <option>Республика Дагестан </option>
                                    <option>Алтайский край</option>
                                    <option>Амурская область</option>
                                    <option>Архангельская область </option>
                                    <option>Астраханская область </option>
                                    <option>Белгородская область </option>
                                    <option>Ростовская область </option>
                                    <option>Краснодарский край </option>
                                </select>
                                <div class="invalid-feedback">
                                    Пожалуйста выберите субъект.
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <label for="zip">Индекс</label>
                                <input type="text" class="form-control" id="zip" placeholder="344000" >
                                <div class="invalid-feedback">
                                    Пожалуйста введите индекс.
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <hr>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Адрес доставки совпадает с указанным почтовым адресом</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Сохранить информацию для последующих заказов</label>
                        </div>

                        <hr>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked >
                                <label class="custom-control-label" for="credit">Банковская карта</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" >
                                <label class="custom-control-label" for="debit">Кредитная карта</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" >
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Имя владельца карты</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" >
                                <small class="text-muted">Пожалуйста введите полное имя как указано на карте</small>
                                <div class="invalid-feedback">
                                    Пожалуйста введите имя владельца карты.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Номер карты</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" >
                                <div class="invalid-feedback">
                                    Пожалуйста введите номер карты
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Срок действия</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" >
                                <div class="invalid-feedback">
                                    Пожалуйста введите срок действия карты
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" >
                                <div class="invalid-feedback">
                                    Пожалуйста введите секретный код (на обороте)
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Продолжить оформление заказа</button>

                    </form>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <!-- Heading -->
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Корзина</span>
                    <span class="badge badge-secondary badge-pill"><?php echo Cart::countItems();?></span>
                </h4>

                <!-- Cart -->
                <ul class="list-group mb-3 z-depth-1">
                    <?php foreach ($products as $product): ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><a href="/product/<?php echo $product['id'];?>">
                                    <?php echo $product['name'];?>
                                </a></h6>
                            <small class="text-muted">Краткое описание</small>
                        </div>
                        <span class="text-muted">$<?php echo $product['price'];?></span>
                    </li>
                    <?php endforeach; ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Всего (USD)</span>
                        <strong>$<?php echo $totalPrice;?></strong>
                    </li>
                </ul>
                <!-- Cart -->

                <!-- Promo code -->
                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Промокод">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Применить</button>
                        </div>
                    </div>
                </form>
                <!-- Promo code -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
            </form>
        </div>
        <?php endif; ?><br/>
    </div>
</main>
<!--Main layout-->






<?php include ROOT . '/views/layouts/footer.php'; ?>