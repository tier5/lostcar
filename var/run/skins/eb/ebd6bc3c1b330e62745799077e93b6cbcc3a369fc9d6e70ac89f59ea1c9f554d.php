<?php

/* /var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/authorization/parts/link.forgot.twig */
class __TwigTemplate_6d7248ebb32759900e5b9aa13e23e72e0ddc3534e628fdd13c177fdfefb8e7f4 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\JThemesStudio\\The80sMod\\View\\Button\\ForgotPassword"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/jThemesStudio_The80sMod/customer/authorization/parts/link.forgot.twig";
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
/*  # Link : forgot password*/
/*  #*/
/*  # @ListChild (list="customer.signin.links", weight="200")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\JThemesStudio\\The80sMod\\View\\Button\\ForgotPassword') }}*/
