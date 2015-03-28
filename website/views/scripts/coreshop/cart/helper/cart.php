<table class="table cart-list">
    <thead>
        <tr>
            <th><?=$this->translate("Produkt")?></th>
            <th><?=$this->translate("Menge")?></th>
            <th class="text-center"><?=$this->translate("Preis")?></th>
            <th class="text-center"><?=$this->translate("Gesamt")?></th>
            <?=$this->edit ? "<th> </th>" : ""?>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->cart->getItems() as $item) { ?>
        
        <?
            $href = $this->url(array("lang" => $this->language, "product" => $item->getProduct()->getId(), "name" => $item->getProduct()->getName()), "coreshop_detail");
        ?>
        <tr class="cart-item cart-item-<?=$item->getId()?>">
            <td class="col-sm-<?=$this->edit ? 8 : 9?>">
                <div class="media">
                    <? if($item->getProduct()->getImage() instanceof Asset_Image) { ?>
                        <a class="thumbnail pull-left" href="<?=$href?>">
                            <img class="media-object" src="<?=$item->getProduct()->getImage()->getThumbnail("previewImage")?>" />
                        </a>
                    <? } ?>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="<?=$href?>"><?=$item->getProduct()->getName()?></a></h4>
                        <?php foreach($item->getExtraInformation() as $extraInformation) {
                            if($extraInformation instanceof CoreShop_Objectbrick_Data_CartItem) {
                                echo $extraInformation->render();
                            }
                        } ?>
                        <p></p>
                    </div>
                </div>
            </td>
            <td class="col-sm-1" style="text-align: center">
                <input type="number" name="cart-item-amount-<?=$item->getId()?>" class="form-control cart-item-amount" value="<?=$item->getAmount()?>" data-id="<?=$item->getId()?>" <?=!$this->edit ? "readonly" :  ""?>>
            </td>
            <td class="col-sm-1 text-center cart-item-price">
                <strong><?=CoreShop_Tool::formatPrice($item->getProduct()->getPrice())?></strong>
            </td>
            <td class="col-sm-1 text-right cart-item-total-price">
                <strong><?=CoreShop_Tool::formatPrice($item->getAmount() * $item->getProduct()->getPrice())?></strong>
            </td>
            <?php if($this->edit) { ?>
            <td class="col-sm-1 col-md-1">
                <button type="button" class="btn btn-red btn-borderd btn-remove-cart removeFromCart" data-refresh="true" data-id="<?=$item->getId()?>">
                    <span class="glyphicon glyphicon-remove"></span> <?=$this->translate("Entfernen")?>
                </button>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
        <tr>
            <?=$this->edit ? "<td>   </td>" : ""?>
            <td>   </td>
            <td>   </td>
            <td><h5><?=$this->translate("Zwischensumme")?></h5></td>
            <td class="text-right"><h5><strong class="cart-sub-total"><?=CoreShop_Tool::formatPrice($this->cart->getSubtotal())?></strong></h5></td>
        </tr>
        <?php
            $deliveryFee = 0;
            
            if(array_key_exists("deliveryProvider", $this->session->order) && $this->session->order['deliveryProvider'] instanceof CoreShop_Interface_Delivery) {
                $deliveryFee = $this->session->order['deliveryProvider']->getDeliveryFee($this->cart);
            }
        ?>
        <?php if($deliveryFee > 0) { ?>
        <tr>
            <?=$this->edit ? "<td>   </td>" : ""?>
            <td>   </td>
            <td>   </td>
            <td><h5><?=$this->translate("Versandkosten") ?></h5></td>
            <td class="text-right"><h5><strong><?=CoreShop_Tool::formatPrice($deliveryFee)?></strong></h5></td>
        </tr>
        <?php } ?>
        <tr>
            <?=$this->edit ? "<td>   </td>" : ""?>
            <td>   </td>
            <td>   </td>
            <td><h3><?=$this->translate("Gesamt")?></h3></td>
            <td class="text-right"><h3><strong class="cart-total-price"><?=CoreShop_Tool::formatPrice($this->cart->getTotal() + $deliveryFee)?></strong></h3></td>
        </tr>
    </tbody>
</table>