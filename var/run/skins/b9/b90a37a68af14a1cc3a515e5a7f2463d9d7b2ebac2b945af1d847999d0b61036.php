<?php

/* /var/www/html/lostcar/skins/admin/order/page/parts/items/item.qty.twig */
class __TwigTemplate_35b8476a9a437637fcef3c0c9ecdf37f1ca30f3883dfcd2c702ef154c10c114b extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/admin/order/page/parts/items/item.qty.twig";
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
/*  # @ListChild (list="order.item", weight="30")*/
/*  #}*/
/* <td class="qty">{{ this.item.getAmount() }}</td>*/
/* */
