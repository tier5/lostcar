<?php
namespace XLite\Module\JThemesStudio\The80sMod\View\BrandsLogo;
/**
 * BrandsLogo widget
 * @Decorator\Depend ("!QSL\ShopByBrand")
 * @ListChild (list="welcome.textinfo.block", zone="customer", weight="100")
 * @ListChild (list="welcome.type1.brands.block", zone="customer", weight="100")
 * @ListChild (list="welcome.type3.brands.block", zone="customer", weight="100")
 */
class BrandsLogo extends \XLite\Module\JThemesStudio\The80sMod\View\LayoutTemplates\Type1\WelcomeBrandsRotator {}