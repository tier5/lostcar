<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\BrandsLogo;

use \XLite\Module\JThemesStudio\The80sMod\Logic\BrandsLogo\Processor;

/**
 * BrandsLogo widget
 * @Decorator\Depend ("!QSL\ShopByBrand")
 *  ListChild (list="welcome.textinfo.block", zone="customer", weight="100")
 *  ListChild (list="welcome.type1.brands.block", zone="customer", weight="100")
 *  ListChild (list="welcome.type3.brands.block", zone="customer", weight="100")
 */
abstract class BrandsLogoAbstract extends \XLite\View\AView
{
    /**
     * Return list of allowed targets
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $list = parent::getAllowedTargets();

        $list[] = 'main';

        return $list;
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

    /**
     * Get images
     *
     * @return array
     */
    protected function getImages()
    {

        $slides = \XLite\Core\Database::getRepo('XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem')->findBy(
            array('enabled' => true),
            array('position' => 'ASC')
        );

        $images = array_map(
            function($slide) {
                return $slide->getImage();
            },
            $slides
        );

        return array_filter($images);
    }

    /**
     * Get image count
     *
     * @return int
     */
    protected function getImageCount()
    {
        $cacheParams   = $this->getCacheParameters();
        $cacheParams[] = 'getImageCount';

        return $this->executeCached(function () {
            return count($this->getImages());
        }, $cacheParams);
    }


    protected function isVisible()
    {
        $result = (parent::isVisible() && !$this->isForceChangePassword() && $this->getImageCount() > 0);

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

    /**
     * Cache availability
     *
     * @return boolean
     */
    protected function isCacheAvailable()
    {
        return true;
    }

    protected function isAutoBrandsImages() {
        return false;
    }
}
