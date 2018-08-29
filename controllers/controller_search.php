<?php


class controller_search
{


    /**
     * Action для поиска
     * /**
     * Returns an array of searched products

     */
    public function action_index()
    {
        $search_q='';

        
       $search=Search::getSearch();

//        echo '<pre>';
//        var_dump($search);die;

        // Подключаем вид
        require_once(ROOT . '/views/search/index.php');
        return true;
    }





}