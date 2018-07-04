<?php

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

	/**
     * Action для страницы просмотра товара
     * @param integer $productId  
     */
    public function actionView($productId)
    {

        
        
        // Получаем информацию о товаре
        $product = Product::getProductById($productId);

        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');

        return true;
    }

}
