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

namespace XLite\Module\JThemesStudio\The80sMod\View\Module\Bestsellers;

/**
 * Bestsellers widget
 *
 * @Decorator\Depend ("CDev\Bestsellers")
 */
class Bestsellers extends \XLite\Module\CDev\Bestsellers\View\Bestsellers implements \XLite\Base\IDecorator
{
    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        //$result = parent::isVisible() || 'catalog.top.menu' == $this->viewListName;

        $result = parent::isVisible() && ('catalog.top.menu' == $this->viewListName || 'type3.center.bottom' == $this->viewListName);

        if ($this->layout->isLayoutType1() || $this->layout->isLayoutType2()) {
            $result = 'center.bottom' != $this->viewListName
                && $result;
        }

        return $result;
    }

    /**
     * Register the CSS classes for this block
     *
     * @return string
     */
    protected function getBlockClasses()
    {
        return parent::getBlockClasses() . ' bestsellers-block carousel-block ';
    }


    /**
     * Register JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        if(!\XLite::isAdminZone() && ($this->layout->isLayoutType1() || $this->layout->isLayoutType2())){
            $list[] = 'js/carousel/b_menu_carousel.js';
        }

        if(!\XLite::isAdminZone() && $this->layout->isLayoutType3()){
            $list[] = 'js/carousel/b_carousel.js';
        }

        return $list;
    }


}
