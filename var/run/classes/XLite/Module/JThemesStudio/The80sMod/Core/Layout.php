<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\JThemesStudio\The80sMod\Core;

/**
 * Layout manager
 */
 class Layout extends \XLite\Module\XC\Reviews\Core\Layout implements \XLite\Base\IDecorator
{

    /**
     * Layout style
     */
    const LAYOUT_TYPE1 = 'type1';
    const LAYOUT_TYPE2 = 'type2';
    const LAYOUT_TYPE3 = 'type3';


    /**
     * Returns layout types
     *
     * @return array
     */
    public function getLayoutHomeTypes()
    {

        $homeTypes = array(
            static::LAYOUT_TYPE1,
            static::LAYOUT_TYPE2,
            static::LAYOUT_TYPE3,
        );

        return $homeTypes;
    }

    /**
     * Returns available layout types
     *
     * @return array
     */
    public function getAvailableLayoutTypes()
    {
        $module = \XLite\Core\Database::getRepo('XLite\Model\Module')->getCurrentSkinModule();

        return $module
            ? $this->getModuleLayoutTypes($module)
            : array(
                static::LAYOUT_GROUP_DEFAULT => $this->getLayoutTypes(),
                static::LAYOUT_GROUP_HOME => $this->getLayoutHomeTypes(),
            );
    }

    /**
     * Returns layout types, defined in module
     * @param  \XLite\Module\AModule $module
     * @return array
     */
    public function getModuleLayoutTypes($module)
    {
        $validTypes = array_merge($this->getLayoutTypes(), $this->getLayoutHomeTypes());
        $types = $module->callModuleMethod('getLayoutTypes', array());
        if (count($types) > 0 && is_array(array_values($types)[0])) {
            array_walk($types, function(&$group) use ($validTypes) {
                $group = array_intersect($group, $validTypes);
            });
            return $types;
        } else {
            return array(static::LAYOUT_GROUP_DEFAULT => array_intersect($types, $validTypes));
        }
    }

    /**
     * Returns current layout type
     * @param string $group Layout group name (by default - current displayed group)
     * @return string
     */
    public function getLayoutHomeType($group = null)
    {
        $group = static::LAYOUT_GROUP_HOME;
        $layoutType = $this->getLayoutTypeByGroup($group);
        $availableTypes = $this->getAvailableLayoutTypes();
        $groupAvailableTypes = isset($availableTypes[$group]) ? $availableTypes[$group] : array();

        return in_array($layoutType, $groupAvailableTypes, true)
            ? $layoutType
            : \XLite\Core\Config::getInstance()->Layout->layout_type;
    }


     /**
      * @return array
      */
     protected function getSidebarFirstHiddenTargets()
     {
         return array_merge(
             parent::getSidebarFirstHiddenTargets(),
             [
                 'main',
             ]
         );
     }

     /**
      * @return array
      */
     protected function getSidebarSecondHiddenTargets()
     {
         return array_merge(
             parent::getSidebarSecondHiddenTargets(),
             [
                 'main',
             ]
         );
     }

     public function isTabsVisible()
     {
         return in_array(
             $this->getLayoutHomeType(),
             array(
                 static::LAYOUT_TYPE1
             ),
             true
         );
     }

     public function isLayoutType1()
     {
         return in_array(
             $this->getLayoutHomeType(),
             array(
                 static::LAYOUT_TYPE1
             ),
             true
         );
     }

    public function isLayoutType2()
    {
        return in_array(
            $this->getLayoutHomeType(),
            array(
                static::LAYOUT_TYPE2
            ),
            true
        );
    }


    public function isLayoutType3()
    {
        return in_array(
            $this->getLayoutHomeType(),
            array(
                static::LAYOUT_TYPE3
            ),
            true
        );
    }
}
