<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View;

/**
 * Cart coupons
 *
 * @Decorator\Depend("CDev\Coupons")
 */
abstract class CartCoupons extends \XLite\Module\CDev\Coupons\View\CartCouponsAbstract implements \XLite\Base\IDecorator
{
    /**
     * @return boolean
     */
    protected function isFieldOnly()
    {
        return false;
    }
}
