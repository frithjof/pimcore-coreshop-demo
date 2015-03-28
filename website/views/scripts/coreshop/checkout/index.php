<div class="container checkout checkout-step-2">
    
    <?=$this->partial("coreshop/helper/order-steps.php", array("step" => 2));?>
    
    <?php if($this->message) { ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger" role="alert">
                    <?=$this->message?>
                </div>
            </div>
        </div>
    <? } ?>
    
    <div class="row">
        <div class="row-same-height row-full-height">
            
            <div class="col-xs-12 col-sm-6 col-sm-height col-full-height">
                <div class="col-inner background-red">
                    <div class="col-content">
                        <form class="aligned" method="post" action="<?=$this->url(array("lang" => $this->language, "action" => "register"), "coreshop_checkout")?>">
                            <div class="aligned-row">
                                <div class="aligned-content aligned-top">
                                    <div class="title"><?=$this->translate("Erstellen Sie ein Konto")?></div>
                                    <div class="form-group">
                                        <label for="preEmail" class="visible-xs"><?=$this->translate("E-Mail")?></label>
                                        <input type="text" class="form-control" name="email" placeholder="<?=$this->translate("Ihre E-Mail Adresse")?>*" />
                                    </div>
                                </div>
                            </div>
                            <div class="aligned-row">
                                <div class="aligned-content aligned-bottom">
                                    <button type="submit" class="btn btn-red btn-borderd btn-full-width">
                                        <?=$this->translate("Erstellen Sie ein Konto")?>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-sm-height col-full-height">
                <div class="col-inner background-red">
                    <div class="col-content">
                        <form class="aligned" method="post" action="<?=$this->url(array("lang" => $this->language, "action" => "login"), "coreshop_checkout")?>">
                            <div class="aligned-row">
                                <div class="aligned-content aligned-center">
                                    
                                    <div class="title"><?=$this->translate("Bereits registriert?")?></div>
                                    <div class="form-group">
                                        <label for="email" class="visible-xs"><?=$this->translate("E-Mail")?></label>
                                        <input type="text" class="form-control" name="email" placeholder="<?=$this->translate("Ihre E-Mail Adresse")?>*">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="visible-xs"><?=$this->translate("Passwort")?></label>
                                        <input type="text" class="form-control" name="password" placeholder="<?=$this->translate("Ihr Passwort")?>*"/>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="aligned-row">
                                <div class="aligned-content aligned-bottom">
                                    <button type="submit" class="btn btn-red btn-borderd btn-full-width">
                                        <?=$this->translate("Anmelden")?>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>