<?php

/* /var/www/html/lostcar/skins/customer/mini_cart/horizontal/parts/cart.twig */
class __TwigTemplate_850bd0ac7a73f35e142cc41a8e2d0b125075f0cdd9547af481b2cc6c81b72bce extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\SimpleLink", "label" => "View cart", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart")), "style" => "regular-button cart"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/mini_cart/horizontal/parts/cart.twig";
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
/*  # Horizontal minicart cart button block*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.buttons", weight="5")*/
/*  #}*/
/* {{ widget('\\XLite\\View\\Button\\SimpleLink', label='View cart', location=url('cart'), style='regular-button cart') }}*/
/* */
