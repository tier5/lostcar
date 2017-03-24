<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/mini_cart/horizontal/parts/item.price.twig */
class __TwigTemplate_8e2b34453dbc44aac80d0e27590833f74342444d86f3974bd2ce37bb750228b7 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/crisp_white/customer/mini_cart/horizontal/parts/item.price.twig";
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
