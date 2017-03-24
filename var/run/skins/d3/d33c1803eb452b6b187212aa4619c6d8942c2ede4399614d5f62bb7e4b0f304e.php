<?php

/* /var/www/html/lostcar/skins/customer/items_list/product/parts/common.field-product-qty.twig */
class __TwigTemplate_facdb3ae9f66aa49f295768f5f931add4e14592c6f5c7bd93b63dbb3ca8be59e extends \XLite\Core\Templating\Twig\Template
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
        echo "<!--input type=\"text\" name=\"qty[{product.product_id}]\" value=\"\" class=\"product-qty\" /-->
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/product/parts/common.field-product-qty.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Item quantity*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="30")*/
/*  #}*/
/* <!--input type="text" name="qty[{product.product_id}]" value="" class="product-qty" /-->*/
/* */
