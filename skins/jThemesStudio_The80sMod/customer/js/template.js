/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Categories list (carousel) script
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

function categories_count() {
    jQuery(document).ready(function() {

        var catMenuContainer = jQuery('#header-area .desktop-header .container .top-main-menu .mega-dropdown .categories_menu');
        var catList = jQuery('#header-area .desktop-header .container .top-main-menu .mega-dropdown .categories_menu .block-top-categories > .content > .catalog-categories');
        var catItemsCount = catList.children('li').length;
        var catMenuClasses = catList.attr('class');
        var columns = 2;

        catList.removeClass(catMenuClasses);
        catList.addClass('categories_menuWrapper');

        catMenuContainer.addClass('columns2');

        if (catItemsCount > 7 && catItemsCount <= 14) {
            catList.addClass('categories-2-columns');
            catMenuClasses = catMenuClasses + ' categories-2-columns';
        } else if (catItemsCount > 14) {
            if (catMenuContainer.children(".block-bestsellers").length) {
                catMenuClasses = catMenuClasses + ' categories-2-columns';
            } else {
                catMenuClasses = catMenuClasses + ' categories-3-columns';
                columns = 3;
            }
        }

        var defaults = {
            columns: columns,
            classname: 'column',
            min: 1
        };

        jQuery.fn.autocolumnlist = function(params){
            var options = jQuery.extend({}, defaults, params);
            return this.each(function() {
                var els = jQuery(this).find('> li');
                var dimension = els.size();
                var start = 0;
                var end = dimension;
                els.slice(start, end).wrapAll('<li/>');

                if (dimension > 0) {
                    var elCol = Math.ceil(dimension/options.columns);
                    if (elCol < options.min) {
                        elCol = options.min;
                    }
                    start = 0;
                    end = elCol;

                    for (i=0; i<options.columns; i++) {
                        if ((i + 1) == options.columns) {
                            els.slice(start, end).wrapAll('<ul class="'+options.classname+'" />');
                        } else {
                            els.slice(start, end).wrapAll('<ul class="'+options.classname+'" />');
                        }
                        start = start+elCol;
                        end = end+elCol;
                    }
                }
            });
        };


        catList.autocolumnlist({
            columns: columns,
            classname: catMenuClasses,
            min: 3
        });

    });
}

core.autoload(categories_count);