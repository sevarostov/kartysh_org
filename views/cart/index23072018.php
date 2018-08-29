
<?php include ROOT . '/views/layouts/header.php'; ?>

<style>
    .container-checkout
    {
        margin: 0;
        padding: 80px;
        position: relative;
        min-height: calc(100vh - 250px);
    }

</style>

<div class="container-checkout">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="features_items">
                <h2 class="title text-center">Корзина</h2>

                <?php if ($productsInCart): ?>
                    <p>Вы выбрали такие товары:</p>
                    <table class="table-bordered table-striped table">
                        <tr>
                            <th>Код товара</th>
                            <th>Название</th>
                            <th>Стомость, грн</th>
                            <th>Количество, шт</th>
                            <th>Удалить</th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo $product['code'];?></td>
                                <td>
                                    <a href="/product/<?php echo $product['id'];?>">
                                        <?php echo $product['name'];?>
                                    </a>
                                </td>
                                <td><?php echo $product['price'];?></td>
                                <td><?php echo $productsInCart[$product['id']];?></td>

                                <td>
                                    <a href="/cart/delete/<?php echo $product['id'];?>">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="4">Общая стоимость:</td>
                            <td><?php echo $totalPrice;?></td>
                        </tr>

                    </table>
                    <a class="btn btn-default checkout" href="/cart/checkout">
                        <i class="fa fa-shopping-cart"></i> Оформить заказ</a>



                <?php else: ?>
                    <p>Корзина пуста</p>

                    <a class="btn btn-default checkout" href="/">
                        <i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                <?php endif; ?>


                <div class="col-sm-12 text-center">
                    <div class="left-sidebar">
                        <h2>Последние просмотренные товары</h2>
                        <div class="panel-group category-products">
                            <?php foreach ($categories as $categoryItem): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/<?php echo $categoryItem['id'];?>">
                                                <?php echo $categoryItem['name'];?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







<?php include ROOT . '/views/layouts/footer.php'; ?>