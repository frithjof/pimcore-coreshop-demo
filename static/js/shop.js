
addToCartRunning = false;

$(document).ready(function(){
    shop.init();
});

(function(shop, $, undefined) {
    
    shop.init = function() {
        $('.btn-cart').click(function(){
            shop.addToCart($(this).data("id"), $(this));
        });
        
        $('.cart-item-amount').change(function(){
            shop.modifyCartItem($(this).data("id"), $(this).val());
        });
        
        $('.removeFromCart').click(function(){
            
            var button = $(this);
            
            shop.removeFromCart($(this).data("id"), function(){
                if($(button).data("refresh"))
                    window.location.reload();
            });
        });
        
        $('.selectpicker[name=variant]').change(function() {
            window.location.href = $(this).find("[value=" + $(this).val() + "]").data("href");
        });
       
        if($('#shop-register-form').length > 0)
        {
            shop.initRegisterForm();
        }
        
        shop.initChangeAddress();
    };
    
    shop.markupCart = function(cartItem) {
        return '<div class="row cart-product">\
            <div class="col-xs-8">\
                <span class="name">'+cartItem.product.name+'</span>\
            </div>\
            <div class="col-xs-4 text-right">\
                <span class="price">'+cartItem.total+'</span>\
            </div>\
        </div>';
    }
    
    shop.addToCart = function(product_id, sender, extraData, callback)
    {
        var data = $.extend({product : product_id}, extraData ? extraData : {});
        
        $.ajax({
            url : '/de/cart/add',
            data : data,
            dataType: 'json',
            success : function(result,status,xhr) {
                if(status == "success")
                {
                    if(result.success)
                    {
                        var imgtofly = $($(sender).data("img"));
                        
                        if(imgtofly.length > 0)
                        {
                            var cart = $($('.btn-cart')[1]);
                            var imgclone = imgtofly.clone();
                            
                            imgclone.offset({ top:imgtofly.offset().top, left:imgtofly.offset().left });
                            imgclone.css({'opacity':'0.7', 'position':'absolute', 'height':'150px', 'width':'150px', 'z-index':'1000'});
                            imgclone.appendTo($('body'));
                            imgclone.animate({'top':cart.offset().top + 10,'left':cart.offset().left + 30, 'width' : 55, 'height' : 55}, 1000);
                            imgclone.animate({'width':0, 'height':0}, function(){ $(this).detach() });
                        }
                        shop.updateCart(result.cart);
                        
                        if(callback)
                            callback();
                    }
                }
            }
        });
    };
    
    shop.removeFromCart = function(cartItem, callback)
    {
        $.ajax({
            url : '/de/cart/remove',
            data : {cartItem : cartItem},
            dataType: 'json',
            success : function(result,status,xhr) {
                if(status == "success")
                {
                    if(result.success)
                    {
                        shop.updateCart(result.cart);
                        
                        if(callback)
                            callback();
                    }
                }
            }
        });
    };
    
    shop.modifyCartItem = function(cartItem, amount, callback)
    {
        $.ajax({
            url : '/de/cart/modify',
            data : {cartItem : cartItem, amount:amount},
            dataType: 'json',
            success : function(result,status,xhr) {
                if(status == "success")
                {
                    if(result.success)
                    {
                        shop.updateCart(result.cart);
                        
                        if(callback)
                            callback();
                    }
                }
            }
        });
    };
    
    shop.updateCart = function(cart)
    {
        var html = '';
        var cartListItem;
        
        for(var i = 0; i < cart.items.length; i++)
        {
            var productHtml = shop.markupCart(cart.items[i]);
            
            html += productHtml;
        }
        
        $('.toggle-cart-dropdown .cart-products').html(html);
        $('.toggle-cart-dropdown .cart-total .total').html(cart.total);
        $('.badge-cart-items').html(cart.items.length).attr("data-amount", cart.items.length);
        
        if($('.cart-list').length > 0)
        {
            for(var i = 0; i < cart.items.length; i++)
            {
                var cartItem = cart.items[i];
                
                cartListItem = null;
                
                cartListItem = $('.cart-item-' + cartItem.id);
                
                if(cartListItem.length > 0)
                {
                    var price = cartListItem.find(".cart-item-price");
                    var total = cartListItem.find(".cart-item-total-price");
                    
                    price.html(cartItem.price);
                    total.html(cartItem.total);
                }
            }
            
            $('.cart-list .cart-total-price').html(cart.total);
            $('.cart-list .cart-sub-total').html(cart.total);
        }
    };
    
    shop.initExtraForm = function()
    {
        var extraFormFields = {
        
            firstname1: 
            {
                container: '[data-for=firstname1]',
                validators: {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Vorname ist ein Pflichtfeld'
                    }
                }
            },
            lastname1: 
            {
                container: '[data-for=lastname1]',
                validators : 
                {
                    notEmpty: 
                    {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Nachname ist ein Pflichtfeld'
                    }
                }
            },
    
            birthdate1: 
            {
                container : '[data-for=birthdate1]',
                validators: {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Geburtsdatum ist ein Pflichtfeld'
                    },
                    date: {
                        format: 'DD.MM.YYYY',
                        separator : '.',
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Kein gültiges Datum'
                    }
                }
            },
         
            birthtime1: 
            {
                container : '[data-for=birthtime1]',
                validators: {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Geburtszeit ist ein Pflichtfeld'
                    },
                    regexp: {
                        regexp: /^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Kein gültige Zeit'
                    }
                }
            },
    
          
            birthzip1: 
            {
                container: '[data-for=birthcity1]',
                validators : {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> PLZ ist ein Pflichtfeld'
                    },
                    regexp: {
                        regexp: /^\d{4,}$/,
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> PLZ muss aus mindestens 4 Zahlen bestehen'
                    }
                }
            },
          
            birthcity1: 
            {
                container: '[data-for=birthcity1]',
                validators : 
                {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Ort ist ein Pflichtfeld'
                    }
                }
            },
          
            birthcountry1: 
            {
                container: '[data-for=birthcountry1]',
                validators : {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Land ist ein Pflichtfeld'
                    }
                }
            }
        };

        $('.product-detail-form').each(function(form) 
        {
            if($(this).find("[name=firstname2]").length > 0)
            {
                var doubleExtraFormFields = {};
                
                for(var field in extraFormFields)
                {
                    var newField = field.substring(0, field.length - 1) + "2";
                    
                    doubleExtraFormFields[newField] = jQuery.extend({}, extraFormFields[field]);
                    doubleExtraFormFields[newField].container = doubleExtraFormFields[newField].container.substring(field, doubleExtraFormFields[newField].container.length - 2) + "2]";
                }
                
                extraFormFields = jQuery.extend(extraFormFields, doubleExtraFormFields);
                
                console.log(extraFormFields);
            }
            
            $(this).bootstrapValidator({
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok-circle',
                    invalid: 'glyphicon glyphicon-remove-circle',
                },
                excluded: ':disabled',
                fields: extraFormFields
            }); 
        });
    };
    
    shop.initRegisterForm = function()
    {
        $('#shop-register-form').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok-circle',
                invalid: 'glyphicon glyphicon-remove-circle',
            },
            excluded: ':disabled',
            fields: shop.fieldsForRegister()
        });
    };
    
    shop.fieldsForRegister = function()
    {
        return $.extend({
            username: 
            {
                container: '[data-for=username]',
                validators: {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Der Benutzername ist ein Pflichtfeld'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Der Benutzername muss zwischen 6 und 30 zeichen lang sein'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Der Benutzername kann nur aus Alphanumerischen Zeichen bestehen'
                    },
                    different: {
                        field: 'password',
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Der Benutzername und das Password müssen sich unterscheiden'
                    }
                }
            },
            email: {
                container: '[data-for=email]',
                validators: {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Die E-Mail Adresse ist ein Pflichtfeld'
                    },
                    emailAddress: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Die E-Mail Adresse ist ungültig'
                    },
                    identical: {
                        field: 'reemail',
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Die E-Mail Adressen müssen gleich sein'
                    }
                }
            },
            reemail: 
            {
                container: '[data-for=reemail]',
                validators: 
                {
                    identical: 
                    {
                        field: 'email',
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Die E-Mail Adressen müssen gleich sein'
                    }
                }
            },
            password: 
            {
                container: '[data-for=password]',
                validators: 
                {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Das Passwort ist ein Pflichtfeld'
                    },
                    different: {
                        field: 'username',
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Das Passwort und der Benuzuername müssen sich unterscheiden'
                    },
                    stringLength: {
                        min: 8,
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Das Passwort muss aus mindestens 8 Zeichen bestehen'
                    },
                    identical: {
                        field: 'repassword',
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Die Passwörter müssen gleich sein'
                    }
                }
            },
            repassword: {
                container: '[data-for=repassword]',
                validators: 
                {
                    identical: {
                        field: 'password',
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Die Passwörter müssen gleich sein'
                    }
                }
            },
        
            firstname: 
            {
                container: '[data-for=firstname]',
                validators: {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Vorname ist ein Pflichtfeld'
                    }
                }
            },
            lastname : 
            {
                container: '[data-for=firstname]',
                validators : 
                {
                    notEmpty: 
                    {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Nachname ist ein Pflichtfeld'
                    }
                }
            },
        
            gender: 
            {
                container: '[data-for=gender]',
                validators: 
                {
                    notEmpty: 
                    {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Geschlecht ist ein Pflichtfeld'
                    }
                }
            }
        }, shop.fieldsForAddress());
    };
    
    shop.fieldsForAddress = function() {
        return {
            address_firstname: 
            {
                container: '[data-for=adress_firstname]',
                validators: {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Vorname ist ein Pflichtfeld'
                    }
                }
            },
            
            address_lastname : 
            {
                container: '[data-for=adress_firstname]',
                validators : 
                {
                    notEmpty: 
                    {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Nachname ist ein Pflichtfeld'
                    }
                }
            },
            
            address_street : 
            {
                container: '[data-for=address_street]',
                validators : 
                {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Straße ist ein Pflichtfeld'
                    }
                }
            },
          
            address_nr : 
            {
                container: '[data-for=address_street]',
                validators : {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Hausnummer ist ein Pflichtfeld'
                    }
                }
            },
          
            address_zip : 
            {
                container: '[data-for=address_street]',
                validators : 
                {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> PLZ ist ein Pflichtfeld'
                    },
                    regexp: {
                        regexp: /^\d{4,}$/,
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> PLZ muss aus mindestens 4 Zahlen bestehen'
                    }
                }
            },
          
            address_city : 
            {
                container: '[data-for=address_city]',
                validators : {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Ort ist ein Pflichtfeld'
                    }
                }
            },
          
            address_country : 
            {
                container: '[data-for=address_city]',
                validators : {
                    notEmpty: {
                        message: '<i class="glyphicon glyphicon-remove-circle"></i> Land ist ein Pflichtfeld'
                    }
                }
            }
        };
    };
    
    shop.initChangeAddress = function()
    {
        $('select[name=deliveryAddress]').change(function(){
            var value = $(this).val();
            
            value = $(this).find("[value='"+value+"']").data("value");
            
            $('.deliveryAddress').html($('#address-' + value).html());
            
            if($('[name=useDeliveryAsBilling]').is(":checked"))
            {
                $('.billingAddress').html($('#address-' + value).html());
                
                $('select[name=billingAddress]').val($(this).val());
                $('select[name=billingAddress]').selectpicker('render');
            }
        });
        
        $('select[name=billingAddress]').change(function(){
            var value = $(this).val();
            value = $(this).find("[value='"+value+"']").data("value");
            
            $('.billingAddress').html($('#address-' + value).html()); 
        });
        
        $('[name=useDeliveryAsBilling]').change(function(){
            if($(this).is(":checked"))
            {
                $('.billing-address-selector').slideUp();
                
                var value = $('select[name=deliveryAddress] :selected').val();
                var htmlValue = $('select[name=deliveryAddress]').find("[value='"+value+"']").data("value");

                $('.billingAddress').html($('#address-' + htmlValue).html()); 
                
                $('select[name=billingAddress]').val(value);
                $('select[name=billingAddress]').selectpicker('render');
            }
            else
            {
                $('.billing-address-selector').slideDown();
            }
        });
    };
    
}( window.shop = window.shop || {}, jQuery ));