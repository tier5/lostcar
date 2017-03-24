<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\Model;

/**
 * News message view model
 * @Decorator\Depend ("XC\News")
 */
class NewsMessage extends \XLite\Module\XC\News\View\Model\NewsMessage implements \XLite\Base\IDecorator
{
    /**
     * We add market price widget into the default section
     *
     * @param array $params
     * @param array $sections
     */
    public function __construct(array $params = array(), array $sections = array())
    {
        parent::__construct($params, $sections);

        $schema = array();
        $newsImageAdded = false;

        foreach ($this->schemaDefault as $name => $value) {
            $schema[$name] = $value;
            if ('image' == $name) {
                $schema['image'] = $this->defineNewsImageField();
                $marketPriceAdded = true;
            }
        }

        if (!$newsImageAdded) {
            $schema['image'] = $this->defineNewsImageField();
        }

        $this->schemaDefault = $schema;
    }

    /**
     * Defines the sale price field information
     *
     * @return array
     */
    protected function defineNewsImageField()
    {
        return array(
            self::SCHEMA_CLASS    => 'XLite\View\FormField\FileUploader\Image',
            self::SCHEMA_LABEL    => 'News image',
            self::SCHEMA_REQUIRED => false,
        );
    }

}
