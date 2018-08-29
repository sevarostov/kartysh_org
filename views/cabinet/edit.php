<?php include ROOT . '/views/layouts/header.php'; ?>

    <style>
        .container-edit
        {
            margin: 0;
            padding: 80px;
            position: relative;
            min-height: calc(100vh - 250px);
        }

    </style>

<section>
    <div class="container-edit">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                    <div class="col-sm-12 col-sm-offset-4 text-left">
                        <a href="/cabinet/edit">Редактировать данные</a>
                        <br>
                        <a href="/cart/">Список покупок</a>
                    </div>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
                            <p>Имя:</p>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            <br/>
                            <br/>
                            <p>Фамилия:</p>
                            <input type="text" name="surname" placeholder="Фамилия" value="<?php echo $surname; ?>"/>
                            <br/>
                            <br/>
                            <p>Пароль:</p>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            <br/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>