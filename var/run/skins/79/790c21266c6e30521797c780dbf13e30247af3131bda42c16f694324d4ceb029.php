<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/items/item.sku.twig */
class __TwigTemplate_13197118df1ad863f2a6306ea7e2af560c13339e3975b82cc611a1de460df3cf extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"sku\">
  <span class=\"name\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("SKU")), "html", null, true);
        echo "</span>
  <span class=\"sku-value\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getSku", array(), "method"), "html", null, true);
        echo "</span>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/items/item.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # SKU item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item.name", weight="10")*/
/*  #}*/
/* <li class="sku">*/
/*   <span class="name">{{ t('SKU') }}</span>*/
/*   <span class="sku-value">{{ this.item.getSku() }}</span>*/
/* </li>*/
/* */
