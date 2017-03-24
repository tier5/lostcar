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

namespace XLite\Module\JThemesStudio\The80sMod\View\Module\FeaturedProducts\Customer;

/**
 * Featured products widget
 *
 * @Decorator\Depend ("CDev\FeaturedProducts")
 */
 class FeaturedProducts extends \XLite\Module\CDev\FeaturedProducts\Module\XC\ThemeTweaker\View\Customer\FeaturedProducts implements \XLite\Base\IDecorator
{

    /**
     * Return title
     *
     * @return string
     */
    protected function getHead()
    {
        if ('main' == \XLite\Core\Request::getInstance()->target  && $this->layout->isTabsVisible()) {
            return false;
        } else {
            return parent::getHead();
        }
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        $result = parent::isVisible() || 'tab_featured' == $this->viewListName || 'welcome.favorite.block' == $this->viewListName;

        if ('main' == \XLite\Core\Request::getInstance()->target  && ($this->layout->isTabsVisible() || $this->layout->isLayoutType2())) {
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
        if ($this->layout->isLayoutType2() || $this->layout->isLayoutType3()){
            return parent::getBlockClasses() . ' carousel-block ';
        } else {
            return parent::getBlockClasses();
        }
    }


    /**
     * Register JS files
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        if(!\XLite::isAdminZone() && ($this->layout->isLayoutType2() && \XLite\Core\Config::getInstance()->JThemesStudio->The80sMod->type2_favorite_banner_enable)){
            $list[] = 'js/carousel/f_favorite_carousel.js';
        }

        if(!\XLite::isAdminZone()
            && ($this->layout->isLayoutType3()
                || ( $this->layout->isLayoutType2()
                    && !\XLite\Core\Config::getInstance()->JThemesStudio->The80sMod->type2_favorite_banner_enable
                )
            )
        ){
            $list[] = 'js/carousel/f_carousel.js';
        }


        return $list;
    }
}
