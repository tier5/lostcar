<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\Button\Minicart;

/**
 * Express Checkout button
 *
 * @ListChild (list="minicart.horizontal.buttons", weight="200")
 */
class PaypalCredit extends \XLite\Module\CDev\Paypal\View\Button\AExpressCheckout
{
    /**
     * Returns true if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        /** @var \XLite\Model\Cart $cart */
        $cart = $this->getCart();

        return parent::isVisible()
            && $cart
            && (0 < $cart->getTotal())
            && \XLite\Module\CDev\Paypal\Main::isPaypalCreditEnabled($cart)
            && $cart->checkCart();
    }

    /**
     * Get CSS class name
     *
     * @return string
     */
    protected function getClass()
    {
        return 'pp-pc-button';
    }

    /**
     * Returns widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/CDev/Paypal/button/minicart/default/paypal_credit.twig';
    }

    /**
     * Return current template
     *
     * @return string
     */
    protected function getTemplate()
    {
        return $this->isInContextAvailable()
            ? 'modules/CDev/Paypal/button/minicart/in_context/paypal_credit.twig'
            : 'modules/CDev/Paypal/button/minicart/default/paypal_credit.twig';
    }

    /**
     * Returns additional link params
     *
     * @return array
     */
    protected function getAdditionalLinkParams()
    {
        $result = parent::getAdditionalLinkParams();

        if ($this->isInContextAvailable()) {
            $result['inContext'] = true;
            $result['cancelUrl'] = $this->isAjax()
                ? $this->getReferrerURL()
                : \XLite\Core\URLManager::getSelfURI();
        }

        return $result;
    }

    /**
     * getId
     *
     * @return string
     */
    protected function getId()
    {
        return 'ppc_minicart';
    }
}
