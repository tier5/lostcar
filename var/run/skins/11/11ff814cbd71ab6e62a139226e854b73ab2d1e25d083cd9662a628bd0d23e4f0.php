<?php

/* /var/www/html/lostcar/skins/customer/shopping_cart/parts/group.title.twig */
class __TwigTemplate_987878e60ee1c5bc2b65aa4b120ad744d29fb88fa75785f5825a6ac93063ba86 extends \XLite\Core\Templating\Twig\Template
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
<td colspan=\"7\">
  <p class=\"group-title\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "group", array()), "title", array()), "html", null, true);
        echo "</p>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/shopping_cart/parts/group.title.twig";
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
/*  # Shopping cart item name*/
/*  #*/
/*  # @ListChild (list="cart.group", weight="10")*/
/*  #}*/
/* */
/* <td colspan="7">*/
/*   <p class="group-title">{{ this.group.title }}</p>*/
/* </td>*/
/* */
