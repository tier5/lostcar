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

namespace XLite\Module\JThemesStudio\The80sMod\View\LayoutTemplates\Type1;

/**
 * Welcome page tabs
 *
 * @ListChild (list="layout.main", zone="customer", weight="365")
 */
class WelcomeTabs extends \XLite\View\AView
{
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
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'layout/type1/welcome_tabs.twig';
    }

    /**
     * Get a list of JavaScript files required to display the widget properly
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();
        $list[] = 'js/tabs_controller.js';

        return $list;
    }

    /**
     * Define tabs
     *
     * @return array
     */
    protected function defineTabs()
    {
        $list = array();

        if (\XLite\Core\Database::getRepo("XLite\Model\Module")->findOneBy(array("name"=>"FeaturedProducts", "author"=>"CDev", "enabled"=> true))) {
            $list['Featured Products'] =  array(
                'list' => 'tab_featured',
            );
        }

        if (\XLite\Core\Database::getRepo("XLite\Model\Module")->findOneBy(array("name"=>"Sale", "author"=>"CDev", "enabled"=> true))
        ) {
            $list['Sale'] = array(
                'list' => 'tab_sale',
            );
        }

        return array_reverse($list);
    }

    /**
     * Get tabs
     *
     * @return array
     */
    protected function getTabs()
    {
        if (!isset($this->tabs)) {
            $list = $this->defineTabs();
            $i = 0;
            foreach ($list as $k => $data) {
                $id = isset($data['id'])
                    ? $data['id']
                    : preg_replace('/\W+/Ss', '-', strtolower($k));

                $list[$k] = array(
                    'index'  => $i,
                    'id'     => 'category-tab-' . $id,
                    'name'   => is_array($data) && !empty($data['name']) ? $data['name'] : $k,
                    'weight' => isset($data['weight']) ? $data['weight'] : $i,
                );

                if (is_string($data)) {
                    $list[$k]['template'] = $data;

                } elseif (is_array($data) && !empty($data['template'])) {
                    $list[$k]['template'] = $data['template'];

                } elseif (is_array($data) && !empty($data['list'])) {
                    $list[$k]['list'] = $data['list'];

                } elseif (is_array($data) && !empty($data['widget'])) {
                    $parameters = array();
                    if (!empty($data['parameters'])) {
                        $parameters += $data['parameters'];
                    }
                    $list[$k]['widgetObject'] = $this->getWidget($parameters, $data['widget']);
                    unset($data['widget']);

                } else {
                    unset($list[$k]);
                }

                $i++;
            }

            $this->tabs = $list;
        }

        return $this->tabs;
    }

    /**
     * Get tab class
     *
     * @param array $tab Tab
     *
     * @return string
     */
    protected function getTabClass(array $tab)
    {
        return $this->isTabActive($tab) ? 'active' : '';
    }

    /**
     * Get tab container style
     *
     * @param array $tab Tab
     *
     * @return string
     */
    protected function getTabStyle(array $tab)
    {
        return $this->isTabActive($tab) ? '' : 'visibility: hidden;';
    }

    /**
     * Check tab activity
     *
     * @param array $tab Tab info cell
     *
     * @return boolean
     */
    protected function isTabActive(array $tab)
    {
        return 0 === $tab['index'];
    }

    /**
     * Check widget visibility
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible()
        && !\XLite\Core\Request::getInstance()->page
        && !$this->isAJAX()
        && $this->layout->isTabsVisible(); // without this can appear in terms-conditions popup
    }

}

