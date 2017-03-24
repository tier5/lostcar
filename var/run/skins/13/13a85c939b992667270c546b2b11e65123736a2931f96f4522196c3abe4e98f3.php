<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/signin/signin.checkout.social.twig */
class __TwigTemplate_f95495b555ebf6d189e9affcd5138bb8425b494d5f5e9b345c80e424b7cd16c5 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\SocialLogin\\View\\SocialLoginWidget", "placement" => "signin", "text_before" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Or use your social account"))))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/signin/signin.checkout.social.twig";
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
/*  # Sign in: SocialLogin widget*/
/*  #*/
/*  # @ListChild (list="customer.checkout.signin", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\CDev\\SocialLogin\\View\\SocialLoginWidget', placement='signin', text_before=t('Or use your social account')) }}*/
