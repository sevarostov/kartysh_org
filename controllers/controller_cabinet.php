<?php


class controller_cabinet
{


    /**
     * Action для страницы Личный кабинет
     */
    public function action_index()
    {

        // получаем идентификатор пользователя из сессии

        $userId = User::checkLogged();// если польз-ль авторизирован - возвращается ID
        echo $userId;

        // получаем информацию о пользователе из БД- массив со всеми данными
        $user = User::getUserById($userId);

        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }

    public function action_edit()
    {
        //Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        //Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        $name = $user['name'];
        $surname = $user['surname'];
        $password = $user['password'];

        $result = false;


        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($errors == false) {

                $result = User::edit($userId, $name, $password);
            }


        }
        require_once(ROOT . '/views/cabinet/edit.php');

        return true;

    }



}