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
                    <? if($item->getProduct()->getImage() instanceof Asset_Image) { ?>
                        <a class="" href="<?=$href?>">
                            <img class="img-thumbnail" src="<?=$item->getProduct()->getImage()->getThumbnail("coreshop_productCart")?>" alt="<?=$item->getProduct()->getName()?>" title="<?=$item->getProduct()->getName()?>" />
                        </a>
                    <? } ?>
                </td>
                <td class="text-center">
                    <a href="<?=$href?>"><?=$item->getProduct()->getName()?></a>
                </td>
                <td class="text-center">
                    <div class="input-group btn-block">
                        <input type="number" name="cart-item-amount-<?=$item->getId()?>" value="<?=$item->getAmount()?>" size="1" class="form-control cart-item-amount" data-id="<?=$item->getId()?>" <?=!$this->edit ? "readonly" :  ""?> />
                    </div>
                </td>
                <td class="text-center cart-item-price">
                    <?=\CoreShop\Tool::formatPrice($item->getProduct()->getProductPrice())?>
                </td>
                <td class="text-center cart-item-total-price">
                    <?=\CoreShop\Tool::formatPrice($item->getAmount() * $item->getProduct()->getProductPrice())?>
                </td>
                <?php if($this->edit) { ?>
                <td class="text-center">
                    <button type="button" title="Remove" class="btn btn-default tool-tip removeFromCart" data-refresh="true" data-id="<?=$item->getId()?>">
                        <i class="fa fa-times-circle"></i>
                    </button>
                </td>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" class="text-right">
                    <strong><?=$this->translate("Subtotal")?>:</strong>
                </td>
                <td colspan="<?=$this->edit ? "2" : "1" ?>" class="text-left cart-sub-total">
                    <?=\CoreShop\Tool::formatPrice($this->cart->getSubtotal())?>
                </td>
            </tr>
            <?php
            $deliveryFee = 0;

            if(array_key_exists("deliveryProvider", $this->session->order) && $this->session->order['deliveryProvider'] instanceof \CoreShop\Plugin\Delivery) {
                $deliveryFee = $this->session->order['deliveryProvider']->getDeliveryFee($this->cart);
            }
            ?>
            <?php if($deliveryFee > 0) { ?>
                <tr>
                    <td colspan="4" class="text-right">
                        <strong><?=$this->translate("Shipping")?>:</strong>
                    </td>
                    <td colspan="<?=$this->edit ? "2" : "1" ?>" class="text-left cart-sub-total">
                        <?=\CoreShop\Tool::formatPrice($deliveryFee)?>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="4" class="text-right cart-sub-total">
                    <strong><?=$this->translate("Total ")?>:</strong>
                </td>
                <td colspan="<?=$this->edit ? "2" : "1" ?>" class="text-left cart-total-price">
                    <?=\CoreShop\Tool::formatPrice($this->cart->getTotal() + $deliveryFee)?>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

