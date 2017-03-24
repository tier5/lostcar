<?php

/* /var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/login/signin/signin.checkout.twig */
class __TwigTemplate_474ab03d4361db457b544e7005f6638ad039d9664f27fdc8437105c1b145083b extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget", "placement" => "signin", "text_before" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Or use your social account"))))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/html/lostcar/skins/customer/modules/Amazon/PayWithAmazon/login/signin/signin.checkout.twig";
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
/*  # @ListChild (list="customer.checkout.signin", weight="100")*/
/*  #}*/
/* {{ widget('XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget', placement='signin', text_before=t('Or use your social account')) }}*/
