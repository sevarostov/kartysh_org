
<?php include ROOT . '/views/layouts/header.php'; ?>



<div class="alert alert-light" role="alert">
    A simple light alert—check it out!
</div>


<!--Main layout-->
<main>
    <div class="container">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark blue-grey lighten-3 mt-3 mb-5">
            <!-- Navbar brand -->
            <span class="navbar-brand">Категории:</span>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <?php foreach ($categories as $categoryItem): ?>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="/category/view/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!-- Links -->

                
            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->

        <!--Section: Products v.3-->
        <section class="text-center mb-4">

            <!--Grid row-->
            <div class="row wow fadeIn">
                <?php foreach ($latestProducts as $product): ?>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="<?php echo Product::getImage($product['id']); ?>" class="card-img-top"
                                     alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">
                                <!--Category & Title-->
                                <a href="" class="grey-text">
                                    <h5>Категория</h5>
                                </a>
                                <h5>
                                    <strong>
                                        <a href="/product/view/<?php echo $product['id']; ?>"
                                           class="dark-grey-text"><?php echo $product['name']; ?>
                                            <?php if ($product['is_new']): ?>
                                                <span class="badge badge-pill danger-color">NEW</span>
                                            <?php endif; ?>
                                        </a>
                                    </strong>
                                </h5>

                                <h4 class="font-weight-bold blue-text">
                                    <strong>$<?php echo $product['price']; ?></strong>
                                </h4>
                                <a data-id="<?php echo $product['id']; ?>"
                                   href="/cart/add/<?php echo $product['id']; ?>"
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