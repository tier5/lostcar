<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/authorization/parts/link.forgot.twig */
class __TwigTemplate_4615cda9fabce4ac2aa893829335335bda5aaaace172e34db017e5197a4dd1ac extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\Button\\ForgotPassword"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/authorization/parts/link.forgot.twig";
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
/* {{ widget('XLite\\Module\\XC\\CrispWhiteSkin\\View\\Button\\ForgotPassword') }}*/
