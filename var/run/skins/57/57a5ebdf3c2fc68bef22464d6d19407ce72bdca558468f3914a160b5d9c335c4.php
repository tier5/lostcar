<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/payment/methods.twig */
class __TwigTemplate_31794a864b2b5f092a5ee3f12b29f85497d133aab4aaac23fbe23f3e29d40bcd extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_payment_methods\">
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\PaymentMethods"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/payment/methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.payment.right", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_payment_methods">*/
/* 	{{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\PaymentMethods') }}*/
/* </div>*/
