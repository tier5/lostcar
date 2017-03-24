<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\Model\News;

/**
 * NewsMessage
 *
 * @Decorator\Depend ("XC\News")
 */
class NewsMessage extends \XLite\Module\XC\News\Model\NewsMessage implements \XLite\Base\IDecorator
{
    /**
     * One-to-one relation with news_images table
     *
     * @var \XLite\Module\JThemesStudio\The80sMod\Model\Image\NewsMessage\Image
     *
     * @OneToOne  (targetEntity="XLite\Module\JThemesStudio\The80sMod\Model\Image\NewsMessage\Image", mappedBy="news", cascade={"all"})
     */
    protected $image;

    /**
     * @return \XLite\Module\JThemesStudio\The80sMod\Model\Image\NewsMessage\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \XLite\Module\JThemesStudio\The80sMod\Model\Image\NewsMessage\Image
     */
    public function setImage(\XLite\Module\JThemesStudio\The80sMod\Model\Image\NewsMessage\Image $image = null)
    {
        $this->image = $image;
    }
}
