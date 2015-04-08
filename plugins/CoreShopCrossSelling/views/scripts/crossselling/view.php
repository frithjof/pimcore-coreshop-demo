<section class="product-carousel">
    <div class="product-info-box">
    <h4 class="heading"><?=$this->translate("WE RECOMMEND")?></h4>
        <div class="row">
            <div class="col-xs-12">
                <div id="owl-product" class="owl-carousel">
                    <?php

                    foreach($this->products as $product)
                    {
                        $href = $this->url(array("name" => $product->getName(), "product" => $product->getId(), "lang" => $this->language), "coreshop_detail");
                        ?>
                        <div class="item">
                            <div class="product-col">
                                <div class="image">
                                    <?php if($product->getImage() instanceof Asset_Image) { ?>
                                        <a href="<?=$href?>"><img id="product-image-<?=$product->getId()?>" src="<?=$product->getImage()->getThumbnail("coreshop_productList")?>" class="img-responsive" /></a>
                                        <hr/>
                                    <?php } ?>
                                </div>
                                <div class="caption">
                                    <h4><a href="<?=$href?>"><?=$product->getName()?></a></h4>
                                    <div class="description">
                                        <?=$product->getShortDescription()?>
                                    </div>
                                    <div class="price">
                                        <span class="price-new"><?=\CoreShop\Tool::formatPrice($product->getPrice())?></span>
                                    </div>
                                    <div class="cart-button">
                                        <button type="button" class="btn btn-cart" data-id="<?=$product->getId()?>" data-img="#product-image-<?=$product->getId()?>">
                                            <?=$this->translate("Add to cart")?>
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
