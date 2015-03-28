<div class="container shop">
    
    <?=$this->partial("coreshop/helper/order-steps.php", array("step" => 1));?>
    
    <div class="row">
        <div class="col-sm-12">
            
            <?php if(count($this->cart->getItems()) > 0) { 
                echo $this->template("coreshop/cart/helper/cart.php", array("edit" => true));
            } else { ?>
                <p><?=$this->translate("Ihr Warenkorb ist leer")?></p>
            <?php } ?>
        </div>
        <div class="col-xs-6">
             <a href="<?=$this->url(array(), "coreshop_index")?>" type="button" class="btn btn-white btn-borderd">
                <span class="glyphicon glyphicon-shopping-cart"></span> <?=$this->translate("Einkauf fortsetzen")?>
            </a>
        </div>
        <div class="col-xs-6">
            <a href="<?=$this->url(array("action" => "index", "lang" => $this->language), "coreshop_checkout")?>" type="button" class="btn btn-red btn-borderd-red pull-right">
                <?=$this->translate("Weiter")?> <span class="glyphicon glyphicon-play"></span>
            </a>
        </div>
    </div>
</div>