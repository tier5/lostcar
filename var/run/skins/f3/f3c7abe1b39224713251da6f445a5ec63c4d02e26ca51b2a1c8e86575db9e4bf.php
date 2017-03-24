<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/details_box.twig */
class __TwigTemplate_6c0ee8226d10c39d5d3eef215d6228f59c612c334f176394d941ff11982166a8 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_details_wrapper\">
    <div class=\"checkout_fastlane_details_box loading\">
        <div class=\"checkout_fastlane_details_left\">
           ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.details.left"))), "html", null, true);
        echo "
       </div>
        <div class=\"checkout_fastlane_details_right\">
           ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.details.right"))), "html", null, true);
        echo "
        </div>
        ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.details"))), "html", null, true);
        echo "
    </div>
</div>
<div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/sections/details_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  31 => 13,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.after", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_details_wrapper">*/
/*     <div class="checkout_fastlane_details_box loading">*/
/*         <div class="checkout_fastlane_details_left">*/
/*            {{ widget_list('checkout_fastlane.sections.details.left') }}*/
/*        </div>*/
/*         <div class="checkout_fastlane_details_right">*/
/*            {{ widget_list('checkout_fastlane.sections.details.right') }}*/
/*         </div>*/
/*         {{ widget_list('checkout_fastlane.sections.details') }}*/
/*     </div>*/
/* </div>*/
/* <div class="clearfix"></div>*/
/* */
