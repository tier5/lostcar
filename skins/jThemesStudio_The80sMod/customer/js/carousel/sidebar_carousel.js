/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Categories list (carousel) script
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function sidebar_carousel() {
    jQuery(document).ready(function() {

        var navigation = true;
        var pagination = false;

        var sidebar_owl = jQuery('.flex-container > .sidebar .two-items-carousel');

        sidebar_owl.owlCarousel({
            items: 1, //10 items above 1000px browser width
            itemsDesktop: [1200,1], //5 items between 1000px and 901px
            itemsDesktopSmall: [992,1],
            itemsTablet: [764,1], // betweem 900px and 601px
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

core.autoload(sidebar_carousel);