
<?php include ROOT . '/views/layouts/header.php'; ?>


<style>
    .container-search {
        padding: 50px;
        text-align: center;
        position: relative;
        min-height: calc(100vh - 250px);
    }
    .container-order {
        padding: 64px;
        text-align: center;
        position: relative;
        min-height: calc(100vh - 550px);
    }
</style>


<!--Main layout-->
<main>
    <div class="container-search">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark blue-grey lighten-3 mt-3 mb-5">
            <!-- Navbar brand -->
            <span class="navbar-brand"><?php echo $categoryTexts ?>  </span>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">


            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->

        <!--Section: Products v.3-->
        <section class="text-center mb-4">

            <!--Grid row-->
            <div class="row wow fadeIn">

            <?php foreach ($product as $productItem): ?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="<?php echo Product::getImage($productItem['id']); ?>" class="card-img-top"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Category & Title-->
<!--                            <a href="" class="grey-text">-->
<!--                                <h5>Категория</h5>-->
<!--                            </a>-->
                            <h5>
                                <strong>
                                    <a href="/product/view/<?php echo $productItem['id']; ?>"
                                       class="dark-grey-text"><?php echo $productItem['name']; ?>
                                        <?php if ($productItem['is_new']): ?>
                                            <span class="badge badge-pill danger-color">NEW</span>
                                        <?php endif; ?>
                                    </a>
                                </strong>
                            </h5>

                            <h4 class="font-weight-bold blue-text">
                                <strong><?php echo $productItem['price']; ?>Р</strong>
                            </h4>
                            <a data-id="<?php echo $productItem['id']; ?>"
                               href="/cart/add/<?php echo $productItem['id']; ?>"
                               class="btn btn-default add-to-cart"><i
                                    class="fa fa-shopping-cart"></i>В корзину</a>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->
            <?php endforeach; ?>


                
        </section>
        <!--Section: Products v.3-->


    </div>
</main>
<!--Main layout-->



<?php include ROOT . '/views/layouts/footer.php'; ?>