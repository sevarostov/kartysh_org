<?php
//include_once ROOT . '/models/Category.php';
//include_once ROOT . '/models/Product.php';

class controller_product
{


    /**
     * Action для Товаров
     */
    public function action_view($productId)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);


        require_once(ROOT . '/views/product/view.php');


        return true;
    }





}