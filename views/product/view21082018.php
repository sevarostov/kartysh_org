<?php include ROOT . '/views/layouts/header.php'; ?>

    <style>


        .container-item {
            padding: 80px 25px;
            position: relative;
            min-height: calc(100vh - 240px);
        }
        .product-information {
            padding: 20px 55px;
            position: relative;
        }

    </style>


    <!--Main layout-->
    <main>
        <div class="container-item">

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 padding-right">
                            <div class="product-details"><!--product-details-->
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="view-product">
                                            <img src="<?php echo Product::getImage($product['id']); ?>" alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="product-information"><!--/product-information-->

                                            <?php if ($product['is_new']): ?>
                                                <span class="badge badge-pill danger-color">NEW</span>
                                            <?php endif; ?>

                                            <h2><?php echo $product['name']; ?></h2>
                                            <p>Код товара: <?php echo $product['code']; ?></p>
                                            <span><?php echo $product['price']; ?></span> <i class="fa fa-rub"> </i>
                                            <p>
                                                <b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?>
                                            </p>
                                            <p><b>Страна-производитель:</b> <?php echo $product['brand']; ?></p>
                                            <a href="/cart/add/<?php echo $product['id']; ?>"
                                               data-id="<?php echo $product['id']; ?>"
                                               class="btn btn-default add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>В корзину
                                            </a>
                                        </div><!--/product-information-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br/>
                                        <h5>Описание товара</h5>
                                        <?php echo $product['description']; ?>
                                    </div>
                                </div>
                            </div><!--/product-details-->

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>
    <!--Main layout-->


<?php include ROOT . '/views/layouts/footer.php'; ?>