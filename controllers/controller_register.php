<?php


class controller_register
{


    /**
     * Action для страницы Регистрация нового пользователя
     */
    public function action_index()
    {

        // Подключаем вид
        require_once(ROOT . '/views/user/register.php');
        return true;
    }





}