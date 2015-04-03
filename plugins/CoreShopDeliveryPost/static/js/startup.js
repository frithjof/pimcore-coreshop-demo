pimcore.registerNS("pimcore.plugin.coreshopdeliverypost");

pimcore.plugin.coreshopdeliverypost = Class.create(pimcore.plugin.admin, {
    getClassName: function() {
        return "pimcore.plugin.coreshopdeliverypost";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },
 
    pimcoreReady: function (params,broker){
        // alert("Example Ready!");
    }
});

var coreshopdeliverypostPlugin = new pimcore.plugin.coreshopdeliverypost();

