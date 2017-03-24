/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Categories list (carousel) script
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function f_favorite_carousel() {
    jQuery(document).ready(function() {

        var navigation = true;
        var pagination = false;

        var f_favorite_owl = jQuery('.favorite-block .block-featured-products .products-grid');

        f_favorite_owl.owlCarousel({
            items: 2, //10 items above 1000px browser width
            itemsDesktop: [1200,1], //5 items between 1000px and 901px
            itemsDesktopSmall: [992,1],
            itemsTablet: [764,2], // betweem 900px and 601px
            itemsMobile : [480, 1], // itemsMobile disabled - inherit from itemsTablet option
            itemsScaleUp: true,
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

core.autoload(f_favorite_carousel);