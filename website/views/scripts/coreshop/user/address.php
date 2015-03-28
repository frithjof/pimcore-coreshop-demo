<div class="container shop">
    <form role="form" action="<?=$this->url(array("lang" => $this->language, "action" => "address"), "coreshop_user")?>" method="post" id="shop-register-form">
        
        <? if($this->redirect) { ?>
        <input type="hidden" name="_redirect" value="<?=$this->redirect?>" />
        <? } ?>
        
        <?=$this->template("coreshop/user/helper/address.php")?>
        
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="col-xs-12">
                        <button class="btn btn-white btn-borderd pull-right ladda-button" type="submit">
                            <?=$this->translate("Adresse speichern")?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</div>