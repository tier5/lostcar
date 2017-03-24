<?php

/* /var/www/html/lostcar/skins/admin/order/packing_slip/parts/body/items/item.qty.twig */
class __TwigTemplate_49b562f14a3035e1028e959ffe09e0b9d532bfdf749b5d9a13046dcce3aac24a extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/admin/order/packing_slip/parts/body/items/item.qty.twig";
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
/*  # @ListChild (list="packing_slip.item", weight="30")*/
/*  #}*/
/* <td class="qty">{{ this.item.getAmount() }}</td>*/
/* */
