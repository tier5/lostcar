<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\Tabs;

/**
 * Tabs related to front page section
 * @Decorator\Depend ("!QSL\ShopByBrand")
 */
class FrontPage extends \XLite\View\Tabs\FrontPage implements \XLite\Base\IDecorator
{
    /**
     * Returns the list of targets where this widget is available
     *
     * @return string
     */
    public static function getAllowedTargets()
    {
        $list = parent::getAllowedTargets();
        $list[] = 'brands_logo';

        return $list;
    }

    /**
     * @return array
     */
    protected function defineTabs()
    {
        $tabs_list = parent::defineTabs();

        $tabs_list['brands_logo'] = [
            'weight'   => 300,
            'title'    => static::t('Brands logo'),
            'template' => 'modules/JThemesStudio/The80sMod/brands_logo/body.twig',
        ];

        return $tabs_list;
    }
}
