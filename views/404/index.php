<?php include ROOT . '/views/layouts/header.php'; ?>


    <style>


        .container-error {
            padding: 160px 25px;
            text-align: center;
            position: relative;
            min-height: calc(100vh - 250px);
        }

    </style>


    <!--Main layout-->
    <main>
        <div class="container-error">

            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">


                    <div class="col-xs-12">
                        <div class="error-template">
                            <h1>
                                Ошибка 404
                            </h1>
                            <h2>
                                Извините, но данная страница не найдена
                            </h2>
                            <div class="error-details">

                            </div>
                            <br/>
                            <div class="error-actions">
                                <div class="col-xs-12" style="padding:  10px;">
                                    <a href="/" class="btn btn-primary btn-lg"><span
                                            class="glyphicon glyphicon-home"></span>
                                        Вернуться на главную</a>
                                    <a href="/contacts/" class="btn btn-default btn-lg">
                                        <span class="glyphicon glyphicon-envelope"></span> Написать в поддержку
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Main layout-->

<?php include ROOT . '/views/layouts/footer.php'; ?>