<?php

/* /var/www/html/lostcar/skins/admin/items_list/product/modify/common/parts/columns/inventory.twig */
class __TwigTemplate_508bc5d71b01af9cdb860bb8f18bdd1a8d103a872c75581f6309219b1144bc26 extends \XLite\Core\Templating\Twig\Template
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
<td>
  <input type=\"text\" class=\"inventory";
        // line 8
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getInventoryEnabled", array(), "method")) {
            echo " input-disabled";
        }
        echo "\" size=\"10\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAmount", array(), "method"), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "amount", 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method")), "method"), "html", null, true);
        echo "\" ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getInventoryEnabled", array(), "method")) {
            echo " disabled=\"disabled\" ";
        }
        echo " />
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/admin/items_list/product/modify/common/parts/columns/inventory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Item price*/
/*  #*/
/*  # @ListChild (list="itemsList.product.modify.common.admin.columns", weight="70")*/
/*  #}*/
/* */
/* <td>*/
/*   <input type="text" class="inventory{% if not this.product.getInventoryEnabled() %} input-disabled{% endif %}" size="10" value="{{ this.product.getAmount() }}" name="{{ this.getNamePostedData('amount', this.product.getProductId()) }}" {% if not this.product.getInventoryEnabled() %} disabled="disabled" {% endif %} />*/
/* </td>*/
/* */
