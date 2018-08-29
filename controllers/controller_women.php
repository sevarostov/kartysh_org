<?php


class controller_women
{


    /**
     * Action для страницы Женщинам
     */
    public function action_index()
    {
// Список категорий для верхнего меню
        $categories = Category::getCategoriesList();

        // Список  товаров для женщин
        $latestProducts = Product::getLatestProducts(16);
//        echo '<pre>';
//        var_dump($latestProducts ); die;


        // Подключаем вид
        require_once(ROOT . '/views/site/women.php');
        return true;
    }





}