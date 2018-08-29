<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="shortcut icon" href="/img/cart_site.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/cart_site.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/cart_site.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/cart_site.png">
    <link rel="apple-touch-icon-precomposed" href="/img/cart_site.png">

    <title>KARTYSH.ORG - подарки</title>
    <meta name="description"
          content="Красный Сулин, одежда для женщин, подарки, для мужчин, для детей, костюмы карнавальные, туалетная вода">
    <meta name="keywords"
          content="Красный Сулин, одежда для женщин, подарки, для мужчин, для детей, костюмы карнавальные, туалетная вода"/>
    <meta property="og:url" content="https://5rm.ru"/>
    <meta property="og:type" content="Сумки, обувь, ремень, туалетная вода, Красный Сулин"/>
    <meta property="og:title" content="Сумки, обувь, ремень, туалетная вода, Красный Сулин"/>
    <meta property="og:description"
          content="Сумки, обувь, ремень, туалетная вода, Красный Сулин"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/template/fonts/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/template/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/template/css/style.min.css" rel="stylesheet">


    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

           @media (max-width: 740px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="/">
            <strong class="pink-text">KARTYSH.ORG</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link waves-effect" href="/">Главная
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="/category/view/1/" >Женщинам</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="/category/view/2/" >Мужчинам</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="/category/view/3/" >Детям</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="/category/view/4/" >Аксессуары</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link waves-effect" href="/contacts/" >Контакты</a>-->
<!--                </li>-->
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link active waves-effect" href="/cart/">
                        <span class="badge pink z-depth-1 mr-1"><span id="cart-count"><?php echo Cart::countItems();?></span> </span>
                        <i class="fa fa-shopping-cart"></i>
                        <span class="clearfix d-none d-sm-inline-block">Корзина </span>
                    </a>
                </li>
                <?php if (User::isGuest()): ?>
                <li class="nav-item">
                   <a href="/user/login/" class="nav-link border border-light rounded waves-effect" >
                     <i class="fa fa-user"></i>Вход
                    </a>
                </li>
                    <li class="nav-item">
                    <a href="/user/register/" class="nav-link border border-light rounded waves-effect" >
                        <i class="fa fa-user"></i>Регистрация
                    </a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a href="/cabinet/" class="nav-link border border-light rounded waves-effect" >
                        <i class="fa fa-user"></i> Аккаунт</a>
                    </li>
                <li class="nav-item">
                    <a href="/user/logout/"class="nav-link border border-light rounded waves-effect" >
                        <i class="fa fa-unlock"></i> Выход</a>
                    </li>
                <?php endif; ?>

                <li class="nav-item">

                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->