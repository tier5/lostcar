<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/payment/columns.twig */
class __TwigTemplate_fab0bb494e1219d641edc38dd4035c2278c153c9cde03a5ed8ca0302a257e8f9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_section-column checkout_fastlane_section-column_left\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.payment.left"))), "html", null, true);
        echo "
</div>
<div class=\"checkout_fastlane_section-column checkout_fastlane_section-column_right\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.payment.right"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/payment/columns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.payment", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_section-column checkout_fastlane_section-column_left">*/
/*     {{ widget_list('checkout_fastlane.sections.payment.left') }}*/
/* </div>*/
/* <div class="checkout_fastlane_section-column checkout_fastlane_section-column_right">*/
/*     {{ widget_list('checkout_fastlane.sections.payment.right') }}*/
/* </div>*/
