<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/address/shipping.twig */
class __TwigTemplate_c7dadeffd9fb551d1153a9899134589175d664a1edb23b3beedc865c6a6ce46a extends \XLite\Core\Templating\Twig\Template
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
            echo "  <div class=\"checkout_fastlane_address_form_wrapper\">
    <h3 class=\"checkout_fastlane_block_heading\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShippingFormTitle", array(), "method"), "html", null, true);
            echo "</h3>
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\AddressForm\\Shipping"))), "html", null, true);
            echo "
  </div>
";
        } else {
            // line 13
            echo "  <div class=\"checkout_fastlane_address_form_wrapper\">
    <h3 class=\"checkout_fastlane_block_heading\">";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBillingFormTitle", array(), "method"), "html", null, true);
            echo "</h3>
    ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\AddressForm\\Billing"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/address/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  40 => 14,  37 => 13,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.address", weight="10")*/
/*  #}*/
/* */
/* {% if this.isShippingEnabled() %}*/
/*   <div class="checkout_fastlane_address_form_wrapper">*/
/*     <h3 class="checkout_fastlane_block_heading">{{ this.getShippingFormTitle() }}</h3>*/
/*     {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\AddressForm\\Shipping') }}*/
/*   </div>*/
/* {% else %}*/
/*   <div class="checkout_fastlane_address_form_wrapper">*/
/*     <h3 class="checkout_fastlane_block_heading">{{ this.getBillingFormTitle() }}</h3>*/
/*     {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\AddressForm\\Billing') }}*/
/*   </div>*/
/* {% endif %}*/
