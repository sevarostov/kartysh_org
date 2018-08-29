<?php
/**
 * Класс Cart
 * Компонент для работы корзиной
 */
class Cart
{
    /**
     * Добавление товара в корзину (сессию)
     * @param int $id <p>id товара</p>
     * @return integer <p>Количество товаров в корзине</p>
     */
    public static function addProduct($id)
    {
        // Приводим $id к типу integer
        $id = intval($id);

        // Пустой массив для товаров в корзине
        $productInCart = array();

        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset ($_SESSION['products']))
        {
            // то заполним наш массив товарами
            $productInCart = $_SESSION['products'];
        }
        // Если товар уже есть в корзине, но был добавлен еще раз, увеличим к-во
        if (array_key_exists($id, $productInCart)) {
            $productInCart[$id] ++;
        } else {//Если нет, добавляем id нового товара в корзину
            // с количеством 1
            $productInCart[$id] = 1;
        }
// Записываем массив с товарами в сессию
        $_SESSION['products'] = $productInCart;
        //  echo '<pre>'; print_r($_SESSION['products']); die(); // строка для отладки
// Возвращаем количество товаров в корзине
    return self::countItems();
    }

    /**
     * Подсчет количество товаров в корзине (в сессии)
     * @return int <p>Количество товаров в корзине</p>
     */
    public static function countItems()
    {// Проверка наличия товаров в корзине
        if (isset($_SESSION['products'])) {
            // Если массив с товарами есть
            // Подсчитаем и вернем их количество
            $count = 0;
            foreach ($_SESSION['products'] as $id=> $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            // Если товаров нет, вернем 0
            return 0;
        }
    }
    /**
     * Возвращает массив с идентификаторами и количеством товаров в корзине<br/>
     * Если товаров нет, возвращает false;
     * @return mixed: boolean or array
     */
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    /**
     * Получаем общую стоимость переданных товаров
     * @param array $products <p>Массив с информацией о товарах</p>
     * @return integer <p>Общая стоимость</p>
     */
    public static function getTotalPrice($products)
    {// Получаем массив с идентификаторами и количеством товаров в корзине
        $productsInCart = self::getProducts();
//        echo '<pre>';
//        var_dump($productsInCart);
        // Подсчитываем общую стоимость
        $total = 0;
        if ($productsInCart) {

            // Если в корзине не пусто
            // Проходим по переданному в метод массиву товаров
            foreach ($products as $item) {
                // Находим общую стоимость: цена товара * количество товара
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
//
//        echo '<pre>';
//        var_dump($total);
    }
    /**
     * Очищает корзину
     */
    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']) ;
        }
    }
    /**
     * Удаляет товар с указанным id из корзины
     * @param integer $id <p>id товара</p>
     */
    public static function deleteProduct($id)
    {
        // Получаем массив с идентификаторами и количеством товаров в корзине
        $productsInCart = self::getProducts();

        // Удаляем из массива элемент с указанным id
        unset($productsInCart[$id]);

        // Записываем массив товаров с удаленным элементом в сессию
        $_SESSION['products'] = $productsInCart;
    }
}