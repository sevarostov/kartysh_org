<?php


class Search
{

    public static function getSearch()
    {
        $search_q=$_POST['search_q'];
        $search_q = trim($search_q);
        $search_q = strip_tags($search_q);
        $search_q = ucfirst($search_q);
        $search_q = mb_strtolower($search_q);
        $charset = mb_detect_encoding($search_q);
        $search_q = iconv($charset, "UTF-8", $search_q);
        $search_q = str_replace(" ", "", $search_q);

//        echo $search_q; die;
//                    echo '<pre>';
//        var_dump($search_q); die;

        $db = Db::getConnection();
        $sql = "SELECT id, name, description, is_new, price FROM public.product WHERE 
name ILIKE ? ";
        $result = $db->prepare($sql);
        $result->execute((array("%$search_q%")));

        $searchResult = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $searchResult[$i]['id'] = $row['id'];
            $searchResult[$i]['is_new'] = $row['is_new'];
            $searchResult[$i]['price'] = $row['price'];
            $searchResult[$i]['name'] = $row['name'];
            $searchResult[$i]['description'] = $row['description'];
            $i++;
        }
//        echo '<pre>';
//        var_dump($searchResult); die;
//
        return $searchResult;

 }

}





