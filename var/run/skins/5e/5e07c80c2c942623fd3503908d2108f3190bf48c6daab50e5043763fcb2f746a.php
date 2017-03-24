<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/items/item.qty.twig */
class __TwigTemplate_0939c92a0cbf584f2bb0b6e132a84fde26be923386836648431d35c06683384d extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"qty\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/items/item.qty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Quantity item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item", weight="30")*/
/*  #}*/
/* <td class="qty">{{ this.item.getAmount() }}</td>*/
/* */
