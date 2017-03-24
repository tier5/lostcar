<?php

/* /var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/signin/signin.social.twig */
class __TwigTemplate_896a579abf3abd7dd099ef50a36f6d1698ff208730653153c3e89632b7ff48d3 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\SocialLogin\\View\\SocialLoginWidget", "placement" => "signin", "text_before" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Use existing account from")), "text_after" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Or sign in the classic way"))))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/CDev/SocialLogin/signin/signin.social.twig";
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
/*  # @ListChild (list="customer.signin", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\CDev\\SocialLogin\\View\\SocialLoginWidget', placement='signin', text_before=t('Use existing account from'), text_after=t('Or sign in the classic way')) }}*/
