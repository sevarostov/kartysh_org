<?php
include ROOT . '/models/User.php';

class controller_user
{


    /**
     * Action для страницы Личный кабинет
     */
    public function action_index()
    {
        $email = '';
        $password = '';

        if (isset ($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            //Проверяем, существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                //Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);

                //Перенаправляем пользователя в закрытую часть - кабинет
                header("Location: /cabinet/");
            }


        }
        // Подключаем вид
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    public function action_register()
    {
        $name = ''; // проинициализируем переменные пустыми строками чтобы
        $surname = ''; // проинициализируем переменные пустыми строками чтобы
        $email = '';//  не было ошибок в работе программы
        $password = '';

        $result = '';

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }


//            if (User::checkName($name)) {
//                echo '<br>$name ok!';
//            } else {
//                $errors[] = 'Имя не должно быть короче 2-х символов';
//            }
//            if (User::checkEmail($email)) {
//                echo '<br>$email ok!';
//            } else {
//                $errors[] = 'Неправильный email';
//            }
//            if (User::checkPassword($password)) {
//                echo '<br>$password ok!';
//            } else {
//                $errors[] = 'Пароль не должен быть короче 6-ти символов';
//            }

            if ($errors == false) {
                // Save User
                $result = User::register($name, $email, $password);
            }

//            if (isset($name)){
//                echo '<br>name: '.$name;
//            }
//            if (isset($email)){
//                echo '<br>email: '.$email;
//            }
//            if (isset($password)){
//                echo '<br>password: '.$password;
//            }

        }
        // Подключаем вид
        require_once(ROOT . '/views/user/register.php');
        return true;
    }


    public function action_logout()
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
    }


}