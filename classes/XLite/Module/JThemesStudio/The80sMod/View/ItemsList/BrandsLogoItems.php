<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\ItemsList;

use \XLite\Module\JThemesStudio\The80sMod\Logic\BrandsLogo\Processor;

/**
 * Coupons items list
 * @Decorator\Depend ("!QSL\ShopByBrand")
 */
class BrandsLogoItems extends \XLite\View\ItemsList\Model\Table
{
    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'brands_logo/images/style.css';

        return $list;
    }

    /**
     * Define columns structure
     *
     * @return array
     */
    protected function defineColumns()
    {
        return array(
            'image' => array(
                static::COLUMN_NAME         => static::t('Image'),
                static::COLUMN_LINK         => 'image',
                static::COLUMN_CLASS        => 'XLite\View\FormField\Inline\FileUploader\Image',
                static::COLUMN_MAIN         => true,
                static::COLUMN_ORDERBY      => 100,
            ),
            'link' => array(
                static::COLUMN_NAME         => static::t('Link'),
                static::COLUMN_LINK         => 'link',
                static::COLUMN_CLASS        => 'XLite\View\FormField\Inline\Input\Text',
                static::COLUMN_ORDERBY      => 200,
            ),
        );
    }

    /**
     * Define repository name
     *
     * @return string
     */
    protected function defineRepositoryName()
    {
        return 'XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem';
    }

    /**
     * Return entities list
     *
     * @param \XLite\Core\CommonCell $cnd       Search condition
     * @param boolean                $countOnly Return items list or only its size OPTIONAL
     *
     * @return array|integer
     */
    protected function getData(\XLite\Core\CommonCell $cnd, $countOnly = false)
    {
        $repo = \XLite\Core\Database::getRepo('XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem');

        return $countOnly
            ? $repo->count()
            : $repo->findBy(array(), array('position' => 'ASC'));
    }

    /**
     * Get create button label
     *
     * @return string
     */
    protected function getCreateButtonLabel()
    {
        return 'Add new logo';
    }

    /**
     * Creation button position
     *
     * @return integer
     */
    protected function isCreation()
    {
        return static::CREATE_INLINE_TOP;
    }

    /**
     * Inline creation mechanism position
     *
     * @return integer
     */
    protected function isInlineCreation()
    {
        return static::CREATE_INLINE_TOP;
    }

    /**
     * Mark list as switchable (enable / disable)
     *
     * @return boolean
     */
    protected function isSwitchable()
    {
        return true;
    }

    /**
     * Mark list as removable
     *
     * @return boolean
     */
    protected function isRemoved()
    {
        return true;
    }

    /**
     * Mark list as sortable
     *
     * @return integer
     */
    protected function getSortableType()
    {
        return static::SORT_TYPE_MOVE;
    }

    /**
     * Get container class
     *
     * @return string
     */
    protected function getContainerClass()
    {
        return parent::getContainerClass() . ' brands-logo';
    }

    /**
     * Get panel class
     *
     * @return \XLite\View\Base\FormStickyPanel
     */
    protected function getPanelClass()
    {
        return '';
    }
}
