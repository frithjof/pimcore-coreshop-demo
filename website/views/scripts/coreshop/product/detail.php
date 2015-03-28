<div class="container product-detail">
    
    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-square product-detail-image">
                        <div class="col-inner">
                            <div class="aligned">
                                <div class="aligned-center aligned-content text-center">
                                    <img src="<?=$this->product->getImage()->getThumbnail("coreshop_productDetail")?>" class="img-responsive" style="display:inline" id="product-image-<?=$this->product->getId()?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php if(count($this->product->getImages()) > 1) { ?>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div id="product-detail-thumbnails" data-large-image="#product-image-<?=$this->product->getId()?>">
                        <?php foreach($this->product->getImages() as $image) { ?>
                            <div class="item"><img src="<?=$image->getThumbnail("coreshop_productDetailThumbnail")?>" data-large-img="<?=$image->getThumbnail("coreshop_productDetail")?>" /></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
        <div class="col-xs-12 col-sm-4">
            <h1><?=$this->product->getName()?></h1>
            <h3><?=$this->translate("Kurzbeschreibung") ?></h3>
            <div class="product-detail-desc">
                <?=$this->product->getDescription(); ?>
            </div>
            
            <div class="row">
                <div class="row-same-height row-full-height">
                    <div class="col-xs-6 col-sm-3 col-full-height col-xs-height">
                        <div class="col-inner background-red price">
                            <?=CoreShop_Tool::formatPrice($this->product->getPrice())?>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-full-height col-xs-height">
                        <?=sprintf($this->translate("Inkl. %s Mwst."), CoreShop_Tool::formatTax($this->product->getTax()))?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-3 col-sm-push-1">
            <div class="col-md-square product-detail-variants">
                <div class="col-inner background-red">
                    <div class="aligned">
                        
                        <div class="aligned-row">
                            <div class="aligned-content aligned-top text-center">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3><?=$this->translate("Ausführung")?></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
                                        $variants = $this->product->getVariantDifferences();
                                        
                                        foreach($variants as $key => $fields)
                                        {
                                            foreach($fields as $field) {
                                            ?>
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <select name="variant" class="selectpicker btn-white">
                                                        <?php foreach($field as $option) { ?>
                                                            <?php 
                                                                $variant = Object_CoreShopProduct::getById($option['object']);
                                                                
                                                                if(!$variant instanceof Object_CoreShopProduct)
                                                                    continue;
                                                                    
                                                                $href = $this->url(array("lang" => $this->language, "product" => $variant->getId(), "name" => $variant->getName()), "coreshop_detail");
                                                            ?>
                                                            <option data-href="<?=$href?>" value="<?=$option['object']?>" <?=$this->product->getId() == $option['object'] ? "selected" : ""?>><?=$this->translate($option['value'])?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div><?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="aligned-row">
                            <div class="aligned-content aligned-bottom text-center">
                                <?php if($this->product->getNeedsPersonalData() || $this->product->getNeedsDoublePersonalData()) { ?>
                                    <a class="btn btn-red btn-borderd btn-to-cart" data-toggle="modal" data-target="#product-detail-<?=$this->product->getId()?>">
                                        <?=$this->translate("In den Warenkorb")?>
                                    </a>
                                <?php } else { ?>
                                    <a class="btn btn-red btn-borderd addToCart" data-id="<?=$this->product->getId()?>" data-img="#product-image-<?=$this->product->getId()?>">
                                        <?=$this->translate("In den Warenkorb")?>
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

<?=$this->template("coreshop/product/helper/product-details-modal.php", array("product" => $this->product));?>