<?php

/* /var/www/html/lostcar/skins/customer/checkout/labels.twig */
class __TwigTemplate_8f7e03957b393c2f00d67738309e4688521f6e5036799cee3631d8e4e64bf86f extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/html/lostcar/skins/customer/checkout/labels.twig";
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
/*  # Checkout widget body*/
/*  #*/
/*  # @listChild (list="checkout.main")*/
/*  #}*/
/* */
/* {{ this.displayCommentedData(this.getPreloadedLabels()) }}*/
/* */
