<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/mini_cart/horizontal/parts/item.price.twig */
class __TwigTemplate_5036751634f5ea636999d4b166ba93a98fb996149cd1a6363d037aadda697ab6 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"item-price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getDisplayPrice", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/mini_cart/horizontal/parts/item.price.twig";
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
/*  # @ListChild (list="minicart.horizontal.item", weight="20")*/
/*  #}*/
/* <div class="item-price">{{ widget('XLite\\View\\Surcharge', surcharge=this.item.getDisplayPrice(), currency=this.cart.getCurrency()) }}</div>*/
/* */
