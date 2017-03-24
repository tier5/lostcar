<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/payment/heading.left.twig */
class __TwigTemplate_6abd06944d2389251737b1b975d441391dbba17c3ce683a8c7e93891f43b394e extends \XLite\Core\Templating\Twig\Template
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
<h3 class=\"checkout_fastlane_block_heading\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Billing address")), "html", null, true);
        echo "</h3>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/payment/heading.left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.payment.left", weight="0")*/
/*  #}*/
/* */
/* <h3 class="checkout_fastlane_block_heading">{{ t('Billing address') }}</h3>*/
