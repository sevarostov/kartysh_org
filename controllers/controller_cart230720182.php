<?php

/**
 * Контроллер для страницы Корзина
 */
class controller_cart
{
    public function action_index()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        // Получим данные из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);

            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
//            echo '<pre>';
//            var_dump($productsInCart);
//            die;

        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }


    /**
     * Добавление товара в корзину (сессию)
     * @param int $id <p>id товара</p>
     * @return integer <p>Количество товаров в корзине</p>
     */
    public function action_add($id)
    {

        // Добавляем товар в корзину
        Cart::addProduct($id);

        // Возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
//        var_dump($referrer);die();
        header("Location: $referrer");

    }

    public function action_delete($id)
    {

        // Удалить заданный товар из корзины
        Cart::deleteProduct($id);
        // Возвращаем пользователя на страницу
        header("Location: /cart");
    }

    public function action_addAjax($id)
    {
        // Добавляем товар в корзину
        echo Cart::addProduct($id);
        return true;
    }



    public function action_checkout()
    {

        // Статус успешного оформления заказа
        $result = false;

        $products = "";


        // Форма отправлена?
        if (isset($_POST['submit'])) {
            // Форма отправлена? - Да
            // Считываем данные формы
            $userName = $_POST['userName'];
            $userSurname = $_POST['userSurname'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            $userEmail = $_POST['userEmail'];
            $userAddress = $_POST['userAddress'];
            // Валидация полей
            $errors = false;
            if (!User::checkName($userName))
                $errors[] = 'Неправильное имя';
            if (!User::checkPhone($userPhone))
                $errors[] = 'Неправильный телефон';

            // TODO сделать валидацию емайла а пока просто деактивируем
            $userEmail = pg_escape_string($userEmail);

            // Форма заполнена корректно?
            if ($errors == false) {
                // Форма заполнена корректно? - Да
                // Сохраняем заказ в базе данных
                // Собираем информацию о заказе
                $productsInCart = Cart::getProducts();


                if (User::isGuest()) {
                    // неавторизированные пользователи
                    // сооздаем нового пользователя и забираем его id
                    $userId = Order::createNewUser($userName,$userEmail);

                } else {
//                       авторизированные пользователи
                    $userId = User::checkLogged();
                }

                // Сохраняем заказ в БД
                $result = Order::save($userName, $userSurname, $userPhone, $userEmail, $userAddress, $userComment, $userId, $productsInCart);

                if ($result) {
                    // Оповещаем администратора о новом заказе
                    $adminEmail = 'ra@5rm.ru';
                    $message = 'Новый заказ';
                    $subject = 'Новый заказ!';
                    mail($adminEmail, $subject, $message);

                    // Очищаем корзину
                    Cart::clear();
                }
            } else {
                // Форма заполнена корректно? - Нет
                // Итоги: общая стоимость, количество товаров
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
            }
        } else {
            // Форма отправлена? - Нет
            // Получием данные из корзины
            $productsInCart = Cart::getProducts();

            // В корзине есть товары?
            if ($productsInCart == false) {
                // В корзине есть товары? - Нет
                // Отправляем пользователя на главную выбирать товары
                header("Location: /");
            } else {
                // В корзине есть товары? - Да
                // Итоги: общая стоимость, количество товаров
                $productsIds = array_keys($productsInCart);
                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();


                $userName = false;
                $userSurname = false;
                $userPhone = false;
                $userComment = false;
                $userEmail = false;
                $userAddress = false;

                // Пользователь авторизирован?
                if (User::isGuest()) {
                    // Нет
                    // Значения для формы пустые
                } else {
                    // Да, авторизирован
                    // Получаем информацию о пользователе из БД по id
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    // Подставляем в форму
                    $userName = $user['name'];

                }
            }
        }

        require_once(ROOT . '/views/cart/сheckout.php');

        return true;
    }


}
