<?php


class controller_birthday_gifts
{


    /**
     * Action для страницы День рождения
     */
    public function action_index()
    {
// Список категорий для верхнего меню
        $categories = Category::getCategoriesList();

        // Список  товаров для дней рождения
        $latestProducts = Product::getLatestProducts(16);


        // Подключаем вид
        require_once(ROOT . '/views/site/birthday_gifts.php');
        return true;
    }





}