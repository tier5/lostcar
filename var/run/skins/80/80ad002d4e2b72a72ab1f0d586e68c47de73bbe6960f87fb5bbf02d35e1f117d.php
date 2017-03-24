<?php

/* /var/www/html/lostcar/skins/crisp_white/customer/modules/CDev/SocialLogin/account/social_login.twig */
class __TwigTemplate_09961c15c867b2af051b3a0e230c3240e24aec7d61222f5bf9ee4b85540baab4 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\SocialLogin\\View\\SocialLoginWidget", "placement" => "signin"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/crisp_white/customer/modules/CDev/SocialLogin/account/social_login.twig";
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
/*  # Link : bullet*/
/*  #*/
/*  # @ListChild (list="customer.account.details.before", weight="10")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\CDev\\SocialLogin\\View\\SocialLoginWidget', placement='signin') }}*/
