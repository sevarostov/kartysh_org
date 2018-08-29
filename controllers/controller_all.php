<?php


class controller_all
{


    /**
     * Action для страницы Детям
     */
    public function action_index()
    {
        // Список категорий для верхнего меню
        $categories = Category::getCategoriesList();

        // Список  товаров для женщин
        $latestProducts = Product::getLatestProducts(16);

        // Подключаем вид
        require_once(ROOT . '/views/site/all.php');
        return true;
    }





}