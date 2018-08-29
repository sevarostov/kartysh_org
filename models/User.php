<?php


/**
 * создание польз-ля
 * @param string $name
 * @param string $password
 *      */

class User
{
        public static function register($name, $email, $password){
            $db = Db::getConnection();

            $sql = 'INSERT INTO public.user (name, email, password) '
                . 'VALUES (:name, :email, :password)';

            $result = $db->prepare($sql);
            $result->bindParam(':name', $name, PDO::PARAM_STR);
            $result->bindParam(':email', $email, PDO::PARAM_STR);
            $result->bindParam(':password', $password, PDO::PARAM_STR);

            return $result->execute();

        }

    /**
     * редактирование данных польз-ля
     * @param string $name
     * @param string $password
     *      */
    public static function edit($id, $name, $password){
        $db = Db::getConnection();

        $sql = "UPDATE public.user
         SET name = :name, password = :password
        WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();

    }



    /**
     * проверяем, существует ли пользователь с заданными $email и $password
     * @param string $email
     * @param string $password
     * @return mixed: integer user id or false
     */

    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM public.user WHERE email =  :email AND password =  :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }

        return false;
    }

    /**
     * Запоминаем пользователя
     * @param string $email
     * @param string $password
     *
     */

    public static function auth($userId)
    {
//        session_start();// сессия - запоминает данные о пользователе на сервере
        $_SESSION['user'] = $userId;
    }


    public static function checkLogged()
    {
//        session_start();
        // Если сессия есть, вернем идентификатор пользователя

        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header("Location: /user/login");

    }

    /**
     * проверяет пользователя: гость или нет
     *если сессии нет, то это гость, если сессия есть - то это не гость
     */
    public static function isGuest()
    {
//        session_start();
            if (isset($_SESSION['user'])) {
            return false;
        }
        return true;

    }



    /**
     * проверяет имя: не меньше, чем 2 символа
     *
     */

    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }


    /**
     * проверяет фамилию: не меньше, чем 2 символа
     *
     */

    public static function checkSurname($surname)
    {
        if (strlen($surname) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * проверяет адрес: не меньше, чем 20 символов
     *
     */

    public static function checkAddress($userAddress)
    {
        if (strlen($userAddress) >= 20) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет телефон: не меньше, чем 10 символов
     */
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }
    /**
     * проверяет пароль: не меньше, чем 6 символа
     *
     */

    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * проверяет e-mail
     *
     */

    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }


    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();

        $sql = 'SELECT COUNT (*) FROM public.user WHERE email =  :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result-> fetchColumn())
            return true;
        return false;
    }


    /**
     * Returns user by id
     * @param integer $id
     */
    public static function getUserById($id)
    {
            if ($id) {
            $db = Db::getConnection();
                $sql = 'SELECT * FROM public.user WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

                // указываем, что хотим получить данные в виде массива
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result->execute();


            return $result->fetch();
        }


    }





}





