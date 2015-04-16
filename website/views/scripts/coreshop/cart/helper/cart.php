<div class="table-responsive shopping-cart-table">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td class="text-center">
                    <?=$this->translate("Image")?>
                </td>
                <td class="text-center">
                    <?=$this->translate("Product Details")?>
                </td>
                <td class="text-center">
                    <?=$this->translate("Quantity")?>
                </td>
                <td class="text-center">
                    <?=$this->translate("Price")?>
                </td>
                <td class="text-center">
                    <?=$this->translate("Total")?>
                </td>
                <?php if($this->edit) { ?>
                <td class="text-center">
                    <?=$this->translate("Action")?>
                </td>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->cart->getItems() as $item) { ?>

            <?php
                $href = $this->url(array("lang" => $this->language, "product" => $item->getProduct()->getId(), "name" => $item->getProduct()->getName()), "coreshop_detail");
            ?>
            <tr class="shopping-cart-item shopping-cart-item-<?=$item->getId()?>">
                <td class="text-center">
                    <?php if($item->getProduct()->getImage() instanceof Asset_Image) { ?>
                        <a class="" href="<?=$href?>">
                            <img class="img-thumbnail" src="<?=$item->getProduct()->getImage()->getThumbnail("coreshop_productCart")?>" alt="<?=$item->getProduct()->getName()?>" title="<?=$item->getProduct()->getName()?>" />
                        </a>
                    <?php } ?>
                </td>
                <td class="text-center">
                    <a href="<?=$href?>"><?=$item->getProduct()->getName()?></a> <?php if($item->getIsGiftItem()) { ?> <br/><span><?=$this->translate("Gift Item")?></span> <?php } ?>
                </td>
                <td class="text-center">
                    <?php if($item->getIsGiftItem() || !$this->edit) { ?>
                        <span><?=$item->getAmount()?></span>
                    <?php } else { ?>
                        <div class="input-group btn-block">
                            <input type="number" name="cart-item-amount-<?=$item->getId()?>" value="<?=$item->getAmount()?>" size="1" class="form-control cart-item-amount" data-id="<?=$item->getId()?>" <?=!$this->edit ? "readonly" :  ""?> />
                        </div>
                    <?php } ?>
                </td>
                <td class="text-right cart-item-price">
                    <?=\CoreShop\Tool::formatPrice($item->getProduct()->getProductPrice())?>
                </td>
                <td class="text-right cart-item-total-price">
                    <?=\CoreShop\Tool::formatPrice($item->getAmount() * $item->getProduct()->getProductPrice())?>
                </td>
                <?php if($this->edit) { ?>
                <td class="text-center">
                    <?php if($item->getIsGiftItem()) { ?>

                    <?php } else { ?>
                        <button type="button" title="<?=$this->translate("Remove")?>" class="btn btn-default tool-tip removeFromCart" data-refresh="true" data-id="<?=$item->getId()?>">
                            <i class="fa fa-times-circle"></i>
                        </button>
                    <?php } ?>
                </td>
                <?php } ?>
            </tr>
            <?php } ?>

            <?php if($this->cart->getCartRule() instanceof \Pimcore\Model\Object\CoreShopCartRule) { ?>
                <tr>
                    <td colspan="2" class="text-center">
                        <?=$this->cart->getCartRule()->getName()?>
                    </td>
                    <td class="text-center">
                        1
                    </td>
                    <td class="text-right">
                        -<?=\CoreShop\Tool::formatPrice($this->cart->getCartRule()->getDiscount())?>
                    </td>
                    <td class="text-right">
                        -<?=\CoreShop\Tool::formatPrice($this->cart->getCartRule()->getDiscount())?>
                    </td>
                    <?php if($this->edit) { ?>
                    <td colspan="1" class="text-left cart-sub-total">
                        <a title="<?=$this->translate("Remove")?>" class="btn btn-default tool-tip removeFromCart" href="<?=$this->url(array("action" => "removecartrule"), "coreshop_cart")?>">
                            <i class="fa fa-times-circle"></i>
                        </a>
                    </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <?php
            $shipping = $this->cart->getShipping();
            $discount = $this->cart->getDiscount();

            $rowspan = 4;

            if($shipping == 0)
                $rowspan--;

            if($discount == 0)
                $rowspan--;
        ?>
            <tr>
                <td colspan="3" rowspan="<?=$rowspan?>">
                    <form class="form-inline" role="form" method="post" action="<?=$this->url(array("lang" => $this->language, "action" => "cartrule"), "coreshop_cart")?>">
                        <?php if(!$this->edit) { ?>
                            <input type="hidden" name="redirect" value="<?=$this->url(array("action" => "payment"), "coreshop_checkout")?>" />
                        <?php } ?>
                        <div class="form-group">
                            <h4><?=$this->translate("Voucher")?></h4>
                        </div><br/>
                        <div class="form-group">
                            <input type="text" class="cartRule form-control" id="cartRule" name="cartRule" value="">
                        </div>
                        <button type="submit" name="submitAddDiscount" class="btn btn-black"><span>OK</span></button>
                    </form>
                    <?php
                        $highlightCartRules = \Pimcore\Model\Object\CoreShopCartRule::getHighlightItems();

                        if(count($highlightCartRules) > 0)
                        ?>
                            <h4><?=$this->translate("Take advantage of our exclusive offers:")?></h4>
                            <ul class="list">
                        <?php

                        foreach($highlightCartRules as $cartRule) {
                            echo '<li class="cart-rule"><strong class="cart-rule-code">'.$cartRule->getCode().'</strong> ' . $cartRule->getName() . '</li>';
                        }

                        if(count($highlightCartRules) > 0)
                        ?></ul><?
                    ?>
                </td>
                <td class="text-right">
                    <strong><?=$this->translate("Subtotal")?>:</strong>
                </td>
                <td colspan="<?=$this->edit ? "2" : "1" ?>" class="text-right cart-sub-total">
                    <?=\CoreShop\Tool::formatPrice($this->cart->getSubtotal())?>
                </td>
            </tr>
            <?php if($shipping > 0) { ?>
                <tr>
                    <td class="text-right">
                        <strong><?=$this->translate("Shipping")?>:</strong>
                    </td>
                    <td colspan="<?=$this->edit ? "2" : "1" ?>" class="text-right cart-sub-total">
                        <?=\CoreShop\Tool::formatPrice($shipping)?>
                    </td>
                </tr>
            <?php } ?>
            <?php if($discount > 0) { ?>
                <tr>
                    <td class="text-right">
                        <strong><?=$this->translate("Discount")?>:</strong>
                    </td>
                    <td colspan="<?=$this->edit ? "2" : "1" ?>" class="text-right cart-sub-total">
                        -<?=\CoreShop\Tool::formatPrice($discount)?>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td class="text-right cart-sub-total">
                    <strong><?=$this->translate("Total ")?>:</strong>
                </td>
                <td colspan="<?=$this->edit ? "2" : "1" ?>" class="text-right cart-total-price">
                    <?=\CoreShop\Tool::formatPrice($this->cart->getTotal())?>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

