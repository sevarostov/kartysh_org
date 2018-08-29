
<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="alert alert-light" role="alert">
    Страница авторизации
</div>


<section>
    <hr>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?><hr><br/>
                    </ul>
                <?php endif; ?>
                <hr>

                <div class="signup-form"><!--sign up form-->
                    <h2>Вход на сайт</h2><hr><br/>
                    <hr>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                        <hr>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                        <hr>
                        <input type="submit" name="submit" class="btn btn-default" value="Вход" />
                    </form>
                    <hr>
                </div><!--/sign up form-->


                <br/>
                <br/>
            </div><hr><br/>
        </div><hr><br/>
    </div><hr><br/>
</section><hr><br/>


<?php include ROOT . '/views/layouts/footer.php'; ?>