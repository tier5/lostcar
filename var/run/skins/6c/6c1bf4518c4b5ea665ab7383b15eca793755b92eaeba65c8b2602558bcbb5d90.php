<?php

/* /var/www/html/lostcar/skins/customer/items_list/product/parts/common.product-price.twig */
class __TwigTemplate_2b2398b491bf44253cbd60c3f5d0026f9622e876afd110badfb74d9bfcf4c627 extends \XLite\Core\Templating\Twig\Template
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
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Price", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "displayOnlyPrice" => "1", "allowRange" => "1"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/items_list/product/parts/common.product-price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 10,);
    }
}
/* {##*/
/*  # Item price*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="30")*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.details", weight="25")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="40")*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="40")*/
/*  # @ListChild (list="productBlock.info", weight="300")*/
/*  #}*/
/* {{ widget('\\XLite\\View\\Price', product=this.product, displayOnlyPrice='1', allowRange='1') }}*/
