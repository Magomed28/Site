<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
		<div>
			
            <div class="bgd-img">
                <img src="/template/img/fon1.jpg" alt="">
            </div>

		</div>
		<div class="wrap">
				<div class="novelties-wrap">
							<div class="novelties">

								НОВИНКИ

							</div>
                            
        					<div class="row novelties-slider">


        					            <?php foreach ($latestProducts as $product): ?>
											<div class="col">
        					                    <div class="product-image-wrapper">
                                                        
        					                                <img src="/template/img/product<?php echo $product['id'];?>.jpg" alt="" />


        					                                <p>
        					                                    <a href="/product/<?php echo $product['id'];?>">
        					                                        <?php echo $product['name'];?>
        					                                    </a>
        					                                </p>




                                                            <div class="cart-and-price">

                                                            <p><?php echo $product['price'];?> &#8381;</p>

        					                                <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id'];?>"><i class="fa fa-shopping-cart"></i>В корзину</a>

                                                            </div>
                                                        
        					                    </div>
											</div>
        					            <?php endforeach;?>


        					        <!--features_items-->
							</div>
                            <div class="row make-up">
                                <div class="col">
                                    <h1>ТОП 6 СРЕДСТВ ДЛЯ СТОЙКОГО МАКИЯЖА</h1>
                                    <div class="make-up-img"><a href="#"><img src="/template/img/make-up-img.jpg" alt="Make-up" ></a></div>
                                    <a class="make-up-button" href="#"><p>Подробнее</p></a> 
                                </div>
                            </div>
				</div>
		</div>
               




    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>