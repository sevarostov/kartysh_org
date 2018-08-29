<?php

/**
 * Контроллер controller_post
 */
class controller_catalog
{

    /**
     * Action для страницы "Статьи"
     */
    public function action_index()
    {

// Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(16);



        // Подключаем вид
        require_once(ROOT . '/views/site/catalog.php');
        return true;
    }
}
