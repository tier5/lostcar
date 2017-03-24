<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\View\Module\News;

/**
 * @Decorator\Depend ("XC\News")
 * @ListChild (list="welcome.news.block", zone="customer", weight="900")
 */
class TopNewsWelcome extends \XLite\View\Dialog
{
    /**
     * Get widget templates directory
     *
     * @return string
     */
    protected function getDir()
    {
        return 'modules/XC/News/center';
    }

    /**
     * Get widget title
     *
     * @return string
     */
    protected function getHead()
    {
        return 'News';
    }

    /**
     * Register the CSS classes for this block
     *
     * @return string
     */
    protected function getBlockClasses()
    {
        return parent::getBlockClasses() . ' content-news-messages';
    }

    /**
     * Return list of targets allowed for this widget
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        $result[] = 'main';

        return $result;
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        $result = parent::isVisible();
        if ($result) {
            $cnd = new \XLite\Core\CommonCell;
            $cnd->{\XLite\Module\XC\News\Model\Repo\NewsMessage::SEARCH_ENABLED} = true;
            $count = \XLite\Core\Database::getRepo('XLite\Module\XC\News\Model\NewsMessage')->search($cnd, true);

            $result = $count > 0;
        }

        return $result;
    }
}
