<?php include ROOT . '/views/layouts/header.php'; ?>

    <style>
        .container-login
        {
            margin: 0;
            padding: 80px;
            position: relative;
            min-height: calc(100vh - 250px);
        }

        .page-footer.pt-4.
        {
            height: 80px;
            margin-top: -80px;
        }
    </style>

    <!--Main layout-->
    <main>
        <div class="container-login">

            <div class="row">

                <div class="col-sm-12 col-sm-offset-4 text-center">

<?php if ($result): ?><br>
    <div class="col-sm-12 col-sm-offset-12 padding-right"><br>
        <p>Вы зарегистрированы!</p><br>
        <a class="btn btn-default checkout" href="/">
            <i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
    </div>
<?php else: ?>
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>


                </div>
    <div class="col-sm-12 col-sm-offset-4 text-left">
        <div class="signup-form"><!--sign up form-->
            <h2>Регистрация на сайте</h2> <br>

        </div>
        <div class="col-sm-4 col-sm-offset-12 padding-right">
            <form action="#" method="post">
                <p> Имя: </p>
                <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                <hr>
                <p> Фамилия: </p>
                <input type="text" name="surname" placeholder="Фамилия" value="<?php echo $surname; ?>"/>
                <hr>
                <p> Email: </p>
                <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                <hr><br/>
                <p> Пароль (не короче 6-ти символов): </p>
                <input type="password" name="password" placeholder="Пароль"
                       value="<?php echo $password; ?>"/>
                <hr>
                <input type="submit" name="submit" class="btn btn-default" value="Регистрация"/>

            </form>
        </div><!--/sign up form-->

        <?php endif; ?>

    </div>
            </div>
        </div>
    </main>
    <!--</main>-->



<?php include ROOT . '/views/layouts/footer.php'; ?>