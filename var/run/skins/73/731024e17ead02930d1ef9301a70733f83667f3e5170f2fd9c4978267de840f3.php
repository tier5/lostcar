<?php

/* /var/www/html/lostcar/skins/customer/checkout/steps/shipping/parts/address.first.twig */
class __TwigTemplate_64dc9379079f1c19589e44add776762d833604bd97c6600170ab3fe7f9ffb014 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShippingEnabled", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Checkout\\ShippingAddress"))), "html", null, true);
            echo "
";
        } else {
            // line 10
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Checkout\\BillingAddress"))), "html", null, true);
            echo "
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/steps/shipping/parts/address.first.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # First address*/
/*  #*/
/*  # @ListChild (list="checkout.shipping.selected.sub.shipping", weight="100")*/
/*  #}*/
/* */
/* {% if this.isShippingEnabled() %}*/
/*   {{ widget('XLite\\View\\Checkout\\ShippingAddress') }}*/
/* {% else %}*/
/*   {{ widget('XLite\\View\\Checkout\\BillingAddress') }}*/
/* {% endif %}*/
/* */
/* */
