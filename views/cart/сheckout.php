
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
        <h1 class="my-5 h2 text-center text-muted">Оформление заказа</h1>
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
                        <li> <?php echo $error; ?></li>
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
                                    <input type="text" name="userName" placeholder="  Имя" value="<?php echo $userName; ?>"/>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--lastName-->
                                <div class="md-form">
                                    <input type="text" name="userSurname" placeholder="  Фамилия" value="<?php echo $userSurname; ?>"/>
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Username-->
                        <div class="md-form input-group pl-0 mb-5">
                            <input type="text" name="userPhone" placeholder="  телефон" value="<?php echo $userPhone; ?>"/>
                        </div>

                        <!--email-->
                        <div class="md-form mb-5">
                            <input type="text" name="userEmail" id="email" class="form-control" placeholder="  petrov@mail.ru" value="<?php echo $userEmail; ?>"/>
                            <label for="email" class="">Email </label>
                        </div>

                        <!--address-->
                        <div class="md-form mb-5">
                            <input type="text" name="userAddress" id="userAddress" class="form-control" placeholder="  344000 город, улица, дом, квартира" value="<?php echo $userAddress; ?>">
                            <label for="userAddress" class="">адрес (индекс) </label>
                        </div>

                        <!--address-2-->
                        <div class="md-form mb-5">
                            <input type="text" class="form-control" name="userComment" placeholder="  cообщение" value="<?php echo $userComment; ?>"/>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-secondary btn-lg btn-block" type="submit" name="submit">Продолжить оформление заказа</button>

                    </form>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <!-- Heading -->
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted"><a href="/cart/">Корзина</a></span>
                    <span class="badge badge-secondary badge-pill"><?php echo Cart::countItems();?></span>
                </h4>

                <!-- Cart -->
                <ul class="list-group mb-3 z-depth-1">
                    <?php foreach ($products as $product): ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><a href="/product/view/<?php echo $product['id'];?> " target="_blank">
                                    <?php echo $product['name'];?> (<?php echo $productsInCart[$product['id']];?> шт.)
                                </a> </h6>
                            <small class="text-muted"><?php echo $product['description'];?></small>
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
<!--                <form class="card p-2">-->
<!--                    <div class="input-group">-->
<!--                        <input type="text" class="form-control" placeholder="Промокод">-->
<!--                        <div class="input-group-append">-->
<!--                            <button type="submit" class="btn btn-primary">Применить</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
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