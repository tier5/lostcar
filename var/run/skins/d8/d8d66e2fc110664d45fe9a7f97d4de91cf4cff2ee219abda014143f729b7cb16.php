<?php

/* /var/www/html/lostcar/skins/common/order/invoice/parts/items/item.price.twig */
class __TwigTemplate_0b3db10fe2c5c9da692b12222b9b71d8352d1973f9886a54dc2b06202e389372 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatInvoicePrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderItemPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/common/order/invoice/parts/items/item.price.twig";
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
/*  # Price item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item", weight="20")*/
/*  #}*/
/* <td class="price">{{ this.formatInvoicePrice(this.getOrderItemPrice(this.item), this.order.getCurrency()) }}</td>*/
/* */
