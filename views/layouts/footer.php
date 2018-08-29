<!--Footer-->

<footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
        <a class="btn btn-outline-white" href="/" role="button">На главную
            <i class="fa fa-home ml-2"></i>
        </a>
        <a class="btn btn-outline-white" href="/contacts/" role="button">Контакты
            <i class="fa fa-phone-square ml-2"></i>
        </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/profile.php?id=100021008243215" target="_blank">
            <i class="fa fa-facebook mr-4"></i>
        </a>

        <a href="https://twitter.com/seva_rostov" target="_blank">
            <i class="fa fa-twitter mr-4"></i>
        </a>

        <a href="https://github.com/sevarostov" target="_blank">
            <i class="fa fa-github mr-4"></i>
        </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2018 Copyright:
        <a href="http://svetlana-kartysh.ru/" target="_blank"> svetlana-kartysh.ru </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="/template/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/template/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/template/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/template/js/mdb.min.js"></script>
<script type="text/javascript" src="/template/js/jquery.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();
</script>

<script>
    $(document).ready(function () {//когда документ загрузится
        $(".add-to-cart").click(function () {// по клику на кнопку корзина делать код
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/" + id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>

</html>