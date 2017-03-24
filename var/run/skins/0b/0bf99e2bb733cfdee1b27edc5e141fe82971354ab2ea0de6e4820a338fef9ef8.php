<?php

/* /var/www/html/lostcar/skins/customer/checkout/success/parts/button.print.twig */
class __TwigTemplate_126ea006fe4aea8779f124ab5343f4c630046f79bbac01f0b8d33c85fc4b7069 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PrintInvoice"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/checkout/success/parts/button.print.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Print invoice button wrapper*/
/*  #*/
/*  # @ListChild (list="checkout.success.panel.buttons", weight="200")*/
/*  #}*/
/* {{ widget('XLite\\View\\Button\\PrintInvoice') }}*/
/* */
