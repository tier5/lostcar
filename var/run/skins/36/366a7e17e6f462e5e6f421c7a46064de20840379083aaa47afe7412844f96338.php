<?php

/* /var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/login/signin/signin.twig */
class __TwigTemplate_8967fd1df21e12659ab4db00eadbaf191619ecd18088263531b190434a5757f7 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget", "placement" => "signin", "text_before" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Use existing Amazon account")), "text_after" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Or sign in the classic way"))))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/login/signin/signin.twig";
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
/*  # Sign in: SocialLogin widget*/
/*  #*/
/*  # @ListChild (list="customer.signin", weight="100")*/
/*  #}*/
/* {{ widget('XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget', placement='signin', text_before=t('Use existing Amazon account'), text_after=t('Or sign in the classic way')) }}*/
