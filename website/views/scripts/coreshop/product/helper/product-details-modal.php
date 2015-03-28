<?php if($this->product->getNeedsPersonalData() || $this->product->getNeedsDoublePersonalData()) { ?>

    <div class="modal fade modal-red modal-product-detail" id="product-detail-<?=$this->product->getId()?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" class="product-detail-form"  data-id="<?=$this->product->getId()?>" data-img="#product-image-<?=$this->product->getId()?>">
                        
                        <div class="form-group">
                            <h3 class="instruction text-center"><?=$this->translate("Ihre Persönlichen Daten")?></h3>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="firstname1" placeholder="<?=$this->translate("Vorname")?>">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname1" placeholder="<?=$this->translate("Nachname")?>">
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 validation" data-for="firstname1"></div>
                            <div class="col-xs-12 col-sm-6 validation" data-for="lastname1"></div>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <h3 class="instruction text-center"><?=$this->translate("Ihre Geburtsdaten")?></h3>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control datepicker-date" name="birthdate1" placeholder="<?=$this->translate("Geburtstag")?>">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control datepicker-time" name="birthtime1" placeholder="<?=$this->translate("Geburtszeit")?>">
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 validation" data-for="birthdate1"></div>
                            <div class="col-xs-12 col-sm-6 validation" data-for="birthtime1"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="birthcity1" placeholder="<?=$this->translate("Ort")?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="birthzip1" placeholder="<?=$this->translate("PLZ")?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-6 validation" data-for="birthcity1"></div>
                                <div class="col-xs-12 col-sm-6 validation" data-for="birthzip1"></div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <select name="birthcountry1" class="selectpicker btn-white" title="<?=$this->translate("Land")?>">
                                        <option></option>
                                        <?php
                                            $countries = $this->countries();
                                        ?>
                                        <?php foreach ($countries as $value => $key) { ?>
                                            <option value="<?=$value?>"><?=$key?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 validation" data-for="birthcountry1"></div>
                        </div>
                        
                        <? if($this->product->getNeedsDoublePersonalData()) { ?>
                        
                            <div class="form-group">
                                <h3 class="instruction text-center"><?=$this->translate("Die Persönlichen Daten Ihres Partners")?></h3>
                            </div>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstname2" placeholder="<?=$this->translate("Vorname")?>">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lastname2" placeholder="<?=$this->translate("Nachname")?>">
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-6 validation" data-for="firstname2"></div>
                                <div class="col-xs-12 col-sm-6 validation" data-for="lastname2"></div>
                            </div>
                            
                            <div class="form-group">
                                <h3 class="instruction text-center"><?=$this->translate("Die Geburtsdaten Ihres Partners")?></h3>
                            </div>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                     <div class="form-group">
                                        <input type="text" class="form-control datepicker-date" name="birthdate2" placeholder="<?=$this->translate("Geburtstag")?>">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker-time" name="birthtime2" placeholder="<?=$this->translate("Geburtszeit")?>">
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-6 validation" data-for="birthdate2"></div>
                                <div class="col-xs-12 col-sm-6 validation" data-for="birthtime2"></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="birthcity2" placeholder="<?=$this->translate("Ort")?>">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="birthzip2" placeholder="<?=$this->translate("PLZ")?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6 validation" data-for="birthcity2"></div>
                                    <div class="col-xs-12 col-sm-6 validation" data-for="birthzip2"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <select name="birthcountry2" class="selectpicker btn-white" title="<?=$this->translate("Land")?>">
                                            <option></option>
                                            <?php
                                                $countries = $this->countries();
                                            ?>
                                            <?php foreach ($countries as $value => $key) { ?>
                                                <option value="<?=$value?>"><?=$key?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-6 validation" data-for="birthcountry2"></div>
                            </div>
                            
                        <? } ?>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                                <button class="btn btn-red btn-borderd btn-full-width" type="submit">
                                    <?=$this->translate("In den Warenkorb")?>
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

<? } ?>