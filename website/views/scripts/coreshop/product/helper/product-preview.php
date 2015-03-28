<?
    $href = $this->url(array("lang" => $this->language, "product" => $this->product->getId(), "name" => $this->product->getName()), "coreshop_detail");
?>
<div class="col-xs-12 col-sm-3">
    <div class="col-lg-square product-preview">
        <div class="col-inner col-inner-no-padding">
            <div class="aligned product-info">
                <div class="aligned-row">
                    <div class="aligned-content aligned-top text-left with-hover">
                        
                        <div class="product-hover">
                            <div class="aligned">
                                <div class="aligned-row">
                                    <div class="aligned-content aligned-top info">
                                        <a href="<?=$href?>"><span class="glyphicon glyphicon-info-sign pull-right"></span></a>
                                    </div>
                                </div>
                                <div class="aligned-row">
                                    <div class="aligned-content aligned-bottom">
            
                                        <span class="name">
                                            <a href="<?=$href?>"><?=$this->product->getName()?></a>
                                        </span>
                                        <span class="description">
                                            <a href="<?=$href?>"><?=$this->product->getShortDescription()?></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="name text-left">
                            <a href="<?=$href?>">
                                <?=$this->product->getName()?><br/>
                            </a>
                        </div>
                        <div class="image text-center">
                            <?php if($this->product->getImage() instanceof Asset_Image) { ?>
                                <a href="<?=$href?>"><img id="product-preview-image-<?=$this->product->getId()?>" src="<?=$this->product->getImage()?>" class="img-responsive" /></a>
                                <hr/>
                            <? } ?>
                        </div>
                    </div>
                </div>
                <div class="aligned-row">
                    <div class="aligned-content aligned-bottom text-left">
                        <div class="row">
                            <div class="row-same-height row-full-height">
                                
                                <div class="col-xs-6 col-full-height col-xs-height">
                                    <div class="price">
                                        <a href="<?=$href?>"><?=CoreShop_Tool::formatPrice($this->product->getPrice())?></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-full-height col-xs-height">
                                    <div class="tools text-right">
                                        <?php if($this->product->getNeedsPersonalData() || $this->product->getNeedsDoublePersonalData()) { ?>
                                            <a class="btn-to-cart" data-toggle="modal" data-target="#product-detail-<?=$this->product->getId()?>">
                                                <i class="glyphicon glyphicon-plus-sign"></i>
                                            </a>
                                        <?php } else { ?>
                                            <a class="addToCart" data-id="<?=$this->product->getId()?>" data-img="#product-image-<?=$this->product->getId()?>">
                                                <i class="glyphicon glyphicon-plus-sign"></i>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?=$this->template("coreshop/product/helper/product-details-modal.php", array("product" => $this->product));?>