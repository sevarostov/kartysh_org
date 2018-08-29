<?php include ROOT . '/views/layouts/header.php'; ?>

    <style>
        .container-login
        {
            margin: 0;
            padding: 60px;
            position: relative;
            min-height: calc(100vh - 265px);
        }

        </style>

    <!--Main layout-->
    <main>
        <div class="container-login">

            <div class="row">

                <div class="col-sm-12 col-sm-offset-4 text-center">
                    <h1>Кабинет пользователя</h1>
                    <h3>Здравствуйте, <?php echo $user['name'];?>!</h3>
                </div>
                <div class="col-sm-12 col-sm-offset-4 text-left">
                    <a href="/cabinet/edit">Редактировать данные</a>
                    <br>
                    <a href="/cart/">Список покупок</a>
                    </div>
            </div>
        </div>
    </main>





        <!--Main layout-->


<?php include ROOT . '/views/layouts/footer.php'; ?>