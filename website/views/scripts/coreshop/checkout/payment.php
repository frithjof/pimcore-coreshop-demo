<div class="container shop checkout checkout-step-5">
    
    <?=$this->partial("coreshop/helper/order-steps.php", array("step" => 5));?>
    
    <div class="summary">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-push-1">
                <?=$this->template("coreshop/cart/helper/cart.php", array("edit" => false));?>
            </div>
        </div>
    </div>
    
    <form action="<?=$this->url(array("action" => "payment", "lang" => $this->language), "coreshop_checkout")?>" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-push-1 payment-options">
                
               <? foreach($this->provider as $provider) { ?>
                    <div class="col-xs-12">
                        <div class="row payment-option">
                            <div class="row-full-height row-same-height">
                                
                                <div class="col-xs-2 col-sm-1 col-xs-full-height col-xs-height payment-option-radio">
                                    <div class="aligned">
                                        <div class="aligned-content aligned-center text-center">
                                            <input class="payment_option_radio" type="radio" name="payment_provider[<?=$provider->getIdentifier()?>]" checked="checked">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3 col-xs-full-height col-xs-height payment-option-image">
                                    <?php if($provider->getImage()) { ?>
                                        <img src="<?=$provider->getImage()?>" class="img-responsive" alt="<?=$provider->getName()?>">
                                    <? } ?>
                                </div>
                                <div class="col-xs-3 col-sm-5 col-xs-full-height col-xs-height payment-option-text">
                                    <strong><?=$provider->getName()?></strong> <?=$provider->getDescription()?>
                                </div>
                                <?php 
                                    $paymentFee = $provider->getPaymentFee($this->cart);
                                ?>
                                <div class="col-xs-3 col-sm-2 col-xs-full-height col-xs-height  payment-option-price">
                                    <?php 
                                        if($paymentFee > 0) {
                                            echo "+ " . CoreShop_Tool::formatPrice($paymentFee);
                                        }
                                    ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <br/>
                        <a href="<?=$this->url(array("lang" => $this->language, "action" => "delivery"), "coreshop_checkout")?>" class="btn btn-red btn-bordered">
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