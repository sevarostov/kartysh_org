<?php


class controller_home_gifts
{


    /**
     * Action для страницы Подарки для дома
     */
    public function action_index()
    {
// Список категорий для верхнего меню
        $categories = Category::getCategoriesList();

        // Список  товаров для женщин
        $latestProducts = Product::getLatestProducts(16);


        // Подключаем вид
        require_once(ROOT . '/views/site/home_gifts.php');
        return true;
    }





}