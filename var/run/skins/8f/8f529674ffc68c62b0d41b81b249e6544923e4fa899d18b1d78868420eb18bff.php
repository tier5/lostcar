<?php

/* /var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/language_labels.twig */
class __TwigTemplate_7f08fdba506d73a93b2dc617695ebb41a684bfbb00585cd53644da6d14d57f2d extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreloadedLabels", array(), "method")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/language_labels.twig";
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
/*  # Checkout preloaded language labels*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane", weight="99999")*/
/*  #}*/
/* */
/* {{ this.displayCommentedData(this.getPreloadedLabels()) }}*/
/* */
