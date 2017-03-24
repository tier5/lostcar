<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/details/shipping_details.twig */
class __TwigTemplate_7e92f26ba39ab9101c59deb393d7e8fb12e59c04b38d5ef502035fb370d9e6cb extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShippingNeeded", array(), "method")) {
            // line 8
            echo "<div class=\"checkout_fastlane_shipping-details\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\ShippingDetails"))), "html", null, true);
            echo "

    <a class=\"checkout_fastlane_shipping_edit_link\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Change shipping")), "html", null, true);
            echo "\" href=\"#\" v-on:click.prevent=\"switchTo('shipping')\"><i class=\"fa fa-truck\"></i></a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/details/shipping_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.details.left", weight="15")*/
/*  #}*/
/* */
/* {% if this.isShippingNeeded() %}*/
/* <div class="checkout_fastlane_shipping-details">*/
/*     {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\ShippingDetails') }}*/
/* */
/*     <a class="checkout_fastlane_shipping_edit_link" data-toggle="tooltip" data-placement="left" title="{{ t('Change shipping') }}" href="#" v-on:click.prevent="switchTo('shipping')"><i class="fa fa-truck"></i></a>*/
/* </div>*/
/* {% endif %}*/
/* */
