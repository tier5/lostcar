<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\Module\Sale;

/**
 * Sale products block widget
 *
 * @Decorator\Depend ("CDev\Sale")
 */
class SaleBlock extends \XLite\Module\CDev\Sale\View\SaleBlock implements \XLite\Base\IDecorator
{

    /**
     * Return title
     *
     * @return string
     */
    protected function getHead()
    {
        if (('main' == \XLite\Core\Request::getInstance()->target  && $this->layout->isTabsVisible())) {
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
        $result = parent::isVisible()
            || 'tab_sale' == $this->viewListName
            || 'welcome.sale.block' == $this->viewListName;;

        if ('main' == \XLite\Core\Request::getInstance()->target
            && ($this->layout->isTabsVisible() || $this->layout->isLayoutType2()))
        {
            $result = 'center.bottom' != $this->viewListName
                && $result;
        }

        return $result;
    }



    /**
     * Return default display mode from settings
     */
    protected function getDefaultDisplayMode()
    {

        if('main' == \XLite\Core\Request::getInstance()->target) {
            return static::DISPLAY_MODE_GRID;
        } else {
            return static::DISPLAY_MODE_STHUMB;
        }

    }

    /**
     * Register the CSS classes for this block
     *
     * @return string
     */
    protected function getBlockClasses()
    {
        if('main' == \XLite\Core\Request::getInstance()->target && $this->layout->isLayoutType1()) {
            return parent::getBlockClasses();
        } else {
            return parent::getBlockClasses() . ' carousel-block ';
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

        if(!\XLite::isAdminZone() && $this->layout->isLayoutType2()){
            $list[] = 'js/carousel/sale_full_carousel.js';
        }

        return $list;
    }
}
