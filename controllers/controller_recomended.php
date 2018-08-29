<?php

/**
 * Контроллер controller_index
 */
class controller_recomended
{

    /**
     * Action для главной страницы
     */
    public function action_index()
    {



//        echo '<pre>';
//        var_dump($  );
        // Подключаем вид
        require_once(ROOT . '/views/recomended/index.php');
        return true;
    }

    
}
