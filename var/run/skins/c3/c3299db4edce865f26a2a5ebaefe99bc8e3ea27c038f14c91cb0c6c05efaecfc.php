<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/shipping/columns.twig */
class __TwigTemplate_1162f0a433b7a72743398ffdb75f5bd5b5251a80f470b6db68b4779bad57ba1d extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.shipping.left"))), "html", null, true);
        echo "
</div>
<div class=\"checkout_fastlane_section-column checkout_fastlane_section-column_right\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.shipping.right"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/shipping/columns.twig";
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
/*  # @ListChild (list="checkout_fastlane.sections.shipping", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_section-column checkout_fastlane_section-column_left">*/
/*     {{ widget_list('checkout_fastlane.sections.shipping.left') }}*/
/* </div>*/
/* <div class="checkout_fastlane_section-column checkout_fastlane_section-column_right">*/
/*     {{ widget_list('checkout_fastlane.sections.shipping.right') }}*/
/* </div>*/
