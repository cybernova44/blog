(function($, window, document, undefined) {

    "use strict";

    let pluginName = "buttons_order1";

    function buttons_order1(element, options) {
        this.element = element;
        this._name = pluginName;
        this.init();
    }

    $.extend(buttons_order1.prototype, {
        init: function() {
            this.buildCache();
            this.bindEvents();
        },

        // Remove plugin instance completely
        destroy: function() {
            this.unbindEvents();
            this.$element.removeData();
        },

        // Cache DOM nodes for performance
        buildCache: function() {
            this.$element = $(this.element);
        },

        // Bind events that trigg
        bindEvents: function() {
            let plugin = this;

            plugin.sendEvent.call(plugin);
        },

        sendEvent: function() {
            this.$element.find('.buttonBig').on("click", function(event) {
                sendCustomEvent('enlarge_order1', 'click');
            })

            this.$element.find('.buttonSmall').on("click", function(event) {
                sendCustomEvent('no_enlarge_order1', 'click');
            })
        },
    });

    $.fn.buttons_order1 = function(options) {
        return this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" +
                    pluginName, new buttons_order1(this, options));
            }
        });
    };

})(jQuery, window, document)