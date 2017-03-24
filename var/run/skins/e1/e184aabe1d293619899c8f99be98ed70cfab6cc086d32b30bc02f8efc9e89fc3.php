<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/header/navigation.twig */
class __TwigTemplate_dc6ac2dc60953412a4d18a8dfc2056d3fb91ef81f648c5bb411dd845993bef60 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_navigation\">
\t<h2>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNavigationTitle", array(), "method"), "html", null, true);
        echo "</h2>
\t";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\SectionsNavigation"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/header/navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout heading bar*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.header.right", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_navigation">*/
/* 	<h2>{{ this.getNavigationTitle() }}</h2>*/
/* 	{{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\SectionsNavigation') }}*/
/* </div>*/
