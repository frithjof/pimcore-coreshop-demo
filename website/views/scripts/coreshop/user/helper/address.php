<?
    $postValue = function ($name) {
        if (isset($_POST[$name])) {
            return $_POST[$name];
        }

        return;
    };
?>

<div class="form-group">
    <label for="address_firstname" class="col-sm-3 control-label"><?=$this->translate("Firstname")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_firstname" name="address_firstname" placeholder="<?=$this->translate("Firstname")?>">
    </div>
    <div data-for="address_firstname" class="col-sm-push-3 col-sm-9"></div>
</div>

<div class="form-group">
    <label for="address_lastname" class="col-sm-3 control-label"><?=$this->translate("Lastname")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_lastname" name="address_lastname" placeholder="<?=$this->translate("Lastname")?>">
    </div>
    <div data-for="address_lastname" class="col-sm-push-3 col-sm-9"></div>
</div>

<div class="form-group">
    <label for="address_company" class="col-sm-3 control-label"><?=$this->translate("Company")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_company" name="address_company" placeholder="<?=$this->translate("Company")?>">
    </div>
    <div data-for="address_company" class="col-sm-push-3 col-sm-9"></div>
</div>

<div class="form-group">
    <label for="address_street" class="col-sm-3 control-label"><?=$this->translate("Street")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_street" name="address_street" placeholder="<?=$this->translate("Street")?>">
    </div>
    <div data-for="address_street" class="col-sm-push-3 col-sm-9"></div>
</div>

<div class="form-group">
    <label for="address_nr" class="col-sm-3 control-label"><?=$this->translate("Number")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_nr" name="address_nr" placeholder="<?=$this->translate("Number")?>">
    </div>
    <div data-for="address_nr" class="col-sm-push-3 col-sm-9"></div>
</div>

<div class="form-group">
    <label for="address_zip" class="col-sm-3 control-label"><?=$this->translate("Zip")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_zip" name="address_zip" placeholder="<?=$this->translate("Zip")?>">
    </div>
    <div data-for="address_zip" class="col-sm-push-3 col-sm-9"></div>
</div>

<div class="form-group">
    <label for="address_city" class="col-sm-3 control-label"><?=$this->translate("City")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_city" name="address_city" placeholder="<?=$this->translate("City")?>">
    </div>
    <div data-for="address_city" class="col-sm-push-3 col-sm-9"></div>
</div>

<div class="form-group">
    <label for="address_country" class="col-sm-3 control-label"><?=$this->translate("Country")?>:</label>
    <div class="col-sm-9">
        <select name="address_country" class="form-control" title="<?=$this->translate("Country")?>">
            <?php
            $countries = $this->countries();
            $pvalue = $postValue("country");
            ?>
            <?php foreach ($countries as $value => $key) { ?>
                <option value="<?=$value?>" <?=$pvalue == $value ? "selected" : ""?>><?=$key?></option>
            <?php } ?>
        </select>
    </div>
    <div data-for="address_country" class="col-sm-push-3 col-sm-9"></div>
</div>

<div class="form-group">
    <label for="address_phone" class="col-sm-3 control-label"><?=$this->translate("Phone")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_phone" name="address_phone" placeholder="<?=$this->translate("Phone")?>">
    </div>
</div>

<div class="form-group">
    <label for="address_phone_mobile" class="col-sm-3 control-label"><?=$this->translate("Mobile Phone")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_phone_mobile" name="address_phone_mobile" placeholder="<?=$this->translate("Mobile Phone")?>">
    </div>
</div>


<div class="form-group">
    <label for="address_name" class="col-sm-3 control-label"><?=$this->translate("Name")?>:</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="address_name" name="address_name" placeholder="<?=$this->translate("Name")?>">
    </div>
    <div data-for="address_name" class="col-sm-push-3 col-sm-9"></div>
</div>
