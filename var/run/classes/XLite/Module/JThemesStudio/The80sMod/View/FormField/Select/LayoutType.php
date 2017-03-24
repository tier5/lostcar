<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\FormField\Select;

/**
 * \XLite\View\FormField\Select\LayoutType
 */
 class LayoutType extends \XLite\View\FormField\Select\LayoutTypeAbstract implements \XLite\Base\IDecorator
{
    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = $this->getDir() . '/layout_type.css';

        return $list;
    }

    /**
     * getDefaultOptions
     *
     * @return array
     */
    protected function getDefaultOptions()
    {
        $list = array(
            \XLite\Core\Layout::LAYOUT_TWO_COLUMNS_LEFT  => static::t('Two columns with left sidebar'),
            \XLite\Core\Layout::LAYOUT_TWO_COLUMNS_RIGHT => static::t('Two columns with right sidebar'),
            \XLite\Core\Layout::LAYOUT_THREE_COLUMNS     => static::t('Three columns'),
            \XLite\Core\Layout::LAYOUT_ONE_COLUMN        => static::t('One column'),
            \XLite\Module\JThemesStudio\The80sMod\Core\Layout::LAYOUT_TYPE1 => static::t('One column with tabs and banners with horizontal navigation'),
            \XLite\Module\JThemesStudio\The80sMod\Core\Layout::LAYOUT_TYPE2 => static::t('One column with banners and special product section '),
            \XLite\Module\JThemesStudio\The80sMod\Core\Layout::LAYOUT_TYPE3 => static::t('One column with vertical categories menu, banners and product carousel'),
        );

        return $list;
    }


    /**
     * Returns layout type image
     *
     * @param string $value Layout type
     *
     * @return string
     */
    protected function getImage($value)
    {
        return $this->getSVGImage('modules/JThemesStudio/The80sMod/images/layout/' . $value . '.svg');
    }
}
