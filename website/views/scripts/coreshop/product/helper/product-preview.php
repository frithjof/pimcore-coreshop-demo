<?php
    $href = $this->url(array("name" => $this->product->getName(), "product" => $this->product->getId(), "lang" => $this->language), "coreshop_detail");
?>
<div class="product-col">
    <div class="image">
        <?php if($this->product->getImage() instanceof Asset_Image) { ?>
            <a href="<?=$href?>"><img id="product-image-<?=$this->product->getId()?>" src="<?=$this->product->getImage()->getThumbnail("coreshop_productList")?>" class="img-responsive" /></a>
            <hr/>
        <?php } ?>
    </div>
    <div class="caption">
        <h4><a href="<?=$href?>"><?=$this->product->getName()?></a></h4>
        <div class="description">
            <?=$this->product->getShortDescription()?>
        </div>
        <div class="price">
            <span class="price-new"><?=\CoreShop\Tool::formatPrice($this->product->getPrice())?></span>
        </div>
        <div class="cart-button">
            <button type="button" class="btn btn-cart" data-id="<?=$this->product->getId()?>" data-img="#product-image-<?=$this->product->getId()?>">
                Add to cart
                <i class="fa fa-shopping-cart"></i>
            </button>
        </div>
    </div>
</div>