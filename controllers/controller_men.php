<?php

/**
 * Контроллер controller_about
 */
class controller_men
{

    /**
     * Action для страницы "Мужчинам"
     */
    public function action_index()
    {
        // Список категорий для верхнего меню
        $categories = Category::getCategoriesList();

        // Список  товаров для женщин
        $latestProducts = Product::getLatestProducts(16);


        // Подключаем вид
        require_once(ROOT . '/views/site/men.php');
        return true;
    }

    
}
