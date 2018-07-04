<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container-wrap">
        <div class="row">
            <div class="col novelties-title">
                
                    <h2>НОВИНКИ</h2>
            

            </div>
        </div>
   



        <div class="row novelties-row">
        
            
            <?php foreach ($categoryProducts as $product): ?>
                        
                            <div class="col-4">
                                <div class="single-product">
                                   
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
                    <?php endforeach; ?>                              

                    <!-- Постраничная навигация -->



          
        </div>

        <div class="pagination-wrap">

                    <?php echo $pagination->get(); ?>
                       
        </div> 
    </div>          
            
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>