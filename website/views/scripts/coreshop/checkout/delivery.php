<div class="container shop checkout checkout-step-4">
    
    <?=$this->partial("coreshop/helper/order-steps.php", array("step" => 4));?>
    
    <form action="<?=$this->url(array("action" => "delivery", "lang" => $this->language), "coreshop_checkout")?>" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-push-1 delivery-options">
                <? foreach($this->provider as $provider) { ?>
                    <div class="col-xs-12">
                        <div class="row delivery-option">
                            <div class="row-full-height row-same-height">
                                
                                <div class="col-xs-2 col-sm-1 col-xs-full-height col-xs-height delivery-option-radio">
                                    <div class="aligned">
                                        <div class="aligned-content aligned-center text-center">
                                            <input class="delivery_option_radio" type="radio" name="delivery_provider[<?=$provider->getIdentifier()?>]" checked="checked">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3 col-xs-full-height col-xs-height delivery-option-image">
                                    <? if($provider->getImage()) { ?>
                                        <img src="<?=$provider->getImage()?>" class="img-responsive" alt="<?=$provider->getName()?>">
                                    <? } ?>
                                </div>
                                <div class="col-xs-3 col-sm-5 col-xs-full-height col-xs-height delivery-option-text">
                                    <strong><?=$provider->getName()?></strong> <?=$provider->getDescription()?>
                                </div>
                                <div class="col-xs-3 col-sm-2 col-xs-full-height col-xs-height  delivery-option-price">
                                    <?=CoreShop_Tool::formatPrice($provider->getDeliveryFee($this->cart))?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <? } ?>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <br/>
                        <a href="<?=$this->url(array("lang" => $this->language, "action" => "address"), "coreshop_checkout")?>" class="btn btn-red btn-bordered">
                            <?=$this->translate("Zurück")?>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br/>
                        <button type="submit" class="btn btn-white btn-borderd pull-right">
                            <?=$this->translate("Weiter")?>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>