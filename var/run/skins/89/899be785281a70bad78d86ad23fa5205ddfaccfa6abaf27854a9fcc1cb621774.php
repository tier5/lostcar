<?php

/* /var/www/html/lostcar/skins/pdf/common/order/invoice/parts/items/item.total.twig */
class __TwigTemplate_cfeb7d3b84a9e05adb24a0383f6d8d3300f212461ae4ca8e9b9d474841930e90 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"total\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatInvoicePrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getDisplayTotal", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method"), 2 => 1), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/pdf/common/order/invoice/parts/items/item.total.twig";
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
/*  # Total item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item", weight="40")*/
/*  #}*/
/* <td class="total">{{ this.formatInvoicePrice(this.item.getDisplayTotal(), this.order.getCurrency(), 1) }}</td>*/
/* */
