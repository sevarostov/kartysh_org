<?php

/**
 * Контроллер controller_contacts
 */
class controller_contacts
{

    /**
     * Action для страницы "Контакты"
     */
    public function action_index()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }

}
