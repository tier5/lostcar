<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View;

/**
 * Add2CartPopup module settings page widget
 *
 * @ListChild (list="admin.center", zone="admin")
 */
class LayoutSettings extends \XLite\View\Dialog
{
    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result[] = 'layout_types_settings';

        return $result;
    }

    /**
     * Return templates directory name
     *
     * @return string
     */
    protected function getDir()
    {
        return 'modules/JThemesStudio/The80sMod';
    }
}
