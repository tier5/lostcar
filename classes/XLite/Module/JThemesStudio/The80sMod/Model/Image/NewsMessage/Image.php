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
 * @copyright Copyright (c) 2011-2014 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\JThemesStudio\The80sMod\Model\Image\NewsMessage;

/**
 * Menu
 * @Decorator\Depend ("XC\News")
 * @Entity
 * @Table  (name="news_images")
 */
class Image extends \XLite\Model\Base\Image
{
    /**
     * Relation to a menu entity
     *
     * @var \XLite\Module\XC\News\Model\NewsMessage
     *
     * @OneToOne   (targetEntity="XLite\Module\XC\News\Model\NewsMessage", inversedBy="image")
     * @JoinColumn (name="id", referencedColumnName="id")
     */
    protected $news;

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
     * @return Image
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
     * Set menu image item
     *
     * @param \XLite\Module\XC\News\Model\NewsMessage $news
     * @return Image
     */
    public function setNews(\XLite\Module\XC\News\Model\NewsMessage $news = null)
    {
        $this->news = $news;
        return $this;
    }

    /**
     * Get menu image item
     *
     * @return \XLite\Module\XC\News\Model\NewsMessage
     */
    public function getNews()
    {
        return $this->news;
    }
}
