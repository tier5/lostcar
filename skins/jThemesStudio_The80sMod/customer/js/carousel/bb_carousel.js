/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Categories list (carousel) script
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function bb_carousel() {
    jQuery(document).ready(function() {

        var navigation = true;
        var pagination = false;

        var bb_owl = jQuery('.bb-products .products-grid');

        bb_owl.owlCarousel({
            items: 4, //10 items above 1000px browser width
            itemsDesktop: [1200,3], //5 items between 1000px and 901px
            itemsDesktopSmall: [992,2],
            itemsTablet: [764,2], // betweem 900px and 601px
            itemsMobile : [480, 1], // itemsMobile disabled - inherit from itemsTablet option
            itemsScaleUp: false,
            navigationText: false,
            pagination: pagination,
            navigation: navigation,
            mouseDrag:	false,
            touchDrag:	false,
            scrollPerPage: true,
            afterInit: prepeareDragging
        });
    });
}

core.autoload(bb_carousel);