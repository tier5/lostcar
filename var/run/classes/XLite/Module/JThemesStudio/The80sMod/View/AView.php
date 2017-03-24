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
 * @copyright Copyright (c) 2011-2015 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @license   http://www.x-cart.com/license-agreement.html X-Cart 5 License Agreement
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\JThemesStudio\The80sMod\View;

/**
 * Abstract view
 */
abstract class AView extends \XLite\Module\QSL\CloudSearch\View\AView implements \XLite\Base\IDecorator
{
    /**
     * Return theme common files
     *
     * @param boolean|null $adminZone
     *
     * @return array
     */
    protected function getThemeFiles($adminZone = null)
    {
        $list = parent::getThemeFiles($adminZone);

        $adminZone = is_null($adminZone) ? \XLite::isAdminZone() : $adminZone;
        if (!$adminZone) {

            if ($this->layout->isLayoutType1()) {
                $list[static::RESOURCE_CSS][] = array(
                    'file' => 'css/type1/style.less',
                    'media' => 'screen',
                    'merge' => 'bootstrap/css/bootstrap.less',
                );

                $list[static::RESOURCE_CSS][] = array(
                    'file' => 'css/type1/style.css',
                );

                $list[static::RESOURCE_JS][] = 'js/type1/home_banner.js';
            }

            if ($this->layout->isLayoutType2()) {
                $list[static::RESOURCE_CSS][] = array(
                    'file' => 'css/type2/style.less',
                    'media' => 'screen',
                    'merge' => 'bootstrap/css/bootstrap.less',
                );
            }

            if ($this->layout->isLayoutType3()) {
                $list[static::RESOURCE_CSS][] = array(
                    'file' => 'css/type3/style.less',
                    'media' => 'screen',
                    'merge' => 'bootstrap/css/bootstrap.less',
                );
            }


            $list[static::RESOURCE_CSS][] = array(
                'url' => '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic',
            );

            $list[static::RESOURCE_CSS][] = array(
                'url' => '//fonts.googleapis.com/css?family=Oswald:400,300,700',
            );

            $list[static::RESOURCE_JS][] = 'js/carouseldragging.js';
            $list[static::RESOURCE_JS][] = 'js/owl.carousel.js';
            $list[static::RESOURCE_JS][] = 'js/carousel/sidebar_carousel.js';
            $list[static::RESOURCE_JS][] = 'js/template.js';


            $list[static::RESOURCE_CSS][] = 'css/owl.carousel.css';
            $list[static::RESOURCE_CSS][] = 'css/owl.theme.css';

            $list[static::RESOURCE_CSS][] = array(
                'file' => 'css/owl_style.less',
                'merge' => 'bootstrap/css/bootstrap.less',
            );
        }

        return $list;
    }
}
