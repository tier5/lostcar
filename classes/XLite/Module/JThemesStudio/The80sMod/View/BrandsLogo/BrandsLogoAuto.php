<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the software license agreement
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.x-cart.com/license-agreement.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@x-cart.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade X-Cart to newer versions
 * in the future. If you wish to customize X-Cart for your needs please
 * refer to http://www.x-cart.com/ for more information.
 *
 * @category  X-Cart 5
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2013 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\BrandsLogo;

use XLite\Module\JThemesStudio\ShopByBrand\Model\Repo\Brand as Repo;

/**
 * Brand page widget.
 * @Decorator\Depend ("QSL\ShopByBrand")
 * @ListChild (list="welcome.textinfo.block", zone="customer", weight="100")
 * @ListChild (list="welcome.type1.brands.block", zone="customer", weight="100")
 * @ListChild (list="welcome.type3.brands.block", zone="customer", weight="100")
 */
class BrandsLogoAuto extends \XLite\View\AView
{
    /**
     * Rows of brands.
     *
     * @var array
     */
    protected $rows;

    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result = parent::getAllowedTargets();
        $result[] = 'main';

        return $result;
    }

    /**
     * Return list of brands.
     *
     * @return array Returns array(array(0=>$brand, 'productCount'=>$productCount)).
     */
    protected function getBrands()
    {
        if (!isset($this->brands)) {

            $order = \XLite\Core\Config::getInstance()->QSL->ShopByBrand->shop_by_brand_block_order;

            $this->brands = \XLite\Core\Database::getRepo('\XLite\Module\QSL\ShopByBrand\Model\Brand')
                ->getCategoryBrandsWithProductCount(
                    $this->getCategoryId(),
                    true,
                    $this->getParam('limit'),
                    $order ?: Repo::SORT_BY_BRAND_NAME
                );
        }

        return $this->brands;
    }

    /**
     * Check if the brand has logo.
     *
     * @return boolean
     */
    public function hasImage()
    {
        return is_object($this->getImage());
    }

    /**
     * Get the product's brand logo.
     *
     * @return \XLite\Model\Image
     */
    public function getLogo()
    {
        return $this->getBrand()->getImage();
    }

    /**
     * Brand logo width.
     *
     * @return integer
     */
    public function getLogoWidth()
    {
        return 204;
    }

    /**
     * Brand logo height.
     *
     * @return integer
     */
    public function getLogoHeight()
    {
        return 204;
    }


    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'brands_logo/style.css';

        return $list;
    }


    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'brands_logo/body.twig';
    }

    protected function isAutoBrandsImages() {
        return true;
    }

    protected function isVisible()
    {
        $result = parent::isVisible();

        if ($this->layout->isLayoutType3()) {
            if ($result) {
                \XLite\Module\JThemesStudio\The80sMod\View\LayoutTemplates\Type3\WelcomeBrandsRotatorContainer::setDoDisplay();
            }
        }

        if ($this->layout->isLayoutType1()) {
            if ($result) {
                \XLite\Module\JThemesStudio\The80sMod\View\LayoutTemplates\Type1\WelcomeBrandsRotatorContainer::setDoDisplay();
            }
        }

        return $result;
    }


}
