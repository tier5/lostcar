<?php

/* /var/www/html/lostcar/skins/customer/mini_cart/horizontal/parts/item.name.twig */
class __TwigTemplate_b083e5e3ebab7be20554f52f84a6e4a2c68c05141686833187b920107ac0779f extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"item-name\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
        echo "</a></span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/mini_cart/horizontal/parts/item.name.twig";
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
/*  # Display horizontal minicart item name*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.item", weight="10")*/
/*  #}*/
/* <span class="item-name"><a href="{{ this.item.getURL() }}">{{ this.item.getName() }}</a></span>*/
/* */
