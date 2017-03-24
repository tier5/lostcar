<?php

/* /var/www/html/lostcar/skins/admin/order/packing_slip/parts/body/items/item.name.sku.twig */
class __TwigTemplate_7713647300a03e88e519f5f26f959240898af8ce208cbfc08eb9b4db582047b0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"sku\">
  <span class=\"sku-value\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getSku", array(), "method"), "html", null, true);
        echo "</span>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/order/packing_slip/parts/body/items/item.name.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # SKU item cell*/
/*  #*/
/*  # @ListChild (list="packing_slip.item", weight="10")*/
/*  #}*/
/* <td class="sku">*/
/*   <span class="sku-value">{{ this.item.getSku() }}</span>*/
/* </td>*/
/* */
