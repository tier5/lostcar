<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/blocks/payment_methods/available/payment_tpl.twig */
class __TwigTemplate_dd89e45fdaa5e77fdc34c469aceb25a7ea4d89fdcb9b278cb49dce5014a20958 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Checkout\\Payment"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/blocks/payment_methods/available/payment_tpl.twig";
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
/*  # @ListChild (list="checkout_fastlane.blocks.payment_methods.available", weight="10")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Checkout\\Payment') }}*/
/* */
