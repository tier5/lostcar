<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/checkbox.twig */
class __TwigTemplate_2b2d59b6b9ea2edc7b541e692a70ec066112095fddb54785f2fa2c8aebb42041 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "
<th class=\"checkboxes\"><input type=\"checkbox\" class=\"check-all\" /></th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/table/parts/header/checkbox.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Column with checkboxes*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="10")*/
/*  #}*/
/* */
/* <th class="checkboxes"><input type="checkbox" class="check-all" /></th>*/
/* */
