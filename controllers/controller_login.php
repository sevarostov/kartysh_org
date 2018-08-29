<?php


class controller_login
{


    /**
     * Action для страницы Авторизация
     */
    public function action_index()
    {

        // Подключаем вид
        require_once(ROOT . '/views/user/login.php');
        return true;
    }





}