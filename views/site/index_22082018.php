<?php include ROOT . '/views/layouts/header.php'; ?>


    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view"
                     style="background-image: url('/img/013.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-blue-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Подарки, которые понравятся каждому</strong>
                            </h1>

                            <p>
                                <strong>Как сэкономить время и получить желаемый результат</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Двадцать четыре самых интересных подарка</strong>
                            </p>

                            <a href="/birthday_gifts/" class="btn btn-outline-white btn-lg">Подробнее
                                <i class="fa fa-folder-open ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="view"
                     style="background-image: url('/img/025.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-blue-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Практичные подарки</strong>
                            </h1>
                            <h2 class="mb-4 d-none d-md-block">
                                <strong>на любой вкус</strong>
                            </h2>

                            <a href="/men/" class="btn btn-outline-white btn-lg">Подробнее
                                <i class="fa fa-folder-open ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view"
                     style="background-image: url('/img/031.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-blue-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Радовать своих близких</strong>
                            </h1>

                            <p>
                                <strong>Удивительные подарки для любого случая</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Если Вы не знаете, что подарить, попробуйте один из подарков в этом
                                    списке.</strong>
                            </p>

                            <a href="/catalog/" class="btn btn-outline-white btn-lg">Подробнее
                                <i class="fa fa-folder-open ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Third slide-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->

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

                    <form name="f1" method="post" action="/search/" class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="search" name="search_q" placeholder="Поиск" aria-label="Search">

                            <button class="btn btn-outline-white my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
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
<!--                                    <a href="" class="grey-text">-->
<!--                                        <h5>Категория</h5>-->
<!--                                    </a>-->
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
                                        <strong><?php echo $product['price']; ?></strong><i class="fa fa-rub"> </i>
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

                    <!--recommended_items-->
                    <?php foreach ($sliderProducts as $sliderItem): ?>
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="<?php echo Product::getImage($sliderItem['id']); ?>" class="card-img-top"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body text-center">
                                    <!--Category & Title-->
<!--                                    <a href="" class="grey-text">-->
<!--                                        <h5>Категория</h5>-->
<!--                                    </a>-->
                                    <h5>
                                        <strong>
                                            <a href="/product/view/<?php echo $sliderItem['id']; ?>"
                                               class="dark-grey-text"><?php echo $sliderItem['name']; ?>
                                                <?php if ($sliderItem['is_new']): ?>
                                                    <span class="badge badge-pill danger-color">NEW</span>
                                                <?php endif; ?>
                                            </a>
                                        </strong>
                                    </h5>

                                    <h4 class="font-weight-bold blue-text">
                                        <strong><?php echo $sliderItem['price']; ?></strong><i class="fa fa-rub"> </i>
                                    </h4>
                                    <a data-id="<?php echo $sliderItem['id']; ?>"
                                       href="/cart/add/<?php echo $sliderItem['id']; ?>"
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