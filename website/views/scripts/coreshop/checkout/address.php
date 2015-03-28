<div class="container shop checkout checkout-step-3">
    
    <?=$this->partial("coreshop/helper/order-steps.php", array("step" => 3));?>
    
    <?php
        $addresses = $this->session->user->getAddresses();
    ?>
    
    <?php foreach($addresses as $address) { ?>
        <div class="hidden" id="address-<?=preg_replace('/[^a-zA-Z0-9]/', '', $address->getName())?>">
            <?=$this->partial("coreshop/checkout/helper/address.php", array("address" => $address))?>
        </div>
    <? } ?>
    
    <form action="<?=$this->url(array("lang" => $this->language, "action" => "address"), "coreshop_checkout")?>" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <label for="deliveryAddress"><?=$this->translate("Lieferadresse")?></label>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <select name="deliveryAddress" class="selectpicker btn-white" title="<?=$this->translate("Lieferadresse")?>*">
                                        <?php foreach ($addresses as $address) { ?>
                                            <option data-value="<?=preg_replace('/[^a-zA-Z0-9]/', '', $address->getName())?>" value="<?=$address->getName()?>"><?=$address->getName()?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group form-group-no-border">
                                    <label for="useDeliveryAsBilling">
                                        <input type="checkbox" name="useDeliveryAsBilling" checked="checked" />
                                        <?=$this->translate("Verwenden Sie die gleiche Adresse für die Rechnungsstellung")?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row billing-address-selector" style="display:none">
                            <div class="col-xs-6">
                                <label for="deliveryAddress"><?=$this->translate("Rechnungsadresse")?></label>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <select name="billingAddress" class="selectpicker btn-white" title="<?=$this->translate("Rechnungsadresse")?>*">
                                        <?php foreach ($addresses as $address) { ?>
                                            <option data-value="<?=preg_replace('/[^a-zA-Z0-9]/', '', $address->getName())?>" value="<?=$address->getName()?>"><?=$address->getName()?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            
                            <div class="col-inner background-red">
                                <div class="col-content">
                                    <div class="aligned-row">
                                        <div class="aligned-content aligned-top">
                                            <div class="title"><?=$this->translate("Ihre Lieferadresse")?></div>
                                            <div class="deliveryAddress">
                                                <?=$this->partial("coreshop/checkout/helper/address.php", array("address" => $this->session->user->getAddresses()->get(0)))?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-xs-12 col-sm-6">
                            
                            <div class="col-inner background-red">
                                <div class="col-content">
                                    <div class="aligned-row">
                                        <div class="aligned-content aligned-top">
                                            <div class="title"><?=$this->translate("Ihre Rechnungsadresse")?></div>
                                            <div class="billingAddress">
                                                <?=$this->partial("coreshop/checkout/helper/address.php", array("address" => $this->session->user->getAddresses()->get(0)))?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <br/>
                            <a href="<?=$this->url(array("lang" => $this->language, "action" => "address", "redirect" => $this->url(array("lang" => $this->language, "action" => "address"))), "coreshop_user")?>" class="btn btn-red btn-bordered">
                                <?=$this->translate("Neue Adresse erstellen")?>
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
        </div>
    </form>
</div>