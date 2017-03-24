/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Category Tabs
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function CategoryTabs() {
    jQuery(document).ready(function() {

        var tabsBase = jQuery('.category-tabs', this.base);

        tabsBase.find('.tabs li a').each(function(){
            var link = jQuery(this);

            link.parent().addClass(link.data('id'));

            if (!link.parent().hasClass('active')) {
                jQuery('.tabs-container #' +  link.data('id')).css({'position':'absolute', 'z-index': '1'});
            }

            var hasProducts = tabsBase.find('.tab-container#' +  link.data('id') + ' .block-block .content .items-list .products ul');

            if (!hasProducts.length) {
                jQuery('.tabs-container #' +  link.data('id')).remove();
                jQuery('.category-tabs .tabs li.' + link.data('id')).remove();
            }
        });

        tabsBase.find('.tabs li').first().addClass('active');
        var activeLink = tabsBase.find('.tabs li').first().children("a");
        tabsBase.find('.tabs-container #' + activeLink.data('id')).css({'display':'block', 'position': 'relative', 'z-index': '2', 'visibility': 'visible'});


        tabsBase.find('.tabs li a').click(
            function (event) {
                event.preventDefault();

                var link = jQuery(this);
                tabsBase.find('.tabs li').removeClass('active');
                link.parent().addClass('active');

                tabsBase.find('.tabs-container .tab-container').css({'display':'none', 'position': 'absolute', 'z-index': '1', 'visibility': 'hidden'});
                tabsBase.find('.tabs-container #' + link.data('id')).css({'display':'block', 'position': 'relative', 'z-index': '2', 'visibility': 'visible'});


            }
        );
    });
}

core.autoload(CategoryTabs);
