<a class="btn btn-red btn-cart" href="<?=$this->url(array("lang" => $this->language, "action" => "list"), "coreshop_cart")?>">
    <i class="glyphicon glyphicon-shopping-cart"></i>
    <span class="badge badge-cart-items" data-amount="<?=count($this->cart->getItems())?>"><?=count($this->cart->getItems())?></span>
</a>
<div class="cart-dropdown">
    <? if($this->session->user instanceof Object_User) { ?>
        <div class="cart-user">
            <p>Hallo <?=$this->session->user->getFirstname()?></p>
            <a href="<?=$this->url(array("lang" => $this->language, "action" => "logout"), "coreshop_user")?>">Logout</a>
        </div>
    <? } ?>
    <span class="cart-headline"><?=$this->translate("Ihr Einkauf bei Astro4Love")?></span>
    <hr class="cart-hr" />
    <div class="cart-products">
        <?php foreach($this->cart->getItems() as $item) { ?>
        <?php 
            $product = $item->getProduct();
        ?>
        <div class="row cart-product">
            <div class="col-xs-8">
                <span class="name"><?=$product->getName()?></span>
            </div>
            <div class="col-xs-4 text-right">
                <span class="price"><?=CoreShop_Tool::formatPrice($item->getTotal())?></span>
            </div>
        </div>
        <? } ?>
    </div>
    <div class="cart-total">
        <div class="row">
            <div class="col-xs-8">
                <span class="name"><?=$this->translate("Gesamt")?></span>
            </div>
            <div class="col-xs-4 text-right">
                <span class="total"><?=CoreShop_Tool::formatPrice($this->cart->getTotal());?></span>
            </div>
        </div>
    </div>
    
    <div class="checkout text-center">
        <a class="btn btn-red btn-borderd" href="<?=$this->url(array("lang" => $this->language, "action" => "list"), "coreshop_cart")?>">
            <?=$this->translate("Zur Kasse")?>
        </a>
    </div>
</div>