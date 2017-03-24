<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\Controller\Admin;

/**
 * AustraliaPost shipping module settings controller
 *
 */
class LayoutTypesSettings extends \XLite\Controller\Admin\Settings
{
    /**
     * Return the current page title (for the content area)
     *
     * @return string
     */
    public function getTitle()
    {
        return static::t('Layout types settings');
    }

    /**
     * Gets the Add2CartPopup module id
     *
     * @return integer
     */
    public function getModuleID()
    {
        if (!isset($this->moduleID)) {
            $module = \XLite\Core\Database::getRepo('\XLite\Model\Module')->findOneBy(
                array(
                    'name' => 'The80sMod',
                    'author' => 'JThemesStudio',
                    'installed' => 1,
                    'enabled' => 1,
                )
            );

            if ($module) {
                $this->moduleID = $module->getModuleID();
                $this->module = $module;
            }
        }

        return $this->moduleID;
    }


    /**
     * Get options for current tab (category)
     *
     * @return \XLite\Model\Config[]
     */
    public function getOptions()
    {
        $allOptions = \XLite\Core\Database::getRepo('XLite\Model\Config')->findByCategoryAndVisible('JThemesStudio\The80sMod');

        $activeLayout = \XLite\Core\Layout::getInstance()->getLayoutHomeType();
        $commonLayout = 'typeC';

        foreach ($allOptions as $key => $option) {
            if (substr($option->getName(), 0, 5) != $activeLayout && substr($option->getName(), 0, 5) != $commonLayout) {
                unset($allOptions[$key]);
            }
        }

        return $allOptions;
    }

    /**
     * Update model
     *
     * @return void
     */
    public function doActionUpdate()
    {
        $this->getModelForm()->performAction('update');
    }


    /**
     * Get model form class
     *
     * @return string
     */
    protected function getModelFormClass()
    {
        return 'XLite\Module\JThemesStudio\The80sMod\View\Model\Settings';
    }

}
