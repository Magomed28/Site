<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container-wrap">
        <div class="row">
                        

            <div class="col">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-5">
                            <div class="view-product">
                                <img src="/template/img/productlarge<?php echo $product['id'];?>.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="product-information"><!--/product-information-->

                                <h2><?php echo $product['name'];?></h2>
                                <p>Код товара: <?php echo $product['code'];?></p>
                               
                                <p>   
                                    <span>Количество:</span>
                                    <input id="input-text" type="text" value="3" />
                                   
                                </p>
                                <p><b>Наличие:</b> На складе </p>
                                <p><b>Бренд:</b> <?php echo $product['brand'];?></p>
                            
                                <p><?php echo $product['price'];?> &#8381;</p>

                                 <a href="#" class="add-to-cart " data-id="<?php echo $product['id'];?>"><i class="fa fa-shopping-cart"></i>В корзину</a>

                                
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row description">                                
                        <div class="col">
                            <h5>Описание товара</h5>
                            <?php echo $product['description'];?>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>