<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\Model;

/**
 * Country
 *
 * @Entity
 * @Table  (name="brands_logo_item")
 * @Decorator\Depend ("!QSL\ShopByBrand")
 */
class BrandsLogoItem extends \XLite\Model\AEntity
{
    /**
     * ID
     *
     * @var integer
     *
     * @Id
     * @GeneratedValue (strategy="AUTO")
     * @Column         (type="integer", options={ "unsigned": true })
     */
    protected $id;

    /**
     * Enabled status
     *
     * @var   boolean
     *
     * @Column (type="boolean")
     */
    protected $enabled = true;

    /**
     * Image
     *
     * @var \XLite\Module\JThemesStudio\The80sMod\Model\Image\BrandsLogoImage
     *
     * @OneToOne  (targetEntity="XLite\Module\JThemesStudio\The80sMod\Model\Image\BrandsLogoImage", mappedBy="brandsLogoItem", cascade={"all"})
     */
    protected $image;

    /**
     * Link
     *
     * @var string
     *
     * @Column         (type="string")
     */
    protected $link = '';

    /**
     * Position
     *
     * @var integer
     *
     * @Column (type="integer")
     */
    protected $position = 0;

    /**
     * Constructor
     *
     * @param array $data Entity properties OPTIONAL
     *
     * @return void
     */
    public function __construct(array $data = array())
    {
        parent::__construct($data);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return BrandsLogoItem
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return BrandsLogoItem
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return BrandsLogoItem
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set image
     *
     * @param \XLite\Module\JThemesStudio\The80sMod\Model\Image\BrandsLogoImage $image
     * @return BrandsLogoItem
     */
    public function setImage(\XLite\Module\JThemesStudio\The80sMod\Model\Image\BrandsLogoImage $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return \XLite\Module\JThemesStudio\The80sMod\Model\Image\BrandsLogoImage
     */
    public function getImage()
    {
        return $this->image;
    }
}
