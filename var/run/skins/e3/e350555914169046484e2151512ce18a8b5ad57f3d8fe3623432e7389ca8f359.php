<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/Paypal/add2cart_popup/express_checkout.twig */
class __TwigTemplate_df58ce2a5e285d5ac85df9a726c5cdcea4acb1f9ae78ba65836c9b6b778aef37 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "checkCart", array(), "method")) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Button\\Add2CartPopup\\ExpressCheckout"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/Paypal/add2cart_popup/express_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Express checkout*/
/*  #*/
/*  # @ListChild (list="add2cart_popup.item.buttons", weight="300")*/
/*  #}*/
/* {% if this.cart.checkCart() %}*/
/*   {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Button\\Add2CartPopup\\ExpressCheckout') }}*/
/* {% endif %}*/
/* */
