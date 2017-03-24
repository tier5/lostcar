<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\Controller\Customer;

 class Main extends \XLite\Controller\Customer\MainAbstract implements \XLite\Base\IDecorator
{
    /**
     * Check whether the category title is visible in the content area
     *
     * @return boolean
     */
    public function isTitleVisible()
    {
        return false;
    }
}
