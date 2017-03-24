/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Categories list (carousel) script
 *
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

decorate(
    'ProductDetailsView',
    'postprocess',
    function (event, data) {
        arguments.callee.previousMethod.apply(this, arguments);

        var navigation = true;
        var pagination = false;

        var upselling_owl = jQuery('.upselling-products .two-items-carousel');

        upselling_owl.owlCarousel({
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
    }
);

//extend(UpsellCarousel, AController);

// function UpsellCarousel()
// {
//     // Fallback
//     var deboucedFallback = _.debounce(
//         function(){
//             showUpsellCarousel = true;
//         },
//         5000
//     );
//     core.bind(
//         'addToCartViaDrop',
//         function(event, data) {
//             if (!core.getCommentedData(jQuery('body'), 'a2cp_enable_for_dropping')) {
//                 showAdd2CartPopup = data.widget && data.widget.base.eq(0).hasClass('add-to-cart-popup');
//             }
//
//             deboucedFallback();
//         }
//     );
//     core.bind('updateCart', this.handleOpenPopup);
//     core.bind(
//         'afterPopupPlace',
//         function() {
//             core.autoload(ProductsListController);
//             popup.currentPopup.widget.addClass('add2cartpopup');
//         }
//     );
//
//     PopupButtonAdd2CartPopup.superclass.constructor.apply(this, arguments);
// }


// function upselling_carousel() {
//     jQuery(document).ready(function() {
//         var navigation = true;
//         var pagination = false;
//
//         var upselling_owl = jQuery('.upselling-products .two-items-carousel');
//
//         upselling_owl.owlCarousel({
//             items: 1, //10 items above 1000px browser width
//             itemsDesktop: [1200,1], //5 items between 1000px and 901px
//             itemsDesktopSmall: [992,1],
//             itemsTablet: [764,1], // betweem 900px and 601px
//             itemsMobile : [480, 1], // itemsMobile disabled - inherit from itemsTablet option
//             itemsScaleUp: false,
//             navigationText: false,
//             pagination: pagination,
//             navigation: navigation,
//             mouseDrag:	false,
//             touchDrag:	false,
//             scrollPerPage: true,
//             afterInit: prepeareDragging
//
//         });
//     });
// }
//
// core.autoload(upselling_carousel);