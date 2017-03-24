<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\ItemsList\Model;

/**
 * News messages items list
 * @Decorator\Depend ("XC\News")
 */
 class NewsMessage extends \XLite\Module\XC\News\View\ItemsList\Model\NewsMessageAbstract implements \XLite\Base\IDecorator
{
    /**
     * Define columns structure
     *
     * @return array
     */
    protected function defineColumns()
    {
        $list = parent::defineColumns();

        if (!\XLite\Core\Request::getInstance()->id){
            $list['image'] = array(
                static::COLUMN_NAME         => '',
                static::COLUMN_CLASS        => 'XLite\View\FormField\Inline\FileUploader\Image',
                static::COLUMN_CREATE_CLASS => 'XLite\View\FormField\Inline\EmptyField',
                static::COLUMN_PARAMS       => array('required' => false),
                static::COLUMN_ORDERBY      => 50,
            );
        }

        return $list;
    }


}
