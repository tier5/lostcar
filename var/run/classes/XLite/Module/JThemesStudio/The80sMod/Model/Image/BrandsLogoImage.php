<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\Model\Image;
use XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem;

/**
 * Category
 *
 * @Entity
 * @Table  (name="brands_logo_image")
 * @Decorator\Depend ("!QSL\ShopByBrand")
 */
class BrandsLogoImage extends \XLite\Model\Base\Image
{
    /**
     * Relation to a BrandsLogoImage entity
     *
     * @var \XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem
     *
     * @OneToOne   (targetEntity="XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem", inversedBy="image")
     * @JoinColumn (name="brands_logo_item_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $brandsLogoItem;

    /**
     * Alternative image text
     *
     * @var string
     *
     * @Column (type="string", length=255)
     */
    protected $alt = '';

    /**
     * Set alt
     *
     * @param string $alt
     * @return BrandsLogoItem
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set bannerRotationSlide
     *
     * @param \XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem $brandsLogoItem
     * @return BrandsLogoItem
     */
    public function setBrandsLogoItem(\XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem $brandsLogoItem = null)
    {
        $this->brandsLogoItem = $brandsLogoItem;
        return $this;
    }

    /**
     * Get brandsLogoItem
     *
     * @return \XLite\Module\JThemesStudio\The80sMod\Model\BrandsLogoItem
     */
    public function getBrandsLogoItem()
    {
        return $this->brandsLogoItem;
    }
}
