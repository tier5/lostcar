<?php

/* /var/www/html/lostcar/skins/customer/shopping_cart/parts/item.info.name.twig */
class __TwigTemplate_6749fad898da8010f1cbb20eeb485a52c6b995b5f865fc92e50ff996ae50d2db extends \XLite\Core\Templating\Twig\Template
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
        echo "<p class=\"item-title\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
        echo "</a></p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/shopping_cart/parts/item.info.name.twig";
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
/*  # Shopping cart item name*/
/*  #*/
/*  # @ListChild (list="cart.item.info", weight="10")*/
/*  #}*/
/* <p class="item-title"><a href="{{ this.item.getURL() }}">{{ this.item.getName() }}</a></p>*/
/* */
