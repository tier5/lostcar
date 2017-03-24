<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the software license agreement
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.x-cart.com/license-agreement.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@x-cart.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade X-Cart to newer versions
 * in the future. If you wish to customize X-Cart for your needs please
 * refer to http://www.x-cart.com/ for more information.
 *
 * @category  X-Cart 5
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\Module\Upselling\ItemsList;

/**
 * New arrivals block widget
 *
 * @Decorator\Depend ("XC\Upselling")
 *
 */
class UpsellingProducts extends \XLite\Module\XC\Upselling\View\ItemsList\UpsellingProducts implements \XLite\Base\IDecorator
{

    /**
     * Get display modes for center widget type
     *
     * @return array
     */
    public static function getCenterDisplayModes()
    {
        return array(
            static::DISPLAY_MODE_GRID  => 'Grid',
            static::DISPLAY_MODE_LIST  => 'List',
            static::DISPLAY_MODE_TABLE => 'Table',
            static::DISPLAY_MODE_STHUMB  => 'Cells',
        );
    }

    /**
     * Initialize widget (set attributes)
     *
     * @param array $params Widget params
     *
     * @return void
     */
    public function setWidgetParams(array $params)
    {
        parent::setWidgetParams($params);

        $this->widgetParams[self::PARAM_DISPLAY_MODE]->setValue(self::DISPLAY_MODE_STHUMB);

    }

    /**
     * Register the CSS classes for this block
     *
     * @return string
     */
    protected function getBlockClasses()
    {
        return parent::getBlockClasses() . ' carousel-block upselling-products-container';
    }

    /**
     * Register JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        if(!\XLite::isAdminZone()){
            $list[] = 'js/carousel/upselling_carousel.js';
        }

        return $list;
    }
}
