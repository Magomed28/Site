<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container-wrap">
        <div class="row">


            <div class="col padding-right">
                <div class="cart">
                    <h2 class="title text-center">Корзина</h2>
                    
                    <?php if ($productsInCart): ?>
                        
                        <table class="table">
                            <tr>
                                <th>Код товара</th>
                                <th id="name">Название</th>
                                <th>Стомость</th>
                                <th>Количество</th>
                                <th>Удалить</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?> &#8381;</td>
                                    <td><?php echo $productsInCart[$product['id']];?></td>                        
                                    <td>
                                        <a class="checkout" href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>                        
                                </tr>
                            <?php endforeach; ?>
                                <tr >
                                    <td id="total-cost" colspan="4" >Общая стоимость:</td>
                                    <td id="total-cost1"><?php echo $totalPrice;?> &#8381;</td>
                                </tr>
                            
                        </table>
                        
                        <div id="order">

                            <a class="checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>

                        </div>
                    <?php else: ?>
                        <p>Корзина пуста</p>
                        
                        <a class="checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                    <?php endif; ?>

                </div>

                
                
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>