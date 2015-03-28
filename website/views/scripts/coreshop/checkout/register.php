<div class="container shop checkout checkout-step-2">
    
    <?=$this->partial("coreshop/helper/order-steps.php", array("step" => 2));?>
    
    <?php
        $class = Object_Class::getByName("User");
    
        $postValue = function ($name) {
            if (isset($_POST[$name])) {
                return $_POST[$name];
            }
    
            return;
        };
    ?>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <form role="form" action="<?=$this->url(array("lang" => $this->language, "action" => "register"), "coreshop_user")?>" method="post" id="shop-register-form">

                <input type="hidden" name="browserName" id="browserName" />
                <input type="hidden" name="majorVersion" id="majorVersion" />
                <input type="hidden" name="fullVersion" id="fullVersion" />
                <input type="hidden" name="appName" id="appName" />
                <input type="hidden" name="userAgent" id="userAgent" />
                <input type="hidden" name="os" id="os" />
                <input type="hidden" name="_redirect" value="<?=$this->url(array("lang" => $this->language, "action" => "address"), "coreshop_checkout")?>" />
                
                <div class="row">
                    
                    <div class="col-xs-12">
                    
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="instruction text-center"><?=$this->translate("Ihre persönlichen Daten")?></h3>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" placeholder="<?=$this->translate("Ihr Benutzername")?>*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-12 validation" data-for="username">
        
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="<?=$this->translate("Passwort")?>*">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="repassword" placeholder="<?=$this->translate("Passwort wiederholen")?>*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-12 validation" data-for="password">
        
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="<?=$this->translate("Ihre E-Mail Adresse")?>*">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="reemail" placeholder="<?=$this->translate("E-Mail Adresse wiederholen")?>*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-12 validation" data-for="email">
        
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstname" placeholder="<?=$this->translate("Vorname")?>*">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastname" placeholder="<?=$this->translate("Nachname")?>*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-12 validation" data-for="firstname">
        
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <select name="gender" class="selectpicker btn-white" title="<?=$this->translate("Geschlecht")?>*">
                                                <option></option>
                                                <?php
                                                    $fd = $class->getFieldDefinition("gender");
                                                    $options = $fd->getOptions();
                                                    $value = $postValue("gender");
                                                ?>
                                                <?php foreach ($options as $option) { ?>
                                                    <?php if ($option['key']) { ?>
                                                        <option value="<?=$option['value']?>" <?=$value == $option['value'] ? "selected" : ""?>><?=$this->translate($option['key'])?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-12 validation" data-for="gender">
        
                            </div>
                        </div>
                        
                        <?=$this->template("coreshop/user/helper/address.php") ?>
                        
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="btn btn-white btn-borderd pull-right ladda-button" type="submit">
                                            <?=$this->translate("Registrierung abschicken")?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                  </div>
                </div>
            </form>
        </div>
    </div>
    
</div>