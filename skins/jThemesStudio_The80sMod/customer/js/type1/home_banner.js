/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Categories list (carousel) script
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function home_banner() {
    jQuery(document).ready(function() {
        var headerContainer = jQuery('div#header-area');

        var bannerRotatorContainer = jQuery('#banner-rotation-widget');
        var categoryImageContainer = jQuery('.category-banner');
        var bannerSystemTopWideContainer = jQuery('.banner_container.WideTop .cycle-slideshow *');

        if (bannerRotatorContainer.length || categoryImageContainer.length || bannerSystemTopWideContainer.length) {
            headerContainer.addClass('hanged');
        }

    });
}

core.autoload(home_banner);