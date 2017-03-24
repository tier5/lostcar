<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\Model;

/**
 * Australia post configuration form model
 *
 */
class Settings extends \XLite\View\Model\Settings
{
    /**
     * Return list of allowed targets
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
     ///   $result = parent::getAllowedTargets();
        $result[] = 'layout_types_settings';

        return $result;
    }
    /**
     * Return name of web form widget class
     *
     * @return string
     */
    protected function getFormClass()
    {
        return 'XLite\Module\JThemesStudio\The80sMod\View\Form\LayoutTypesSettings';
    }
}
