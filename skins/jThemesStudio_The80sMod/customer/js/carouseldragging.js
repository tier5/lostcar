function prepeareDragging(){
    var draggablePattern = '.products-grid.owl-carousel .product';



    core.microhandlers.add("carouseldragging",draggablePattern,function(){
        var dragDropCart = core.getCommentedData(jQuery('body'), 'dragDropCart');
        var cartTrayFadeOutDuration = 400;
        var base = jQuery(this).closest('.items-list-products');
//        var cartTray = jQuery('.cart-tray-box', base).eq(0);


        var cartTray = jQuery('.cart-tray-box', base).length
            ? jQuery('.cart-tray-box', base).eq(0) // From popup
            : jQuery('.cart-tray-box').eq(0);           // Common

        cartTray.data('isproductdrag', false);

        dragDropCart ? jQuery(draggablePattern, base).draggable(
            {
                revert:         'invalid',
                revertDuration: 300,
                zIndex:         50000,
                distance:       10,
                containment:    'body',

                helper: function()
                {
                    var base = jQuery(this);
                    var clone = base
                        .clone()
                        .css(
                        {
                            'width':  base.parent().width() + 'px',
                            'height': base.parent().height() + 'px',
                            'position': 'fixed'
                        }
                    );

                    base.addClass('drag-owner');
                    base.parent().addClass('current');

                    var currentStyle = base.parent().attr('style');
                    base.parent().attr('style', currentStyle + '; z-index: auto !important;');

                    if (jQuery.browser.msie) {
                        base.addClass('ie-link-blocker');
                    }

                    clone.find('a').click(
                        function() {
                            return false;
                        }
                    );

                    clone.appendTo('body');

                    return clone.get(0);
                }, // helper()

                start: function(event, ui)
                {

                    // if (!o.touchProcess) {
                    cartTray.data('isproductdrag', true);
                    cartTray.not('.cart-tray-adding, .cart-tray-added')
                        .addClass('cart-tray-active cart-tray-moving')
                        .attr('style', 'display:block');

                    if (!cartTray.parents('.ui-dialog').length) {
                        cartTray.appendTo('body');
                    }
                    //       }
                    return true;
                    //    return !o.touchProcess;

                }, // start()

                stop: function(event, ui)
                {
                    cartTray.data('isproductdrag', false);
                    cartTray.not('.cart-tray-adding, .cart-tray-added')
                        .fadeOut(
                        cartTrayFadeOutDuration,
                        function() {
                            if (cartTray.data('isproductdrag')) {
                                jQuery(this).show();

                            } else {
                                jQuery(this)
                                    .removeClass('cart-tray-active cart-tray-moving cart-tray-added');
                            }
                        }
                    );
                    if (!cartTray.parents('.ui-dialog').length) {
                        cartTray.prependTo(base);
                    }

                    jQuery('.drag-owner').removeClass('drag-owner');
                    jQuery('.product-cell.current').removeClass('current');

                    if (jQuery.browser.msie) {
                        var downer = jQuery('.drag-owner');
                        setTimeout(
                            function() {
                                downer.removeClass('ie-link-blocker');
                            },
                            1000
                        );
                    }

                } // stop()

            }
        ) : false; // jQuery(draggablePattern, this.base).draggable

    });
}