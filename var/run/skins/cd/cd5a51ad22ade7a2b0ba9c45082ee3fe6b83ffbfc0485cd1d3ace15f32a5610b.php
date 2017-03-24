<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/mini_cart/horizontal/parts/item.amount.twig */
class __TwigTemplate_c93e8cd50f122beabc6fbbf6c4860b1ba9ba0cf9ba338aadad19670a2aa8cc3d extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"item-amount\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method"), "html", null, true);
        echo " &times; </div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/mini_cart/horizontal/parts/item.amount.twig";
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
/*  # Display horizontal minicart item price*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.item", weight="18")*/
/*  #}*/
/* <div class="item-amount">{{ this.item.getAmount() }} &times; </div>*/
/* */
