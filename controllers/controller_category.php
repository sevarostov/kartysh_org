<?php


class controller_category
{


    /**
     * Action для Товаров
     */
    public function action_view($categoryId)
    {


        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryTexts = array();
        $categoryTexts = Category::getCategoryText($categoryId);

        $product = Product::getProductsListByCategory($categoryId);
//echo  '<pre>';
//        var_dump($product);die;

        require_once(ROOT . '/views/category/index.php');


        return true;
    }





}