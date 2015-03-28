<!-- Latest Products Starts -->
<section class="product-carousel">
<!-- Heading Starts -->
    <h2 class="product-head">Latest Products</h2>
<!-- Heading Ends -->
<!-- Products Row Starts -->
    <?php
        $products = CoreShop\Product::getLatest();
    ?>
    <div class="row">
        <div class="col-xs-12">
        <!-- Product Carousel Starts -->
            <div id="owl-product" class="owl-carousel">
            <!-- Product #1 Starts -->
                <?php foreach($products as $product) { ?>
                <?php 
                    
                    $href = $this->url(array("name" => $product->getName(), "product" => $product->getId(), "lang" => $this->language), "coreshop_detail");
                ?>
                <div class="item">
                    <div class="product-col">
                        <div class="image">
                            <a href="<?=$href?>"><img src="/static/images/product-images/1.jpg" alt="product" class="img-responsive" /></a>
                        </div>
                        <div class="caption">
                            <h4><a href="<?=$href?>"><?=$product->getName()?></a></h4>
                            <div class="description">
                                We are so lucky living in such a wonderful time. Our almost unlimited ...
                            </div>
                            <div class="price">
                                <span class="price-new">$199.50</span>
                                <span class="price-old">$249.50</span>
                            </div>
                            <div class="cart-button">
                                <button type="button" class="btn btn-cart" data-id="<?=$product->getId()?>">
                                    Add to cart
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        <!-- Product Carousel Ends -->
        </div>
    </div>
<!-- Products Row Ends -->
</section>
<!-- Latest Products Ends -->