<?
    $postValue = function ($name) {
        if (isset($_POST[$name])) {
            return $_POST[$name];
        }

        return;
    };
?>
<div class="row">
    <div class="col-xs-12">
        
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h3 class="instruction text-center"><?=$this->translate("Ihre Adresse")?></h3>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_firstname" placeholder="<?=$this->translate("Vorname")?>*">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_lastname" placeholder="<?=$this->translate("Nachname")?>*">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12 validation" data-for="address_firstname">

            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_company" placeholder="<?=$this->translate("Firma")?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12 validation" data-for="address_company">

            </div>
        </div>

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_street" placeholder="<?=$this->translate("Straße")?>*">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address_nr" placeholder="<?=$this->translate("Nr.")?>*">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address_zip" placeholder="<?=$this->translate("Postleitzahl")?>*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12 validation" data-for="address_street">

            </div>
        </div>

        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_city" placeholder="<?=$this->translate("Ort")?>*">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <select name="address_country" class="selectpicker btn-white" title="<?=$this->translate("Land")?>*">
                                <option></option>
                                <?php
                                    $countries = $this->countries();
                                    $pvalue = $postValue("country");
                                ?>
                                <?php foreach ($countries as $value => $key) { ?>
                                    <option value="<?=$value?>" <?=$pvalue == $value ? "selected" : ""?>><?=$key?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12 validation" data-for="address_city">

            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_phone" placeholder="<?=$this->translate("Telefon")?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_phone_mobile" placeholder="<?=$this->translate("Mobiltelefon")?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12 validation" data-for="address_phone">

            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address_name" placeholder="<?=$this->translate("Name der Adresse")?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12 validation" data-for="address_name">

            </div>
        </div>
        
    </div>
</div>