/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Categories list (carousel) script
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function brands_carousel() {
    jQuery(document).ready(function() {

        var navigation = false;
        var pagination = true;

        var brands_owl = jQuery('.brands-logo-container.carousel-block .brands-logo-items');

        brands_owl.owlCarousel({
            items: 7, //10 items above 1000px browser width
            itemsDesktop: [1200,5], //5 items between 1000px and 901px
            itemsDesktopSmall: [992,4],
            itemsTablet: [764,3], // betweem 900px and 601px
            itemsMobile : [480, 2], // itemsMobile disabled - inherit from itemsTablet option
            itemsScaleUp: true,
            navigationText: false,
            pagination: pagination,
            navigation: navigation,
            mouseDrag:	false,
            touchDrag:	false,
            scrollPerPage: true
        });


    });
}

core.autoload(brands_carousel);