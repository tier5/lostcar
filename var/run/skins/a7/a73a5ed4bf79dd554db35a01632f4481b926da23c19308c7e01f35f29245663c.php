<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/shopping_cart/parts/item.shipping.estimator.twig */
class __TwigTemplate_a05949254e49fc426e9a04810acfce82f486055432f01475d164ae5458daa65b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShippingEstimatorVisible", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "surcharge", array())), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ShippingEstimator\\ShippingEstimateBox"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/shopping_cart/parts/item.shipping.estimator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Discount coupon subpanel*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals.modifier")*/
/*  #}*/
/* */
/* {% if this.isShippingEstimatorVisible(this.surcharge) %}*/
/*   {{ widget('XLite\\View\\ShippingEstimator\\ShippingEstimateBox') }}*/
/* {% endif %}*/
/* */
