<?php


class controller_summer
{


    /**
     * Action для страницы Летние подарки
     */
    public function action_index()
    {

        // Подключаем вид
        require_once(ROOT . '/views/site/summer.php');
        return true;
    }





}