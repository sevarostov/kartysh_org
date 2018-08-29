<?php

/**
 * Контроллер controller_index
 */
class controller_index
{

    /**
     * Action для главной страницы
     */
    public function action_index()
    {

// Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(4);
//        echo '<pre>';
//        var_dump($latestProducts ); die;

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts(8);

//        echo '<pre>';
//        var_dump($sliderProducts ); die;

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    
}
