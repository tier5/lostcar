<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/shopping_cart/parts/item.remove.twig */
class __TwigTemplate_ed4ebc04acaf571770904c5b32b851483c34f11f8560d6137119fecaba8c09ef extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-remove delete-from-list\">
  ";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Cart\\Item\\Delete", array("item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())));        // line 8
        echo "  \t<a onclick=\"return jQuery(this).closest('form').submit();\" class=\"remove\"></a>
  ";
        $this->endForm();        // line 10
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/shopping_cart/parts/item.remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : main*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="100")*/
/*  #}*/
/* <td class="item-remove delete-from-list">*/
/*   {% form '\\XLite\\View\\Form\\Cart\\Item\\Delete' with {item: this.item} %}*/
/*   	<a onclick="return jQuery(this).closest('form').submit();" class="remove"></a>*/
/*   {% endform %}*/
/* </td>*/
/* */
